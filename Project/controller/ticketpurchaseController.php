<?php
    session_start();
    require_once('../model/userModel.php');

    $customer= $_COOKIE['flag'];

    $eventname= $_REQUEST['event_name'];
    $tickettype= $_REQUEST['ticket_type'];
    $quantity= $_REQUEST['quantity'];
    $discount= $_REQUEST['discount_coupon'];

    $getname= getAnUser($customer);
    $getamount= getEventAmountByName($eventname);

    if($tickettype === "VIP Pass"){
        $getamount = ($getamount + ($getamount * 0.75));  //75% extra
    } 
    if($discount === "DMRS50"){
        $getamount = ($getamount - ($getamount * 0.50));  //50% OFF
    } 
    else if($discount === "DMRS50" && $tickettype === "VIP Pass"){

        $getamount = (($getamount + ($getamount * 0.75))/2);  //include 75% then exclue 50%
    }  

    $totalAmount= ($quantity * $getamount);
    

    $name=  $getname[0]['name'];

    

    $_SESSION['eventname'] = $eventname;
    $_SESSION['totalamount'] = $totalAmount;
    //$_SESSION['discountamount'] = $discountAmount;

    $tickets= ['customer_name'=>$name, 'event_name'=> $eventname, 'ticket_type'=> $tickettype, 'quantity'=> $quantity, 'discount_coupon'=> $discount, 'username'=>$customer];
    $status= createTicketsell($tickets);

    if($status){
        //echo "Purchase successful.";
        header('location: ../view/payment.php');
    }else{
        echo "<script>alert('Purchase Failed! Please try again.');</script>";
    } 
?>