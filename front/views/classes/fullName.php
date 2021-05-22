<?php
class fullName
{

    public $part;
    public $vName;

    function __construct($input, $inputV){
        $this->part = $input;
        $this->vName = $inputV;
    }

    function validate_name()
    {
        $name = $this->part;
        $full_name = explode(" ", $name);
        $errors=[];
        foreach ($full_name as $name_part) {
            if (empty($name_part)) {
                $errors[] = '"<span style="color: #1a1a1a">' . $this->vName. '</span>" can not be empty';
            } else if (!ctype_alpha($name_part)) {
                $errors[] = '"<span style="color: #1a1a1a">'. " $name_part"  . '</span>" should be Alphabet only';
            }
        }
        return $errors;
    }

    function error_print($ar)
    {
        print_r($ar);
        echo "<ul>";
            foreach ($ar as $error) {
                if (!empty($error)) {
//                    foreach ($ar as $error) {
                        echo '<li style="color: red">';
                        echo "$error";
                        echo "</li>";
//                    }
                }
            }
        echo "</ul>";
    }

//    function full_name_validation()
//    {
//            $full_name1 = $this->part;
//            $full_name = explode(" ", $full_name1);
//
//            $errors = [];
//            foreach ($full_name as $name_part) {
//                $errors[] = $this->validate_name($name_part);
//            }
//            return $errors;
//            $flag = 0;
//            if (count($errors) > 0) {
//                foreach ($errors as $error) {
//                    if (!empty($error)) {
//                        $this->display_validation_errors_name($error);
//                        $flag++;
//                    }
//                }
//            }
//            if ($flag == 0) {
//                echo "<strong>" . 'My full name is ' . $full_name1 . '.' . "</strong>";
//            }
//    }
}