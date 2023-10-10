<?php

namespace App\Http\Controllers;

use App\Models\MasterCategory;

class ManagerController extends Controller
{
    public function index()
    {
        return view('manager.index');
    }

    public function main_category()
    {
        $main_categorys = MasterCategory::get();

        return view('manager.main_category.index')->with('main_categorys', $main_categorys);
    }
}
