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
            <form action="front/public/process2.php" method="post">
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
                                        <div class="col-md-12">
                                            <label for="username" class="col-form-label">Username for viewing the data</label>
                                            <input type="text" id="username" name="username"  class="form-control">
                                        </div>
                                    </div>
                                </div><!--~~~~ Child's Details Form End ~~~~-->
                                
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
            </form>
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