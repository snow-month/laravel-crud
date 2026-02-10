<?php

namespace App\Services;

use App\Models\Worker;
use App\Repositories\WorkerRepository;
use Illuminate\Database\Eloquent\Collection;

readonly class WorkerService
{
    public function __construct(
        private WorkerRepository $workerRepository
    )
    {
    }

    public function getAll(): Collection
    {
        return $this->workerRepository->getAll();
    }

    public function create(array $data)
    {
        return $this->workerRepository->create($data);
    }

    public function update(Worker $worker, array $data): void
    {
        $this->workerRepository->update($worker, $data);
    }

    public function destroy(Worker $worker): void
    {
        $this->workerRepository->destroy($worker);
    }
}
