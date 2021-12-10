<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\UserResource;

class UsersController extends Controller
{
    /**
     * Log a User out
     */
    public function logout(Request $request) {
        if (Auth::check()) {
            $request->user()->token()->revoke();
            return response()->json(['success' => 'logout success'], 200);
        } else {
            return response()->json(['error' => 'something went wrong'], 500);
        }
    }

    /**
     * Register a user
     */
    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|max:64|unique:users,email',
            'password' => 'required|string|min:8'
        ]);

        if ($validator->fails()) {
            return response([
                'message' => 'Validation error.',
                'errors' => $validator->errors(),
                'status' => false
            ], 401);
        }

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);

        /** User authentication token is generated here **/
        $data['token'] = $user->createToken('token')->accessToken;
        $data['user_data'] = $user;

        // return response(['data' => $data, 'message' => 'Account created successfully!', 'status' => true]);
        return new UserResource($data);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User   $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User   $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\User   $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User   $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
