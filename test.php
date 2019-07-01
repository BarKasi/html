 <?php 

$firstName = htmlspecialchars($_POST['First_name']);
$lastName = htmlspecialchars($_POST['Last_name']);
$userName = htmlspecialchars($_POST['Username']);

$text = "";

$text .= "First name: " . $firstName  . PHP_EOL;
$text .= "Last name: " . $lastName . PHP_EOL;
$text .= "Username: " . $userName . PHP_EOL;



 if (!empty($firstName) && !empty($lastName) && !empty($userName)){
$file = fopen('form.txt', 'r+');
fwrite($file, $text);
echo "Hello "  . $firstName . " " . $lastName  . "!!!" . '<br>';
echo "Thank you, we recorded your data in the file" . PHP_EOL;
fclose($file);
}
else 
	echo "Please enter your details";

