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
<!--             <img src="img/logo.png"> -->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#tf-fill" class="page-scroll">List</a></li>
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
            <h1> <strong><span class="color">"MISSING PEOPLE"</span></strong></h1>
            
            <p>Report us or contac the person who is looking for his/her beloved ones if you are familiar with anyone from this list of people (They are missing !)</p>
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
                    <h2> <strong>LIST OF MISSING PEOPLE</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                    <div class="clearfix"></div>
                    
                </div>

                <div id="">
                </div>
            </div>
        </div>

    </div>
</div>
<div id="tf-found" class="center">
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">  

                <div class="section-title center text-center">
                    <h2>FORM FOR <strong>FOUND ITEMS</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                    <div class="clearfix"></div>
                    <big><em>A wrong filling of report is also a crime</em></big><br>
                    <small><em>We welcome genuine details</em></small>
                </div>

                <div id="forma" style="color: black ;">
                    <form action="found.php" method="POST" enctype="multipart/form-data">
                     <div>   <h3>Personnel Submitting item Details:</h3>
                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Name:</label>
                                <input type="text" class="form-control" id="f_name" name="f_name" placeholder="Enter your name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Your Email</label>
                                <input type="text" name="f_email" class="form-control" id="f_email" placeholder="Enter your e-mail">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Contact Number</label>
                                <input type="number" name="f_contactnumber" class="form-control" id="f_contnumber" placeholder="Contact Number" min="-9999999999" max="9999999999">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Aadhar card number</label>
                                <input type="number" name="f_aadharnumber" class="form-control" id="f_aadharcard number" placeholder="15 digit personal number">
                            </div>
                        </div>
                    </div>
                </div>
                    <h3>Item Description:</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Item Found</label>
                                <input type="text" name="item_name" class="form-control" id="item found" placeholder="name of the item found">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Description</label>
                                <input type="text" name="item_description" class="form-control" id="f_description" placeholder="Description of item that is found in detail">
                            </div>
                        </div>
                    </div>

                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Location </label>
                                <input type="text" name="item_location" class="form-control" id="f_location" placeholder="Nearby landmark where the item was found">
                            </div>
                        </div>
                    </div>
<!-- 
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Upload a Picture</label>
                                <input type="file" name="image">
                            </div>
                        </div>
                    </div> -->

                    <!-- Need to add a  Thanks message after submitting items and requesting them to submit item  -->


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