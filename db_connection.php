<?php


$servername = "u818699652_online_store";
$username = "u818699652_online_dev";
$password = "uU818699652_";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

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