<?php 
  $index = (int)$_GET['index'];
  $doc = new DOMDocument();
  $doc->formatOutput = true;
  $doc->preserveWhiteSpace = false;
  $doc->load('./test1.xml');
  $node = $doc->getElementsByTagName('book')->item($index);
  $node->parentNode->removeChild($node); 
  $doc->save("./test1.xml");
  header('location:2.php');
  ?>
