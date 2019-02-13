<?php 
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

require_once 'includes/dbconnection.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if ($_POST['form_name'] == 'subject') {


        if (isset($_POST['subject_id'])) {

            extract($_POST);

            $query = "update subject set subject_code='$subject_code', subject_title='$subject_title', category='$category', description='$description', 
             unit='$unit', 
             Pre_req='$Pre_req', 
             semester='$semester' where subject_id=$_POST[subject_id]";

          //  echo $query;

            $result = mysqli_query($conn, $query);




        } else {
            extract($_POST);

            $query = "Insert into subject (subject_code, subject_title, category, description, unit, Pre_req, semester) 
             values ('$subject_code', '$subject_title', '$category', '$description', '$unit', '$Pre_req', '$semester')";

            //echo $query;

            $result = mysqli_query($conn, $query);

        }

        if ($result) {
            echo "success";
            //header('Location: index.php?page=subjects&type=success');
        } else {
            echo "failed";
    //                    header('Location: index.php?page=subjects&type=error');

        }




    }







} else {
    echo 'failed';
}

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_GET['table'])) {
        $table = $_GET['table'];
        $id = $_GET['delete'];
        $query = 'delete from ' . $table . ' where ' . $table . '_id=' . $id . '';

        $result = mysqli_query($conn, $query);

        if ($result) {
            echo 'deleted';
        } else {
            echo 'failed';
        }

    }

}



?>