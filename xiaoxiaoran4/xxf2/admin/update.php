<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link rel="stylesheet" type="text/css" href="../style/common.css">
    <script>
        function check() {
            if (document.getElementById('content').value == '') {
                alert('c-null');
                document.getElementById('content').focus();
                return false;
            }
            if (document.getElementById('author').value == '') {
                alert('a-null');
                document.getElementById('author').focus();
                return false;
            }
            return true;
        }
    </script>

</head>

<body>
    <?php
    require '../inc/conn.php';
    $id = (int)$_GET['id'];
    if (isset($_POST['button'])) {
        $type = $_POST['type'];
        $content = $_POST['content'];
        $author = $_POST['author'];
        $publishing = $_POST['publishing'];
        $price = $_POST['price'];
        $pubDate = $_POST['pubDate'];
        $ISBN = $_POST['ISBN'];
        $sql = "update books set bName='$content',bTypeId=$type,author='$author',publishing='$publishing',price='$price',pubDate='$pubDate',ISBN='$ISBN' where bId=$id ";
        if (mysql_query($sql)) header('location:admin.php?titleid=' . $type);
        else echo '修改失败';
        exit;
    }
    $sql = "select * from books where bId=$id";
    $rs = mysql_query($sql);
    if (mysql_num_rows($rs) == 0) die('oh no no');
    $info = mysql_fetch_assoc($rs);
    //var_dump($info);
    ?>
    <form id="form1" name="form1" method="post" action="" onsubmit="return check()">

        <table>
            <tr>
                <th colspan="2">修改数据库</th>
            </tr>
            <tr>
                <td>类别</td>
                <td>
                    <select name="type" id="type">
                        <?php
                        $sql = 'select * from category';
                        $rs = mysql_query($sql);
                        while ($rows = mysql_fetch_assoc($rs)) : ?>
                            <option value="<?php echo $rows['bTypeId'] ?>" <?php if ($rows['bTypeId'] == $info['bTypeId']) echo 'selected' ?>>
                                <?php echo $rows['bTypeName'] ?>
                            </option>
                        <?php endwhile ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>书名</td>
                <td><input name="content" id="content" value="<?php echo $info['bName'] ?>" /></td>
            </tr>
            <tr>
                <td>出版社</td>
                <td><input name="publishing" value="<?php echo $info['publishing'] ?>" /></td>
            </tr>
            <tr>
                <td>价格</td>
                <td><input name="price" value="<?php echo $info['price'] ?>" /></td>
            </tr>
            <tr>
                <td>日期</td>
                <td><input name="pubDate" value="<?php echo $info['pubDate'] ?>" /></td>
            </tr>
            <tr>
                <td>作者</td>
                <td><input type="text" name="author" value="<?php echo $info['author'] ?>" /></td>
            </tr>
            <tr>
                <td>ISBN</td>
                <td><input name="ISBN" value="<?php echo $info['ISBN'] ?>" /></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="button" value="提交" />
                    <input type="button" name="button2" value="返回" onclick="location.href='admin.php'" />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>