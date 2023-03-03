<!DOCTYPE html>
<html>
<title>Validation</title>
<link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/1603/1603757.png" type="image/x-icon">
<style>
    form{
        border: 2px solid blue;
        width: 400px;
        padding: 10px;
        display: grid;
        place-items: center;
    }
    div {
        text-align: center;
    }
    p{
        text-align: center;
    }
    .validate{
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #firstname{ 
        width: 197px;
        padding: 10px 20px;
        margin: 8px 0;
        display: inline-block;
        border-radius: 2px;
        box-sizing: border-box;
    }
    #lastname{
        width: 197px;
        padding: 10px 20px;
        margin: 8px 0;
        display: inline-block;
        border-radius: 2px;
        box-sizing: border-box;
    }
    

    .submit{
        width: 400px;
        background-color:#4AA02C;;
        color: white;
        padding: 12px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 2px;
        cursor: pointer;
    }

    .submit :hover {
        background-color: #45a049;
    }
    #email {
        width: 400px;
        padding: 10px 20px;
        margin: 8px 0;
        display: inline-block;
        border-radius: 2px;
        box-sizing: border-box;
    }
    #password {
        width: 400px;
        padding: 10px 20px;
        margin: 8px 0;
        display: inline-block;
        border-radius: 2px;
        box-sizing: border-box;
    } 
</style>

<body>
<div class="validate">
    <form action="" method="post">
        <input type="text" placeholder="Work Email" name="email" id="email"> <br> 
        <label for="">
            <input type="text" placeholder="First Name" name="fname" id="firstname">
            <input type="text" placeholder="Last Name" name="lname" id="lastname">
        </label> <br> 
        <input type="text" placeholder="Password" name="password" id="password"> <br> 
        <input type="submit" value="Sign Up" class="submit">
    </form>
    </div>
    <?php
    error_reporting(0);
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["email"])) {
            echo "<div style='color:red;'>Error: Email must fill.</div> <br>";
        } else {
            $email = $_POST["email"];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<div style='color:red;'>Error: Incorrect Email .</div> <br>";
            } else {
                echo "<p>Email : $email</p> ";
            }
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["fname"])) {
            echo "<div style='color:red;'>Error: First Name must fill </div> <br>";
        } elseif (!preg_match("/^[a-zA-Z ]*$/", $firstname)) {
            echo "<div style='color:red;'>Error: Incorrect First Name .</div> <br>";
        } else {
            echo "<p>First Name : $firstname</p> ";
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["fistname"]) && empty($_POST["lastname"])) {
            echo "<div style='color:red;'>Error: Last Name must fill </div> <br>";
        } elseif (!preg_match("/^[a-zA-Z ]*$/", $lastname)) {
            echo "<div style='color:red;'>Error: Incorrect Last Name .</div> <br>";
        } else {
            echo "<p>Last Name : $lastname</p> ";
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $partten = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
        $password = $_POST["password"];
        if (empty($_POST["password"])) {
            echo "<div style='color:red;'>Error: Password must fill.</div> <br>";
        }elseif(!empty($_POST["password"])){
            echo "<p>Password :$password</p>" ; 
        }
         else {
            if (!preg_match($partten, $_POST["password"])) {
                echo "<div style='color:red;'>Error: Incorrect Password .</div> <br>";
            }
        }
        
    }
    ?>
</body>

</html>