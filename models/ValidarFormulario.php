<?php

namespace app\models;
use Yii;
use yii\base\Model;



class ValidarFormulario extends Model
{
  public $nombre;
  public $email;

  public function rules(){
  	return [

  		['nombre', 'required','message' => 'campo obligatorio'],
  		['nombre','match','pattern' => "/^.{5,80}$/",'message' => 'Minimo 5 y maximo 80 caracteres'],
  		['nombre','match','pattern' => "/^[0-9a-z]+$/i", 'message' => 'solo letras y numeros'],
  		['email','required','message' => 'campo obligatorio'],
  		['email','match','pattern' => "/^.{5,80}$/",'message' => 'Minimo 5 y maximo 80 caracteres'],
  	];
  }

  public function attributeLabels()
  {

  	return [
  	'nombre' => 'Nombre:',
  	'email' => 'Email:',
  	];
  }


}