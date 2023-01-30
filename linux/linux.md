# 服务器502错误，php-fpm无法启动，提示磁盘空间不足

通过 df -h 查看之后，发现磁盘空间充裕，原因是大量小文件撑爆 Inodes

查看哪个目录下存在大量小文件

```
for i in /var/spool/postfix/*; do echo $i; find $i | wc -l; done
```

找到目录之后，进入目录执行删除脚本

```
find . -name "*" | xargs rm -rf '*'
```
