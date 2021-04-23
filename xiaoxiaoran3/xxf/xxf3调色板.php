<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            border: #000 solid 1px;
            width: 100px;
            height: 100px;
        }

        table {
            border-collapse: collapse;
            float: left;
        }

        div {
            width: auto;
            margin: auto;
        }
    </style>
</head>

<body>
    <div>
        <?php
        $arr = array('0', '3', '6', '9', 'C', 'F');
        $n = count($arr);
        for ($r = 0; $r < $n; $r++) {
            echo '<table>';
            for ($b = 0; $b < $n; $b++) {
                echo '<tr>';
                for ($g = 0; $g < $n; $g++) {
                    echo '<td style="background-color:#' . $arr[$r] . $arr[$b] . $arr[$g] . '"></td>';
                }
                echo '</tr>';
            }
            echo '</table>';
        }
        ?>
    </div>
</body>

</html>