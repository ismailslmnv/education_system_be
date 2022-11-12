<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class DbService
{
    private const FILTER_BY = ['migrations', 'password_resets', 'failed_jobs', 'personal_access_tokens', 'sessions'];
    public static function getTables(): array
    {
        $tables = DB::select('SHOW TABLES');
        return $tables;
    }
    public static function getTableNames(bool $filter = true): array
    {
        $tables = self::getTables();
        $tableNames = [];
        $db = 'Tables_in_' . env('DB_DATABASE');
        foreach ($tables as $table) {
            $tableNames[] = $table->$db;
        }
        return $filter ? array_diff($tableNames, self::FILTER_BY) : $tableNames;
    }
}
