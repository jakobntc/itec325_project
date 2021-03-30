<?php 
require_once("utils/utils.php"); 
require_once("utils/constants.php"); 
?>

<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<form method="post">

    <!-- First row in the form. -->
    <div class="form-row">
        <div class="form-group col-sm">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Joe.Shmo">
        </div>
        <div class="form-group col-sm">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group col-sm">
            <label for="passwordConfirmation">Confirm Password</label>
            <input type="password" class="form-control" id="passwordConfirmation" name="passwordConfirmation">
        </div>
    </div>

    <!-- Second row in the form. -->
    <div class="form-row">
        <div class="form-group col-sm">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="firstName" name="firtName" placeholder="Joe">
        </div>
        <div class="form-group col-sm">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Shmo">
        </div>
    </div>

    <!-- Third row in the form. -->
    <div class="form-row">
        <div class="form-group col">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="joe.shmo@example.com">
        </div>
    </div>

    <!-- Fourth row in the form. -->
    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="validCheck" name="validCheck" value="acceptedFate" required>
            <label class="form-check-label" for="validCheck">
                Agree to the <a href="#">terms and conditions</a>
            </label>
        </div>
    </div>
    <input class="btn btn-primary" type="submit">Submit Form</button>
</form>
</body>

</html>
