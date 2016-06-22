<?php
require_once ('MysqliDb.php');

/**
 *
 */
class Principal
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
  function getExportsVigentes($date){
    $nxday = date('Y-m-d',  strtotime($date . "+1 day"));
    $this->db->where('created_at', array($date . " 19:00:00", $nxday . " 06:59:59" ), 'BETWEEN');
    if($this->output = $this->db->get('mensajes')){
      return $this->output;
    }else{
      return false;
    }
  }

  function estadosExports(){

  }

  function nuevoServidor($nombre){
    $data = array(
      'nombre' => $nombre,
      'created_at' => $this->db->now(),
      'updated_at' => $this->db->now(),
    );
    if($this->db->insert('servidores', $data)){
      return true;
    }else{
      return $this->db->getLastError();
    }
  }
  function getInfo($item, $tabla){ //NOTE: busqueda de ids y data a travez del nombre
    $this->db->where('nombre', $item);
    if($this->output = $this->db->getOne($tabla)){
      return $this->output;
    }else{
      return $this->db->getLastError();
    }
  }
  function nuevoInstancia($servidor, $nombre){
    $data = array(
      'servidor' => $servidor,
      'nombre' => $nombre,
      'created_at' => $this->db->now(),
      'updated_at' => $this->db->now(),
    );
    if($this->db->insert('instancias', $data)){
      return true;
    }else{
      return $this->db->getLastError();
    }
  }

}

?>
