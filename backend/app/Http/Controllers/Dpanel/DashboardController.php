<?php

namespace App\Http\Controllers\Dpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Campaign;
class DashboardController extends Controller
{
    public function index()
    {

        $total['category'] =Category::count();
        $total['campaign'] =Campaign::count();
        $total['activeCampaign'] =Campaign::active()->count();
        return view('dpanel.dashboard', compact('total'));
    }
}
