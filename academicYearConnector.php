<?php 
    include_once 'db.php';
    $query ="SELECT AcademicYearID,AcademicYearEN FROM tblacademicyear";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>