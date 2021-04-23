<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/common.css">
    <title>admin</title>
</head>

<body>
    <a href="add.php">添加</a>
    <?php require '../inc/head.php' ?>
    <?php
    $titleid = isset($_GET['titleid']) ? $_GET['titleid'] : 1;
    $sql = "select * from books where bTypeId=$titleid order by bId desc";
    $rs = mysql_query($sql); ?>
    <table>
        <tr>
            <th>编号</th>
            <th>名字</th>
            <th>出版</th>
            <th>价格</th>
            <th>日期</th>
            <th>作者</th>
            <th>修改</th>
            <th>删除</th>

        </tr>
        <?php while ($rows = mysql_fetch_assoc($rs)) : ?>
            <tr>
                <td><?php echo $rows['bId'] ?></td>
                <td><?php echo $rows['bName'] ?></td>
                <td><?php echo $rows['publishing'] ?></td>
                <td><?php echo $rows['price'] ?></td>
                <td><?php echo $rows['pubDate'] ?></td>
                <td><?php echo $rows['author'] ?></td>
                <td><input type="button" value="修改" onclick="location.href='update.php?id=<?php echo $rows['bId'] ?>'" /></td>
                <td><input type="button" value="删除" onclick="if(confirm('are you ok???')) location.href='del.php?id=<?php echo $rows['bId'] ?>&titleid=<?php echo $rows['bTypeId'] ?>'" /></td>
            </tr>
        <?php endwhile ?>
    </table>
</body>

</html>