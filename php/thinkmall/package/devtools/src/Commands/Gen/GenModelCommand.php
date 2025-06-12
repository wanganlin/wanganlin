<?php

declare(strict_types=1);

namespace Juling\DevTools\Commands\Gen;

use think\console\Command;
use think\console\Input;
use think\console\Output;
use think\facade\Db;

class GenModelCommand extends Command
{
    use SchemaTrait;

    private array $ignoreTables = ['migrations'];

    protected function configure(): void
    {
        $this->setName('gen:model')
            ->setDescription('Generate model objects');
    }

    protected function execute(Input $input, Output $output): int
    {
        $database = env('DB_DATABASE');
        $tables = Db::query('show tables;');

        foreach ($tables as $row) {
            $tableName = implode('', $row);
            if (in_array($tableName, $this->ignoreTables)) {
                continue;
            }
            $className = parse_name($tableName, 1);
            $columns = $this->getTableInfo($database, $tableName);

            $this->modelTpl($tableName, $className, $columns);
        }

        return 1;
    }

    private function modelTpl($tableName, $className, $columns): void
    {
        $writeTime = false;
        $softDelete = false;

        $fieldStr = '';
        foreach ($columns as $column) {
            $fieldStr .= str_pad(' ', 8)."'{$column['Field']}',\n";
            if ($column['Field'] === 'created_time') {
                $writeTime = true;
            }
            if ($column['Field'] === 'deleted_time') {
                $softDelete = true;
            }
        }

        $fieldStr = rtrim($fieldStr, "\n");

        $createTime = '';
        if ($writeTime) {
            $createTime = "
    /**
     * 是否需要自动写入时间戳 如果设置为字符串 则表示时间字段的类型.
     *
     * @var bool|string
     */
    protected \$autoWriteTimestamp = 'datetime';

    /**
     * 创建时间字段 false表示关闭.
     *
     * @var false|string
     */
    protected \$createTime = 'created_time';

    /**
     * 更新时间字段 false表示关闭.
     *
     * @var false|string
     */
    protected \$updateTime = 'updated_time';";
        }

        $useSoftDelete = '';
        $deleteTime = '';
        if ($softDelete) {
            $useSoftDelete = "    use SoftDelete;\n";
            $deleteTime = "
    /**
     * 软删除字段
     */
    protected string \$deleteTime = 'deleted_time';\n";
        }

        $content = file_get_contents(__DIR__.'/stubs/model.stub');
        $content = str_replace([
            '{$className}',
            '$tableName',
            '$useSoftDelete',
            '$createTime',
            '$deleteTime',
            '$fieldStr',
        ], [
            $className,
            $tableName,
            $useSoftDelete,
            $createTime,
            $deleteTime,
            $fieldStr,
        ], $content);

        file_put_contents(app_path('model').$className.'Model.php', $content);
    }
}
