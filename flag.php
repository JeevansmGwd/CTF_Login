<?php
$correct_user = "jeevan";
$correct_pass = "123";

$input_user = $_POST['username'];
$input_pass = $_POST['password'];

if ($input_user === $correct_user && $input_pass === $correct_pass) {
    echo "<h2>Access Granted!</h2>";
    echo "<p>Congratulations! Here is your flag:</p>";
    echo "<code>FLAG{you_cracked_it!}</code>";
} else {
    echo "<h2>Access Denied!</h2>";
    echo "<p>Invalid credentials. Try again.</p>";
}
?>
