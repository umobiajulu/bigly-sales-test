<?php

namespace App\Implementations;

use App\Contracts\TaskOneContract;

class TaskOneImplementation implements TaskOneContract
{
    public function all()
    {
        return collect([
            'hello',
            'world'
        ]);
    }
}
