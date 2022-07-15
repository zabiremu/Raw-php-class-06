<?php

for($i=0;$i<=10;$i++){
    echo $i.'</br>';
};
echo '</br>';
for($num = 1; $num <= 10 ; $num++){
    $result = $num * 2;
    echo $num .' * 2 = '. $result.'<br>';
    
};
echo '</br>';
$i = 10;
while($i < 21){
    echo $i.'<br>';
    $i++;
};
echo '</br>';
$i = 1;
do{
    echo $i . '<br>';
    $i++;
}while(
    $i <= 10
);


