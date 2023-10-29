<?php

namespace App\Repositories\Contracts;

use App\DTO\Supports\CreateReplyDTO;
use stdClass;

interface ReplyRepositoryInterface {
    public function getAllBySupportId(string $supportId): array;

    public function createNew(CreateReplyDTO $dto): stdClass;
}
