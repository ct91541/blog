<?php

// 1.接收表单提交的数据
// var_dump($_POST);

// 2.生成文件
file_put_contents('./data/arts/'.$_POST['title'],$_POST['content']);

// 提示信息 , 跳转到所有文章列表页
message('添加成功!', 'all_articles');


?>