<?php
//Q1
echo 'Q1';
echo '<br>';

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo 'FizzBuzz';
        echo '<br>';
    } elseif ($i % 5 === 0) {
        echo 'Buzz';
        echo '<br>';
    } elseif ($i % 3 === 0) {
        echo 'Fizz';
        echo '<br>';
    } else {
        echo $i;
        echo '<br>';
    }
}
echo '<br>';

//Q2
echo 'Q2-1';
echo '<br>';

$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

echo $personalInfos[1]['name']. 'の電話番号は' . $personalInfos[1]['tel'] . 'です。';
echo '<br>';
echo '<br>';

echo 'Q2-2';
echo '<br>';

$number = 0;
foreach ($personalInfos as $person ) {
    $number++;
    echo   $number . '番目の' . $person['name'] . 'のメールアドレスは' . $person['mail'] . 'で、電話番号は' . $person['tel'] . 'です。';
    echo '<br>';
}
echo '<br>';

echo 'Q2-3';
echo '<br>';

$ageList = [25, 30, 18];

foreach ($ageList as $indexNumber => $age ) {
    $personalInfos[$indexNumber]['age'] = $age;
}

var_dump($personalInfos);

//Q3
echo 'Q3-1';
echo '<br>';

$thisMonth = new DateTime();

$lastMonth = $thisMonth->modify('-1 month')->format('Y-m-d');
echo $lastMonth;
echo '<br>';


// $date = new DateTime();  //class

// $lastMonth = new DateTime(date('Y-m-d', strtotime('-1 month', $date->getTimestamp())));
// $lastMonth = $lastMonth->format('Y-m-d');

// $prevMonth = $date->modify('-1 month')->format('Y-m-d');

// if ($lastMonth < $prevMonth) {
//     echo $lastMonth;
// } else {
//     echo $prevMonth;
// }

echo 'Q3-2';
echo '<br>';

$theDay = new DateTime('1992-04-10');
$now = new DateTime();

$diff = $theDay->diff($now);

echo $diff->format('あの日から%a日経過しました。'); //a??
//echo $diff->days;