<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
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
    public function hello(Request $request, $word)
    {
        return 'Hello: ' . $word;
    }

    /**
     * @param Request $request
     *
     * @return string
     */
    public function helloWithFullName(Request $request)
    {
        $this->validate(
            $request,
            [
                'name'    => 'required',
                'surname' => 'required',
                'email'   => 'required|email',
            ]
        );
        $fullName = (new User())->helloWorld($request->get('name'), $request->get('surname'), $request->get('email'));

        return (new Response())->setContent($fullName);
    }
}
