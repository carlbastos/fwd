<?php

namespace App\Builder;

class Docker extends Builder
{
    public function getProgramName() : string
    {
        return env('FWD_DOCKER_BIN', 'docker');
    }

    public function getDefaultArgs(): array
    {
        return ['ps'];
    }
}
