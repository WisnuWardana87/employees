<?php

namespace Config;

use CodeIgniter\Config\Services as CoreServices;

/**
 * Services Configuration file.
 *
 * Services are simply other classes/libraries that the system uses
 * to do its job. This is used by CodeIgniter to allow the core of the
 * framework to be swapped out easily without affecting the usage within
 * the rest of your application.
 *
 * This file holds any application-specific services, or service overrides
 * that you might need. An example has been included with the general
 * method format you should use for your service methods. For more examples,
 * see the core Services file at system/Config/Services.php.
 */
class Services extends CoreServices
{

	//    public static function example($getShared = true)
	//    {
	//        if ($getShared)
	//        {
	//            return static::getSharedInstance('example');
	//        }
	//
	//        return new \CodeIgniter\Example();
	//    }
	public static function getPrivateKey()
	{
		$privateKey = "<<<EOD
		-----BEGIN RSA PRIVATE KEY-----
Proc-Type: 4,ENCRYPTED
DEK-Info: AES-128-CBC,968AA600421F368A972E281DD8DE8E70

ELbwZZ3EZxg+64YBk+2V1AysZ7+ckaxI4fapURETHJz+CDFDjajGk4Mxp/AOn8RQ
eBOq1fI0tBenKZEunfvwjiSlFDGwAa386Qov+9s/2icuO4D+DrTsF0Ws3/2qrn7s
3Uoa3HOWgXNr2Ot8E0GdQ4y5fr/WI9f+x/oisYfLlIYaREp/USkHc3Sy4uupL/dP
5C4EVB/w79T9Hfc/Wipvsr+2R3HMKxB/eIC1NK+apIKkk30SI7v2F+pdDwkNY8eR
bpeidx9fqV/pS/3FonUioaE4Eysmez+jWAmjq+Ut8lKAOhquI7wT9mxzR0HeJ4Es
oAYNL57opB5O67pBWAN+Z49dMVqgdfyEI9Dsv93i7V0uFmtFwVpG1QtQX1GcrGNJ
411mDMP85Tkw+NoO6WhtTiUYwqapADrFTDgmel3onmQkblMPwqbPtpIukBCxE/er
MPJyfgK1hnJw2zFJPO0t3ARA9Xji66BkIZ2fNACnUVXdbDq+daT3GnkxQY7B/OCY
VF+AxCkxXQ9c8NM/KpM1Nkx8+O4VrZDRHzISJDks3a6WLS6SQRpLAlPPD480KgLm
+g85Lb8NkQyq32Z4dyieJwS3nUSB9yflCHUhmTHmGoVf9QrlRTsV5376zWRdCa9v
Uldu/99jpq2Vhfi/P/sMv/rMaDpVojgqVaBf/sCIgeH9Qmx7oancJm+CXZ8pNEGN
6kL9u32t1FY/kC9BFOWkmqXCSkHr4oPCTpkighxkmmKpRyZibu8pwPzZ9jn0oUw7
m29I9vG1P+vIA9VkXMQG2c38UfZfGhMuzAYhSPpbvQqDkFRrPKQSOpWigy+rzr+9
J6++1RKy3pt3ldAAWiSAGCjCWDgx1lzYBN3f9NXt5eDmEjvTXy4klvlRK9fAm/HM
cwboKzJxBaK9gmELyZuDHZonWbu6j7Rlxyo99wusBE0NLkiWaL0TIRlkiMb447YZ
22D/BumeHrjXY9m1JVIETKfV96niymZMnOVwiFeGW+cdmgf2ZiPftm63LztKRMIs
b2gIzSS3qECuh9+tOY+cgqglBbU7bgEWRtI27U86wNfZWiHvS+SEfeX+YvL0QVRO
drKEu851HiWjPoSKvszudU2TZ/4TnU7tjVjC7DTpUI4eiKO8EaP/PUaYaFRLJ7tr
guSCH/9cl+1v3gCmu3Xo76Ja05vYBgtd9txuI7F/L//v67eQYD4RKlTyhaUQyUe0
+ociy4xh+/xCPopRTHceoez3J84r+PXuohI8G1LwOtUPr46svGZu+LY1DCYdq/qd
40Kw/88aZ9SF5dY2ksU4VYbMKB3fRLoC7+8JYGCKCbgufH5z+Ci9hhQBwUkzj9Bi
t/IHR55waGaQFiUlVzpIea7c83CC9pqHjcFpbpRRkB9v0rssNt+FCwD7VibQs65F
RjKjreBgXWpVn42FQejsmbJoD4ldDdcUgSLTXbdtZuiAZe7qIzeG/m2HaUZZW4rS
l3WSWwHXfzTzATgv96+JXpCZgQ+6QHQgJVTHgMx8Yc5SnGQcdefA+6agsqHC9d8R
bAc6i+7NmGSLMSGcMFtvrObC428Xe874bPkP0j6Juj0CHqYdFZMwDmlrTOwynqMl
-----END RSA PRIVATE KEY-----
		EOD";

		return $privateKey;
	}
}
