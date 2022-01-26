<?php
include('db.php');
extract($_POST);
if(isset($_POST['readRecords'])){
       $data = '<table class="table table-bordered table-striped">
                    <tr>
                    <td>Sno.</td>
                    <td>name</td>
                    <td>email</td>
                    <td>gender</td>
                    <td>city</td>
                    <td>Action</td>
       
       </tr>';

       $query = "select * from crud";
       $result  =mysqli_query($con,$query);
       if(mysqli_num_rows($result)>0){
           $number = 1;
           while($row = mysqli_fetch_array($result)){
               $data.='<tr>
                    <td>'.$number.'</td>
                    <td>'.$row['name'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.$row['gender'].'</td>
                    <td>'.$row['city'].'</td>
                    <td><button onclick="getUserdetails('.$row['id'].')" data-toggle="modal" data-target="#update_user_model" data-id="'.$row['id'].'" id="btn_edit"  class="btn btn-primary">Edit</button>
                    <button onclick="deleteUsers('.$row['id'].')" class="btn btn-danger">Delete</button></td>
       
       </tr>';
       $number++;
           }
           
       }else{
           echo"data not found";
       }
       $data.='</table>';
           echo $data;
}

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['gender']) && isset($_POST['city'])){
    echo 'cheking';
    $query = "INSERT INTO `crud`( `name`, `email`, `password`, `gender`, `city`) VALUES ('$name','$email','$password','$gender','$city')";
    mysqli_query($con,$query);
}
///delete query 
if(isset($_POST['deleteid'])){
    $deleteid = $_POST['deleteid'];
    //echo $deleteid;die;
    $delquery = "DELETE FROM `crud` WHERE id='$deleteid'";
    //print_r($delquery);die;
    mysqli_query($con,$delquery);
}
//get user id for update the data 
if(isset($_POST['callmethod']) && $_POST['callmethod'] == 'geteditid'){
    $delquery = "SELECT * FROM crud WHERE id = '".$_POST['id']."'";
    //print_r($delquery);die;
    $record = mysqli_query($con,$delquery);
    $data = mysqli_fetch_assoc($record);
    echo json_encode($data);
}
?>