<?php
    session_start();
    if(isset($_SESSION['user_id'])){
        header('location: ./index.php');
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>NUML User Login</title>
</head>
<body>
<div class="container mt-5">
    <div class="w-50 mx-auto">
    <h1>
        NUML User Login
    </h1>
    <form action="" method="post">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="example@abc.com">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
<!--        <div class="mb-3">-->
<!--            <label for="username" class="form-label">User Name</label>-->
<!--            <input type="username" name="username" class="form-control" id="Unique User Name">-->
<!--        </div>-->
        <div class="mb-3">
            <input type="Submit" name="submit" class="btn btn-primary" value="Login">
        </div>
    </form>

    <a href="./registration.php">Haven't Registered Yet? Register Now!</a>
</div></div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $qry = "SELECT * FROM numl_users WHERE email='".$_POST['email']."' and password='".$_POST['password']."'";
    require_once("./db.config.php");
    $db = new Database();
    $result = $db->execQuery($qry);
    $row=$result->fetch_assoc();
    if($row){
//        session_start();
        $_SESSION['user_id'] = $row['id'];
        header('location: ./index.php');
    } else {
        echo "Credentials mismatch: Try Again :(";
    }

    echo $_SESSION['user_id'];
}
?>