<?php
require_once 'includes/dbconnection.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    
    $table=$_POST['table'];
    $title=mysqli_real_escape_string($conn, $_POST['title']);
    $content=mysqli_real_escape_string($conn, $_POST['content']);
    
    if(isset($_POST['id'])){
        
        $id = $_POST['id'];
         $query="Update $table set title='$title', content='$content' where content_id='$id'";
    
    $result=mysqli_query($conn, $query);
        
        
    } else {
    
    //print_r($_POST);
    $query="insert into $table (title,content) values ('$title','$content')";
    
    $result=mysqli_query($conn, $query);
        
        }
       
       
    if($result){
        //echo'inserted';
        header ('location: index.php?page=pages&type=success');
    }else{
        //echo'not inserted';
        header ('location: index.php?page=pages&type=failed');
    }
        
    
}

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_GET['table'])) {
        $table = $_GET['table'];
        $id = $_GET['delete'];
        $query = 'delete from ' . $table . ' where ' . $table . '_id=' . $id . '';

        $result = mysqli_query($conn, $query);

        if ($result) {
            header ('location: index.php?page=pages&type=deleted');
            //echo 'deleted';
        } else {
            header ('location: index.php?page=pages&type=notdeleted');
            //echo 'failed';
        }

    }

}



?>