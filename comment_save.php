<?php
    include_once "conn.php";

    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $parent_id = $_POST['parent_id'];

    $sql = "INSERT INTO tbl_comment (username, comment, parent_id) VALUES('".$name."', '".$comment."', '".$parent_id."')";
    
    if($obj->run->query($sql)===TRUE){
        $data = array(
            'return' => 'Value Inserted'
        );
    } else{
        $data = array(
            'return' => 'Error Occured'
        );
    }
    
    echo json_encode($data);
?>