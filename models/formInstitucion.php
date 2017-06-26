<?php

namespace app\models;
use Yii;
use yii\base\model;

class formInstitucion extends model{

public $id_tipo_institucion;
public $nombre_institucion;
public $id_institucion;
public $id_pais;
public $vigente;
public $id_internacional;
public $rut_institucion;
public $razon_social_institucion;
public direccion_institucion;
public $telefono_institucion;
public $email_institucion;
public $link_institucion;

public function rules()
 {
  return [
   ['id_tipo_institucion', 'integer', 'message' => 'Id incorrecto'],
   ['nombre_institucion', 'required', 'message' => 'Campo requerido'],
   ['nombre_institucion', 'match', 'pattern' => '/^[a-záéíóúñ\s]+$/i', 'message' => 'Sólo se aceptan letras'],
   ['nombre_institucion', 'match', 'pattern' => '/^.{3,50}$/', 'message' => 'Mínimo 3 máximo 50 caracteres'],
   ['id_institucion', 'required', 'message' => 'Campo requerido'],
   ['id_institucion', 'integer', 'message' => 'Sólo números enteros'],
   ['id_pais', 'required', 'message' => 'Campo requerido'],
   ['id_pais', 'integer', 'message' => 'Sólo números enteros'],
   ['id_internacional', 'required', 'message' => 'Campo requerido'],
   ['id_internacional', 'integer', 'message' => 'Sólo números enteros'],
   ['rut_institucion', 'required', 'message' => 'Campo requerido'],
   ['razon_social_institucion', 'required', 'message' => 'Campo requerido'],
   ['direccion_institucion', 'required', 'message' => 'Campo requerido'],
   ['telefono_institucion', 'required', 'message' => 'Campo requerido'],
   ['email_institucion', 'required', 'message' => 'Campo requerido'],
  ];
 }
 
}
