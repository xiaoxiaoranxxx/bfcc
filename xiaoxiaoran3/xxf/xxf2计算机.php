<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $num1 = '';
    $num2 = '';
    $sign = '';
    $result = '';
    if (!empty($_POST)) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $sign = $_POST['sign'];
        switch ($sign) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 == 0) {
                    $result = 'xxx';
                    break;
                } else {
                    $result = $num1 / $num2;
                    break;
                }
            case '%':
                $result = $num1 % $num2;
                break;
        }
    }
    ?>

    <form method="post" action="">
        <input type="text" name="num1" value="<?php echo $num1 ?>">
        <select name="sign">
            <option value="+" <?php echo $sign == '+' ? 'selected' : '' ?>>+</option>
            <option value="-" <?php echo $sign == '-' ? 'selected' : '' ?>>-</option>
            <option value="*" <?php echo $sign == '*' ? 'selected' : '' ?>>*</option>
            <option value="/" <?php echo $sign == '/' ? 'selected' : '' ?>>/</option>
            <option value="%" <?php echo $sign == '%' ? 'selected' : '' ?>>%</option>
        </select>
        <input type="text" name="num2" value="<?php echo $num2 ?>">=
        <input type="text" name="result" value="<?php echo $result ?>"><br><br>
        <input type="submit" name="button" value="pass">
    </form>
</body>

</html>