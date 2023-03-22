<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
</head>
<body>
    <h2>Login Form</h2>
    <form action="" method="POST">
        <label>Username:</label>
        <input type="text" name="username"><br><br>
        <label>E-mail:</label>
        <input type="email" name="email"><br><br>
        <label>Password:</label>
        <input type="password" name="password"><br><br>
        <input type="submit" name="submit" value="Login"><br><br>
    </form>
    <?php
    //Check if the form has been submitted
    if(isset($_POST['submit'])){
        //Retrieve the user's input
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        //Varidate the user's credentials
        if($username == 'admin' &&
           $email == 'gitoliremy@gmail.com' && 
           $password == 'admin@123'){

            //Start a new session
            session_start();

            //Set session variables
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;

            //Redirect the user to the homepage
            header('Location: homepage.php');
        } else {
            //Display an error message
            echo "<p>Invalid username or password.</p>";
        }
    }
    ?>
</body>
</html>