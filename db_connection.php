<?php


$servername = "localhost";
$username = "u818699652_online_dev";
$password = "uU818699652_";
$database = "u818699652_online_store";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    ?>
    <div class="alert alert-error">
        <?php
        die("Connection failed: " . mysqli_connect_error());
        ?>
    </div>
    <?php
}
?>