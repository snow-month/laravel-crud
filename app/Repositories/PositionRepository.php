<?php

namespace App\Repositories;

use App\Models\Position;
use Illuminate\Database\Eloquent\Collection;

class PositionRepository implements PositionRepositoryInterface
{
    public function getAll(): Collection
    {
        return Position::all();
    }

    public function create(array $data)
    {
        return Position::query()->create($data);
    }

    public function update(Position $position, array $data): void
    {
        $position->update($data);
    }

    public function destroy(Position $position): void
    {
        $position->delete();
    }
}
