<?php

namespace App\Http\Controllers;

use App\UserMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;



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

        $validator = Validator::make($userJson, [
            'fullname' => 'required|unique:user_members|max:50',
            'phone' => 'required',
            'password' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'salt' => 'required',
            'role' => 'required',
            'status' => 'required',
            'avatar' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(),404);
        }
        $user = new UserMember();
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
        return response()->json($user,201);
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

    public function findByPhone($phone){
        $user = DB::table('user_members')
            ->where('user_members.phone','like', '%'. $phone . '%')
                ->select('user_members.*')
            ->get();
        return response()->json($user,200);
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
    {
        try{
            $userJson = $request->json()->all();
            $validator = Validator::make($userJson, [
                'fullname' => 'required|unique:user_members|max:50',
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
                return response()->json($validator->errors(),404);
            }

            $user = UserMember::find($id);
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
            return response()->json($user,201);
        }catch (EXCEPTION $exception) {
            return response()->json('error');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $user = UserMember::destroy($id);
            return response()->json($user,201);
        }catch (Exception $exception){
            return response()->json($exception);
        }

    }
}
