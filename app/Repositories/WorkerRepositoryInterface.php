<?php

namespace App\Repositories;

use App\Models\Worker;
use Illuminate\Database\Eloquent\Collection;

interface WorkerRepositoryInterface
{
    public function getAll(): Collection;

    public function create(array $data);

    public function update(Worker $worker, array $data): void;

    public function destroy(Worker $worker): void;
}
