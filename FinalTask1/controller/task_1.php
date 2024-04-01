<?php
require_once("EmployeeModel.php");

$action = $_GET['action'];
$employeeModel = new EmployeeModel();

if ($action == 'registerEmployee') {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $response = $employeeModel->registerEmployee($name, $contact, $username, $password);
    echo $response;
} 
elseif ($action == 'updateEmployee') {
    $search_username = $_POST['search_username'];
    $new_name = $_POST['new_name'];
    $new_contact = $_POST['new_contact'];
    $new_password = $_POST['new_password'];
    
    $response = $employeeModel->updateEmployee($search_username, $new_name, $new_contact, $new_password);
    echo $response;
} 
elseif ($action == 'deleteEmployee') {
    $delete_username = $_POST['delete_username'];
    
    $response = $employeeModel->deleteEmployee($delete_username);
    echo $response;
}
?>
