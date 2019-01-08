<?php

if (isset($_POST['show'])) {
    $id = $_POST['id'];
    mysqli_query($db, "UPDATE `currencies` SET flag = '1' WHERE id='$id'");
}