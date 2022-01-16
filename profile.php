<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("location: index.php");
    exit();
};

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <style>
        .container {
            max-width: 600px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-3"><?= $_SESSION['user']['username'] ?> (Twice)</h1>

        <?php if (isset($_GET['error'])) : ?>
            <div class="alert alert-warning">
                Cannot Upload Photo!
            </div>
        <?php endif; ?>

        <?php if (file_exists('_actions/photos/profile.jpg')) : ?>
            <img class="img-thumbnail mb-3 " src="_actions/photos/profile.jpg" alt="pp" width="400">
        <?php endif; ?>

        <form action="_actions/upload.php" method="post" enctype="multipart/form-data">
            <div class="input-group mb-3">
                <input type="file" name='photo' class="form-control">
                <button type="submit" class="btn btn-secondary">Upload</button>
            </div>
        </form>
        <ul class="list-group">
            <li class="list-group-item">
                <b>Email:</b> sana@gmail.com
            </li>
            <li class="list-group-item">
                <b>Phone:</b> (09) 243 867 645
            </li>
            <li class="list-group-item">
                <b>Address:</b> No. 969, Sana Street, Okasa City ,Japan
            </li>
        </ul>
        <br>
        <a href="_actions/logout.php">Logout</a>
    </div>
</body>

</html>