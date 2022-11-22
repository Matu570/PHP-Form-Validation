<?php
$error = "missing-values";
if (!empty($_POST['name']) && !empty($_POST['lastName']) && !empty($_POST['old']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $error = "ok";
    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $old = (int)$_POST['old'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // Validate name:
    if (!is_string($name) || preg_match("/[0-9]/", $name)) {
        $error = "Error in the name";
    };
    // Validate Last Name:
    if(!is_string($lastName) || preg_match("/[0-9]/", $lastName)){
        $error = "Error in the last name";
    };
    // Validate Old:
    if(!is_int($old) || !filter_var($old, FILTER_VALIDATE_INT)){
        $error = "Error in the old";
    };
    // Validate Email:
    if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = "Error in the email";
    };
    // Validate Password:
    if(empty($password) || strlen($password)<5){
        $error = "Error in the password";
    };




} else {
    $error = "missing-values";
};

if ($error == "ok") {
    echo "<h1>Data validated successfully</h1>";
    echo "<p>Name: $name</p>";
    echo "<p>Last Name: $lastName</p>";
    echo "<p>Old: $old</p>";
    echo "<p>Email: $email</p>";
};

if ($error != "ok") {
    header("Location:index.php?error=$error");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process Form</title>
</head>

<body>

</body>

</html>