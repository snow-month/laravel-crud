<?php

namespace App\Repositories;

use App\Models\Worker;
use Illuminate\Database\Eloquent\Collection;

class WorkerRepository
{
    public function getAll(): Collection
    {
        return Worker::all();
    }

    public function create(array $data)
    {
        return Worker::query()->create($data);
    }

    public function update(Worker $worker, array $data): void
    {
        $worker->update($data);
    }

    public function destroy(Worker $worker): void
    {
        $worker->delete();
    }
}
