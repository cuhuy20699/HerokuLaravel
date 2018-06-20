<?php

namespace App\Http\Controllers;

use App\UserMember;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;


class UserMembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = UserMember::all();
        return response()->json($user, 200);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userJson = $request->json()->all();

        $validator = Validator::make($request->all(), [
            'fullname' => 'required|unique:UserMember|max:50',
            'phone' => 'required',
            'password' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'salt' => 'required',
            'role' => 'required',
            'status' => 'required',
            'avatar' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('admin.listAdmin.User.FormUser')
                ->withErrors($validator->errors())
                ->withInput();
        }
        $user = new UserMember();
        if ($user === null) {
            return view("errors.404");
        }
        $user->fullname = $userJson['fullname'];
        $user->phone = $userJson['phone'];
        $user->password = $userJson['password'];
        $user->email = $userJson['email'];
        $user->gender = $userJson['gender'];
        $user->salt = $userJson['salt'];
        $user->role = $userJson['role'];
        $user->status = $userJson['status'];
        $user->avatar = $userJson['avatar'];
        $user->save();
        return response()->json($userJson,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request ,$id)
    {
        $user = UserMember::find($id);
        if ($user === null) {
            return view('errors.404');
        }
        return response()->json($user,201);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = UserMember::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   $userJson = $request->json()->all();

        $validator = Validator::make($request->all(), [
            'fullname' => 'required|unique:UserMember|max:50',
            'phone' => 'required',
            'password' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'salt' => 'required',
            'role' => 'required',
            'status' => 'required',
            'avatar' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('form')
                ->withErrors($validator->errors())
                ->withInput();
        }

        $user = UserMember::find($id);
        if ($user === null) {
            return view('errors.404');
        }
        $user->fullname = $userJson['fullname'];
        $user->phone = $userJson['phone'];
        $user->password = $userJson['password'];
        $user->email = $userJson['email'];
        $user->gender = $userJson['gender'];
        $user->salt = $userJson['salt'];
        $user->role = $userJson['role'];
        $user->status = $userJson['status'];
        $user->avatar = $userJson['avatar'];
        $user->save();
        return response()->json($userJson,201);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = UserMember::destroy($id);
        if(!$user){
            return response()->json(['error' => 'Error : User not found']);
        }
        $user -> delete();
        return response()->json(['success']);
    }
}
