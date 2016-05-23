<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * @return Response
     */
    public function index(Request $request)
    {
        return view('user.index', ['users' => User::all()]);
    }

    /**
     * @param Request $request
     * @param         $id
     *
     * @return Response
     */
    public function edit(Request $request, $id)
    {
        return view('user.edit', ['user' => User::find($id)]);
    }

    /**
     * @param Request $request
     * @param         $id
     *
     * @return Response
     */
    public function update(Request $request, $id)
    {
    }
}
