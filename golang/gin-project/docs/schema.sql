CREATE TABLE `user`
(
    `id`           bigint unsigned NOT NULL AUTO_INCREMENT,
    `name`         varchar(60)  NOT NULL DEFAULT '',
    `email`        varchar(128) NOT NULL DEFAULT '',
    `created_time` datetime     NOT NULL COMMENT '创建时间',
    `updated_time` datetime              DEFAULT NULL COMMENT '更新时间',
    `deleted_time` datetime              DEFAULT NULL COMMENT '删除时间',
    PRIMARY KEY (`id`),
    KEY            `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

CREATE TABLE `article`
(
    `id`           bigint unsigned NOT NULL AUTO_INCREMENT,
    `title`        varchar(255) NOT NULL DEFAULT '',
    `content`      text NULL,
    `created_time` datetime     NOT NULL COMMENT '创建时间',
    `updated_time` datetime              DEFAULT NULL COMMENT '更新时间',
    `deleted_time` datetime              DEFAULT NULL COMMENT '删除时间',
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;