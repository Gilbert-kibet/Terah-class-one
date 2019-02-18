<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <style>
        body{
            background-color: #0d0604;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
   <form action="usersaveprocess.php" method="GET">
       <legend>
           <a href="viewusers.php">view users</a>
       </legend>
      <input type="text" name="x" placeholder="name" class="form-group" required><br>
       <input type="email" name="y" placeholder="email" class="form-group" required><br>
       <input type="password" name="z" placeholder="password" class="form-group" required><br>
       <input type="submit" name="btnsubmit" value="save" class="btn btn-success">
       <input type="reset" name="btnreset" value="Refresh"class="btn btn-warning">
   </form>

</body>
</html>