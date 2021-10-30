<!DOCTYPE html>
<html>
<head>
      <!-- Title Page-->
    <title>Add Employee | Manager Panel</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <header>
        <nav>
            <h1>Awersomity lab.</h1>
            <ul id="navli">
                <li><a class="homeblack" href="#">HOME</a></li>
                
                <li><a class="homered" href="signup.php">signup</a></li>
                <li><a class="" href="assign.php" style="display: none;">Assign Project</a></li>
                <li><a class="" href="assignproject.php"style="display: none;">Project Status</a></li>
                
            </ul>
        </nav>
    </header>
    
    <div class="divider"></div>




    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-body">
                    <h2 class="title">Fill this form to create account</h2>
                    <form action="process/addmanager.php" method="POST" enctype="multipart/form-data">


                        

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                     <input class="input--style-1" type="text" placeholder="First Name" name="firstName" required="required">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Last Name" name="lastName" required="required">
                                </div>
                            </div>
                        </div>





                        <div class="input-group">
                            <input class="input--style-1" type="email" placeholder="Email" id="mail" name="email" required="required">
                      </script>
                        </div>
                        <p>Birthday</p>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="date" placeholder="BIRTHDATE" name="birthday" required="required">
                             </div>
                        </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="phone number 07" name="contact" required="required" maxlength=10  minlength=10>
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="National id" name="nid" required="required" minlength="16"  maxlength="16">
                        </div>
                        
                         
                            <input class="input--style-1" type="hidden" placeholder="National id" name="position" value="manager">
                       
                        
                          
                            <input class="input--style-1" type="hidden" placeholder="National id" name="status" value="active" placeholder="manager">
                                            
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->
