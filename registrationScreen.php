<?php 
require_once("utils.php"); 
require_once("constants.php"); 
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Our website name</title>
        <link rel='stylesheet' href='style.css'>
    </head>

    <body>
        <h1>OUR WEBSITE REGISTRATION PAGE</h1></br>
        <form method='post'>
            <label for='username'>Username:</label>
            <input style='font-size:15px;' type='text' name='username' id='username'></input></br>
            <label for='password'>Password:</label>
            <input type='text' name='password' id='password'></input>
            <label for='passwordCon'>Confirm password:</label>
            <input type='text' name='passwordCon' id='passwordCon'></input></br></br>
            <label for='prefix'>Prefix:</label>
            <?php echo dropdown( "prefix"
                               , $prefixs
                               ); ?>
            <label for='fName'>First name:</label>
            <input type='text' name='fName' id='fName'></input>
            <label for='lName'>Last name:</label>
            <input type='text' name='lName' id='lName'></input></br></br>
            <label for='email'>Email:</label>
            <input type='text' name='email' id='email'></input></br>
            <input type='submit' value='submit'></input>
        </form>
    </body>
</html>
