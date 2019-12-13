<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Page;

class Page1Controller extends Controller
{
    public function index()
    {

        $page=new Page;
        $page->page_title="page title 01";
        $page->save();




    }
}
