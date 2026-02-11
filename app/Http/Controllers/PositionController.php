<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Factory|View
    {
        $positions = Position::all();

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
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'salary' => 'required|integer'
        ]);

        Position::query()->create($data);

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
    public function update(Request $request, Position $position): RedirectResponse
    {
        $data = $request->validate([
            'title' => 'string|max:255',
            'salary' => 'integer'
        ]);

        $position->update($data);

        return redirect()->route('positions.index')
            ->with('success', 'Position updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Position $position): RedirectResponse
    {
        $position->delete();

        return redirect()->route('positions.index')
            ->with('success', 'Position deleted successfully.');
    }
}
