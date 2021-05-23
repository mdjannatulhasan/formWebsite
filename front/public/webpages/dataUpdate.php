<?php
session_start();
$inputUsername = $_SESSION["inputUserName"];
$uniqueCode = $_SESSION["uniqueCode"];
$_SESSION['aRedirect'] = 1;
if(strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){
    if(!empty($_POST['username'])){
        $inputUsername = $_POST['username'];
    } else {
        echo "Enter Username";
        die();
    }
    if(!empty($_POST['uniqueCode'])){
        $uniqueCode = $_POST['uniqueCode'];
    }else {
        echo "Enter Code";
        die();
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
$firstName = '';
$middleName = '';
$lastName = '';
$suffix= '';
$birthTime= '';
$result = $conn->query("SELECT * FROM `childinfotest`.`child info` WHERE `username` = '$inputUsername' AND `Unique Code` = '$uniqueCode'");
if($result->num_rows != 0){
    $row = mysqli_fetch_array($result);
    $firstName = $row[1];
    $middleName = $row[2];
    $lastName = $row[3];
    $suffix = $row[4];
    $birthTime = $row[5];
}else {
    echo "<span style='color: red; font-size: 23px'>Username & Unique id doesn't match</span>";
    die();
}
$conn->close();
$htmlOutput = <<<html
<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Data</title>

    <!-- Bootstrap CSS  file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <!-- TimePicker CSS -->
    <link rel="stylesheet" href="../css/timepicker.css" />
    <!--  -->
    <link rel="stylesheet" href="../css/datepicker.css">

    <!-- Custom CSS file -->
<!--    <link rel="stylesheet" href="../css/style.css">-->
    
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"></script>
</head>
<body>
<div class="container">
    <form action="../process2.php" method="post">
        <!--~~~~ Child's Details Form Start ~~~~-->
        <div class="col-md-6">
            <div class="divTitle h4  pb-md-3 pt-3 pt-md-0">
                Child's Details
            </div>
            <div class="row gx-md-5 gx-lg-5 gy-2"><!-- Modified gx-lg-5 -->
                
                <div class="col-md-6">
                    <label for="childfirstName" class="col-form-label">First Name</label>
                    <input type="text" id="childfirstName" name="childfirstName" value="$firstName" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="childMiddleName" class="col-form-label">Middle Name</label>
                    <input type="text" id="childMiddleName" name="childMiddleName" value="$middleName" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="childLastName" class="col-form-label">Last Name</label>
                    <input type="text" id="childLastName" name="childLastName" value="$lastName" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="childNameSuffix" class="col-form-label">Suffix</label>
                    <input type="text" id="childNameSuffix" name="childNameSuffix" value="$suffix" class="form-control">
                </div>
                <div class="col-md-12">
                    <label for="childBirthTime" class="col-form-label">Time of Birth(24hr)</label>
                    <input type="text" id="childBirthTime" name="childBirthTime" value="$birthTime" class="form-control bs-timepicker">
                </div>
            </div>
        </div><!--~~~~ Child's Details Form End ~~~~-->
        <div class="mt-4 mb-3">
            <button type="submit" name="submit" value="submit" class="btn btn-danger">Update</button>
        </div>
    </form>
</div>
<!-- jquery cdn  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Time Picker JS -->
    <script src="../js/timepicker.js"></script>
    
    <!-- DatePicker JS -->
    <script src="../js/bootstrap-datepicker.js"></script>
    
    <!-- custom js -->
    <script src="../js/main.js"></script>
    
<!--    <script>-->
<!--        $(document).ready(function()-->
<!--        {-->
<!--            $('#btnEdit').click(function()-->
<!--            {-->
<!--                $('.form-control').removeAttr('readonly'); -->
<!--                document.getElementById('btnOk').style.display = "block";-->
<!--            });-->
<!--         });-->
<!--        $(document).ready(function()-->
<!--        {-->
<!--            $('#btnOk').click(function()-->
<!--            {-->
<!--                $('.form-control').attr('readonly','readonly');-->
<!--                document.getElementById('btnOk').style.display = "none";-->
<!--            });-->
<!--         });-->
<!--     </script>-->
</body>
</html>
html;
echo $htmlOutput;
