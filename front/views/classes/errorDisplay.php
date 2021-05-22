<?php

class errorDisplay
{
    public $errors;
    public $vName;
    public $className;
    public $vValue;
    function __construct($er,$vN,$clName,$vVal){
        $this->errors = $er;
        $this->vName = $vN;
        $this->className = $clName;
        $this->vValue = $vVal;
    }
    function display_error(){

        if (count($this->errors) > 0) {
            $this->className->error_print($this->errors);
        } else {
            echo "<ul>";
            echo "<li>$this->vName = \"" . $this->vValue . "\"</li>";
            echo "</ul>";
        }
    }
}