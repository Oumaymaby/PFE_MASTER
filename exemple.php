<?php
// $str='LatLng(31.678511, -7.873764),LatLng(31.729919, -7.873764),LatLng(31.729919, -7.781067),LatLng(31.678511, -7.781067)';
// $pieces = explode(",L", $str);
// $p1=array($pieces[0]);
// // echo $p1[0];
// $p=array_merge($pieces, $p1);
// $p2=implode(",", $p);
// // echo $p[4];
// // echo $p2;
// $str1=preg_replace('/[^A-Za-z0-9. -]/','', $p2);
// // echo $str1;
// $str2=substr($str1, 6);
// // echo $str2;
// $str3=str_replace('atLng', ',', $str2);
// // echo $str2;
// // echo $str3;

// $str4=str_replace('L','', $str3);
// echo $str4;

$str='{"type":"Feature","properties":{},"geometry":{"type":"Polygon","coordinates":[[[-8.075638,31.755612],[-8.075638,31.775461],[-8.051605,31.775461],[-8.051605,31.755612],[-8.075638,31.755612]]]}}';

// echo $p[4];
// echo $p2;


$str2=substr($str, 79);
// echo $str2;
// $str3=preg_replace('/[^A-Za-z0-9. -]/','', $str2);
$str3=str_replace('],[', 'oum', $str2);
// // echo $str2;

$str4=str_replace(',', ' ', $str3);

$str5=str_replace('oum',', ', $str4);
// echo $str5;
$str6=str_replace(']]]}}','', $str5);
// echo $str6;
$str7=str_replace('[','', $str6);
echo $str7;




?>