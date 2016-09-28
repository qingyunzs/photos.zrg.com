<?php
require_once("node.php");
require_once("tree.php");

$tree = new tree($data);
$output = $tree->getTree();
echo "<pre>";
print_r($output);
?>