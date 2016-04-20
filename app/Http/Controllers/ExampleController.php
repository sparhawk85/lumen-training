<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * @param  int $word
     *
     * @return Response
     */
    public function hello($word)
    {
        return 'Hello: ' . $word;
    }
}
