<?php
namespace src\handlers;

use \core\models\User;

class LoginHandler{

    public static function checkLogin() {
        if(!empty($_SESSION['token'])) {
            $token = $_SESSION['token'];

            $data = User::select()->where('token', $token)->execute();

            if(count($data) > 0) {

                $LoggedUser = new User;
                $LoggedUser->id = $data['id'];
                $LoggedUser->name = $data['nome'];
                $LoggedUser->email = $data['email'];

                return $LoggedUser;
            }
        }

        return false;
    }

}