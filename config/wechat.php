<?php

return [
    // 公众号
    'official_account' => [
        'app_id' => env('WECHAT_OFFICIAL_ACCOUNT_APPID', 'your-app-id'), // AppID
        'secret' => env('WECHAT_OFFICIAL_ACCOUNT_SECRET', 'your-app-secret'), // AppSecret
        'token' => env('WECHAT_OFFICIAL_ACCOUNT_TOKEN', 'your-token'), // Token
        'aes_key' => env('WECHAT_OFFICIAL_ACCOUNT_AES_KEY', ''), // EncodingAESKey 明文模式请勿配置

        /**
         * OAuth 配置
         *
         * scopes：公众平台（snsapi_userinfo / snsapi_base），开放平台：snsapi_login
         * callback：OAuth授权完成后的回调页地址(如果使用中间件，则随便填写。。。)
         */
        'oauth' => [
            'scopes' => array_map('trim', explode(',', env('WECHAT_OFFICIAL_ACCOUNT_OAUTH_SCOPES', 'snsapi_userinfo'))),
            'callback' => env('WECHAT_OFFICIAL_ACCOUNT_OAUTH_CALLBACK', '/wechat/auth/callback'),
        ],
    ],

    // 微信支付
    'payment' => [
        'sandbox' => env('WECHAT_PAYMENT_SANDBOX', false),
        'app_id' => env('WECHAT_PAYMENT_APPID', ''),
        'mch_id' => env('WECHAT_PAYMENT_MCH_ID', 'your-mch-id'),
        'key' => env('WECHAT_PAYMENT_KEY', 'key-for-signature'),
        'cert_path' => env('WECHAT_PAYMENT_CERT_PATH', 'path/to/cert/apiclient_cert.pem'), // XXX: 绝对路径！！！！
        'key_path' => env('WECHAT_PAYMENT_KEY_PATH', 'path/to/cert/apiclient_key.pem'), // XXX: 绝对路径！！！！
        'notify_url' => 'http://example.com/payments/wechat-notify', // 默认支付结果通知地址
    ],
];
