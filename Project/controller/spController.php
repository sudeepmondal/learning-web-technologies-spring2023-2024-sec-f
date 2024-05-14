<?php

require_once('../model/userModel.php');
require_once('validations.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $role = $_POST['role'] ?? '';
    $name = $_POST['name'] ?? '';
    $bio = $_POST['bio'] ?? '';

    // Validation
    if (empty($role) || empty($name) || empty($bio)) {
        $response = array(
            "status" => "error",
            "message" => "All fields are required"
        );
        echo json_encode($response);
        exit;
    }

    // Perform necessary backend logic (e.g., saving data to the database)
    $data = ['role' => $role, 'name' => $name, 'bio' => $bio];
    $status = createSP($data);

    if ($status) {
        // Assuming the operation is successful
        $response = array(
            "status" => "success",
            "data" => array(
                "role" => $role,
                "name" => $name,
                "bio" => $bio
            )
        );
    } else {
        // If there was an error saving the data
        $response = array(
            "status" => "error",
            "message" => "Failed to save data"
        );
    }

    echo json_encode($response);
} else {
    // If the request method is not POST
    $response = array(
        "status" => "error",
        "message" => "Invalid request"
    );

    echo json_encode($response);
}
?>
