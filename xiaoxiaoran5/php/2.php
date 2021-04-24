<?php
header("content-type:text/html;charset=utf-8");

$doc = new DOMDocument();
$doc->load('./test1.xml');
$books = $doc->getElementsByTagName('book'); ?>

<table width="500" border="1" bordercolor="blue" align="center">
    <tr>
        <th>书名</th>
        <th>类别</th>
    </tr>
    <?php for ($i = 0, $n = $books->length; $i < $n; $i++) : ?>
        <tr>
            <td><?php echo $books->item($i)->nodeValue ?></td>
            <td><?php echo $books->item($i)->getAttribute('type') ?></td>
        </tr>
    <?php endfor; ?>
</table>

