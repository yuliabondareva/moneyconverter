<?php

if (isset($_POST['hide'])) {
    $id = $_POST['id'];
    mysqli_query($db, "UPDATE `currencies` SET flag = '0' WHERE id='$id'");
}