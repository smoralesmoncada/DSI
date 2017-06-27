<?php

namespace app\models;
use Yii;
use yii\base\model;

class ValidarCoordinador extends model
{
  public $id_coordinador_convenio;
  public $rut_coordinador_convenio;
  public $nombre_coordinador_convenio;
  public $dv_coordinador_convenio;
  public $fecha_inicio;
  public $fecha_fin;
  public $vigente;
  public $esexterno;
  public $unidad_academica;
  public $email;
  public $id_institucion;


  public function rules()
  {
    return [
      ['id_coordinador_convenio', 'required'],
      ['rut_coordinador_convenio', 'match', 'pattern' => '/^.{0,10}$/', 'message' => 'Mínimo 0 máximo 10 caracteres'],
      ['nombre_coordinador_convenio', 'match', 'pattern' => '/^[a-záéíóúñ\s]+$/i', 'message' => 'Sólo se aceptan letras'],
      ['dv_coordinador_convenio', 'integer', 'message' => 'Sólo números enteros'],
      ['fecha_fin',  'date', 'format'=>'yyyy-mm-dd'],
      ['fecha_inicio', 'date', 'format'=>'yyyy-mm-dd'],
      ['fecha_fin','compare','compareAttribute'=>'fecha_inicio','operator'=>'>'],
      ['esexterno', 'match','pattern' => '/^[0-9\s]*$/', 'message' => 'Sólo números enteros'],
      ['vigente', 'match', 'pattern' => '/^[0-9\s]*$/','message' => 'Sólo números enteros'],
      ['unidad_academica', 'match', 'pattern' => '/^[a-záéíóúñ\s]+$/i', 'message' => 'Sólo se aceptan letras'],
      ['email', 'email'],
      ['id_institucion', 'integer', 'message' => 'Sólo números enteros'],
    ];
  }
}