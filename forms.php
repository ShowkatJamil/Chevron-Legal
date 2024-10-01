<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>Forms</title>
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/logo.png" />
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
</head>



<!-- --------------------------------------------------------------------------------------------------- -->

<body>
    <h1 style="background-color: #0b2d71; color: white; padding: 4%; text-align: center; font-size: 40px;"> Legal Opinion Request Form</h1>
    <div class="row" style="background-color: #1b4079;border:#0b2d71; justify-content: center; align-items:center ;min-height: 1024px;">

        <div class="form-container">
            <form method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="name" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="department">Department</label>
                    <input type="text" id="department" name="department" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>


    <!-- news section end -->
    <?php
    include 'connect.php';

    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $department = $_POST['department'];
        $phone = $_POST['phone'];
        $description = $_POST['description'];


        $query = "INSERT INTO 
                    `rquest_t` 
                        (
                        `request_name`,	
                        `request_email`,	
                        `request_dept`,	
                        `request_pnumber`,	
                        `req_des`	
                        )
                    VALUES 
                        (
                        '$name', 
                        '$email', 
                        '$department', 
                        '$phone',
                        '$description'
                        )";

        mysqli_query($conn, $query);

        echo "<script>window.location.href ='index.html'</script>";

    }

    ?>

    <footer style="position: absolute; width: 100%;">
        <div class="copyright_section">
            <p class="copyright_text">2024 All Rights Reserved by chevron Bangladesh Legal Department</p>
        </div>
    </footer>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/weather.js"></script>
    <!-- javascript -->
    <script src="https://kit.fontawesome.com/b3c720d973.js" crossorigin="anonymous"></script>
</body>

</html>