<?php

$title = $_POS['listTitle'];
$id = $_POST['listID'];

if(!is_numeric($id))
    return false;

if(updateListName($title, $id)) {
    return true;
} else {
    return false;
}

?>