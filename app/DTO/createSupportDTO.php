<?php

namespace App\DTO;

use App\Http\Requests\StoreUpdateSupport;

class createSupportDTO
{
    public function __construct(
        public string $subject,
        public string $body,
        public string $status
    ){}

    public static function makeFromRequest(StoreUpdateSupport $request): self
    {
        return new self(
            $request->subject,
            $request->body,
           'a'
        );
    }
}