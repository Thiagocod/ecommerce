<?php
namespace Hcode\Model;
use \Hcode\BD\Sql;
class User {

  public static function login($login,$password){
    $sql = new Sql;
  $results = $sql->select("SELECT *FROM tb_users  where deslogin = :LOGIN",array(
    ":LOGIN"=>$login
  ));
  if (count($results) === 0){
    throw new \Exception("Usuário inexistente ou senha inválida");
  }
  $data = $results[0];
  }
  if (password_verify($password, $data["despassword"]) === true){
    $user = new User();
    $user->setiduser($data["iduser"]);
  }else{
    throw new \Exception("Usuário inexistente ou senha inválida.");
  }

}


?>
