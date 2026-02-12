<?php

namespace App\Http\Controllers;

use App\Http\Requests\PositionStoreRequest;
use App\Http\Requests\PositionUpdateRequest;
use App\Models\Position;
use App\Services\PositionService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class PositionController extends Controller
{
    public function __construct(
        private readonly PositionService $positionService
    )
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): Factory|View
    {
        $positions = $this->positionService->getAll();

        return view('positions.index', compact('positions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Factory|View
    {
        return view('positions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PositionStoreRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $this->positionService->create($data);

        return redirect()->route('positions.index')
            ->with('success', 'Positional created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Position $position): View|Factory
    {
        return \view('positions.show', compact('position'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Position $position): View|Factory
    {
        return \view('positions.edit', compact('position'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PositionUpdateRequest $request, Position $position): RedirectResponse
    {
        $request->validated();

        $data = $request->all();
        $this->positionService->update($position, $data);

        return redirect()->route('positions.index')
            ->with('success', 'Position updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Position $position): RedirectResponse
    {
        $this->positionService->destroy($position);

        return redirect()->route('positions.index')
            ->with('success', 'Position deleted successfully.');
    }
}
