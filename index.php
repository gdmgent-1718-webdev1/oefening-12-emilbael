<?php
$cities =['Tokyo', 'Mexico City', 'New York', 'Mumbai', 'Seoul', 'Shanghai', 'Lagos', 'Buenos Aires', 'Cairo', 'London'];

sort($cities);
echo '<ul>';
foreach($cities as $key =>$value){
    echo  strtoupper('<li>' .$value. '</li>');
}
echo '</ul>';