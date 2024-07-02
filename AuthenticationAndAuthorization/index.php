<?php
    session_start();
    if(!isset($_SESSION['user_id'])){
        header('Location: ./login.php');
    }
    $qry="SELECT * FROM numl_users where id='".$_SESSION['user_id']."'";
    require_once ('./db.config.php');
    $db = new Database();
    $result = $db->execQuery($qry);
    $row = $result->fetch_assoc();
    echo 'Welcome '.$row['name'].'Your are logged in. Thank you.<br>';
    echo "<a href='./logout.php'>logout</a>";
?>