<?php

declare(strict_types=1);

namespace app\foundation\command\gen;

use think\console\Command;
use think\console\Input;
use think\console\Output;
use think\facade\Db;

class GenEntityCommand extends Command
{
    use SchemaTrait;

    private array $ignoreTables = ['migrations'];

    protected function configure(): void
    {
        $this->setName('gen:entity')
            ->setDescription('Generate entity objects');
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

            $this->entityTpl($className, $columns);
        }

        return 1;
    }

    private function entityTpl($className, $columns): void
    {
        $fields = "\n";
        foreach ($columns as $column) {
            if ($column['Field'] === 'default') {
                $column['Field'] = 'isDefault';
            }
            if ($column['Field'] === 'id' && empty($column['Comment'])) {
                $column['Comment'] = 'ID';
            }
            $fields .= "    #[OA\Property(property: '{$column['Field']}', description: '{$column['Comment']}', type: '{$column['SwaggerType']}')]\n";
            $fields .= '    private '.$column['BaseType'].' $'.parse_name($column['Field'], 1, false).";\n\n";
        }

        foreach ($columns as $column) {
            $fields .= $this->getSet(parse_name($column['Field'], 1, false), $column['BaseType'])."\n\n";
        }

        $fields = rtrim($fields, "\n");

        $content = file_get_contents(__DIR__.'/stubs/entity.stub');
        $content = str_replace([
            '{$className}',
            '{$fields}',
        ], [
            $className,
            $fields,
        ], $content);

        file_put_contents(app_path('entity').$className.'.php', $content);
    }
}
