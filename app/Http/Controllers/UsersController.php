<?php

namespace App\Http\Controllers;
use App\UserMember;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = UserMember::all();
        return view('admin.listAdmin.User.ListUser')->with('user',$user) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.listAdmin.User.FormUser')->with([
            "product"=> new UserMember(),
            "action"=>"/user",
            "method"=>"POST"
        ]) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullname' => 'bail|required|unique:user_members|max:50',
            'phone' => 'required',
            'password' => 'required',
            'email' => 'required',
            'gender' => 'required',
//            'avatar' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('admin/listAdmin/User/FormUser')
                ->withErrors($validator->errors())
                ->withInput();
        }

        $user = new UserMember();
        $user->fullname = $request->get("fullname");
        $user->phone = $request->get("phone");
        $user->password = $request->get("password");
        $user->gender = $request->get("gender");
        $user->email = $request->get("email");
        $user->salt = rand();
        $user->role = '1';
        $user->status = 1;
        $user->avatar = $request->get('avatar2');
//        $file = $request->file('avatar');
//        if (File::exists($file)) {
//            $file->store('public/uploaded');
//            $user->avatar = "storage/uploaded/" . $file->hashName();
//        }
//        $file->store('public/uploaded');

        $user->save();
        return redirect('user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        if ($user==null){
            return redirect("errors");
        }
        return view('admin.listAdmin.User.FormUser')->with([
            "product"=> $user,
            "action"=>"/user/" . $user->id,
            "method"=>"PUT"
        ]) ;

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
        $user = UserMember::find($id);
        if ($user == null) {
            return view("errors.404");
        }

        $user->fullname = $request->get("fullname");
        $user->phone = $request->get("phone");
        $user->password = $request->get("password");
        $user->gender = $request->get("gender");
        $user->email = $request->get("email");
        $user->salt = rand();
        $user->role = '1';
        $user->status = 1;
        $user->avatar = "";
        $user->save();
        if ($request->get("isAjax")) {
            return $user;
        } else {
            return redirect("user");
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
        $user = UserMember::find($id);
        $user->delete();
        return view('admin.listAdmin.User.ListUser');
    }
}
