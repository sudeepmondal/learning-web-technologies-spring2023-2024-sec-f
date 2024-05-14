<?php
    require_once('../model/userModel.php');

    $id = $_REQUEST['id'];


    deleteVenue($id);


    //     if($status){
    //         echo "<script>alert('Update successful');</script>";
    //         echo "<script>window.location.href='../view/venuelistMGT.php';</script>";
    //         exit;
    //     }

?>