<?php
include_once 'connection.php';
global $conn;
if (isset($_GET['DeleteID']) && !empty($_GET['DeleteID'])) {
    $id = $_GET['DeleteID'];
    $sql = "DELETE FROM blog WHERE ID=?";
    $result = $conn->prepare($sql);
    $result->bindValue(1,$id);
    $result->execute();
    if ($result->rowCount()>=1) {
        header('location:panel.php?display_blog=ok');
    } else {
        return false;
    }
}

?>