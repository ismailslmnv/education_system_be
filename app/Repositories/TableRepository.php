<?php

namespace App\Repositories;

use App\Models\Table;
use App\Services\DbService;
use Illuminate\Support\Collection;

class TableRepository
{
    /**
     * Get all tables
     */
    public function getTables(): Collection
    {
        return Table::all();
    }

    /**
     *  get new tables
     */
    public function getNewTables(): array
    {
        $dbTables = $this->getDbTables();
        $tables = $this->getTables();
        foreach($tables as $table){
            $dbTables= array_diff($dbTables, $table->name);
        }
        // dd($dbTables);
        return $dbTables;
    }

    /**
     * Get DB Tables
     */
    public function getDbTables(): array
    {
        return DbService::getTableNames();
    }

    /**
     * Add new tables
     */
    public function addNewTables(): void{
        $newTables = $this->getNewTables();
        foreach ($newTables as $newTable) {
            $table = new Table();
            $table->name = $newTable;
            $table->slug = $newTable;
            $table->status = 1;
            $table->save();
        }
    }
}
