<?php
    include_once "conn.php";
    $output = '';

    $sql = "SELECT * FROM tbl_comment WHERE parent_id = 0  ORDER BY id DESC";
    $result = $obj->run->query($sql);

    while($row = $result->fetch_assoc()){
        $output .= '
                <div class="card" style="margin-bottom: 20px;">
                    <div class="card-body">
                        <h5 class="card-title">'.$row['username'].'</h5>
                        <p class="card-text">'.$row['comment'].'</p>
                        <a href="#" class="reply card-link btn btn-info btn-sm" id="'.$row['id'].'">Reply</a>      
                    </div>
                </div>
            ';

        $output .= fetch_reply($obj, $row['id']);
    }

    echo $output;

    function fetch_reply($obj, $parent_id = 0, $marginleft = 0){
        $sql = "SELECT * FROM tbl_comment WHERE parent_id = '".$parent_id."' ";
        $result = $obj->run->query($sql);
        $count = $result->num_rows;
        $output = '';
        if($parent_id == 0){
            $marginleft = 0;
        } else{
            $marginleft = $marginleft + 30;
        }

        if($count > 0){
            while($row = $result->fetch_assoc()){
                $output .= '
                    <div class="card" style="margin-bottom: 20px; margin-left: '.$marginleft.'px;">
                        <div class="card-body">
                            <h5 class="card-title">'.$row['username'].'</h5>
                            <p class="card-text">'.$row['comment'].'</p>
                            <a href="#" class="reply card-link btn btn-info btn-sm" id="'.$row['id'].'">Reply</a>      
                        </div>
                    </div>
                ';

                $output .= fetch_reply($obj, $row['id'], $marginleft);
            }
        }
        return $output;
    }
?>