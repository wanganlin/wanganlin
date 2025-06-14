<?php

return [
    // 模板引擎类型
    'type' => 'Think',
    // 默认模板渲染规则 1 解析为小写+下划线 2 全部转换小写 3 保持操作方法
    'auto_rule' => 1,
    // 模板目录名
    'view_dir_name' => 'resource/views',
    // 模板后缀
    'view_suffix' => 'tpl.php',
    // 模板文件名分隔符
    'view_depr' => DIRECTORY_SEPARATOR,
    // 模板引擎普通标签开始标记
    'tpl_begin' => '{',
    // 模板引擎普通标签结束标记
    'tpl_end' => '}',
    // 标签库标签开始标记
    'taglib_begin' => '{',
    // 标签库标签结束标记
    'taglib_end' => '}',
    // 是否开启模板编译缓存,设为false则每次都会重新编译
    'tpl_cache' => ! env('APP_DEBUG', false),
];
