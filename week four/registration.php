<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
</head>

<body>

    <h2>Registration Form</h2>

    <form method="POST">

        <label>Enter Full Name:</label><br>
        <input type="text" name="fullname" required>
        <br><br>

        <label>Enter Password:</label><br>
        <input type="password" name="password" required>
        <br><br>

        <label>Select Gender:</label><br>
        <input type="radio" name="sex" value="Male" required>
        Male

        <input type="radio" name="sex" value="Female">
        Female
        <br><br>

        <label>Your Comment:</label><br>
        <textarea name="comment" cols="30" rows="6"></textarea>
        <br><br>

        <button type="reset">Reset Form</button>

        <button type="submit" name="register">
            Register
        </button>

    </form>

    <?php
    if (isset($_POST['register'])) {

        $fullname = htmlspecialchars(
            trim($_POST['fullname']),
            ENT_QUOTES,
            'UTF-8'
        );

        $password = $_POST['password'];

        $sex = htmlspecialchars(
            $_POST['sex'],
            ENT_QUOTES,
            'UTF-8'
        );

        $comment = htmlspecialchars(
            trim($_POST['comment'] ?? ''),
            ENT_QUOTES,
            'UTF-8'
        );

        echo "<h3>Registration Successful!</h3>";

        echo "Full Name: " . $fullname . "<br>";

        echo "Password: Your password was received.<br>";

        echo "Gender: " . $sex . "<br>";

        echo "Comment: " . nl2br($comment);
    }
    ?>

if (!empty($ost))

</body>
</html>