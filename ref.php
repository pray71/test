<?php ?><?php
function reff($reff, $pass) {
    $get = file_get_contents("https://api.randomuser.me");
    $j = json_decode($get, true);
    $getName = $j['results'][0]['name']['first'];
    $getName2 = $j['results'][0]['name']['last'];
    $rand = rand(000, 999);
    $no = '15' . rand(1234567890, 9999999999);
    $device = '9088576AB47CFB4C7E464B3' . rand(000000000, 999999999);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://appmoneylabs.com/webservices/signup.php?device_id=' . $device . '&name=' . $getName . '%20' . $getName2 . '&phone=' . $no . '&email=' . $getName . '' . $rand . '@gmail.com&password=' . $pass . '' . $rand . '&refferal_id=' . $reff . '');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($ch);
    return $result;
}
print "Welcome to Nabila Tools
";
print "Earn Money - Easy Cash App
";
print "C0ded by : Suwimo
";
print "Facebook  : https://www.facebook.com/suwino
";
echo "Reff : ";
$reff = trim(fgets(STDIN));
echo "Password? : ";
$pass = trim(fgets(STDIN));
echo "Jumlah : ";
$jum = trim(fgets(STDIN));
echo "Please Wait " . $reff . "
";
for ($a = 0;$a < $jum;$a++) {
    $asw = json_decode(reff($reff, $pass, $a));
    $cuk = $asw->msg;
    echo "" . $cuk . "
";
} ?>
