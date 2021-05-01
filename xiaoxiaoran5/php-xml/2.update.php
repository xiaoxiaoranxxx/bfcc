<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>

<body>
    <?php
    $index = (int)$_GET['index'];
    $doc = new DOMDocument();
    $doc->formatOutput = true;
    $doc->preserveWhiteSpace = false;
    $doc->load('./test1.xml');
    $info = $doc->getElementsByTagName('book')->item($index);
    if (isset($_POST['button'])) {
        $name = $_POST['name'];
        $type = $_POST['type'];
        $new_book = $doc->createElement('book');
        $new_name = $doc->createElement('name', $name);
        $new_book->setAttribute('type', $type);
        $new_book->appendChild($new_name);
        $info->parentNode->replaceChild($new_book,$info);
        $doc->save("./test1.xml");
        header('location:2.php');

    }
    ?>
    <form method="post" action="">
        <table width='500' border="1" align="center" bordercolor="blue">
            <tr>
                <td>书名</td>
                <td><input type="text" name="name" value="<?php echo $info->nodeValue ?>"></td>
            </tr>
            <tr>
                <td>类别</td>
                <td><input type="text" name="type" value="<?php echo $info->getAttribute('type') ?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="button" value="修改">
                    <input type="button" name="" value="返回" onclick="location.href='2.php'">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>