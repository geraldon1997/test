<?php
namespace CsrfToken;

class CsrfToken
{

    public static function generateCsrfToken()
    {
        $_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(64));
    }

    public static function checkCsrfToken($csrfToken)
    {
        if (isset($_SESSION['token']) && $csrfToken === $_SESSION['token']) {
            unset($_SESSION['token']);
            return true;
        }
        return false;
    }
}
