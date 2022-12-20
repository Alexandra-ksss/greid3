$dataTime = new DateTime(); //объект с текущей датой
$dataTime = $dataTime->setTime(00,00,00); //начало дня
$dataTime = $dataTime->setTime(23,59,59); //конец дня
$tomorrow = $dataTime->add(new DateInterval('P1D')); //Добавить 1 день

$diffDate = $dataTime->diff($tomorrow); //разница между датами


$array = ['a' => '1', 'b' => '2', 'c' => '3'];
$get = http_build_query($array);
$url = 'site.ru/?'.$get;

$get = '';
foreach ($array as $key => $item) {
    $get .= $key.'='.$item.'&';
}


