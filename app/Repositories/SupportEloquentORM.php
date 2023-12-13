<?php

use App\DTO\createSupportDTO;
use App\DTO\updateSupportDTO;
use App\Repositories\SupportRepositoryInterface;
use stdClass;
class SupportEloquentORM implements SupportRepositoryInterface
{
    public function getAll(string $filter = null): array{

    }
    public function findOne(string|int $id): stdClass|null{

    }
    public function delete(string |int $id): void{

    }
    public function new(createSupportDTO $dto): stdClass{

    }
    public function update(updateSupportDTO $dto): stdClass|null{

    }
}
