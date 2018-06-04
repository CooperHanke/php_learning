<?php
echo "Demonstating access of the command line arguments\n";
var_dump($argc);
var_dump($argv);

echo "Demonstrating for-loops, printing out 1 through 100\n";
for ($i = 1; $i <= 100; $i++) {
    echo "\$a has a value of {$i}\n";
}

echo "\nDemonstrating for-each\n";
$numbers = ['zero', 'one', 'two', 'three', 'four', 'five'];
foreach ($numbers as $value) {
    echo "\$number has a value of {$value}\n";
}

echo "\nDemonstrating for-each with keys\n";
$more = [1, 2, 3, 4, 5];
foreach ($more as $key => $value) {
    echo "\nkey is {$key} and value is {$value}\n";
}

echo "\nAnother example of using for-each in php\n";
$students = array(
    array('name' => 'Virginia Potts', 'age' => 29),
    array('name' => 'Elon Musk', 'age' => 42),
    array('name' => 'Rasmus Lerdorf', 'age' => 45),
    array('name' => 'Marissa Mayer', 'age' => 38)
);
foreach ($students as $student) {
    echo "{$student['name']} is {$student['age']} years old\n";
}

echo "Another for-each example for some books\n";
$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);
// list all the books
foreach($books as $book) {
    print_r($book); 
}

// grab the keys
echo "Info on all the books in the array of arrays:\n";
foreach($books as $key => $value) {
    echo "title: {$key}\n";
    foreach($value as $key2 => $value2) {
        echo "{$key2}: {$value2}\n";
    }
}
echo "\n";

echo "Let's do that again, but only for books after 1950!\n";
foreach ($books as $key => $value) {
    foreach ($value as $contentKey => $contentValue) {
        if ($contentKey == 'published' && $contentValue >= 1950) {
            // start putting things here
        }
    }
}
echo "\n";
?>