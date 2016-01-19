<!DOCTYPE html>
<html lang="en">
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

    <style type="text/css">
        #manifest td{

        font-family: Verdana;
        padding:20px;
      }
      #manifest{
        border:1px solid black;
        border-collapse:collapse;
        margin-top: -50px;
      }
      
      #manifest tr:nth-child(even){
        background-color:#8eecd6;
      }
      #manifest tr:nth-child(odd){
        background-color:#e7a1ec;
      }
    </style>

</head>

<body>
<!-- Navigation
==========================================-->

<nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- <img src="img/logo.png"> -->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#tf-faq" class="page-scroll">FAQ</a></li>
                <li><a href="#tf-services" class="page-scroll">Back to home</a></li>
				<li><a href="#tf-services" class="page-scroll">Log Out</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!-- What Page
==========================================-->
<div id="tf-home" class="text-center">
    <div class="overlay">
        <div class="content">
            <h1> <strong><span class="color">"SEARCH YOUR ITEMS"</span></strong></h1>
            
            <p>This is the menifest of the items that people found and reported to us. Search your items and let us know if you find any.</p>
            <a href="#tf-fill" class="fa fa-angle-down page-scroll"></a>
        </div>
    </div>
</div>

<!-- Form Page
==========================================-->

<div id="tf-fill" class="text-center">
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">  

                <div class="section-title center">
                    <h2> <strong>ITEMS THAT PEOPLE HAVE LOST</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                    <div class="clearfix"></div>
                    
                </div>
				<!-- <h3>All Items are verified.</h3> -->
                <div id="founditemlist">

                    <?php 

                        $dbLink = new mysqli('127.0.0.1', 'root', '', 'lostandfound');

                            if(mysqli_connect_errno()) {     
  
                                 die("MySQL connection failed: ".mysqli_connect_error());
                            }

                            $sql = 'SELECT `id`,`l_name`,`l_email`, `l_contact`,`itemname`,`itemdescription`,`itemlocation`,`itemlastseen` FROM `found`';
                            $result = $dbLink->query($sql); 

    // Check if it was successfull

if($result) {  

   // Make sure there are some files in there
 
    if($result->num_rows == 0) {
    
          echo '<p>There are no any items there..! Have a good day..!</p>';
    } 
        else {        
                echo '<table width="100%" id="manifest">
                          <tr style="background-color:#FCAC45">
                            <td><b>Looser Name</b></td>
                            <td><b>Looser Email</b></td> 
                            <td><b>Looser Contact</b></td>
                            <td><b>Item Name</b></td>
                            <td><b>Item Description</b></td>
                            <td><b>Location</b></td>
                            <td><b>Last seen</b></td>

                          </tr>';
        

                    while($row = $result->fetch_assoc()){
         
                                                           echo "<tr>";
                                                              echo "<td>{$row['l_name']}</td>";
                                                              echo "<td>{$row['l_email']}</td>";
                                                              echo "<td>{$row['l_contact']}</td>";
                                                              echo "<td>{$row['itemname']}</td>";
                                                              echo "<td>{$row['itemdescription']}</td>";
                                                              echo "<td>{$row['itemlocation']}</td>";
                                                              echo "<td>{$row['itemlastseen']}</td>";

                
                                                              echo  "</tr>";
                    }         
        
                 echo '</table>';
    }      

    // Free the result
    $result->free(); } 

    else {   
      echo 'Error! SQL query failed:';
    echo "<pre>{$dbLink->error}</pre>";
}  
// Close the mysql connection $dbLink->close();

                     ?>

                </div>
            </div>
        </div>

    </div>
</div>


<!-- FAQ PAGE
==========================================-->
<div id="tf-faq">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title center text-center">
                    <h1>Frequently Asked Questions</h1>
                    <div class="line" >
                        <hr>
                    </div>
                    <div class="clearfix"></div>
                    <big><em>A quidlines for form and question on it</em></big><br>
                    <small><em>If still have query contact us using contact form</em></small>
                </div>
                <table>
                    <tr>
                        <td><table border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="110" valign="top"><p><strong>Question 01</strong></p></td>
                                <td width="20" valign="top"><p><strong>:</strong></p></td>
                                <td valign="top"><p><strong>Why this application has been developed?</strong></p></td>
                            </tr>
                            <tr>
                                <td valign="top"><p><strong>Answer </strong></p></td>
                                <td valign="top"><p><strong>: </strong></p></td>
                                <td valign="top"><p>World  has consistently been adopting new methodologies and technologies to enhance  ts service delivery capacity.
                                    Our endeavour has been to identify areas where   newer means can help in reducing public inconvenience.<br /><br />
                            <tr>
                                <td valign="top"><p><strong>Question 02</strong></p></td>
                                <td valign="top"><p><strong>:</strong></p></td>
                                <td valign="top"><p><strong>What is the procedure for finding an Lawyer?</strong></p></td>
                            </tr>
                            <tr>
                                <td valign="top"><p><strong>Answer </strong></p></td>
                                <td valign="top"><p><strong>:</strong></p></td>
                                <td valign="top"><p>Visit our website www.econvoy.com and follow the &lsquo;Lawyer hiring&rsquo; Module. </p></td>
                            </tr>
                        </table>
                            <br clear="all" />
                            <table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td width="110" valign="top"><p><strong>Question 03</strong></p></td>
                                    <td width="20" valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p><strong>Are all lawyers verified?</strong></p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Answer</strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p>Yes. all lawyers are verified during their registration on this webpage.</p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Question 04</strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p><strong>What type of lawyer can i find here?</strong></p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Answer</strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p>You can find all types of lawyers here.</p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Question 05</strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p><strong>Can i read a reviw about the lawyers?</strong></p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Answer </strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p>Yes. all the lawyers review can be read in the feedback module or also before selecting the lawyer the review will be shown.<strong></strong></p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Question 06</strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p><strong>how can i get in contact with the lawyer?</strong></p></td>
                                </tr>
                                <tr>
                                    <td valign="top"><p><strong>Answer </strong></p></td>
                                    <td valign="top"><p><strong>:</strong></p></td>
                                    <td valign="top"><p>After you select the lawywer. his/her personal details will be given to you. also a appointment will be fixed as per the lawyer free time. where you can talk privately with the lawyer and discuss your case. </p></td>
                                </tr>
                                
                            </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
<nav id="footer">
    <div class="container">
        <div class="pull-left fnav">
            <p>ALL RIGHTS RESERVED. COPYRIGHT © 2014.</p>
        </div>
        <div class="pull-right fnav">
            <ul class="footer-social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            </ul>
        </div>
    </div>
</nav>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>

<script src="js/owl.carousel.js"></script>

<!-- Javascripts
================================================== -->
<script type="text/javascript" src="js/main.js"></script>

</body>
</html>