<?php
    require_once('../model/userModel.php');

    $ans = $_REQUEST['radio'];
    $id =  $_REQUEST['pID'];

    if($ans == "Yes")
    {
        $status= deleteProduct($id);

        if($status){
            echo "Delete successful.";
        }else{
            echo "Delete Failed! Please try again.";
        } 
    }else{
        header('location: ../view/plist.php');
    }

?>