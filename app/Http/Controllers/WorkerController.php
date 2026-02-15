<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkerStoreRequest;
use App\Http\Requests\WorkerUpdateRequest;
use App\Models\Worker;
use App\Services\PositionServiceInterface;
use App\Services\WorkerService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class WorkerController extends Controller
{
    public function __construct(
        private readonly WorkerService            $workerService,
        private readonly PositionServiceInterface $positionService
    )
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): Factory|View
    {
        $workers = $this->workerService->getAll();

        return view('workers.index', compact('workers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Factory|View
    {
        $positions = $this->positionService->getAll();

        return view('workers.create', compact('positions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WorkerStoreRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $this->workerService->create($data);

        return redirect()->route('workers.index')
            ->with('success', 'Worker created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Worker $worker): Factory|View
    {
        return view('workers.show', compact('worker'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Worker $worker): Factory|View
    {
        $positions = $this->positionService->getAll();

        return view('workers.edit', compact('worker', 'positions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WorkerUpdateRequest $request, Worker $worker): RedirectResponse
    {
        $data = $request->validated();

        $this->workerService->update($worker, $data);

        return redirect()->route('workers.index')
            ->with('success', 'Worker updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Worker $worker): RedirectResponse
    {
        $this->workerService->destroy($worker);

        return redirect()->route('workers.index')
            ->with('success', 'Worker deleted successfully.');
    }
}
