
<?PHP 


    include "db_connection.php";
if (isset($_POST['finish'])) {
    $firstname=$_POST['firstname'];
    $surname=$_POST['surname'];
    $phonenumber=$_POST['phonenumber'];
    $alternatenumber=$_POST['alternatenumber'];
    $address=$_POST['address'];
    $district=$_POST['district'];
    $schoolname=$_POST['schoolname'];
    $admno=$_POST['admno'];
    $class=$_POST['class'];
    $topics=$_POST['topics'];

    if ($topics !='' && $class !='' && $admno !='' && $schoolname !='' && $district !='' && $address !='' && $alternatenumber !='' && $_FILES["file"]["name"] !='' && $firstname !='' && $surname !='' ) {
           
          
        
            $proposal_id=$firstname ."_".$surname;
        
            $filename =$_FILES["file"]["name"];
            // get the file extension
            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            // destination of the file on the server & change file name
        
            $destination = 'assets/Category_2_files/'.$proposal_id.".".$extension; 
            //change file name
            $modefide_file_name=$proposal_id.".".$extension;
            // the physical file on a temporary uploads directory on the server
            $file = $_FILES['file']['tmp_name'];
            $size = $_FILES['file']['size'];
        
            if (!in_array($extension,['pdf']))
            {
                echo "<script>alert('You file extension must be .pdf ')</script>";
               echo "<script>window.location='cat2_register.html';</script>";
                //echo "You file extension must be .zip, .pdf or .docx";
            } 
            elseif ($_FILES['file']['size']> 10000000) 
            { // file shouldn't be larger than 1Megabyte
                echo "<script>alert('File too large!')</script>";
                echo "<script>window.location='cat2_register.html';</script>";
              // echo "File too large!";
            } 
            else 
            {
                // move the uploaded (temporary) file to the specified destination
                if (move_uploaded_file($file, $destination))  
                {
                    $sql = "INSERT INTO `cat2_register` (`firstname`, `surname`, `phonenumber`, `alternatenumber`, `address`, `district`, `schoolname`, `admno`, `class`, `topics`, `file`)VALUES ('$firstname','$surname','$phonenumber','$alternatenumber','$address','$district','$schoolname','$admno','$class','$topics','$modefide_file_name')";
                    $query=mysqli_query($connect, $sql);
                            if ($query)
                            {
                                echo "<script>alert('Request submitted successfully ,Thank you')</script>";
                                echo "<script>window.location='index.html';</script>";
                                //echo "Request submitted successfully"; 
                            }
                            else{
                                    echo "<script>alert('Request Failed ')</script>";
                                    echo "<script>window.location='cat2_register.html';</script>";
                                // echo "Request Failed submit." ;
                                }
                }
                else{
                      echo "<script>alert('file name is already exist')</script>";
                      echo "<script>window.location='cat2_register.html';</script>";
                    //echo "file name is already exist"; 
                    }
            }
    } else {
        echo "<script>alert('All fields need to fill')</script>";
       echo "<script>window.location='cat2_register.html';</script>";
    }
    
}else{
    echo "<script>alert('Request Failed Try again')</script>";
    echo "<script>window.location='cat2_register.html';</script>";
}
?>