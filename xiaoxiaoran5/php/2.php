<?php
header("content-type:text/html;charset=utf-8");

$doc = new DOMDocument();
$doc->load('./test1.xml');
$books = $doc->getElementsByTagName('book'); ?>
<a href="2.add.php">添加</a>
<table width="500" border="1" bordercolor="blue" align="center">
    <tr>
        <th>书名</th>
        <th>类别</th>
        <th>修改</th>
        <th>删除</th>
    </tr>
    <?php for ($i = 0, $n = $books->length; $i < $n; $i++) : ?>
        <tr>
            <td><?php echo $books->item($i)->nodeValue ?></td>
            <td><?php echo $books->item($i)->getAttribute('type') ?></td>
            <td><input type="button" value="修改" onclick="location.href='2.update.php?index=<?php echo $i ?>'"></td>
            <td><input type="button" value="删除" onclick="location.href='2.del.php?index=<?php echo $i ?>'"></td>
        </tr>
    <?php endfor; ?>
</table>