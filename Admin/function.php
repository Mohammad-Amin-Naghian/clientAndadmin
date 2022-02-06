<?php

include_once 'connection.php';

function update_blog($id)
{
    if (isset($_POST['btn_blog_update'])) {
        global $conn;
        $sql_update_blog = "UPDATE blog SET title=?,link=?,Description=? WHERE ID=?";
        $result = $conn->prepare($sql_update_blog);
        $result->bindValue(1, $_POST['title_txt_update']);
        $result->bindValue(2, $_POST['link_txt_update']);
        $result->bindValue(3, $_POST['Description_update']);
        $result->bindValue(4, $id);
        $result->execute();
        if ($result->rowCount() >= 1) {
            return $result;
        } else {
            return false;
        }
    }
}

function Read_Blog($id)
{
    global $conn;
    $sql_select = "SELECT * FROM blog WHERE ID=?";
    $result_select = $conn->prepare($sql_select);
    $result_select->bindValue(1,$id);
    $result_select->execute();
    $row = $result_select->fetch(PDO::FETCH_ASSOC);
    if ($result_select->rowCount()>=1) {
        return $row;
    } else {
        return false;
    }
}
function Read_Media($id)
{
    global $conn;
    $sql_select = "SELECT * FROM media WHERE ID=?";
    $result_select = $conn->prepare($sql_select);
    $result_select->bindValue(1,$id);
    $result_select->execute();
    $row = $result_select->fetch(PDO::FETCH_ASSOC);
    if ($result_select->rowCount()>=1) {
        return $row;
    } else {
        return false;
    }
}

function update_media($id)
{
    if (isset($_POST['btn_media_update'])) {
        global $conn;
        $sql_update_media = "UPDATE media SET title=?,Description=? WHERE ID=?";
        $result = $conn->prepare($sql_update_media);
        $result->bindValue(1, $_POST['title_TXT_update']);
        $result->bindValue(2, $_POST['Description_update_TXT']);
        $result->bindValue(3, $id);
        $result->execute();
        if ($result->rowCount() >= 1) {
            return $result;
        } else {
            return false;
        }
    }
}


?>