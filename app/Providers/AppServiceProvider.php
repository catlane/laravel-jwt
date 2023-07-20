<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (config('app.debug') == true) {
            DB::listen(function ($query) {
                $sql = $query->sql;
                $bindings = [];
                foreach ($query->bindings as $k => $binding) {
                    $bindings[$k] = urlencode($binding);
                }
                $param = array_values($bindings);
                $p = strpos($sql, '?');
                $i = 0;
                while ($p !== false) {
                    $map = $param[$i];
                    $map = is_numeric($map) ? $map : "'$map'";
                    $sql = substr_replace($sql, $map, $p, 1);
                    $p = strpos($sql, '?', ++$p);
                    $i++;
                }
                clog('数据库查询语句', [(string)$query->time, urldecode($sql)], 'sql_query');
            });
        }

    }
}
