<?php

namespace App\Http\Controllers;
use App\Models\Helpdesk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class helpdeskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function helpdesk()
    {
        return view('helpdesk.helpdesk' , ['currentStep' => 1]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('helpdesk.helpdesk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'problem' => 'required',
            'description' => 'required|min:10',
            'attachment' => 'max:2048',

        ]);

        $helpdesk = new Helpdesk($validatedData);

        $helpdesk->save();

        return Redirect::route('helpdesk.index')->with('status', 'report-save');

    }

    /**
     * Display the specified resource.
     */
    public function index()
    {
        $reports = Helpdesk::latest()->paginate(5);

        return view('helpdesk.store', compact('reports'))->with(request()->input('page'));
        //compact tu maksudnya dia sama cam $reports cuma takyah dollar sign, function dia untuk sent ke variable untuk loop


    }

    public function show(Helpdesk $reports)
    {
        return view('helpdesk.show', compact('reports'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
