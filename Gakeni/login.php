<?php

    session_start();

    $username = "gakenii"; /* Hard coded username */
    $password = '$2y$10$slADyjMk2DPezaBPbjrEletBXxOgoU00xs7xuwyVar0G.Obewm8ei'; /* Hard coded password ( 123456 ) */

    if (isset($_POST['login'])) /* Check if login button was clicked */
    {
        // echo "Login button was clicked";

        $_POST['uname'] = htmlspecialchars($_POST['uname']); /* Wrap in special char function */
        $_POST['pass'] = htmlspecialchars($_POST['pwd']);

        if ( !empty($_POST['uname']) && !empty($_POST['pwd']) ) /* check if both values are not empty */
        {
            // echo $_POST['uname'] . "<br>";
            // echo $_POST['pwd'];

            if ($_POST['uname'] ==  $username)
            {
                // Username is correct

                if (password_verify($_POST['pwd'], $password))
                {
                    // Password is correct

                    $_SESSION['uname'] = $_POST['uname'];
                    $_SESSION['logged_in'] = true;
                    
                    header("Location: user.php");

                    echo "Login successful";
                }
                else
                {
                    echo "Invalid password";
                }
            }
            else
            {
                echo "Invalid username";
            }

        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
</head>
<body>

    <style>

        body
        {
            background-color: #f1f1f1;
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 90vh;
        }

        form
        {
            width: 300px;
            margin: 0 auto;
            background-color: #2fa4e7;
            padding: 100px;
            margin-top: 20px;

        }

        input
        {
            width: 100%;
            padding: 20px 50px;
            margin: 5px 0;
            box-sizing: border-box;
        }

        button
        {
            cursor: pointer;
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
            background-color: #000;
            color: #fff;
            border: none;
        }
    </style>
    
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" autocomplete="off" method="POST">

        <input type="text" placeholder="username" autocomplete="off" name="uname">

        <input type="password" placeholder="password" autocomplete="off" name="pwd">

        <button type="submit" name="login"> Login </button>

    </form>


</body>
</html>