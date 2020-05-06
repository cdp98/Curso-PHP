<?php
namespace src\handlers;

use \src\models\User;

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

    public static function verifyLogin($email, $password) {
        $user = User::select()->where('email', $email)->execute();

        if($user) {
            if(password_verify($password, $user['password'])) {
                $token = md5(time().rand(0, 9999).time());

                User::update()
                    ->set('token', $token)
                    ->where('email', $emial)
                ->execute();

                return $token;
            }
        }
        return false;
    }

}
