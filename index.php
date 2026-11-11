<!DOCTYPE html>
<html>
<head>
    <title>PHP Form</title>
</head>
<body>

<?php
  if(isset($_POST['create']))
        {
            echo "submitted";

        }
    ?>

<form action="" method="POST">

    <label>Your Name</label><br>
    <input type="text" name="username" required><br><br>

    <label>Your Email</label><br>
    <input type="email" name="email" required><br><br>

    <input type="submit" value="Submit">

</form>

</body>
</html>