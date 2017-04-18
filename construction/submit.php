<html>

<body>

Your email address is: <?php echo $_POST["email"]; ?>

<?php

$myfile = fopen("emails.txt", "w") or die("Unable to open file!");
$email = $_POST["email"];
fwrite($myfile, $email);
fclose($myfile);
?>
</body>
</html>
