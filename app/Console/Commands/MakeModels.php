<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Composer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MakeModels extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:models {table_name}';

    protected $common_name = '';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */


    protected $currentUserName;




    public function __construct()
    {
        $this->time = date('Y-m-d H:i:s', time());
        $this->currentUserName = get_current_user();
        if ($this->currentUserName === 'yyh') {
            $this->currentUserName = '猫巷';
        }
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $tableName = $this->argument('table_name');

//        $databaseName = $this->argument('database_name');
        $databaseName = 'mysql';


        $this->alert('选用库为：' . $databaseName . '，选择数据表为：' . $tableName);
        if (!$this->confirm('请查看库名和表名是否正确，是y,否n', 'true')) {
            $this->error('请重新开始');
            die;
        }

        $this->common_name = $this->strToUcword($tableName);


        $tableStructure = $this->tableStructure($tableName, $databaseName);
        $privateCloums = "/**";
        if ($tableStructure) {
            $fillable = "[\r\n";
            $createField = "[\r\n";
            foreach ($tableStructure as $k => $v) {
                if ($v->Key == 'PRI') {
                    continue;
                }
                $type = substr($v->Type, 0, strpos($v->Type, '('));

                $fillable .= "        '{$v->Field}',#{$v->Comment}\r\n";
                $createField .= "        '{$v->Field}' => '" . (strpos($type ,'int') ? 0 : '') ."',#{$v->Comment}\r\n";
                if (strpos($type, 'int')) {
                    $type = 'int';
                }
                if (strpos($type, 'char') !== null || strpos($type, 'text') !== null) {
                    $type = 'string';
                }
                $privateCloums .= "\r\n";
                $privateCloums .= <<<eof
 * @property {$type} {$v->Field} {$v->Comment}
eof;
            }
            XlzGoodsLiveVideoModel:

            $fillable = rtrim(rtrim($fillable, "\r\n"), ',')."\r\n    ]";
            $createField = rtrim(rtrim($createField, "\r\n"), ',')."\r\n    ]";
        } else {
            $fillable = '[]';
        }

        $exists = Storage::disk('app')
            ->exists("Models\\{$this->common_name}Model.php");
        if ($exists) {
            $this->error("Models\\{$this->common_name}Model.php已存在");
            return '';
        }

        $tableComment = '';
        try {
            $tableComment = DB::select(
                "SELECT TABLE_COMMENT
FROM INFORMATION_SCHEMA.TABLES
WHERE TABLE_NAME = '{$tableName}'"
            );
            $tableComment = $tableComment[0]->TABLE_COMMENT ?? $tableName;
        } catch (\Exception $exception) {
            $tableComment = $tableName;
        }


        $content = <<<eof
<?php
/**
 * Created by PhpStorm.
 * User: {$this->currentUserName}
 * DateTime:{$this->time}
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * {$tableComment}
$privateCloums
 */
class {$this->common_name}Model extends Model
{
    protected \$table = '{$tableName}';

    protected \$primaryKey = 'id';

    protected \$connection = '{$databaseName}';

    protected \$fillable = {$fillable};

    protected function createField(){
        return {$createField};
    }


}

eof;
        Storage::disk('app')
            ->put("Models\\{$this->common_name}Model.php", $content);
        $this->question('创建'."Models\\{$this->common_name}Model.php成功");

    }

    protected function strToUcword($str)
    {
        $nameArr = explode('_', $str);
        $name = '';
        foreach ($nameArr as $k => $v) {
            $name .= ucfirst($v);
        }
        return $name;
    }

    //获取表结构
    protected function tableStructure($tableName, $databaseName)
    {
        try {
            $result = DB::connection($databaseName)->select('SHOW FULL COLUMNS FROM ' . "`zd`.".$tableName);

        } catch (\Exception $exception) {
            var_dump('查询语句错误',$exception->getMessage());
            die;
            return [];
        }
        return $result;
    }


}
