<?php
    // require_once('../model/userModel.php');

    // $keyword = $_REQUEST['keyword'];
    // $date = $_REQUEST['date'];
    // $event_type = $_REQUEST['type'];

   
    //     $arg = ['event_name'=>$keyword, 'event_type'=>$date, 'event_date'=>$event_type];
    //     $events = searchEvents($arg);
?>
<?php
require_once('../model/userModel.php');

// Retrieve search parameters from POST data
$searchElement = isset($_POST['searchElement']) ? $_POST['searchElement'] : '';
$data = json_decode($searchElement);

// Extract search parameters
$keyword = isset($data->keyword) ? $data->keyword : '';
$date = isset($data->date) ? $data->date : '';
$type = isset($data->type) ? $data->type : '';

// Perform search and retrieve events
$arg = ['event_name' => $keyword, 'event_type' => $type, 'event_date' => $date];
$events = searchEvents($arg);

// Return JSON response
header('Content-Type: application/json');
echo json_encode($events);
?>
