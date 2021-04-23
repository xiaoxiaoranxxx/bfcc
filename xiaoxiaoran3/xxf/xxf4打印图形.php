<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        span {
            width: 5px;
            margin: 0px 8px;
            display: inline-block;
        }

        div {
            text-align: center;
        }
    </style>

</head>

<body>
    <div>
        <?php
        $total = 33;
        for ($i = 1; $i <= $total; $i++) {
            $row = $i;
            if ($i > $total / 2)
                $row = $total - $i + 1;
            $n = 2 * $row - 1;
            for ($j = 1; $j <= $n; $j++) {
                echo '<span>$.$</span>';
            }
            echo '<br>';
        }
        ?>
        </hr>
    </div>
</body>

</html>