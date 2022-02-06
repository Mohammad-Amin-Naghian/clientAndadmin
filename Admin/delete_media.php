<?php
include_once 'connection.php';
global $conn;
if (isset($_GET['DeletedID']) && !empty($_GET['DeletedID'])) {
    $id = $_GET['DeletedID'];
    $sql = "DELETE FROM media WHERE ID=?";
    $result = $conn->prepare($sql);
    $result->bindValue(1,$id);
    $result->execute();
    if ($result->rowCount()>=1) {
        header('location:panel.php?display_media=ok');
    } else {
        return false;
    }
}

?>