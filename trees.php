<?php

for ($rows = 0; $rows < 3; $rows++) {
    for ($columns = 0; $columns < 8; $columns++) {
        echo "🌳";
    }
    echo PHP_EOL;
}
echo "<br>";

//Display a forest of 40 columns and 25 rows. 
for ($rows = 0; $rows < 25; $rows++) {
    for ($columns = 0; $columns < 40; $columns++) {
        echo "🌳";
    }
    echo PHP_EOL;
}

//Create a forest of 10 columns and 5 rows, 
//use modulo operator % if you have a odd or even value

for ($rows = 0; $rows < 5; $rows++) {
    for ($columns = 0; $columns < 10; $columns++) {
        if (($rows % 2) == 0) {
            echo "🌳";
        } else {
            echo "🌲";
        }
    }
    echo PHP_EOL;
}

//Create a forest of 7 columns and 8 rows, with alternate types of trees in each column
for ($rows = 0; $rows < 8; $rows++) {
    for ($columns = 0; $columns < 7; $columns++) {
        if (($columns % 2) == 0) {
            echo "🌳";
        } else {
            echo "🌲";
        }
    }
    echo PHP_EOL;
}

// number of rows for the triangle
$num_rows = 5;

// Loop through each row
for ($i = 0; $i < $num_rows; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo '🌳';
    }
    echo PHP_EOL;
}
