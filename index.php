<?php 
if (!session_start()) {
    session_start();
}

$page_title = "LMS";
$directory = '';
if (isset($_SESSION['level']) && isset($_SESSION['username'])) {

    if ($_SESSION['level'] == 99 || $_SESSION['level'] == 3) {
        $directory = 'admin';
        $page_title .= " - Admin";
    } else if ($_SESSION['level'] == 2) {
        $directory = 'teacher';
        $page_title .= " - Teacher";
    } else if ($_SESSION['level'] == 1) {
        $directory = 'student';
        $page_title .= " - Student";
    } else {
        $directory = '/';
    }
} else {
    $directory = '/';
}

if (isset($_REQUEST['page'])) {
    $page = $_REQUEST['page'];

} else {
    $page = 'home';
}


if ($directory == '/') {
    require_once 'includes/header.php';
    require_once 'includes/navigation.php';
    include 'pages/' . $page . '.php';

    
  

} else {
    require_once 'includes/shared_header.php';

    require_once 'includes/shared_navigation.php';

}

include('includes/footer.php');


?>


