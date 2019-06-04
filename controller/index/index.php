<?php

// 1.读取data/arts下所有的文章文件
$data = scandir('./data/arts');


// 2.删除前两个特殊文件  .和..
unset($data[0]);
unset($data[1]);

// 3.循环读取每个文章内容的前 100 个字符
foreach($data as &$v){
    // 以只读方式打开文件
    // $fp = fopen('./data/arts/'.$v, 'r');
    $c = file_get_contents('./data/arts/'.$v);
    $v = [
        'title' => $v,
        'content' => mb_substr($c, 0, 100)
    ];
    // fclose($fp);
}

// 加载首页
template('index');

?>