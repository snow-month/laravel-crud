<?php

namespace App\Repositories;

use App\Models\Position;
use Illuminate\Database\Eloquent\Collection;

interface PositionRepositoryInterface
{
    public function getAll(): Collection;

    public function create(array $data);

    public function update(Position $position, array $data): void;

    public function destroy(Position $position): void;
}
