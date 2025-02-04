<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEntrysheetRequest;
use App\Http\Requests\UpdateEntrysheetRequest;
use App\Models\Entrysheet;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\View\View;

class EntrysheetController extends Controller implements HasMiddleware
{
    public function home(Request $request): View{
        return view('entrysheet.home');
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEntrysheetRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Entrysheet $entrysheet)
    {
        //
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
