<?php

namespace App\Session;

class Login
{
    /**
     * Método responsável por iniciar uma sessão caso não esteja iniciada
     */
    public static function init()
    {
        // VERIFICA STATUS DA SESSÃO
        if (session_status() !== PHP_SESSION_ACTIVE) {

            //INICIA SESSÃO
            session_start();
        }
    }

    /**
     *  Método responsável por verificar se o usuário não está logado
     */
    public static function login()
    {
        self::init();

        if (!isset($_SESSION['section_user']) ||  empty($_SESSION['section_user']) || $_SESSION['section_user']['logado'] !== true) {
            header('location: loginUser.php');
            exit;
        }
    }

    /**
     *  Método responsável por verificar se o usuário está logado
     */
    public static function logado()
    {
        self::init();
        if (isset($_SESSION['section_user']) &&  !empty($_SESSION['section_user']) && $_SESSION['section_user']['logado'] == true) {
            header('location: dashboardUser.php');
            exit;
        }
    }

    /**
     *  Método responsável por deslogar usuário
     */
    public static function logout()
    {
        self::init();

        // REMOVE A SESSÃO DE USUÁRIO
        unset($_SESSION['section_user']);
        header('location: loginUser.php?session=closed');
        exit;
    }
}
