要高效地将 CSV 文件导入到 MySQL 数据库，可以使用 LOAD DATA INFILE 语句，这个语句可以直接将 CSV 文件中的数据批量插入到数据库中，大大提高了导入效率。

以下是一个基本的使用示例：

```php
// 要导入的 CSV 文件路径
$file_path = '/path/to/your/csv/file.csv';

// 数据库连接信息
$db_host = 'your_host';
$db_port = 'your_port';
$db_user = 'your_username';
$db_pass = 'your_password';
$db_name = 'your_database_name';
$db_table = 'your_table_name';

// 连接数据库
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name, $db_port);

// 判断是否连接成功
if ($mysqli->connect_errno) {
    die("Connection failed: " . $mysqli->connect_error);
}

// 开始导入数据
$sql = "
    LOAD DATA LOCAL INFILE '".$mysqli->real_escape_string($file_path)."'
    INTO TABLE ".$mysqli->real_escape_string($db_table)." 
    FIELDS TERMINATED BY ','
    ENCLOSED BY '\"'
    LINES TERMINATED BY '\\n'
    IGNORE 1 ROWS
";
$mysqli->query($sql);

// 关闭数据库连接
$mysqli->close();
```

这个示例中使用了 MySQLi 连接数据库，首先建立了一个连接，然后构建 SQL 语句，使用 LOAD DATA INFILE 语句，将 CSV 文件中的数据批量插入到指定的数据库和表中。在 SQL 语句中，需要注意以下几点：

- `LOCAL` 表示使用客户端本地文件，而不是MySQL服务器上的文件。 如果没有使用 `LOCAL`，则需要在服务器上找到文件。
- `FIELDS TERMINATED BY ','` 表示 CSV 文件中列与列之间使用逗号分隔。
- `ENCLOSED BY '\"'` 表示 CSV 文件中的字段值使用双引号括起来。
- `LINES TERMINATED BY '\\n'` 表示 CSV 文件中的行使用换行符分隔。
- `IGNORE 1 ROWS` 表示忽略 CSV 文件中的第一行（通常为表头），不进行数据导入。

最后，使用 `$mysqli->query()` 函数将 SQL 语句发送到数据库执行，并关闭数据库的连接。通过这种方法，即可高效地将 CSV 文件中的数据批量导入到 MySQL 数据库中。

### mysql数据在导入时如何去重的问题(通过LOAD DATA INFILE方式)

原数据有100万条左右，然后通过如下代码实现了导入，但是这里有一个问题，图中标颜色的数据存在多列同时重复的数据，需要去重，那有什么办法在通过 LOAD DATA INFILE 进行导入的时候就去重呢

```
create table new_table (`流水号` char(30),`商品条码` varchar(255),`日期` varchar(255),`时间` varchar(255),`商品信息` varchar(255))
LOAD DATA INFILE 'D:\\360\\100S-(utf8).csv' REPLACE INTO TABLE mysql.new_table
FIELDS TERMINATED BY ',' LINES TERMINATED BY '\n'
```
