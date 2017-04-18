<html>

<body>

Your email address is: <?php echo $_POST["email"]; ?>

<?php
/*include 'index.html';

if(isset($_POST['email'])) {
    $data = $_POST['email'] . "\n";
    $ret = file_put_contents('emails.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file";
    }
}
else {
   die('no post data to process');
}
*/?>

<?php
$myfile = fopen("emails.txt", "w") or die("Unable to open file!");
$txt = $_POST['email'] . "\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
</body>
</html>
