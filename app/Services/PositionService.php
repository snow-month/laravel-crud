<?php

namespace App\Services;

use App\Models\Position;
use App\Repositories\PositionRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

readonly class PositionService implements PositionServiceInterface
{
    public function __construct(
        private PositionRepositoryInterface $positionRepository
    )
    {
    }

    public function getAll(): Collection
    {
        return $this->positionRepository->getAll();
    }

    public function create(array $data)
    {
        return $this->positionRepository->create($data);
    }

    public function update(Position $position, array $data): void
    {
        $this->positionRepository->update($position, $data);
    }

    public function destroy(Position $position): void
    {
        $this->positionRepository->destroy($position);
    }
}
