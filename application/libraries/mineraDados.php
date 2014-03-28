<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mineraDados{

    public $array;

    public function setArrayDados($dados = array() ){

        $this->array = array_pop($dados);
        return $this;

    }

    public function removeUtimoElemento(){

        $this->array = array_pop($this->array);
        return $this;

    }

    public function getUltimoArray(){

        $this->array =count($this->array) - 2;
        return $this;

    }

    public function getResposta(){

        $this->array =  trim($this->array[$this->getUltimoArray()]);
        return $this;

    }




}

?>