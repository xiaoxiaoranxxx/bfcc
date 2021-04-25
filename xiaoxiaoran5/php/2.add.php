<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2.add</title>
</head>

<body>
    <?php
    if (isset($_POST['button'])) {
        $name = $_POST['name'];
        $type = $_POST['type'];
        $doc = new DOMDocument();
        $doc->formatOutput = true;
        $doc->preserveWhiteSpace = false;
        $doc->load('./test1.xml');
        $book = $doc->createElement('book');
        
        $name = $doc->createElement('name', $name);
        $book->setAttribute('type', $type);

        $book->appendChild($name);
        $root = $doc->documentElement;
        $root->appendChild($book);
        $doc->save("./test1.xml");
        header('location:2.php');
        exit;
    }
    ?>
    <form method="post" action="">
        <table width='500' border="1" align="center" bordercolor="blue">
            <tr>
                <td>书名</td>
                <td><input type="text" name="name" value=""></td>
            </tr>
            <tr>
                <td>类别</td>
                <td><input type="text" name="type" value=""></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="button" value="添加">
                    <input type="button" name="" value="返回" onclick="location.href='2.php'">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>