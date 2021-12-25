<?php
require 'conn.php ';
$rs = mysql_query('select * from category');
?>
<table>
    <tr>
        <?php $n = 0;
        while ($rows = mysql_fetch_assoc($rs)) : ?>
            <td>
                <a href="?titleid=<?php echo $rows['bTypeId'] ?>">
                    <?php echo $rows['bTypeName'] ?>
                </a>
            </td>
        <?php if (++$n % 5 == 0) echo '<tr></tr>';
        endwhile ?>
    </tr>
</table>


