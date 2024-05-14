<?php

if(!isset($_COOKIE['flag'])){
    header('location: ../view/signin.php');
}

session_start();
if(!isset($_SESSION['eventname'])) {
    header('location: ../view/purchaseTicket.php');
}
require_once('../model/userModel.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['amount'], $_POST['event_dropdown'], $_POST['bkash_number'])) {
        $amount = $_POST['amount'];
        //$event_id = $_POST['event_dropdown']; // Assuming the value of the option is the event ID
        $bkash_number = $_POST['bkash_number'];
        
        // Retrieve event name based on event ID
        //$event_name = getEventNameById($event_id);
        $event_name = $_POST['event_dropdown'];
        $username = $_COOKIE['flag'];
        
        if (makePayment($amount, $event_name, $bkash_number, $username)) {
            session_destroy();
            // echo "<script>alert('Payment successful');</script>";
            // header("Location: ../view/dashboardCustomer.php");

            echo "<script>alert('Payment successful');</script>";
            echo "<script>window.location.href='../view/customer_home.php';</script>";
            exit;
        } else {
            echo "<script>alert('Payment failed!');</script>";
        }
    } else {
        echo "<script>alert('Error: One or more required fields are missing.');</script>";
    }
}
?>
