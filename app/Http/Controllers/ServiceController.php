<?php

namespace App\Http\Controllers;

use App\Repositories\TableRepository;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function updateTables(Request $request, TableRepository $tableRepository)
    {
        $tableRepository->addNewTables();
        return $this->success();
    }
}
