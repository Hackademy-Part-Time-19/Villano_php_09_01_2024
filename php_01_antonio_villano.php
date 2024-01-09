<?php
echo "Traccia 1 \n";
//integer
$a=2;
//float
$b=5.3;
//string
$s="Carlo è andato a Roma";
//boolean
$bool=true;
var_dump ($a);
var_dump ($b);
var_dump ($bool);
var_dump ($s);

echo "Traccia 2 \n";


$text1 = "Marco";
$text2 = "hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perchè";
$text6 = "$text2";
$text7 = 'bevuto';
$text8 = "tutto.";
echo $text1." ".$text2." ".$text3.$text4." ".$text5." ".$text6." ".$text7." ".$text8."\n";

echo "Traccia 3 \n";


$words1 = [
    'una',
    67,
    'vita',
    'colle',
    'mi',
    'rosso',
    [
      'oscura',
      'era',
      89,
      [
        'mezzo',
        [
          'cammin',
          'Nel',
          [
            'selva',
            'la',
            [
              'via',
              'una',
              true,
            ]
          ],
        ]
      ],
    'ritrovai',
    'per'
    ],
    'diritta'
  ];
  $words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'nostra',
    'elemento3' => [
                      'Virgilio',
                      'smarrita',
                      'ché'
                    ]
  ];
$results=$words1[6][3][1][1]." ".$words1[6][3][0]." di ".$words1[6][3][1][0]." "." di ".$words2['elemento2']." ".$words1[2]." ".$words1[4]." ".$words1[6][4]." ".$words1[6][5]." ".$words1[6][3][1][2][2][1]." ". $words1[6][3][1][2][0]." ".$words1[6][0].','." ".$words2['elemento3'][2]." ".$words1[6][3][1][2][1]." ".$words1[7]." ".$words1[6][3][1][2][2][0]." ".$words1[6][1]." ".$words2['elemento3'][1] ;

echo $results."\n";

echo "Traccia 4 \n";

$x = 10;
$y = 20;
$z = "20";
$w = 10;
var_dump($x < $y);
var_dump($x <= $w);
var_dump($y == $z);
var_dump($y === $z);
var_dump($y !== $z);
var_dump($y != $z);
var_dump($x <=> $y);

echo "Traccia 5\n";
$corsoHackademy = [ "ciao","tutti","docenti" => ["mattia", "emanuele"], "studenti" => ["gianluca", "lorenzo", "antonio"], "argomenti" => ["html", "css", "bootstrap", "javascript", "php"],"quando"=>["oggi","ieri","ottobre"],"ad","esercitazione",["e","con",["insieme",["sto","facendo"],"sono","a"]],"una" ];
echo $corsoHackademy[0]." ".$corsoHackademy[4][2][3]." ".$corsoHackademy[1]." ".$corsoHackademy[4][2][2]." ".$corsoHackademy['studenti'][2]." ".$corsoHackademy[4][0]." ".$corsoHackademy['quando'][0]." ".$corsoHackademy[4][2][1][0]." ".$corsoHackademy[4][2][1][1]." ".$corsoHackademy[5]." ".$corsoHackademy[3]." ".$corsoHackademy['argomenti'][4]." ".$corsoHackademy[4][2][0]." ".$corsoHackademy[4][2][3]." ".$corsoHackademy['studenti'][1]." ".$corsoHackademy[4][0]." ".$corsoHackademy['studenti'][0];
