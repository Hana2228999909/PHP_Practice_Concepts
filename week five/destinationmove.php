
<!DOCTYPE html>
<html>
<head>
    <title>Upload Certificate</title>
</head>
<body>

<h2>Upload Certificate</h2>

<form method="post" enctype="multipart/form-data">
    <label>Select Certificate:</label>
    <input type="file" name="scertificate" required>
    <input type="submit" name="submit" value="Upload">
</form>

<?php
if (isset($_POST['submit']) && isset($_FILES['scertificate'])) {

    if ($_FILES['scertificate']['error'] === 0) {

        // File Information
        $name = basename($_FILES['scertificate']['name']);
        $size = $_FILES['scertificate']['size'];
        $type = $_FILES['scertificate']['type'];
        $temp = $_FILES['scertificate']['tmp_name'];

        echo "<h3>File Information</h3>";
        echo "File Name: " . htmlspecialchars($name) . "<br>";
        echo "File Size: " . $size . " bytes<br>";
        echo "File Type: " . htmlspecialchars($type) . "<br>";
        echo "Temporary File Name: " . htmlspecialchars($temp) . "<br>";

        // Destination folder
        $destination = "C:/Users/hp/Desktop/javatest/" . $name;

if (move_uploaded_file($temp, $destination)) {
    echo "<p>File uploaded successfully.</p>";
} else {
    echo "<p>Upload failed. Check the destination path.</p>";
}
}
}
?>

</body>
</html>
