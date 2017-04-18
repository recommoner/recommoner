<html>

<body>

Thank you for signing up. We'll contact you soon enough!

<?php
$myfile = fopen("emails.txt", "w") or die("Unable to open file!");
$txt = $_POST['email'] . "\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
</body>
</html>
