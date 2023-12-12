<?php 

namespace App\Service;

use stdClass;

class SupportService {

    protected $repository;

    public function __construct()
    {
        
    }
    public function getAll(string $filter = null): array
    {
        return $this->repository->getAll($filter);
    }
    public function findOne(string|int $id): stdClass|null
    {
        return $this->repository->findOne($id);
    }

    public function new(string $subject, string $body, string $status): stdClass
    {
        return $this->repository->new($subject, $body, $status);
    }

    public function update(string $id, string $subject, string $body, string $status): stdClass|null
    {
        return $this->repository->update($id, $subject, $body, $status);
    }
    public function delete(string |int $id): void
    {

        $this->repository->delete($id);
    }

}