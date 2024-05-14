<?php
    require_once('../model/userModel.php');

    $id = $_REQUEST['id'];


    deleteSP($id);


    //     if($status){
    //         echo "<script>alert('Update successful');</script>";
    //         echo "<script>window.location.href='../view/splistMGT.php';</script>";
    //         exit;
    //     }

?>