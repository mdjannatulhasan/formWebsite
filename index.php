<!DOCTYPE html>
<html lang="en">
<?php
include_once('front/views/elements/head.php');
?>
<body>
    <?php
        include_once ('front/views/elements/header.php');
    ?>
    <section class="formDetails">
        <div class="container">
            <form action="front/public/process.php" method="post">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#administrative" type="button" role="tab" aria-controls="administrative" aria-selected="false">Information for Administrative Use</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#purpose" type="button" role="tab" aria-controls="purpose" aria-selected="false">Information for Medical and Health Purposes Only</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#mother" type="button" role="tab" aria-controls="mother" aria-selected="false">Mother Details</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#information" type="button" role="tab" aria-controls="information" aria-selected="false">Medical and Health Informations</button>
                    </li>
                </ul>
                <div class="lightYellow pb-4"> <!-- Tab body background "lightYellow" -->
                    <div class="tab-content m-auto" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row pt-md-3 gxCustom gx-md-5" data-masonry='{"percentPosition": false }'><!-- Added "data-masonry='{"percentPosition": false }" for masonry columns -->
                                
                                <!--~~~~ Child's Details Form Start ~~~~-->
                                <div class="col-md-6">
                                    <div class="divTitle h4  pb-md-3 pt-3 pt-md-0">
                                        Child's Details
                                    </div>
                                    <div class="row gx-md-5 gx-lg-5 gy-2"><!-- Modified gx-lg-5 -->
                                        <div class="col-md-6">
                                            <label for="childfirstName" class="col-form-label">First Name</label>
                                            <input type="text" id="childfirstName" name="childfirstName" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="childMiddleName" class="col-form-label">Middle Name</label>
                                            <input type="text" id="childMiddleName" name="childMiddleName" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="childLastName" class="col-form-label">Last Name</label>
                                            <input type="text" id="childLastName" name="childLastName" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="childNameSuffix" class="col-form-label">Suffix</label>
                                            <input type="text" id="childNameSuffix" name="childNameSuffix"  class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="childBirthTime" class="col-form-label">Time of Birth(24hr)</label>
                                            <input type="text" id="childBirthTime" class="form-control bs-timepicker" name="childBirthTime">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="childGender" class="col-form-label">Sex</label>
                                            <select class="form-select form-control" aria-label="form-select" id="childGender" name="childGender">
                                                <option value="0">Male</option>
                                                <option value="1">Female</option>
                                                <option value="2">Other</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="childBirthDate" class="col-form-label">Date of Birth (Mo/Day/Yr)</label>
                                            <input type="text" id="childBirthDate"  name="childBirthDate" class="form-control datepicker">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="childBirthFacility" class="col-form-label">Facility Name (If not institution, give street and number)</label>
                                            <input type="text" id="childBirthFacility" class="form-control" name="childBirthFacility">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="childBirthLocation" class="col-form-label">City, Town or Location of Birth</label>
                                            <input type="text" id="childBirthLocation" class="form-control" name="childBirthLocation">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="childBirthCountry" class="col-form-label">County of Birth</label>
                                            <input type="text" id="childBirthCountry" class="form-control" name="childBirthCountry">
                                        </div>
                                    </div>
                                </div><!--~~~~ Child's Details Form End ~~~~-->
                                
                                <!--~~~~ Mother's Details Form Start ~~~~-->
                                <div class="col-md-6">
                                    <div class="divTitle h4 pb-md-3 pt-3 pt-md-0">
                                        Mother's Details
                                    </div>
                                    <div class="row gx-md-5 gx-lg-5 gy-2"><!-- Modified gx-lg-5 -->
                                        <div class="motherLabel pb-md-2  pt-3 pt-md-0">Mother's Current Legal Name</div>
                                        <div class="col-md-6">
                                            <label for="motherfirstName" class="col-form-label">First Name</label>
                                            <input type="text" id="motherfirstName" class="form-control" name="motherfirstName">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="motherMiddleName" class="col-form-label">Middle Name</label>
                                            <input type="text" id="motherMiddleName" class="form-control" name="motherMiddleName">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="motherLastName" class="col-form-label">Last Name</label>
                                            <input type="text" id="motherLastName" class="form-control" name="motherLastName">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="motherNameSuffix" class="col-form-label">Suffix</label>
                                            <input type="text" id="motherNameSuffix" class="form-control" name="motherNameSuffix">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="motherBirthDate" class="col-form-label">Date of Birth (Mo/Day/Yr)</label>
                                            <input type="text" id="motherBirthDate"  name="motherBirthDate" class="form-control datepicker">
                                        </div>
                                        <div class="motherLabel pb-md-1  pt-4">Mother's Name Prior to First Marriage</div>
                                        <div class="col-md-6">
                                            <label for="motherPfirstName" class="col-form-label">First Name</label>
                                            <input type="text" id="motherPfirstName" class="form-control" name="motherPfirstName">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="motherPMiddleName" class="col-form-label">Middle Name</label>
                                            <input type="text" id="motherPMiddleName" class="form-control" name="motherPMiddleName">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="motherPLastName" class="col-form-label">Last Name</label>
                                            <input type="text" id="motherPLastName" class="form-control" name="motherPLastName">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="motherPNameSuffix" class="col-form-label">Suffix</label>
                                            <input type="text" id="motherPNameSuffix" class="form-control" name="motherPNameSuffix">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="motherBirthPlace" class="col-form-label">Birthplace (State, Territory, or Foreign Country)</label>
                                            <input type="text" id="motherBirthPlace"  name="motherBirthPlace" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="motherStateResidency" class="col-form-label">Residence of Mother-State</label>
                                            <input type="text" id="motherStateResidency"  name="motherStateResidency" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="motherCountry" class="col-form-label">Country</label>
                                            <input type="text" id="motherCountry"  name="motherCountry" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="motherLocation" class="col-form-label">City, Town or Location</label>
                                            <input type="text" id="motherLocation"  name="motherLocation" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="motherStreetNumber" class="col-form-label">Street and Number</label>
                                            <input type="text" id="motherStreetNumber"  name="motherStreetNumber" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="motherAptNumber" class="col-form-label">Apartment No.</label>
                                            <input type="text" id="motherAptNumber"  name="motherAptNumber" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="motherZipCode" class="col-form-label">Zip Code</label>
                                                    <input type="text" id="motherZipCode"  name="motherZipCode" class="form-control">
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="motherCityLimit" class="col-form-label">Inside City Limits?</label>
                                                        </div>
                                                        <div class="col-4">
                                                            <input type="radio" id="motherCityLimit"  name="motherCityLimit" value="Yes"> Yes
                                                        </div>
                                                        <div class="col-4">
                                                            <input type="radio" id="motherCityLimit"  name="motherCityLimit" value="No"> No
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--~~~~ Mother's Details Form End ~~~~-->
                                
                                <!--~~~~ Father's Details Form Start ~~~~-->
                                <div class="col-md-6">
                                    <div class="divTitle h4  pb-md-2 pt-3">
                                        Father's Details
                                    </div>
                                    <div class="row gx-md-5 gx-lg-5 gy-2 align-items-center"><!-- Modified gx-lg-5 -->
                                        <div class="fatherLabel pb-md-2  pt-md-0 pt-3 pt-sm-2">Father's Current Legal Name</div>
                                        <div class="col-md-6">
                                            <label for="fatherfirstName" class="col-form-label">First Name</label>
                                            <input type="text" id="fatherfirstName" class="form-control" name="fatherfirstName">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="fatherMiddleName" class="col-form-label">Middle Name</label>
                                            <input type="text" id="fatherMiddleName" class="form-control" name="fatherMiddleName">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="fatherLastName" class="col-form-label">Last Name</label>
                                            <input type="text" id="fatherLastName" class="form-control" name="mfatherLastName">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="fatherNameSuffix" class="col-form-label">Suffix</label>
                                            <input type="text" id="fatherNameSuffix" class="form-control" name="fatherNameSuffix">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="fatherBirthDate" class="col-form-label">Date of Birth (Mo/Day/Yr)</label>
                                            <input type="text" id="fatherBirthDate"  name="fatherBirthDate" class="form-control datepicker">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="fatherBirthPlace" class="col-form-label">Birthplace (State, Territory, or Foreign Country)</label>
                                            <input type="text" id="fatherBirthPlace"  name="fatherBirthPlace" class="form-control datepicker">
                                        </div>
                                    </div>
                                </div><!--~~~~ Father's Details Form End ~~~~-->
                                
                                <!--~~~~ Certifier's Details Form Start ~~~~-->
                                <div class="col-md-6">
                                    <div class="divTitle h4  pb-md-2 pt-3">
                                        Certifier Details
                                    </div>
                                    <div class="row gx-md-5 gx-lg-5 gy-2"><!-- Modified gx-lg-5 -->
                                        <div class="col-md-12">
                                            <label for="certifierFullName" class="col-form-label">Certifier's Name</label>
                                            <input type="text" id="certifierFullName" name="certifierFullName" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="certifierTitle" class="col-form-label">Title</label>
                                                </div>
                                                <div class="col">
                                                    <input class="form-check-input" type="checkbox" id="md"  name="tilte[]" value="MD"><label for="md" class="form-check-label ps-1 pe-2"> MD</label>
                                                    <input class="form-check-input" type="checkbox" id="do"  name="tilte[]" value="DO"><label for="do" class="form-check-label ps-1 pe-2"> DO</label>
                                                    <input class="form-check-input" type="checkbox" id="admin"  name="tilte[]" value="Hospital Admin"><label for="admin" class="form-check-label ps-1 pe-2"> Hospital Admin</label>
                                                    <input class="form-check-input" type="checkbox" id="cnm"  name="tilte[]" value="CNM/CM"><label for="cnm" class="form-check-label ps-1 pe-2"> CNM/CM</label>
                                                    <input class="form-check-input" type="checkbox" id="midwife"  name="tilte[]" value="Other Midwife"><label for="md" class="form-check-label ps-1 pe-2"> Other Midwife</label>
                                                    <input class="form-check-input" type="checkbox" id="other"  name="tilte[]" value="other"
                                                    onclick="
                                                    var input = document.getElementById('otherTitle');
                                                    if(this.checked){input.disabled = false; input.focus();}else{input.disabled = true;}
                                                    ">
                                                    <label for="other" class="form-check-label ps-1 pe-2 pb-1"> Other (Specify)</label>
                                                    <input type="text" id="otherTitle" name="otherTitle" class="form-control" disabled= "disabled">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="certifiedDate" class="col-form-label">Date Certified (Mo/Day/Yr)</label>
                                                    <input type="text" id="certifiedDate"  name="certifiedDate" class="form-control datepicker">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="certifiedDate" class="col-form-label">Date Filled by Register (Mo/Day/Yr)</label>
                                                    <input type="text" id="certifiedDate"  name="certifiedDate" class="form-control datepicker">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="certifiedTele" class="col-form-label">Telephone</label>
                                            <input type="text" id="certifiedTele"  name="certifiedTele" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="certifierUrl" class="col-form-label">URL#</label>
                                            <input type="url" id="certifierUrl"  name="certifierUrl" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="refferingHospital" class="col-form-label">Reffering Hospital</label>
                                            <input type="text" id="refferingHospital"  name="refferingHospital" class="form-control">
                                        </div>
                                    </div>
                                </div><!--~~~~ Certifier's Details Form End ~~~~-->
                                
                            </div>
                        </div>
                        <div class="tab-pane fade" id="administrative" role="tabpanel" aria-labelledby="administrative-tab">
                            <div class="row pt-md-3">
                                <div class="col-md-6">
                                    <div class="divTitle h4">
                                        Onnanno's Details
                                    </div>
                                    <div class="row g-3 align-items-center">
                                        <div class="col-md-6">
                                            <label for="firstName" class="col-form-label">First Name</label>
                                            <input type="text" id="childfirstName" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="firstName" class="col-form-label">First Name</label>
                                            <input type="text" id="firstName" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="divTitle h4">
                                        Onno's Details
                                    </div>
                                    <div class="row g-3 align-items-center">
                                        <div class="col-md-6">
                                            <label for="firstName" class="col-form-label">First Name</label>
                                            <input type="text" id="firstName" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="firstName" class="col-form-label">First Name</label>
                                            <input type="text" id="firstName" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="purpose" role="tabpanel" aria-labelledby="purpose-tab">...</div>
                        <div class="tab-pane fade" id="mother" role="tabpanel" aria-labelledby="mother-tab">...</div>
                        <div class="tab-pane fade" id="information" role="tabpanel" aria-labelledby="information-tab">...</div>
                    </div>
                </div>
                <div class="text-center mb-3">
                    <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                </div>
            </forms>
        </div>
    </section>
    <!-- Bootstarp JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
    
    <!-- jquery cdn  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <!-- Time Picker JS -->
    <script src="front/public/js/timepicker.js"></script>
    
    <!-- DatePicker JS -->
    <script src="front/public/js/bootstrap-datepicker.js"></script>
    
    <!-- custom js -->
    <script src="front/public/js/main.js"></script>
    
</body>
</html>