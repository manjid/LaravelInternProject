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

    public function show()
    {
        $id = request('id');

        $report=Helpdesk::query()
        ->where('id',$id)
        ->firstOrFail();

        return view('helpdesk.show', compact('report'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Helpdesk $report)
    {
        $id = request('id');

        $report = Helpdesk::query()
        ->where('id',$id)
        ->firstOrFail();

        return view('helpdesk.edit', compact('report'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Helpdesk $report)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'problem' => 'required',
            'description' => 'required|min:10',
            'attachment' => 'max:2048',

        ]);

        $report = new Helpdesk($validatedData);

        $report->save();

        return Redirect::route('helpdesk.index')->with('popup', 'report-update');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function markForDeletion(string $id)
    {
        $helpdesk = Helpdesk::findOrFail($id);
        $helpdesk->markForDeletion();

        return Redirect::route('helpdesk.store')->with('status', 'marked-for-deletion');
    }
    public function destroy(string $id)
    {
        $helpdesk = Helpdesk::findOrFail($id);
        if ($helpdesk->delete_status == 'marked-for-deletion') {
            $helpdesk->forceDelete();
        } else {
            $helpdesk->delete();
        }

        return Redirect::route('helpdesk.store')->with('status', 'sweet-alert');
    }
}
