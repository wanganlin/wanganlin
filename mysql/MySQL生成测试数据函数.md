# MySQL生成测试数据函数

1、查看设置是否允许创建函数系统参数

```
show variables like 'log_bin_trust_function_creators';
```

2、临时设置允许创建函数系统参数

```
set global log_bin_trust_function_creators=TRUE;
```

3、创建测试数据库

```
create database mytest charset=utf8mb4;
use mytest;
```

4、创建测试数据表

```
CREATE TABLE `test1` (
    `id` INT (11) NOT NULL AUTO_INCREMENT,
    `user_id` VARCHAR (20) NOT NULL,
    `group_id` INT (11) NOT NULL,
    `create_time` datetime NOT NULL,
    PRIMARY KEY (`id`),
    KEY `index_user_id` (`user_id`) USING HASH

) ENGINE = INNODB AUTO_INCREMENT = 1 DEFAULT CHARSET = utf8mb4;
```

5、创建随机字符串函数

```
delimiter $$
CREATE FUNCTION rand_string(n int) RETURNS varchar(255) 
begin        
  declare chars_str varchar(100) 
  default "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
  declare return_str varchar(255) default "";        
  declare i int default 0;
  while i < n do        
      set return_str=concat(return_str,substring(chars_str,floor(1+rand()*62),1));
      set i= i+1;        
  end while;        
  return return_str;    
end $$

delimiter;
```

5.1、自定义函数操作

```
-- 查看函数
SHOW FUNCTION STATUS LIKE 'rand_string%';
 
-- 查看详情函数
SHOW CREATE FUNCTION rand_string;|\G
 
-- 查询函数
SELECT rand_string(10);
 
-- 删除函数 rand_string:函数名
DROP FUNCTION IF EXISTS rand_string;
```

6、创建存储过程

```
delimiter $$
CREATE  PROCEDURE `insert_data`(IN n int)
BEGIN  
  DECLARE i INT DEFAULT 1;
    WHILE (i <= n ) DO
      INSERT into test1 (user_id,group_id,create_time ) VALUEs (rand_string(10),FLOOR(RAND() * 100) ,now() );
            set i=i+1;
    END WHILE;
END $$
delimiter;
```

6.1、存储过程操作

```
-- 查看存储过程
show procedure status like 'insert_data%';
 
-- insert_data 存储过程名称 查询详情
SHOW CREATE PROCEDURE insert_data;|\G
 
-- 删除存储过程 insert_data 名称
DROP PROCEDURE insert_data;
```

7、调用存储过程，插入数据

```
-- 插入十万条数据，大约4分钟左右
call insert_data(100000);
```

建议一次数量十万，多开几个线程执行

8、插入成功后，可以快速创建其他数据表并插入大量数据

```
create table test2 engine=INNODB as select * from test1;
```
 