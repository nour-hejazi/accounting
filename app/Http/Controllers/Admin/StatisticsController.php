<?php

namespace App\Http\Controllers\Admin;

use App\Invoice;
use App\Message;
use App\Post;
use App\Project;
use App\Rent;
use App\Statistics;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatisticsController extends Controller
{
    public function index()
    {
        $users = User::all();
        $title = trans('titles.statistics_index');
        return view('admin.statistics.index', compact('users','title'));
    }
    public function debtors()
    {
        $title = trans('titles.debtors_index');
        $invoices = Invoice::where('rest', '>', 0)->get();
//        dd($invoices);
        return view('admin.statistics.debtors', compact('title', 'invoices'));
    }
}
