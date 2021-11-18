<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Page;

class DashboardController extends Controller
{

    /**
     * Display the homepage dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();

        return Inertia::render('Dashboard/Dashboard', [
            'pages' => $pages,
        ]);
    }

}
