<?php

// 1.接收表单中的数据
$username = $_POST['username'];
$password = $_POST['password'];

// 2.判断账号是否正确
$account = file_get_contents('./data/account');  // 读取账号文件
// 根据行转成数组
$account = explode("\n", $account);
// 循环每个账号
foreach($account as $v){
    // 拼出账号的格式
    $tmp = $username . ' ' . md5($password);
    // 匹配账号密码
    if ($tmp == $v) {
        // 匹配成功
        
        // 把用户名保存到 SESSION 中做标记
        $_SESSION['name'] = $username;
        message('登录成功!', '');
    }
}
// 匹配失败
message('账号或密码错误!', 'login');

?>