<?php

namespace app\models;
use Yii;
use yii\base\Model;



class FormEstado extends Model
{
  public $ID;
  public $EstadoConvenio;
  public $Descripcion;
  public $Vigente;

  public function rules(){
  	return [

  		['ID', 'required','message' => 'campo obligatorio'],
      ['ID','match','pattern' => "/^[0-9]+$/i", 'message' => 'Solo numeros'],
  		['EstadoConvenio','match','pattern' => "/^.{0,200}$/",'message' => 'Minimo 5 y maximo 200 caracteres'],
  		['EstadoConvenio','match','pattern' => "/^[0-9a-z]+$/i", 'message' => 'Solo letras y numeros'],
  		['Descripcion','match','pattern' => "/^.{0,500}$/",'message' => 'Minimo 5 y maximo 500 caracteres'],
      ['Vigente','match','pattern' => "/^.{0,1}$/",'message' => 'Maximo 1 caracter'],
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