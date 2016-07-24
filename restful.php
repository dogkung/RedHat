//got to take kids to football have a look in a bit
<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 'https://gist.githubusercontent.com/jasonmadigan/009c15b5dc4b4eccd32b/raw/9a7ea345d6d9e924056a5ecdf46a72f082e51f34/users.json');
$result = curl_exec($ch);
curl_close($ch);

$obj = json_decode($result);
echo $result;
?>




