<?php

namespace Gschool\Model;


class Validator extends Manager{

    private $errors = [];
    private $data;

    public function __counstruct(array $data){
        $this->data = $data;
    }

    private function getField($field){
        return isset($this->data[$field]);
    }

    public function isAlpha(string $field, string $errorMsg){
        if ($this->getField([$field]) || !preg_match("/^[a-zA-Z0-9_]+$/", $this->data[$field])){
            $this->erros[$field] = $errorMsg;
        }
    }

    public function isEmail(string $field, string $errorMsg){
        if(empty($this->data[$field]) || !filter_var($this->data[$field], FILTER_VALIDATE_EMAIL)){
            $this->errors[$field] = $errorMsg;
        }
    }
    public function isPassword(string $field, string $errorMsg){
        if(empty($this->data[$field]) || $this->data[$field] != $this->data[$field]. '_confirm'){
            $this->errors[$field] = $errorMsg;
        }
    }

    public function isValid(){
        return empty($this->errors);
    }

    public function getErros(){
        return $this->errors;
    }

}