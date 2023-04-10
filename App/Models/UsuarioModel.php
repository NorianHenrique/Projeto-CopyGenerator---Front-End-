<?php
    namespace App\Models;

    Class UsuarioModel{
         
        public static function emailExists($email){
            $pdo = \App\MySql::connect();
            $vereficar = $pdo->prepare("SELECT email FROM usuarios WHERE email = ? ");
            $vereficar->execute(array($email));

             if($vereficar->rowCount() == 1){
                 //O email existe//
                 return true;
             }else{
                return false;
             }
        }

  }