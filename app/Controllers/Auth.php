<?php

namespace App\Controllers;

use App\Models\AuthModel;
use Firebase\JWT\JWT;
use Config\Services;

class Auth extends BaseController
{
    public function login()
    {
        $auth = new AuthModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $loginInfo = $auth->getUserInfo($username, $password);

        if (count($loginInfo)) {
            $payload = array(
                "iss"   => "Undiksha",
                "aud"   => $loginInfo->email,
                "iat"   => time(),
                "nbf"   => time(),
                "exp"   => time() + 3600,
                "data"  => array(
                    "username"  => $loginInfo->username,
                    "firstname" => $loginInfo->firstname,
                    "lastname"  => $loginInfo->lastname,
                    "email"     => $loginInfo->email
                )
            );
            $token = JWT::encode($payload, Services::getPrivateKey());

            $output = [
                "status"    => 200,
                "massage"   => "Login Authorized",
                "token"     => $token
            ];
            return $this->response->setStatusCode(200)->setJSON($output);
        }

        $output = [
            "status"    => 401,
            "massage"   => "Unauthorized",
        ];
        return $this->response->setStatusCode(200)->setJSON($output);
    }

    public static function authenticate()
    {

        $request = \Config\Services::request();

        $authHeader = $request->getServer('HTTP_AUTHORIZATION');
        $authHeader = explode(' ', $authHeader); //['Bearer', '<token>']
        $token = $authHeader[1];

        if ($token) {

            try {
                $docedePayload = JWT::decode($token, Services::getPrivateKey(), array('HS256'));

                if (!$docedePayload) {
                    self::unauthorized();
                }
            } catch (\Exception $e) {
                self::unauthorized();
            }
        } else {
            self::unauthorized();
        }
    }

    private static function unauthorized()
    {
        $output = [
            "status"    => 401,
            "message"   => "Unauthorized"
        ];

        header('Content-type: application/json');
        http_response_code(401);

        echo json_encode($output);

        exit();
    }
}
