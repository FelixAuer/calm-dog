<?php
$number = $argv[1];

$text = file_get_contents("input.txt");

echo "{
            id: $number,
            name: 'Exercise $number',
            steps: [";

$strings = explode("\n", $text);
foreach ($strings as $string) {
    echo "{\n";
    $string = trim($string);

    $string = str_replace('Sit while you ', '', $string);
    $string = str_replace('Sit for', 'Wait', $string);
    $string = ucfirst($string);
    preg_match('/(\d+) seconds/', $string, $matches);
    echo 'description: "' . $string . '",';
    if (count($matches)) {
        echo 'time: ' . $matches[1] . ',';
    }
    echo "},";
    // echo ''$string . "\n";
}
echo "            ]
        },";
