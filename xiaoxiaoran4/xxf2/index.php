<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bfcc</title>
    <link rel="stylesheet" type="text/css" href="./style/common.css">

</head>

<body>
    <?php require '/inc/head.php' ?>
    <?php
    $titleid = isset($_GET['titleid']) ? $_GET['titleid'] : 1;
    //$sql = "select * from books where bTypeId=$titleid order by bId desc";
    $pagesize = 5;
    $sql = "select count(*) from books where bTypeId=$titleid";
    $rs = mysql_query($sql);
    $rows = mysql_fetch_row($rs);
    $recordcount = $rows[0];
    $pagecount = ceil($recordcount / $pagesize);
    $pageno = isset($_GET['pageno']) ? $_GET['pageno'] : 1;
    if ($pageno < 1) $pageno = 1;
    if ($pageno > $pagecount) $pageno = $pagecount;
    $startno = ($pageno - 1) * $pagesize;
    $sql = "select * from books where bTypeId=$titleid order by bId desc limit $startno,$pagesize";
    $rs = mysql_query($sql); ?>

    <table>
        <tr>
            <th>编号</th>
            <th>名字</th>
            <th>出版</th>
            <th>价格</th>
            <th>日期</th>
            <th>作者</th>
        </tr>
        <?php while ($rows = mysql_fetch_assoc($rs)) : ?>
            <tr>
                <td><?php echo $rows['bId'] ?></td>
                <td><?php echo $rows['bName'] ?></td>
                <td><?php echo $rows['publishing'] ?></td>
                <td><?php echo $rows['price'] ?></td>
                <td><?php echo $rows['pubDate'] ?></td>
                <td><?php echo $rows['author'] ?></td>
            </tr>
        <?php endwhile ?>
    </table>
    <table>
        <tr>
            <td>
                <?php for ($i = 1; $i <= $pagecount; $i++) : ?>
                    <a href="?pageno=<?php echo $i ?>&titleid=<?php echo $titleid ?> ">
                        <?php echo $i ?>
                    </a>&nbsp;
                <?php endfor; ?>
            </td>
            <td>
                <?php if ($pageno == 1) : ?>
                    *首页*
                    *上一页*
                <?php else : ?>
                    <a href="?pageno=1&titleid=<?php echo $titleid ?>">首页</a>
                    <a href="?pageno=<?php echo $pageno - 1 ?>&titleid=<?php echo $titleid ?>">上一页</a>
                <?php endif ?>
                <?php if ($pageno == $pagecount) : ?>
                    *下一页*
                    *末页*
                <?php else : ?>
                    <a href="?pageno=<?php echo $pageno + 1 ?>&titleid=<?php echo $titleid ?>">下一页</a>
                    <a href="?pageno=<?php echo $pagecount ?>&titleid=<?php echo $titleid ?>">末页</a>
                <?php endif; ?>
            </td>

        </tr>
    </table>
</body>

</html>