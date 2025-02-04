<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\View\View;

class DashboardController extends Controller implements HasMiddleware
{
    public function home(Request $request): View{
        return view('dashboard.home');
    }

    public static function middleware(): array
    {
        return [
            'auth',
            'verified'
        ];
    }
}