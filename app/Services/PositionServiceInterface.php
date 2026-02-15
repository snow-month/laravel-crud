<?php

namespace App\Services;

use App\Models\Position;
use Illuminate\Database\Eloquent\Collection;

interface PositionServiceInterface
{
    public function getAll(): Collection;

    public function create(array $data);

    public function update(Position $position, array $data): void;

    public function destroy(Position $position): void;
}
