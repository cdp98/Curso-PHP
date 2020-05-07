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
            $token = md5(time().rand(0, 9999).time());

            User::update()
                    ->set('token', $token)
                    ->where('email', $email)
                ->execute();

            return $token;
        }
        return false;
    }

    public static function existEmail($email) {
        $user = User::select()->where('email', $email)->execute();
        return $user ? true : false;
    }

    public static function addUser($name, $email, $password, $birthdate) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $token = md5(time().rand(0, 9999).time());

        User::insert([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'birthdate' => $birthdate,
            'token' => $token
        ])->execute();

        return $token;
    }
}
