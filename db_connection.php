<?php


//$servername = "localhost";
$servername = "infyenterprise.com";
$username = "u818699652_online_store";
$password = "u818699652_Online_Store";
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