<?php
function update($student_ids) {
    global $connection;
    header('Content-type: application/json');
    $encodedArray = json_encode($student_ids);
    $encodedArray = json_decode($encodedArray);
    $tempArray = array();
    foreach($encodedArray->removingIds as $key) {
        array_push($tempArray, intval($key));
    }
    $sum = intval($encodedArray->sum);
    $tempArray = implode(', ', $tempArray);
    if( mysqli_query($connection, "UPDATE dano SET deposit = (SELECT SUM(deposit + $sum)) WHERE id IN($tempArray)")    ) {
    print json_encode(array("success" => 1));
    }else {
      mysqli_error($connection);
    }
    exit();
}

?>