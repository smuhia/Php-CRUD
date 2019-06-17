<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 6/12/19
 * Time: 10:33 AM
 */
if (isset($_POST['btnupdate'])){
    $recieved_id= $_POST['x'];
    $recieved_name =$_POST['y'];
    $recieved_email= $_POST['z'];
    $recieved_pass= $_POST['pwd'];


    //connect to the database
    $con= mysqli_connect("localhost","root","","may_system");
    //check if connection is good

    if (!$con){
        echo "connection failed";

    }else{
        //proceed to a update the database
        //start by creating the update query
        $updateQuery="UPDATE `majina_` SET jina='$recieved_name',arafa='$recieved_email',siri='$recieved_pass'WHERE id='$recieved_id'";
        //check if the query is correct
        if (!$updateQuery){
            echo "error on the update query";

        }else{
            //proceed to final update
            $update= mysqli_query($con,$updateQuery);
            //check if update was succcesful
            if (!$update){
                echo "updating failed";

            }else{
                echo "record updated successfully";
                header('location:viewUsers.php');
            }
        }


    }
}



?>

