<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation</title>
</head>
<body>
    <?php
        if(isset($_GET['error'])){
            $error=$_GET['error'];
            if($error=='missing-values'){
                echo '<strong style="color:red">Introduce all datas</strong>';
            };
        };
    ?>
    <h1>Form validation</h1>
    <form action="process-form.php" method="post">
        <p><label>Name: <input type="text" name="name" required pattern="[A-Za-z]+"></label></p>
        <p><label>Last Name: <input type="text" name="lastName" required pattern="[A-Za-z]+"></label></p>
        <p><label>Old: <input type="number" name="old" pattern="[0-9]+"></label></p>
        <p><label>Mail: <input type="email" name="email" required></label></p>
        <p><label>Password: <input type="password" name="password" required></label></p>
        <p><label><input type="submit" value="Submit"></label></p>
    </form>
</body>
</html>