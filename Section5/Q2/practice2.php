<?php
//Q1
echo 'Q1';
echo '<br>';

for ($i = 1; $i <= 100; $i++) {
  if ($i % 3 === 0 && $i % 5 === 0)
  {
      echo 'FizzBuzz';
      echo '<br>';
  } elseif ($i % 5 === 0)
  {
      echo 'Buzz';
      echo '<br>';
  } elseif ($i % 3 === 0)
  {
      echo 'Fizz';
      echo '<br>';
  } else
  {
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
  $number +=1;
    echo   $number . '番目の' . $person['name'] . 'のメールアドレスは' . $person['mail'] . 'で、電話番号は' . $person['tel'] . 'です。';
    echo '<br>';
}
echo '<br>';

echo 'Q2-3';
echo '<br>';

$ageList = [25, 30, 18];

foreach ($ageList as $person => $age ) {
    ($personalInfos[$person]['age'] = $age);
}

var_dump($personalInfos);

//Q3
echo 'Q3-1';
echo '<br>';

$date = new DateTime();  //class

$last_date = new DateTime(date('Y-m-d', strtotime('-1 month', $date->getTimestamp())));
$last_date = $last_date->format('Y-m-d');

$prev_date = $date->modify('-1 month')->format('Y-m-d');

if ($last_date < $prev_date) {
    echo $last_date;
} else {
    echo $prev_date;
}

echo 'Q3-2';
echo '<br>';

$date_time = new DateTime('1992-04-10');
$now = new DateTime();

$diff = $date_time->diff($now);

echo $diff->format('あの日から%a日経過しました。'); //a??
//echo $diff->days;