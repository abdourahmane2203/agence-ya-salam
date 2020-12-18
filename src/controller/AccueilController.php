<?php

/**
 * Created by PhpStorm.
 * User: Diallo
 * Date: 10/04/2019
 * Time: 15:52
 */

use config\Controller;

class AccueilController extends Controller
{
    public function index()
    {

        $model = 'Modeltest';
        $this->view->assign('cle1', 'Abdourahmane');
        $this->view->assign('cle2', 'Diallo');
        return $this->view->load("accueil/index");
    }

    public function login()
    {
        if (isset($_POST['username']) && isset($_POST['password'])) {

            // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
            // pour éliminer toute attaque de type injection SQL et XSS
            $username =  htmlspecialchars($_POST['username']);
            $password =  htmlspecialchars($_POST['password']);

            if ($username !== "" && $password !== "") {
                //sql
                
                if (1) // nom d'utilisateur et mot de passe correctes
                {
                    $_SESSION['username'] = $username;
                    
                    return $this->view->load('accueil/showInfo');
                } 
            } 
        } 

        return $this->view->load('accueil/login');
    }

    public function showInfos($id)
    {
        return $this->view->load('accueil/showInfo');
    }
}
