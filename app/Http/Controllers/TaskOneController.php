<?php

namespace App\Http\Controllers;

use App\Contracts\TaskOneContract;
use Illuminate\Http\Request;

class TaskOneController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, TaskOneContract $contract)
    {
        return redirect()->route('tasks.show', $contract->all()->count() ? 2 : 1);
    }
}
