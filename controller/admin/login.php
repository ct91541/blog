<?php

/* 
登录功能的原理 
    1.使用一个文件保存所有管理员的账号和密码(一行一个账号)
    2.先判断用户有是否已登录(判断 $_SESSION 中是否有一个标记)
        2.1 已登录: 显示后台

        2.2 未登录: 显示登录页面
            登录的流程:
            1.客户端通过表单提交账号和密码到PHP文件
            2.到保存账号密码的文件中去查找有没有这个账号以及密码是否正确
                不正确: 提示错误, 返回登录页面
                正确:提示成功, 跳到后台页面
退出登录原理: 删除 $_SESSION 中的标记
*/

view('login');

?>