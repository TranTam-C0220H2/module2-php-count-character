<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="get">
    <label>Nhap ky tu can tim: <input type="text" name="character"></label>
    <input type="submit" value="Tim">
</form>
<?php
$permittedChars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$randomCharacter = substr(str_shuffle($permittedChars), 0, random_int(10, 20));
echo 'Chuoi ky tu khoi tao ngau nhien: ' . $randomCharacter . '<br>';
$character = $_GET['character'];
$countCharacter = 0;
for ($i = 0; $i < strlen($randomCharacter); $i++) {
    if (substr($randomCharacter, $i, 1) == $character) {
        $countCharacter++;
    }
}
echo "So lan xuat hien cua ky tu ' " . $character . " ' trong chuoi khoi tao la: '" . $countCharacter;
?>
</body>
</html>
