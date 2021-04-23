<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add</title>
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
    if (isset($_POST['button'])) {
        $type = $_POST['type'];
        $content = $_POST['content'];
        $author = $_POST['author'];
        $publishing = $_POST['publishing'];
        $price = $_POST['price'];
        $pubDate = $_POST['pubDate'];
        $ISBN = $_POST['ISBN'];
        if (trim(($content)) == '' || trim($author) == '') {
            echo '内容不能为空..';
            exit;
        }
        $sql = "insert into books (bTypeId,bName,author,publishing,price,pubDate,ISBN) values ($type,'$content','$author','$publishing','$price','$pubDate','$ISBN')";
        if (mysql_query($sql)) header('location:admin.php?titleid=' . $type);
        else echo '插入失败...', '<br>', '<a href="add.php">点击返回</a>';
        exit;
    }
    ?>
    <form id="form1" name="form1" method="post" action="" onsubmit="return check()">

        <table>
            <tr>
                <th colspan="2">添加到数据库</th>
            </tr>
            <tr>
                <td>类别</td>
                <td>
                    <select name="type" id="type">
                        <?php
                        $sql = 'select * from category';
                        $rs = mysql_query($sql);
                        while ($rows = mysql_fetch_assoc($rs)) : ?>
                            <option value="<?php echo $rows['bTypeId'] ?>">
                                <?php echo $rows['bTypeName'] ?>
                            </option>
                        <?php endwhile ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>书名</td>
                <td><input name="content" id="content" /></td>
            </tr>

            <tr>
                <td>出版社</td>
                <td><input name="publishing" /></td>
            </tr>
            <tr>
                <td>价格</td>
                <td><input name="price" /></td>
            </tr>
            <tr>
                <td>日期</td>
                <td><input name="pubDate" /></td>
            </tr>
            <tr>
                <td>作者</td>
                <td><input type="text" name="author" /></td>
            </tr>
            <tr>
                <td>ISBN</td>
                <td><input name="ISBN" /></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="button" value="添加" />
                    <input type="button" name="button2" value="返回" onclick="location.href='admin.php'" />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>