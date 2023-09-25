<?php

// //Write a loop to plant 3 trees (you should display '🌳🌳🌳').
$i = 0;
for ($i === 0; $i < 3; $i ++) {
    echo "🌳";
}
echo "<br>";
// Write a loop to plant 8 🌳 .
$i = 0;
for ($i === 0; $i < 8; $i ++) {
    echo "🌳";
}
echo "<br>";
// Write a loop to plant 20 🌳 .
$i = 0;
for ($i === 0; $i < 20; $i ++) {
    echo "🌳";
}
echo "<br>";

// Now, you have to plant 🌲. You need 2 hours to plant a 🌲.
// Hint: you shouldn't calculate the amount of trees planted before but have the loop do it for you. 
//Probably using a $numberOfHours counter
// Write a loop to plant 🌲 during a 6 hours working day.
$numberOfHours = 6;
$treesPlanted = 0;

while ($numberOfHours >= 2) {
    $numberOfHours -= 2;
    $treesPlanted++;
}

echo "Planted $treesPlanted 🌲 during a 6-hour working day.";
echo "<br>";

// Write a loop to plant 🌲 during a 8 hours working day.
$numberOfHours = 8;
$treesPlanted = 0;

while ($numberOfHours >= 2) {
    $numberOfHours -= 2;
    $treesPlanted++;
}

echo "Planted $treesPlanted 🌲 during an 8-hour working day.";
echo "<br>";

// Write a loop to plant 🌲 during a 9 hours working day.
$numberOfHours = 9;
$treesPlanted = 0;

while ($numberOfHours >= 2) {
    $numberOfHours -= 2;
    $treesPlanted++;
}

echo "Planted $treesPlanted 🌲 during an 9-hour working day.";
echo "<br>";

// 🌴. You need 3 hours of work to plant one 🌴.
//Write a loop to plant 🌴 during a 6 hours working day.
$numberOfHours = 6;
$palmsPlanted = 0;

while ($numberOfHours >= 3){
    $numberOfHours -= 3;
    $palmsPlanted ++;
}
echo "Planted " . $palmsPlanted . "🌴 during an 6 hours working day";
echo "<br>";
//Write a loop to plant 🌴 during a 2 hours working day.
$numberOfHours = 2;
$palmsPlanted = 0;

while ($numberOfHours >= 3){
    $numberOfHours -= 3;
    $palmsPlanted ++;
}
echo "Planted " . $palmsPlanted . "🌴 during an 2 hours working day";
echo "<br>";

//Write a loop to plant 🌴 during a 8 hours working day.
$numberOfHours = 8;
$palmsPlanted = 0;

while ($numberOfHours >= 3){
    $numberOfHours -= 3;
    $palmsPlanted ++;
}
echo "Planted " . $palmsPlanted . "🌴 during an 8 hours working day";
echo "<br>";

// Using 2 nested loops, display a forest of 8 columns and 3 rows. Use PHP_EOL to create new lines.
// You should obtain
// 🌳🌳🌳🌳🌳🌳🌳🌳
// 🌳🌳🌳🌳🌳🌳🌳🌳
// 🌳🌳🌳🌳🌳🌳🌳🌳

$columns = 0;
$rows = 0;

for ($columns = 0; $columns < 8; $columns ++){
    echo "🌳";
    for ($rows = 0; $rows < 3; $rows ++){
        echo "🌳";
    }
    echo PHP_EOL;
}