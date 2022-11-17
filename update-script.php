<?php

include('connection/database.php');


if(isset($_GET['edit'])){

    $id= $_GET['edit'];
  $editData= edit_data($conn, $id);
}

if(isset($_POST['update']) && isset($_GET['edit'])){

  $id= $_GET['edit'];
    update_data($conn,$id);
    
    
} 
function edit_data($conn, $id)
{
 $query= "SELECT * FROM fruits WHERE id= $id";
 $exec = mysqli_query($conn, $query);
 $row= mysqli_fetch_assoc($exec);
 return $row;
}

// update data query
function update_data($conn, $id){

    $name= legal_input($_POST['name']);
      $classification= legal_input($_POST['classification']);
      $description = legal_input($_POST['description']);

      $query="UPDATE fruits 
            SET name='$name',
                classification='$classification',
                description= '$description'
                WHERE id= $id";

      $exec= mysqli_query($conn,$query);
  
      if($exec){
         header('location:list.php');
      
      }else{
         $msg= "Error: " . $query . "<br>" . mysqli_error($conn);
         echo $msg;  
      }
}

// convert illegal input to legal input
function legal_input($value) {
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;
}
?>