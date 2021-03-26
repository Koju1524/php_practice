<?php
  // Q1
  echo 'Q1';
  echo '<br>';

  $name = 'sakaguchi';
  echo '私の名前は「' . $name . '」です。';
  echo '<br>';
  echo '<br>';

  //Q2
  echo 'Q2';
  echo '<br>';

  $num = 5 * 4;
  $num1 = $num / 2;
  echo $num;
  echo '<br>';
  echo $num1;
  echo '<br>';
  echo '<br>';

  // Q3
  echo 'Q3';
  echo '<br>';

  $currentTime = date('Y年m月d日 H時i分s秒');
  echo '現在時刻は、' . $currentTime . 'です。';

  echo '<br>';
  echo '<br>';

  // Q4
  echo 'Q4';
  echo '<br>';

  $age = 25;
  if ($age >= 20) {
      echo '成人です。';
      echo '<br>';
  } else {
      echo '未成年です。';
  }
  echo '<br>';

  // Q5
  echo 'Q5';
  echo '<br>';

  $device = 'mac';

  if ($device === 'mac') {
      echo '使用OSは、' . $device . 'です。';
  }  else {
      if ($device === 'windows') {
          echo '使用OSは、' . $device . 'です。';
      }
        echo 'どちらでもありません。';
    }

  echo '<br>';
  echo '<br>';

  //Q6
  echo 'Q6';
  echo '<br>';

  $kantoArea = [
    '東京',
    '千葉',
    '埼玉',
    '神奈川',
    '群馬',
    '栃木',
    '茨城'
  ];

  echo $kantoArea[5] . '県と' . $kantoArea[1] . '県は関東地方の都道府県です。';
  echo '<br>';
  echo '<br>';

  //Q7
  echo 'Q7';
  echo '<br>';

  $area = [
    '東京' => '新宿区',
    '神奈川' => '横浜市',
    '埼玉' => 'さいたま市',
    '栃木' => '宇都宮市',
    '群馬' =>'前橋市',
    '茨城' => '水戸市'
  ];
  foreach ($area as $prefectureCapital) {
      echo $prefectureCapital;
      echo '<br>';
  }
  echo '<br>';

  //Q8
  echo 'Q8';
  echo '<br>';

  foreach ($area as $prefecture => $city) {
      if ($prefecture === '埼玉') {
          echo $prefecture . '県の県庁所在地は、' . $city. 'です。';
          echo '<br>';
      }
  }
  echo '<br>';

  //Q9
  echo 'Q9';
  echo '<br>';

  $prefecturalCapital = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' =>'前橋市',
    '茨城' => '水戸市',
    '愛知県' => '愛知市',
    '大阪府' => '大阪市'
  ];

  foreach ($prefecturalCapital as $prefecture => $capital) {
      if ($prefecture === '愛知県' || $prefecture === '大阪府') {
          echo $prefecture . 'は関東地方ではありません。';
          echo '<br>';
      } else {
          echo $prefecture . 'の県庁所在地は、' . $capital . 'です。';
          echo '<br>';
      }
  }
  echo '<br>';

  //Q10
  echo 'Q10';
  echo '<br>';

  function hello($name)
  {
    echo $name . 'さん、こんにちは。';
  }
  hello('金谷');
  echo '<br>';

  hello('安藤');
  echo '<br>';
  echo '<br>';

  //Q11
  echo 'Q11';
  echo '<br>';

  function calcTaxInPrice($price)
  {
    $taxInPrice = 1.1 * $price;
    return $price . '円の商品の税込価格は' . $taxInPrice . '円です。';
  }

  echo calcTaxInPrice(1000);
  echo '<br>';
  echo '<br>';

  //Q12
  echo 'Q12';
  echo '<br>';

  function distinguishNum($num)
  {
    if ($num % 2 === 0) {
        echo $num . 'は偶数です。';
    } else {
        echo $num . 'は奇数です。';
    }
  }

  distinguishNum(11);
  echo '<br>';
  distinguishNum(22);
  echo '<br>';
  echo '<br>';

  //Q13
  echo 'Q13';
  echo '<br>';

  function evaluateGrade($grade) {
    switch ($grade) {
        case 'A':
        case 'B':
            echo '合格です。';
            break;

        case 'C':
            echo '合格ですが追加課題があります。';
            break;

        case 'D':
            echo '不合格です。';
            break;

        default:
            echo '判定不明です。講師に問い合わせてください。';
            break;
    }
  }
  evaluateGrade('A');
  echo '<br>';
  evaluateGrade('F');
  echo '<br>';
  echo '<br>';

  //Q14
  echo 'Q14';
  echo '<br>';

  class Student
  {
      public $studentId;
      public $name;

      public function __construct($studentId, $name)
      {
          $this->studentId = $studentId; //scope
          $this->name = $name;  //scope
      }

      public function studentInfo()
      {
          echo '学籍番号' . $this->studentId . '番の生徒は' . $this->name . 'です。';
      }

      public function attend($language)
      {
          echo $this->name . 'は' . $language .'の授業に参加しました。学籍番号:' . "\t" . $this->studentId;
      }
  }

  $yamada = new Student(120, '山田');
  $yamada->studentInfo();
  echo '<br>';
  echo '<br>';

  //Q15
  echo 'Q15';
  echo '<br>';

  $yamada->attend('PHP');

?>
