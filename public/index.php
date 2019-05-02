<?php

/*
$nums[][]
B: $nums[0] 1-15
I: $nums[1] 16-30
..
O: $nums[4] 

$nums[$i] $i * 15 + 1 ~ $1 * 15 + 15
*/

$nums = [];

for ($i = 0; $i < 5; $i++) {
    $col = range($i * 15 + 1, $i * 15 + 15);
    shuffle($col);
    $nums[$i] = array_slice($col, 0, 5);
}

$nums[2][2] = "FREE";
function h($s) {
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BINGO!</title>
</head>
<body>
    <div id="container">
        <table>
            <tr>
                <th>B</th>
                <th>I</th>
                <th>N</th>
                <th>G</th>
                <th>O</th>
            </tr>
            <?php for ($i = 0; $i < 5; $i++) : ?>
            <tr>
            <!-- 縦にnums[0][1~4]を出すにはnums[$j][$i]とする -->
                <?php for ($j = 0; $j < 5; $j++) : ?>
                <td><?= h($nums[$j][$i]); ?></td>
                <?php endfor; ?>
            </tr>
            <?php endfor; ?>
        </table>
    </div>
</body>
</html>