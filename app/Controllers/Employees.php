<?php

namespace App\Controllers;

use App\Models\EmployeesModel;

class Employees extends BaseController
{
    public function index()
    {
        $emp = new EmployeesModel();
        $employeesData = $emp->getEmployees();

        return $this->response->setJSON($employeesData);
    }

    public function show($id = null)
    {
        $emp = new EmployeesModel();
        $employeesData = $emp->getEmployeesById($id);

        return $this->response->setJSON($employeesData);
    }

    public function create()
    {
        $emp = new EmployeesModel();
        $json = $this->request->getJSON();
        $data = get_object_vars($json);
        $affRows = $emp->insertEmployees($data);
        $msg = [];
        if ($affRows > 0) {
            $msg = [
                'status' => 'Ok',
                'message' => 'Data berhasil disimpan',
                'affacted_rows' => $affRows
            ];
            $this->response->setStatusCode(201)
                ->setBody($msg);
        } else {
            $msg = [
                'status' => 'Error',
                'message' => 'Data gagal disimpan',
                'affacted_rows' => $affRows
            ];
            $this->response->setStatusCode(500)
                ->setBody($msg);
        }
        return $this->response->setJSON($msg);
    }
    public function update($id = null)
    {
        $emp = new EmployeesModel();
        $json = $this->request->getJSON();
        $data = get_object_vars($json);
        $affRows = $emp->updateEmployees($id, $data);
        $msg = [];
        if ($affRows > 0) {
            $msg = [
                'status' => 'Ok',
                'message' => 'Data berhasil diupdate',
                'affacted_rows' => $affRows
            ];
            $this->response->setStatusCode(201)
                ->setBody($msg);
        } else {
            $msg = [
                'status' => 'Error',
                'message' => 'Data gagal diupdate',
                'affacted_rows' => $affRows
            ];
            $this->response->setStatusCode(500)
                ->setBody($msg);
        }
        return $this->response->setJSON($msg);
    }
    public function delete($id = null)
    {
        $emp = new EmployeesModel();
        $affRows = $emp->deleteEmployees($id);
        $msg = [];
        if ($affRows > 0) {
            $msg = [
                'status' => 'Ok',
                'message' => 'Data berhasil dihapus',
                'affacted_rows' => $affRows
            ];
            $this->response->setStatusCode(201)
                ->setBody($msg);
        } else {
            $msg = [
                'status' => 'Error',
                'message' => 'Data gagal dihapus',
                'affacted_rows' => $affRows
            ];
            $this->response->setStatusCode(500)
                ->setBody($msg);
        }
        return $this->response->setJSON($msg);
    }
}
