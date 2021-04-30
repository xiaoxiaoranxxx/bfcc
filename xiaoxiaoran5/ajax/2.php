<?php
mysql_connect('127.0.0.1', 'root', 'root');
mysql_select_db("xiaoxiaoran");
mysql_query('set names utf8');
$rs = mysql_query('select count(*) from region');
$rows = mysql_fetch_array($rs);
$recordcount = $rows[0];
$pagesize = 120;
$pagecount = ceil($recordcount / $pagesize);
$pageno = isset($_GET['pageno']) ? $_GET['pageno'] : 1;
if ($pageno < 1) $pageno = 1;
if ($pageno > $pagecount) $pageno = $pagecount;
$startno = ($pageno - 1) * $pagesize;
$sql = "select * from region limit $startno,$pagesize";
$rs = mysql_query($sql);
?>
<table>
    <tr>
        <th>code</th>
        <th>p_code</th>
        <th>name</th>
    </tr>
    <?php while ($rows = mysql_fetch_assoc($rs)) : ?>
        <tr>
            <td><?php echo $rows['code'] ?></td>
            <td><?php echo $rows['p_code'] ?></td>
            <td><?php echo $rows['name'] ?></td>
        </tr>
    <?php endwhile; ?>
    <tr>
        <td colspan="3">
            <?php for ($i = 1; $i <= $pagecount; $i++) {
                echo "<a href='?javascript:void(0)' onclick='showList($i)'>{$i}</a>&nbsp;";
            } ?>
        </td>
    </tr>
</table>