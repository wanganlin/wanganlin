DROP TABLE IF EXISTS `auth`;
CREATE TABLE `auth`
(
    `id`         bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `type`       varchar(16)  NOT NULL COMMENT '认证类型',
    `user_id`    bigint(20) unsigned NOT NULL COMMENT '用户ID',
    `passport`   varchar(32)  NOT NULL COMMENT '认证用户',
    `password`   varchar(128) NOT NULL COMMENT '认证凭证',
    `status`     tinyint(1) unsigned NOT NULL COMMENT '状态',
    `created_at` datetime     NOT NULL,
    `updated_at` datetime     NOT NULL,
    `deleted_at` datetime     NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `type_passport` (`type`,`passport`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`
(
    `id`         bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `name`       varchar(32)  NOT NULL COMMENT '昵称',
    `avatar`     varchar(255) NOT NULL COMMENT '头像',
    `birthday`   date         NOT NULL COMMENT '生日',
    `email`      varchar(64)  NOT NULL COMMENT '电子邮箱',
    `mobile`     varchar(16)  NOT NULL COMMENT '手机号码',
    `status`     tinyint(1) unsigned NOT NULL COMMENT '状态',
    `created_at` datetime     NOT NULL,
    `updated_at` datetime     NOT NULL,
    `deleted_at` datetime NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `mobile` (`mobile`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
