<?php

declare(strict_types=1);

namespace App\Command;

use Hyperf\Command\Annotation\Command;
use Hyperf\Command\Command as BaseCommand;
use Hyperf\DbConnection\Db;
use Hyperf\Utils\Str;

#[Command]
class Generator extends BaseCommand
{
    protected ?string $name = 'gen:model:all';

    protected string $description = 'Generate Model Command';

    public function handle()
    {
        $db = env('DB_DATABASE');
        $prefix = env('DB_PREFIX');

        $tables = Db::select('show tables');
        foreach ($tables as $key => $table) {
            $table = $table['Tables_in_' . $db];
            $name = str_replace($prefix, '', $table);
            $class = Str::studly($name);
            $model = $this->template($class, $name, $prefix);
            file_put_contents(BASE_PATH . '/app/Model/' . $class . '.php', $model);
        }

        $this->line('Done', 'info');
    }

    /**
     * @param $table
     * @return array
     */
    private function tableInfo($table): array
    {
        $pk = null;
        $fields = '';

        $info = Db::select('desc ' . $table);

        foreach ($info as $key => $item) {
            if ($key > 0) {
                $fields .= ",\n";
            }
            $fields .= "        '{$item['Field']}'";

            if ($item['Key'] === 'PRI') {
                $pk = $item['Field'];
            }
        }

        return ['fillable' => $fields, 'pk' => $pk];
    }

    private function template($class, $table, $prefix): string
    {
        $info = $this->tableInfo($prefix . $table);

        $tpl = <<<EOF
<?php

declare (strict_types=1);

namespace App\Model;

use Hyperf\DbConnection\Model\Model;

/**
 * Class {$class}
 * @package App\Model
 */
class {$class} extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected \$table = '{$table}';

EOF;

        if (!is_null($info['pk'])) {
            $tpl .= <<<EOF

    /**
     * @var string
     */
    protected \$primaryKey = '{$info['pk']}';

EOF;
        }

        $tpl .= <<<EOF

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected \$fillable = [
{$info['fillable']}
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected \$casts = [];
}

EOF;

        return $tpl;
    }
}
