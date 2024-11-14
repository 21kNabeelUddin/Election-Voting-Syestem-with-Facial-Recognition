<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>National Assembly Seat Results</title>
</head>
<body>

<?php
include 'connection.php';
if(isset($_GET['seat_id'])) {
    $seat_id = $_GET['seat_id'];
    
    // Write seat ID to text file
    $file = fopen("SEAT_NA.txt", "w");
    fwrite($file, $seat_id);
    fclose($file);
}
?>
<div class="result-container">
    <h1>Results for National Assembly Seat <?php echo $seat_id; ?></h1>
</div>

</body>
</html>
