<?php
/**
 *
 */
include_once('MysqliDb.php');

class Metrica
{
  private $db;
  private $username;
  private $password;
  private $fullname;
  private $email;
  private $token;
  private $output;
  private $largo;
  private $img;

  function __construct($db = null, $username = null, $password = null, $fullname = null, $email = null, $token = null, $output = null, $largo = null){
    $this->user = $username;
    $this->pass = $password;
    $this->email = $email;
    $this->token = $token;
    $this->output = $output;
    $this->largo = $largo;
    $this->img = $img;
    $this->db = new MysqliDB('localhost', 'respaldos', 'primeras123', 'respaldos');
  }
  function GetFullData($token){
    $this->db->where('token', $token);
    if($this->output = $this->db->getOne('users')){
      return $this->output;
    }else{
      return $this->db->getLastError();
    }
  }

}


 ?>
