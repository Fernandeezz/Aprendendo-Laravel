<?php 

namespace App\Repositories;

use App\DTO\createSupportDTO;
use App\DTO\updateSupportDTO;
use stdClass;

interface SupportRepositoryInterface
{
    public function getAll(string $filter = null): array;
    public function findOne(string|int $id): stdClass|null;
    public function delete(string |int $id): void;
    public function new(createSupportDTO $dto): stdClass;
    public function update(updateSupportDTO $dto): stdClass|null;
    
}