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
  function __construct($date = null, $time = null)
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

 ?>
