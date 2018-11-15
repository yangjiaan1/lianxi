<?php
  header("content-type:text/html;charset=utf-8");

  include_once("Classes/PHPExcel.php");
  include_once("myPdo.class.php");

  $excel = PHPExcel_IOFactory::load("1.xlsx");

  $sheet = $exel->getActiveSheet();


  var_dump($sheet->toArray());
?>