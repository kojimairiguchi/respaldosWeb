<?php
require ('MysqliDb.php');
//require ('./../functions.php');



/**
 *
 */
class Usuarios
{
  private $db;
  private $username;
  private $password;
  private $fullname;
  private $email;
  private $token;
  private $output;
  private $largo;

  function __construct($db = null, $username = null, $password = null, $fullname = null, $email = null, $token = null, $output = null, $largo = null){
    $this->user = $username;
    $this->pass = $password;
    $this->email = $email;
    $this->token = $token;
    $this->output = $output;
    $this->largo = $largo;
    $this->db = new MysqliDB('localhost', 'respaldos', 'primeras123', 'respaldos');
  }
  function generaToken(){
    $this->token = sha1(md5(rand(0,10)));
    return $this->token;
  }
  function encriptaPass($password){
    $this->pass = sha1(md5($password));
    return $this->pass;
  }
  function passwordTemporal(){
    $this->largo = 8;
    $this->pass = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $this->largo);
    return $this->pass;
  }
  function validarUsuario($username, $password){
    $this->user = $username;
    $this->pass = $this->encriptaPass($password);
    $this->db->where('name', $this->user);
    $this->db->where('password', $this->pass);
    $this->output = $this->db->getOne('users');
    if($this->output){
      return true;
    }else{
      return $this->db->getLastError();
    }
  }
  function nuevoUsuario($username, $password, $email, $fullname){
    $this->token = $this->generaToken();
    $insert = array(
      'name' => $username,
      'email' => $email,
      'password' => $this->encriptaPass($password),
      'fullname' => $fullname,
      'token' => $this->token,
      'created_at' => $this->db->now(),
      'updated_at' => $this->db->now()
    );
    $this->output = $this->db->insert('users', $insert);
    if($this->output){
      return true;
    }else{
      return $this->db->getLastError();
    }
  }
  function recuperaPassword($email){
    $this->email = $email;
    $this->token = $this->generaToken();
    $this->pass = $this->encriptaPass($this->passwordTemporal());
    $this->db->where('email', $this->email);
    $this->output = $this->db->getOne('users', 'id');
    if($this->output){
      $data = array(
        'password' => $this->pass,
        'token' => $this->token,
        'updated_at' => $this->db->now()
      );
      $this->db->where('id', $this->output);
      if($this->db->update('users', $data)){
        return true;
      }else{
        return $this->db->getLastError();
      }
    }else{
      return false;
    }
  }
  function validaMail($email){
    $this->db->where('email', $email);
    if($this->db->getOne('users')){
      return true;
    }else{
      return false;
    }
  }
  function getData($user, $password){
    $this->pass = $this->encriptaPass($password);
    $this->db->where('name', $user);
    $this->db->where('password', $this->pass);
    if($this->output = $this->db->getOne('users')){
      return $this->output;
    }else{
      return false;
    }
  }
  function editaUser($text, $param, $id){
    $data = array(
      $param => $text,
      'updated_at' => $this->db->now()
    );
    $this->db->where('id', $id);
    if($this->db->update('users', $data)){
      return true;
    }else{
      return false;
    }
  }


}

 ?>
