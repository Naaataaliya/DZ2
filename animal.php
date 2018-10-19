<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Строки, массивы и объекты</title>
</head>
<body>
<?php
$continents = [
    'Africa' => ['Antelope', 'Giraffe', 'Elephant', 'Black rhinoceros', 'jivotnoe tri slova'],
    'Europe' => ['Red deer', 'Mesocricetus newtoni'],
    'Asia' => ['Ursus arctos', 'Elephas maximus'],
    'North America' => ['Red lynx', 'Bison', 'Mountain goat', 'Raccoon striped'],
    'South America' => ['Sloth', 'Ateles', 'Armadillo', 'Marikina monkey'],
    'Australia' => ['Kangaroo', 'Platypus', 'Saltwater crocodile', 'Koala'],
    'Antarctica' => ['Seal', 'Sea leopard', 'Penguin', 'Snow petrel'],
];

foreach ($continents as $continents_key => $animals)
{
    $continent[] = $continents_key;
    echo "<h3>$continents_key</h3>";
    echo implode(", ", $animals);
    foreach ($animals as $two)
    {
        $two_words = explode(" ", $two);
        if (count($two_words) == 2)
        {
            $double_name[] = $two;
            $first_world[] = $two_words[0];
            $second_word[] = $two_words[1];
        }
    }
}
echo '<hr>';
echo '<h2>Two words array</h2>';
foreach ($double_name as $item)
{
    echo "$item<br>";
}
echo '<hr>';
shuffle($second_word);
echo '<h2>Shuffle names</h2>';
foreach ($second_word as $last)
{
    $title = array_shift($continent);
    $first = array_shift($first_world);
    echo "<h3>$title</h3>";
    echo $first . ' ' . $last . '<br>';
}
?>

</body>
</html>