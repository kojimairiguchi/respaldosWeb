<?php
require ('MysqliDb.php');
//require ('./../functions.php');



/**
 *
 */
class Mensajes
{
  private $db;
  private $idSend;
  private $idRecive;
  private $mensaje;
  private $token;
  private $output;
  private $largo;

  function __construct($db = null, $idSend = null, $idRecive = null, $mensaje = null, $email = null, $token = null, $output = null, $largo = null){
    $this->user = $username;
    $this->pass = $password;
    $this->email = $email;
    $this->token = $token;
    $this->output = $output;
    $this->largo = $largo;
    $this->db = new MysqliDB('localhost', 'respaldos', 'primeras123', 'respaldos');
  }

  function getLastMesages($user_id){

    $q = '(
      SELECT m.user_id, m.titulo, m.cuerpo, m.user_to, u.fullname
      FROM mensajes m, users u
      WHERE m.user_to = u.id
      AND m.user_to = ?
      ORDER BY desc
      LIMIT 5
      )';

  //  $this->db->where('user_to', $user_id);
    $this->output = $this->db->rawQuery('mensajes', $user_id);
    if($this->output){
      return $this->output;
    }else{
      return $this->db->getLastError();
    }
  }



}
 ?>
