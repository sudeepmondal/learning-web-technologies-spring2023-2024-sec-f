<?php
    require_once('../model/userModel.php');
    require_once('validations.php');

    $id = $_REQUEST['id'];
    $vname = $_REQUEST['venue_name'];
    $location = $_REQUEST['location'];
    $capacity = $_REQUEST['capacity'];

    if($vname == "" || $location == "" || $capacity == ""){
        echo "Null venue name/location/capacity";
    } else {

        $data = ['id'=> $id, 'venue_name'=> $vname, 'location'=>$location, 'capacity'=> $capacity];
        $status = updateVenue($data);
        if($status){
            echo "<script>alert('Update successful');</script>";
            echo "<script>window.location.href='../view/venuelistMGT.php';</script>";
            exit;
        }else{
            echo "<script>alert('Update failed!');</script>";
        }
        
    }
?>