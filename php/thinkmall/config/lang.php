<?php

return [
    // 默认语言
    'default_lang' => env('DEFAULT_LANG', 'zh-cn'),
    // 自动侦测浏览器语言
    'auto_detect_browser' => true,
    // 允许的语言列表
    'allow_lang_list' => [],
    // 多语言自动侦测变量名
    'detect_var' => 'lang',
    // 是否使用Cookie记录
    'use_cookie' => true,
    // 多语言cookie变量
    'cookie_var' => 'app_lang',
    // 多语言header变量
    'header_var' => 'app-lang',
    // 扩展语言包
    'extend_list' => [],
    // Accept-Language转义为对应语言包名称
    'accept_language' => [
        'zh-hans-cn' => 'zh-cn',
    ],
    // 是否支持语言分组
    'allow_group' => false,
];
