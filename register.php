<html>
<head>
     <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LawHub : A small contribution to Indin Government</title>
    <meta name="description" content="This is a tool based on crime and law">
    <meta name="keywords" content="indian law system,laws,law students,crime,crime analysis, crime statistics, fir, fir registration">
    <meta name="author" content="www.unnitmetaliya.com">
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicons/favic.png" type="image/x-icon">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Slider
    ================================================== -->
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="js/modernizr.custom.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>

    <script type="text/javascript">

        function myFunction() {
    var pass1 = document.getElementById("password").value;
    var pass2 = document.getElementById("confirm_password").value;

    var phone_number = document.getElementById("phone_number").value.length;

    if (pass1 != pass2) {
        //alert("Passwords Do not match");
        // document.getElementById("pass1").style.borderColor = "#E34234";
        // document.getElementById("pass2").style.borderColor = "#E34234";
        alert("Passwords should match");
        return false;
    }

    if (phone_number<10 || phone_number>10) {
        alert("Please enter correct phone number !!");
        return false;
    };

}

    </script>

</head>
<body>  

<?php
require_once("connect.inc.php");
if (!isset($_POST['submit'])) {
?>  
    <div id="tf-contact" class="text-center">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <div class="section-title center">
                        <h2>Register <strong>yourself</strong></h2>
                        <div class="line">
                            <hr>
                        </div>
                        <div class="clearfix"></div>
                        <small><em>We welcome genuine details</em></small>            
                    </div>

                    <div id="forma"><form action="register.php" method="post" id="registerform" onsubmit="return myFunction()">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Username</label>
                                    <input type="name" name="username" class="form-control" minlength="3" id="username" placeholder="Enter name" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Confirm Password</label>
                                    <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Confirm Password" required>
                                    <div class="registrationFormAlert" id="divCheckPasswordMatch"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p for="exampleInputPassword1" id="validate-status"></p>
                                    
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Phone Number</label>
                                    <input type="number" name="phone_number" class="form-control" minlength="10" id="phone_number" placeholder="Password">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <br><input type="checkbox" name="terms" id="terms" class="btn tf-btn btn-default" required>&nbsp;I agree to all  <a href="">Terms & Conditions</a></button>
                                </div>
                            </div>
                        </div>                        

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <br><button type="submit" name="submit" class="btn tf-btn btn-default">Submit</button>
                                </div>
                            </div>
                        </div>
                        
                    </form>
                </div>
                </div>
            </div>

        </div>
    </div>
<?php
} else {
## connect mysql server
    $mysqli = new mysqli('localhost','root','','userdatabase');
    # check connection
    if ($mysqli->connect_errno) {
        echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
        exit();
    }
## query database
    # prepare data for insertion
    $username   = $_POST['username'];
    $email   = $_POST['email'];
    $password   = $_POST['password'];
    $password_hash = md5($password);
    $confirm_password   = $_POST['confirm_password'];
    $phone_number = $_POST['phone_number'];

    # check if username and email exist else insert
    $exists = 0;
    $result = $mysqli->query("SELECT username from users WHERE username = '{$username}' LIMIT 1");
    if ($result->num_rows == 1) {
        $exists = 1;
        $result = $mysqli->query("SELECT email from users WHERE email = '{$email}' LIMIT 1");
        if ($result->num_rows == 1) $exists = 2;    
    } else {
        $result = $mysqli->query("SELECT email from users WHERE email = '{$email}' LIMIT 1");
        if ($result->num_rows == 1) $exists = 3;
    }

    if ($exists == 1) echo "<p>Username already exists!</p>";
    else if ($exists == 2) echo "<p>Username and Email already exists!</p>";
    else if ($exists == 3) echo "<p>Email already exists!</p>";
    else {
        # insert data into mysql database
        $sql = "INSERT  INTO `users` (`id`, `username`,`email`, `password`, `password_confirm`, `phone`) 
                VALUES (NULL, '{$username}', '{$email}', '{$password_hash}', '{$confirm_password}', '{$phone_number}')";

        if ($mysqli->query($sql)) {
            //echo "New Record has id ".$mysqli->insert_id;
            include 'index.html';
        } else {
            echo "<p>MySQL error no {$mysqli->errno} : {$mysqli->error}</p>";
            exit();
        }
    }
}
?>      
</body>
</html>