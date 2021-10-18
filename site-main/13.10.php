<?php
//function Compare($a, $b)
//{
//    if ($a > $b) {
//        return $a;
//    } else echo $b;
//}
//
//$a = 10;
//$b = 7;
//echo $a;

//function Compare($x,$y){
//    return $c = sqrt($x*$x + $y*$y);
//}
//$x = 5;
//$y = 4;
//$c = Compare($x,$y);
//echo $c;

//function qwe($a){
//    do{
//        $a *= 10; echo $a . "<br>";
//    } while ($a <= 100000);
//    echo 'вы достигли предела';
//}
//$a = 10;
//$c = qwe($a);
//echo $c;

//function com()
//{
//    for ($i = 0; $i <= 5; $i++) {
//        $arr = mt_rand(1, 9);
//        echo$arr . "<br>";
//    }
//
//}
//com();

//function com()
//{
//    $sum = 0;
//    $arr = [4, 4, 4, 4];
//    for ($i = 0; $i <= 4; $i++) {
//        $sum += $arr[$i];
//    }
//    $avg = $sum / 4;
//    return $avg;
//}
//
//$a = com();
//echo $a;


//function com(){
//    $text1 = "Поставьте 5 пожалуйста.";
//    print_r(str_word_count($text1, 1, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя0123456789"));
//
//}
//$a = com();
//echo $a;

function com(){
    $n=5;
    if ($n<2)
        return $n;
    else
        return (com($n-1)+com($n-2));
}
$a=com();
echo $a
?>