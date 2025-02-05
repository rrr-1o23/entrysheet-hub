<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEntrysheetRequest;
use App\Http\Requests\UpdateEntrysheetRequest;

use App\Models\Entrysheet;
use App\Models\Company;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class EntrysheetController extends Controller implements HasMiddleware
{
    public function home(Request $request): View{
        $entrysheets = Entrysheet::where('user_id', Auth::id())->with('company')->get();
        return view('entrysheet.home', compact('entrysheets'));
    }

    public static function middleware(): array
    {
        return [
            'auth',
            'verified'
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Company::where('user_id', Auth::id())->get();
        return view('entrysheet.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEntrysheetRequest $request)
    {
        Entrysheet::create([
            'title' => $request->title,
            'status' => $request->status,
            'deadline' => $request->deadline,
            'company_id' => $request->company_id,
            'user_id' => Auth::id(),
        ]);
        return redirect()->route('entrysheet')->with('success', 'エントリーシートが登録されました！');
    }

    /**
     * Display the specified resource.
     */
    public function show(Entrysheet $entrysheet)
    {
        $entrysheet->load('contents');
        return view('entrysheet.show', compact('entrysheet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entrysheet $entrysheet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEntrysheetRequest $request, Entrysheet $entrysheet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entrysheet $entrysheet)
    {
        //
    }
}
