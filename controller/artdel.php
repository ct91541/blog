<?php

// 接收要删除的标题
$title = $_GET['title'];

// 删除文件
unlink('./data/arts/' . $title);

// 提示消息 跳转
message('删除成功!', 'index.php?a=all_articles');

?>