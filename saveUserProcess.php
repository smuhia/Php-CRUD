<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 6/11/19
 * Time: 9:53 AM
 */

if (isset($_GET['btnsave'])){
    $inputedname=$_GET['name'];
    $inputedemail=$_GET['email'];
    $inputedpassword=$_GET['password'];
}

//to save data connect to the db

$con= mysqli_connect("localhost","root","","may_system");
if(!$con){
    echo "Connection Failed";
}else{
    //proceed to save data
    //start by creating the insert query

    $insertquery ="INSERT INTO `majina_`(`id`, `jina`, `arafa`, `siri`) VALUES (null ,'$inputedname','$inputedemail','$inputedpassword')";
    //check if the insert query is correct
    if (!$insertquery){
        echo "error on the insert query";
    }else{
        //proceed to finally write data on the database
        $ingiza=mysqli_query($con,$insertquery);
        //check if the data was saved successfully
        if (!$ingiza){
            echo "saving failed";
        }else{
            echo "saving succcessfully";
            //header('location:saveUser.php');
            echo "<a href='saveUser.php'>------->  Add more people<a/>";
        }
    }

}

?>