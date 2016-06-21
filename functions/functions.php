<?php
//require ('MysqliDb.php');

/**
 *
 */
class DateFunctions
{
  private $date;
  private $time;
  private $output;
  function __construct($date = null, $time = null, $output = null)
  {
    $this->date = $date;
    $this->time = $time;
    $this->output = $output;
  }

  function fechaNormal($date){
    $this->output = date('d-m-Y', $this->date);

    return $this->output;
  }

  function fullDatetime($date){
    $this->output = date('d-m-Y h:i', $this->date);

    return $this->output;
  }


}

function returnDay($date){
  $date = strtotime($date);
  $output = date('l', $date);
  return $output;
}

function getSubString($string, $length=NULL)
{
    //Si no se especifica la longitud por defecto es 50
    if ($length == NULL)
        $length = 80;
    //Primero eliminamos las etiquetas html y luego cortamos el string
    $stringDisplay = substr(strip_tags($string), 0, $length);
    //Si el texto es mayor que la longitud se agrega puntos suspensivos
    if (strlen(strip_tags($string)) > $length)
        $stringDisplay .= '... <span class="pull-right text-muted">leer el resto del mensaje</span>';
    return $stringDisplay;
}

function encryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    return( $qEncoded );
}

function decryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
    return( $qDecoded );
}
 ?>
