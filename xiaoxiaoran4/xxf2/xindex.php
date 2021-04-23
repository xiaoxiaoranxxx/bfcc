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
    $sql = "select * from books where bTypeId=$titleid order by bId desc";
    $rs = mysql_query($sql);


    //var_dump($rs); 资源

    //索引数组
    // while ($rows = mysql_fetch_array($rs)) {
    //     echo $rows[0], '-', $rows[1], '<br>';
    // }

    //关联数组
    // while ($rows = mysql_fetch_assoc($rs)) {
    //     echo $rows['bTypeId'], '-', $rows['bTypeName'], '<br>';
    // }

    //关联数组&索引数组 
    //mysql_fetch_array($rs)  下标,name都行

    //对象
    // while ($rows=mysql_fetch_object($rs)) {
    //     echo $rows->bTypeId, '-', $rows->bTypeName, '<br>';
    // }
    ?>

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
</body>

</html>