<?php

/*~~~~~~~~~~~~ Autoload Class Function ~~~~~~~~~~~~~~~
  --------spl_autoload_register(autoloader)---------

        If a class is needed during process, the
        autoloader function will try to load
        that class before print an error message
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
function autoloader($className) {
    $file = '../views/classes/' . $className . '.php';
    include $file;
}
spl_autoload_register('autoloader');

if (!function_exists('str_contains')) {
    function str_contains($haystack, $needle) {
        return ($needle !== '' && mb_strpos($haystack, $needle) !== false);
    }
}
/*    ~~~~~~~~~~~~~Post method~~~~~~~~~~~~~~~~~    */
if(strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){
//    $childFirstNameX = new nameValidator($_POST['childfirstName'],"Child's First Name");
//    $errors = $childFirstNameX->validate_name();
//    $prnt = new errorDisplay($errors,"First Name",$childFirstNameX,$_POST['childfirstName']);
//    $prnt->display_error();
//    echo count($_POST);
    $postArrayKeys = array_keys($_POST);
    $counter = count($_POST);
    $indexCounter = 0;
    $childHeader = 0;
    $fatherHeader = 0;
    $motherHeader = 0;
    $certifier = 0;
    $customInputs = array('Place','State','Country','Code','Location', 'Tele','Url','Facility');
    $customOutputs = array('Birth Place','State of Residency','Country','Zip Code','Location', 'Telephone','Url','Birth Facility');
    for($i = 0; $i < $counter-1; $i++){
        if(!is_array($_POST[$postArrayKeys[$i]])) {
            $value = strval($postArrayKeys[$i]);
            if (!str_contains($value,'Time') && !str_contains($value,'Date') && !str_contains($value,'Number')) {
                $person = '';
                if(str_contains($value,'child')) {
                    $person = "Child";
                    if($childHeader == 0){
                        echo "<h3>Child's Details Part</h3>";
                        $childHeader++;
                    }
                }else if(str_contains($value,'mother')){
                    $person = "Mother";
                    if($motherHeader == 0){
                        echo "<h3>Mother's Details Part</h3>";$motherHeader++;

                    }
                }else if(str_contains($value,'father')){
                    $person = "Father";
                    if($fatherHeader == 0){
                        echo "<h3>Father's Details Part</h3>";$fatherHeader++;
                    }
                }else if(str_contains($value,'certif')){
                    $person = "Certifier";
                    if($certifier == 0){
                        echo "<h3>Certifier's Details Part</h3>";$certifier++;
                    }
                }
                $prnt = '';
                if (str_contains($value, 'firstName')) {
                    $nameX = new fullName($_POST[$value], "$person's First Name");
//                    $nameX = new nameValidator($_POST[$value], "$person's First Name");
                    $errors = $nameX->validate_name();
//                    $errors = $nameX->validate_name();
//                    $prnt = new errorDisplay($errors,"First Name",$nameX,$_POST[$value]);
                    $prnt = new errorDisplay($errors,"First Name",$nameX,$_POST[$value]);
//                    $prnt->display_error();
                    $prnt->display_error();
                    unset($nameX);
                }else if(str_contains($value, 'LastName')){
                    $nameX = new nameValidator($_POST[$value], "$person's Last Name");
                    $errors = $nameX->validate_name();
                    $prnt = new errorDisplay($errors,"Last Name",$nameX,$_POST[$value]);
                    $prnt->display_error();
                    unset($nameX);
                }else if(str_contains($value, 'MiddleName')){
                    $nameX = new middleNameValidator($_POST[$value], "$person's Middle Name");
                    $errors = $nameX->validate_m_name();
                    $prnt = new errorDisplay($errors,"Middle Name",$nameX,$_POST[$value]);
                    $prnt->display_error();
                    unset($nameX);
                }else if(str_contains($value, 'Suffix')){
                    $nameX = new middleNameValidator($_POST[$value], "$person's Suffix");
                    $errors = $nameX->validate_m_name();
                    $prnt = new errorDisplay($errors,"Suffix",$nameX,$_POST[$value]);
                    $prnt->display_error();
                    unset($nameX);
                }else if(str_contains($value, 'Gender')){
                    $sex = array('Male','Female','Other');
                    $nameX = new nameValidator($sex[$_POST[$value]], "$person's Gender");
                    $errors = $nameX->validate_name();
                    $prnt = new errorDisplay($errors, "Gender", $nameX, $sex[$_POST[$value]]);
                    $prnt->display_error();
                    unset($nameX);
                }else if(str_contains($value, 'Hospital')){
                    $nameX = new notEmpty($_POST[$value], "Referred Hospital Name");
                    $errors = $nameX->validate_input();
                    $prnt = new errorDisplay($errors,"Referred Hospital Name",$nameX,$_POST[$value]);
                    $prnt->display_error();
                    unset($nameX);
                }else{
                    $value2 = '';
                    for($j = 0; $j < count($customInputs); $j++){
                        if(str_contains($value, $customInputs[$j])){
                            $value2 = $customOutputs[$j];
                            break;
                        }
                    }
                    $nameX = new notEmpty($_POST[$value], "$person's $value2");
                    $errors = $nameX->validate_input();
                    $prnt = new errorDisplay($errors,"$person's $value2",$nameX,$_POST[$value]);
                    $prnt->display_error();
                    unset($nameX);
                }
            }
        }
    }
}