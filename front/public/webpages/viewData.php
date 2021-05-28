<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Data</title>

    <!-- Bootstrap CSS  file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>
<body>
    <div class="container">
        <form action="dataShow.php" method="post">
            <!--~~~~ Child's Details Form Start ~~~~-->
            <div class="col-md-4">
                <div class="divTitle h4  pb-md-3 pt-3 pt-md-0">
                    Enter Credentials
                </div>
                <div class="row gx-md-5 gx-lg-5 gy-2"><!-- Modified gx-lg-5 -->
                    <div class="col-md-12">
                        <label for="username" class="col-form-label">Username</label>
                        <input type="text" id="username" name="username" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <label for="uniqueCode" class="col-form-label">Unique Code</label>
                        <input type="text" id="uniqueCode" name="uniqueCode" class="form-control">
                    </div>
                </div>
                <div class="text-center mt-3">
                    <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
