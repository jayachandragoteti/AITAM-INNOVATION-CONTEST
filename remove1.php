<?PHP 
include "db_connection.php";

if(isset($_GET['p'])){
    $id=$_GET['p'];
    $update="UPDATE `cat1_register`SET `cat1_register`.`remove_satus`='removed' WHERE `sno`= '$id'";
    $sql=mysqli_query($connect,$update);
    if($sql){
        echo "<script>alert('Removed successfully')</script>";
        echo "<script>window.location='dashboard.php';</script>";

    }else{
        echo "<script>alert('Faild')</script>";
        echo "<script>window.location='dashboard.php';</script>";
    }
}
if(isset($_GET['q'])){
    $id2=$_GET['q'];
    $update2="UPDATE `cat2_register`SET `cat2_register`.`remove_satus`='removed' WHERE `sno`= '$id2'";
    $sql2=mysqli_query($connect,$update2);
    if($sql2){
        echo "<script>alert('Removed successfully')</script>";
        echo "<script>window.location='dashboard.php';</script>";

    }else{
        echo "<script>alert('Faild')</script>";
        echo "<script>window.location='dashboard.php';</script>";
    }
}
if(isset($_GET['r'])){
    $id3=$_GET['r'];
    $update3="UPDATE `cat3_register`SET`remove_satus`='removed' WHERE `sno`= '$id3'";
    $sql3=mysqli_query($connect,$update3);
    if($sql3){
        echo "<script>alert('Removed successfully')</script>";
        echo "<script>window.location='dashboard.php';</script>";

    }else{
        echo "<script>alert('Faild')</script>";
        echo "<script>window.location='dashboard.php';</script>";
    }
}
 
 
?>