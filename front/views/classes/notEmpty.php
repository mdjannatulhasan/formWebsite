<?php


class notEmpty
{
    public $part;
    public $vName;

    function __construct($input, $inputV){
        $this->part = $input;
        $this->vName = $inputV;
    }
    function validate_input(){
        $name = $this->part;
        $errors=[];
        if(empty($name)){
            $errors[]= '"<span style="color: #1a1a1a">'.$this->vName.'</span>" can not be empty';
        }
        return $errors;
    }
    function error_print($ar){
        echo "<ul>";
        foreach ($ar as $error) {
            echo '<li style="color: red">';
            echo "$error";
            echo "</li>";
        }
        echo "</ul>";

    }
}