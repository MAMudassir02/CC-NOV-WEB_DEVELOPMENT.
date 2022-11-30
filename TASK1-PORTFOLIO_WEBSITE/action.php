<?php


    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
   
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $message = $_POST['message'];
   
    $sql = "INSERT INTO `message`.`message` (`name`, `phone`, `email`, `city`, `message`) VALUES ('$name', '$phone', '$email', '$city', '$message');";
    

    
    $con->query($sql);
       
    

    $con->close();

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <div class="thanxcard">
        <div class="card text-center">
            <div class="card-header">
                <h5 class="card-title">Thank you</h5>
                <p class="card-text">I have recieved your message. I will get back to you very soon through your email.<br> In the meantime make sure to follow me on my social media </p>
                <a href="index.html" class="btn btn-primary">back</a>
            </div>
            

    </div>
</body>

</html>