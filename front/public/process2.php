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
/*    ~~~~~~~~~~~~~Connect to Database~~~~~~~~~~~~~~~~~    */
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";




/*    ~~~~~~~~~~~~~Post method~~~~~~~~~~~~~~~~~    */
$flag = 0;
if(strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){
    $postArrayKeys = array_keys($_POST);
    $counter = count($_POST);
    $indexCounter = 0;
    $childHeader = 0;
    $fatherHeader = 0;
    $motherHeader = 0;
    $certifier = 0;
    $customInputs = array('Place','State','Country','Code','Location', 'Tele','Url','Facility', 'Date','StreetNumber','AptNumber');
    $customOutputs = array('Birth Place','State of Residency','Country','Zip Code','Location', 'Telephone','Url','Birth Facility', 'Certified Date','Street or Number', 'Apartment No');

    for($i = 0; $i < $counter-1; $i++){
        if(!is_array($_POST[$postArrayKeys[$i]])) {
            $value = strval($postArrayKeys[$i]);
            if (!empty($value) && $flag == 0 && !str_contains($value,'username')) {
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
                if (str_contains($value, 'firstName') || str_contains($value, 'FullName')) {
                    $nameX = new fullName($_POST[$value], "$person's First Name");
                    $errors = $nameX->validate_name();
                    $flag = $nameX->flag_check();
                    $prnt = new errorDisplay($errors,"First Name",$nameX,$_POST[$value]);
                    $prnt->display_error();
                    unset($nameX);
                }else if(str_contains($value, 'LastName')){
                    $nameX = new nameValidator($_POST[$value], "$person's Last Name");
                    $errors = $nameX->validate_name();
                    $flag = $nameX->flag_check();
                    $prnt = new errorDisplay($errors,"Last Name",$nameX,$_POST[$value]);
                    $prnt->display_error();
                    unset($nameX);
                }else if(str_contains($value, 'MiddleName')){
                    $nameX = new middleNameValidator($_POST[$value], "$person's Middle Name");
                    $errors = $nameX->validate_m_name();
                    $flag = $nameX->flag_check();
                    $prnt = new errorDisplay($errors,"Middle Name",$nameX,$_POST[$value]);
                    $prnt->display_error();
                    unset($nameX);
                }else if(str_contains($value, 'Suffix')){
                    $nameX = new middleNameValidator($_POST[$value], "$person's Suffix");
                    $errors = $nameX->validate_m_name();
//                    $flag = $nameX->flag_check();
                    $prnt = new errorDisplay($errors,"Suffix",$nameX,$_POST[$value]);
                    $prnt->display_error();
                    unset($nameX);
                }else if(str_contains($value, 'Gender')){
                    $sex = array('Male','Female','Other');
                    $nameX = new nameValidator($sex[$_POST[$value]], "$person's Gender");
                    $errors = $nameX->validate_name();
                    $flag = $nameX->flag_check();
                    $prnt = new errorDisplay($errors, "Gender", $nameX, $sex[$_POST[$value]]);
                    $prnt->display_error();
                    unset($nameX);
                }else if(str_contains($value, 'BirthDate')){
                    $nameX = new notEmpty($_POST[$value], "$person's Birth Date");
                    $errors = $nameX->validate_input();
                    $flag = $nameX->flag_check();
                    $prnt = new errorDisplay($errors,"$person's Birth Date",$nameX,$_POST[$value]);
                    $prnt->display_error();
                    unset($nameX);
                }else if(str_contains($value, 'Hospital')){
                    $nameX = new notEmpty($_POST[$value], "Referred Hospital Name");
                    $errors = $nameX->validate_input();
                    $flag = $nameX->flag_check();
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
                    $flag = $nameX->flag_check();
                    $prnt = new errorDisplay($errors,"$person's $value2",$nameX,$_POST[$value]);
                    $prnt->display_error();
                    unset($nameX);
                }
            }else if($flag!=0){
                echo "<span style='color:red'>"."There is an error in your inputs";
                break;
            }
        }
    }
}
$uniqueCode = '';
$username = '';


do{
    $uniqueCode = uniqid();
    $result = $conn->query("SELECT `id` FROM `childinfotest`.`child info` WHERE `Unique Code` = '$uniqueCode' ");
}while($result->num_rows != 0);

$temp = '';
if(!empty($_POST['username'])){
    $temp = $_POST['username'];
} else{
    echo "<span style='color: red; font-size: 20px;'>Please enter an username</span>";
    die();
}
$result = $conn->query("SELECT `id` FROM `childinfotest`.`child info` WHERE `username` = '$temp' ");
if($result->num_rows == 0){
    $username = $temp;
} else{
    echo "<span style='color: red; font-size: 20px;'>Please insert an unique <b>USERNAME</b> or go to <a href='webpages/viewData.php'>View Data</a> to check existing filled up form.</span>";
    die();
}
echo "<br>";
$sql = 'abc';
if($flag == 0){
    $sql = "INSERT INTO `childinfotest`.`child info` (`First Name`, `Middle Name`,`Last Name`,`Suffix`, `Birth Time`,`Unique Code`, `Form Fillup Time`,`username`) VALUES ('$_POST[childfirstName]','$_POST[childMiddleName]','$_POST[childLastName]','$_POST[childNameSuffix]','$_POST[childBirthTime]','$uniqueCode',current_timestamp(),'$username');";
}
if($conn->query($sql)){
    echo "Form Submission Successful";
    echo "Your username = ".'"'.$username.'" '."& Unique Code = ".'"'.$uniqueCode.'"';
    echo "<br>";
    echo "<span style='color: #00bf00;font-size: 22px;'>Please store the <b>Username</b> and <b>Unique Code</b> to view the data later</span>";
}else{
    echo "Error: ".$conn->error;
}
$conn->close();