<?php
require_once ('MysqliDb.php');
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

  function __construct($db = null, $idSend = null, $idRecive = null, $mensaje = null, $token = null, $output = null, $largo = null){
    $this->user = $idSend;
    $this->pass = $idRecive;
    $this->email = $mensaje;
    $this->token = $token;
    $this->output = $output;
    $this->largo = $largo;
    $this->db = new MysqliDB('localhost', 'respaldos', 'primeras123', 'respaldos');
  }

  function getLastMesages($user_id){
    $this->db->where('user_to', $user_id);
    $cols = array ('id', 'cuerpo', 'user_id', 'user_to', 'created_at');
    $this->db->orderBy("id","Desc");
    $this->output = $this->db->get('mensajes', 5, $cols);
    if($this->output){
      return $this->output;
    }else{
      return $this->db->getLastError();
    }
  }
  function nuevoMensaje($para, $cuerpo, $de){
    $insert = array(
      'user_id' => $de,
      'cuerpo' => $cuerpo,
      'user_to' => $para,
      'created_at' => $this->db->now(),
      'updated_at' => $this->db->now()
    );
    $this->output = $this->db->insert('mensajes', $insert);
    if($this->output){
      return true;
    }else{
      return $this->db->getLastError();
    }
  }

  function getFullmsg($id){
    $this->db->where('id', $id);
    if($this->output = $this->db->getOne('mensajes')){
      return $this->output;
    }else{
      return false;
    }
  }



}
 ?>
