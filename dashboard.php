<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/logo.jpg">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>AITAM INNOVATION CONTEST</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	<!--     Fonts and icons     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<!-- CSS Files -->
    <link href="assets/register_assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/register_assets/css/gsdk-bootstrap-wizard.css" rel="stylesheet" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/register_assets/css/demo.css" rel="stylesheet" />
	<script type="text/javascript">
            function PreviewImage() {
                pdffile=document.getElementById("uploadPDF").files[0];
                pdffile_url=URL.createObjectURL(pdffile);
                $('#viewer').attr('src',pdffile_url);
            }
        </script>
</head>

<body>
    <div class="image-container set-full-height"  style="background-image: url('assets/img/clgepic.jpg')">
        <!--   Creative Tim Branding   -->
        <a href="http://creative-tim.com">
             <div class="logo-container">
                <div class="logo">
                    <img src="assets/register_assets/img/new_logo.png">
                </div>
                <div class="brand">
                    AITAM INNOVATION CONTEST
                </div>
            </div>
        </a>
    

	<!--  Made With Get Shit Done Kit  -->
		

    <!--   Big container   -->
    <div class="container">
        <div class="row">
        <div class="col col-offset-2">
            <!--      Wizard container        -->
            <div class="wizard-container">
                <div class="card wizard-card" data-color="orange" id="wizardProfile">
  						<div class="wizard-navigation">
							<ul>
	                            <li id="cat1"><a href="#about"  data-toggle="tab">CATEGORY-1</a></li>
	                            <li id="cat2"><a href="#account"  data-toggle="tab">CATEGORY-2</a></li>
	                            <li  id="cat3"><a href="#address" data-toggle="tab">CATEGORY-3</a></li>
	                        </ul>
                        </div>
                    <div id="cat_1" >
                        <div class="table-responsive-sm">
                            <table class="table">
                                <thead>
                                  <tr class="bg-warning" >
                                    <th scope="col">S No</th>
                                    <th scope="col">Name </th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Alternate Number</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">District</th>
                                    <th scope="col">School Name</th>
                                    <th scope="col">Class</th>
                                    <th scope="col">Admission Number</th>
                                    <th scope="col">Thrust Areas</th>
                                    <th scope="col">Payment Platform</th>
                                    <th scope="col">Transaction ID</th>
                                    <th scope="col">File</th>
                                    <th scope="col">Remove</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <?PHP
                                    include "db_connection.php";
                                    $status=NUll;
                                     $sql1="SELECT * FROM `cat1_register` WHERE `remove_satus` IS NULL  ORDER BY `sno` DESC";
                                     $result1 = mysqli_query($connect,$sql1);
                                     $i=1;
                                     $extension=".pdf";
                                     while ($row1 = mysqli_fetch_array($result1)) {
                                         
                                        
                                         echo"<tr> <td> ".$i." </td> <td> ".$row1['firstname'].$row1['surname']." </td>
                                         <td> ".$row1['phonenumber']." </td><td> ".$row1['alternatenumber']." </td><td> ".$row1['address']." </td>
                                         <td> ".$row1['district']." </td><td> ".$row1['schoolname']." </td>
                                         <td> ".$row1['admno']." </td><td> ".$row1['class']." </td><td> ".$row1['topics']." </td>
                                         <td> ".$row1['Payment_Platform']." </td><td> ".$row1['Transaction_ID']." </td>
                                         <td><a href='assets/Category_1_files/" .$row1['firstname']."_".$row1['surname'].$extension."' download> Download</a></td>
                                         <td><a href='remove1.php?p=".$row1['sno']."'>Remove</a></td>
                                         </tr>";
                                         $i++;
                                     }
                                                                
                                    
                                    ?>
                                  
                                </tbody>
                              
                            </table>
                          </div> 
                    </div>
                    <div id="cat_2"  style="display: none;">
                        <div class="table-responsive-sm">
                            <table class="table">
                                <tr class="bg-warning" >
                                    <th scope="col">S No</th>
                                    <th scope="col">Name </th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Alternate Number</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">District</th>
                                    <th scope="col">College Name</th>
                                    <th scope="col">Year</th>
                                    <th scope="col">Admission Number</th>
                                    <th scope="col">Thrust Areas</th>
                                    <th scope="col">Payment Platform</th>
                                    <th scope="col">Transaction ID</th>
                                    <th scope="col">File</th>
                                    <th scope="col">Remove</th>
                                  </tr>
                                  <tbody>
                                  <tr>
                                    <?PHP
                                    include "db_connection.php";
                                     $sql2="SELECT * FROM `cat2_register` WHERE `remove_satus` IS NULL  ORDER BY `sno` DESC";
                                     $result2 = mysqli_query($connect,$sql2);
                                     $i=1;
                                     $extension2=".pdf";
                                     while ($row2 = mysqli_fetch_array($result2)) {
                                         
                                        
                                         echo"<tr> <td> ".$i." </td> <td> ".$row2['firstname'].$row2['surname']." </td>
                                         <td> ".$row2['phonenumber']." </td><td> ".$row2['alternatenumber']." </td><td> ".$row2['address']." </td>
                                         <td> ".$row2['district']." </td><td> ".$row2['schoolname']." </td>
                                         <td> ".$row2['admno']." </td><td> ".$row2['class']." </td><td> ".$row2['topics']." </td>
                                         <td> ".$row2['Payment_Platform']." </td><td> ".$row2['Transaction_ID']." </td>
                                         <td><a href='assets/Category_2_files/" .$row2['firstname']."_".$row2['surname'].$extension2."' download> Download</a></td>
                                         <td><a href='remove1.php?q=".$row2['sno']."'>Remove</a></td>
                                         </tr>";
                                         $i++;
                                     }
                                                                
                                    
                                    ?>
                                  
                                </tbody>
                              
                            </table>
                            
                          </div> 
                    </div>    
                    <div id="cat_3"  style="display: none;">
                        <div class="table-responsive-sm">
                        <table class="table">
                                <tr class="bg-warning" >
                                    <th scope="col">S No</th>
                                    <th scope="col">Name </th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Alternate Number</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">District</th>
                                    <th scope="col">College Name</th>
                                    <th scope="col">Year</th>
                                    <th scope="col">Admission Number</th>
                                    <th scope="col">Thrust Areas</th>
                                    <th scope="col">Payment Platform</th>
                                    <th scope="col">Transaction ID</th>
                                    <th scope="col">Branch</th>
                                    <th scope="col">File</th>
                                    <th scope="col">Remove</th>
                                  </tr>
                                  <tbody>
                                  <tr>
                                    <?PHP
                                    include "db_connection.php";
                                     $sql3="SELECT * FROM `cat3_register` WHERE `remove_satus` IS NULL  ORDER BY `sno` DESC";
                                     $result3 = mysqli_query($connect,$sql3);
                                     $i=1;
                                     $extension3=".pdf";
                                     while ($row3 = mysqli_fetch_array($result3)) {
                                         
                                        
                                         echo"<tr> <td> ".$i." </td> <td> ".$row3['firstname'].$row3['surname']." </td>
                                         <td> ".$row3['phonenumber']." </td><td> ".$row3['alternatenumber']." </td><td> ".$row3['address']." </td>
                                         <td> ".$row3['district']." </td><td> ".$row3['schoolname']." </td>
                                         <td> ".$row3['admno']." </td><td> ".$row3['class']." </td><td> ".$row3['topics']." </td>
                                         <td> ".$row3['Payment_Platform']." </td><td> ".$row3['Transaction_ID']." </td><td> ".$row3['branch']." </td>
                                         <td><a href='assets/Category_3_files/" .$row3['firstname']."_".$row3['surname'].$extension3."' download> Download</a></td>
                                         <td><a href='remove1.php?r=".$row3['sno']."'>Remove</a></td>
                                         </tr>";
                                         $i++;
                                     }
                                                                
                                    
                                    ?>
                                  
                                </tbody>
                              
                            </table>
                          </div> 
                    </div>


                        
                </div>
                </div>
            </div> <!-- wizard container -->
        </div>
        </div><!-- end row -->
    </div> <!--  big container -->
<script>
    $(document).ready(function(){
        $("#cat1").click(function(){
            $("#cat_2").hide(),
            $("#cat_3").hide(),
            $("#cat_1").show()
        });
        $("#cat2").click(function(){
            $("#cat_1").hide(),
            $("#cat_3").hide(),
            $("#cat_2").show()
        });
        $("#cat3").click(function(){
            $("#cat_2").hide(),
            $("#cat_1").hide(),
            $("#cat_3").show()
        });
    });
</script>
    <div class="footer">
        <div class="container">
             Made with <i class="fa fa-heart heart"></i> by <a href="">Creative Tim</a>. Free download <a href="">here.</a>
        </div>
    </div>

</div>

</body>

	<!--   Core JS Files   -->
	<script src="assets/register_assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/register_assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/register_assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/register_assets/js/gsdk-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="assets/register_assets/js/jquery.validate.min.js"></script>

</html>
