<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 6/12/19
 * Time: 9:51 AM
 */
//connect to db
$con= mysqli_connect("localhost","root","","may_system");
//check if the connection was succesful

if (!$con){
    echo "connection failed";

}else{
    //proceed to deleting
    //start by checking if the delete has been clicked
    if (isset($_GET['id_yangu'])){
        $recieve_id =$_GET['id_yangu'];
        //create delete query
        $deleteQuery ="DELETE FROM `majina_` WHERE id=$recieve_id";
        //complete by deleting
        $delete= mysqli_query($con,$deleteQuery);

        //check if query is working
        if (!$delete){
            echo "deleting failed ";

        }else{
            echo "record deleted successfully";
            header('location:viewUsers.php');
        }
    }
}


?>