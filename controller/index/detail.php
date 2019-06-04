<?php

// 接收 title 参数
$title = $_GET['title'];

// 根据标题读取对应文章的内容
$content = file_get_contents('./data/arts/'.$title);

template('detail');

?>