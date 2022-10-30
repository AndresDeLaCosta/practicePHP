
<?php
$a = 'Мои знания на';
$b = 100;
$c = '%';
?>

<?php
$price = 15;

if($price >= 15 && $price <= 20)
    $d = 'Это число находится между 15 и 20';
?>

<?php

function CBR_XML_Daily_Ru() {
    static $rates;

    if ($rates === null) {
        $rates = json_decode(file_get_contents('https://www.cbr-xml-daily.ru/daily_json.js'));
    }

    return $rates;
}
$data = CBR_XML_Daily_Ru();
?>
