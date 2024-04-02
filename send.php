<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $API_KEY = "7049659230:AAGa7sYSUFDVNv2ifFXdv__YrHoeVxmIEuA";//Bot xabar yuboradigan tokeni
    $admin = 6796076162;//Qaysi odamga jo'natiladigan ID

    $text = urlencode("Xabar keldi.\nYuboruvchi ismi: $name\nEmail | TG username: $email\nMavzu: $subject\nXabari: $message");
    $url = "https://api.telegram.org/bot".$API_KEY."/sendMessage?chat_id=$admin&text=$text&parse_mode=markdown";
    file_get_contents($url);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jo'natildi</title>
</head>
<body>
        <h3><?php echo $name; ?> xabaringiz jo'natildi.</h3>
</body>
</html>