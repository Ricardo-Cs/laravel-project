<?php

namespace App\Services;

use App\DTO\Supports\CreateReplyDTO;
use stdClass;

class ReplySupport {

    public function getAllBySupportId(string $supportId): array {

        return [];
    }

    public function createNew(CreateReplyDTO $dto): stdClass {
        throw new \Exception('not implemented');
    }
}
