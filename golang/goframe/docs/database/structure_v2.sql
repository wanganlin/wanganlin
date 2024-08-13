-- ----------------------------
-- Table structure for auth
-- ----------------------------
DROP TABLE IF EXISTS `auth`;
CREATE TABLE `auth`
(
    `id`         bigint UNSIGNED NOT NULL AUTO_INCREMENT,
    `type`       varchar(16)  NOT NULL COMMENT '认证类型',
    `user_id`    bigint UNSIGNED NOT NULL COMMENT '用户ID',
    `passport`   varchar(32)  NOT NULL COMMENT '认证用户',
    `password`   varchar(128) NOT NULL COMMENT '认证凭证',
    `status`     tinyint UNSIGNED NOT NULL COMMENT '状态',
    `created_at` datetime     NOT NULL,
    `updated_at` datetime     NOT NULL,
    `deleted_at` datetime     NOT NULL,
    PRIMARY KEY (`id`) USING BTREE,
    UNIQUE INDEX `type_passport`(`type` ASC, `passport` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`
(
    `id`         bigint UNSIGNED NOT NULL AUTO_INCREMENT,
    `name`       varchar(32)  NOT NULL COMMENT '昵称',
    `avatar`     varchar(255) NOT NULL COMMENT '头像',
    `birthday`   date         NOT NULL COMMENT '生日',
    `email`      varchar(64)  NOT NULL COMMENT '电子邮箱',
    `mobile`     varchar(16)  NOT NULL COMMENT '手机号码',
    `status`     tinyint UNSIGNED NOT NULL COMMENT '状态',
    `created_at` datetime     NOT NULL,
    `updated_at` datetime     NOT NULL,
    `deleted_at` datetime NULL DEFAULT NULL,
    PRIMARY KEY (`id`) USING BTREE,
    UNIQUE INDEX `mobile`(`mobile` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 ROW_FORMAT = Dynamic;

-- alter adsense
ALTER TABLE `adsense`
    ADD COLUMN `id` int UNSIGNED NOT NULL AUTO_INCREMENT FIRST,
ADD PRIMARY KEY (`id`);

-- alter area_region
-- auto_manage
-- cat_recommend
-- exchange_goods
-- goods_article
-- goods_cat
-- group_goods
-- keywords
-- link_goods
-- package_goods
-- plugins
-- searchengine
-- sessions
-- sessions_data
-- stats
-- template
-- volume_price

-- reg_extend_info Id -> id