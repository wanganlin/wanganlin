
DROP TABLE IF EXISTS `auth`;
CREATE TABLE `auth` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL COMMENT '用户ID',
  `auth_type` varchar(16) NOT NULL COMMENT '认证类型',
  `passport` varchar(32) NOT NULL COMMENT '认证用户',
  `password` varchar(128) NOT NULL COMMENT '认证凭证',
  `status` tinyint(1) unsigned NOT NULL COMMENT '状态',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_user` (`auth_type`,`passport`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
