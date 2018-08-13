<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IssuesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('issues/index') -> with(['issues' => \App\Models\Issue::orderby('due_at')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'due_at' => 'required',
        ]);

        $attributes = $request->all();
        $attributes['due_at'] = date('Y-m-d H:i:s', strtotime($attributes['due_at']));
        $attributes['user_id'] = auth()->user()->id;

        if(($issue = \App\Models\Issue::create($attributes)) == true) {
            event(new \App\Events\IssueCreated(\App\Models\Issue::find($issue['id'])));
            //\Mail::to(auth()->user())->send(new \App\Mail\TaskCreated(\App\Task::find($task['id'])));
        } else {
            session()->flash('error', 'Record creation failed.');
        };
        return redirect()->route('issues.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
