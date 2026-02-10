<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkerStoreRequest;
use App\Http\Requests\WorkerUpdateRequest;
use App\Models\Worker;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): string
    {
        $workers = Worker::all();
        return view('workers.index', compact('workers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): string
    {
        return view('workers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WorkerStoreRequest $request): string
    {
        $data = $request->validated();

        Worker::query()->create($data);

        return redirect()->route('workers.index')
            ->with('success', 'Worker created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Worker $worker): string
    {
        return view('workers.show', compact('worker'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Worker $worker): string
    {
        return view('workers.edit', compact('worker'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WorkerUpdateRequest $request, Worker $worker): string
    {
        $request->validated();

        $worker->update($request->all());

        return redirect()->route('workers.index')
            ->with('success', 'Worker updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Worker $worker): string
    {
        $worker->delete();

        return redirect()->route('workers.index')
            ->with('success', 'Worker deleted successfully.');
    }
}
