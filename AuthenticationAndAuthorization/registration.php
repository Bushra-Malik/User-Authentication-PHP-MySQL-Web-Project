<?php
    session_start();
    if(isset($_SESSION['user_id'])){
        header('location: ./index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUML User Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <div class="w-50 mx-auto">
        <h1 class="mb-4 text-center">NUML User Registration</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="example@abc.com" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">User Name</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Unique User Name" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Profile Image</label>
                <input type="file" name="image" class="form-control" id="image" required>
            </div>
            <div class="mb-3">
                <button type="submit" name="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
        <p class="text-center">Already Registered? <a href="./login.php">Login Now!</a></p>
    </div>
</div>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $target_dir = "./images/profile_images/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){
        echo "image uploaded successfully";
    }
    require_once("./db.config.php");
    $qry = "INSERT INTO numl_users (name, email, password, username, image) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['password']."','".$_POST['username']."','".$target_file."')";
    $db = new Database();
    if($db->execQuery($qry)){
        header('Location: ./login.php');
    }
    else {
        echo "
                <div class=\"alert alert-warning\" role=\"alert\">
                    Error: Try again later.
                </div>
            ";
    }
}
?>
