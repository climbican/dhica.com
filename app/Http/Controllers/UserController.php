<?php
/**
 * Name
 * Description:
 * @author Michael Rumack
 * User: climbican
 * Date: 2/5/16
 * Time: 2:35 PM
 * Last Mod:
 * Notes:




@foreach($blogs as $blog)
<article>{{ $blog->title }}</article>
<div class="body">{{ $blog->body }}</div>

@endforeach

@stop</div>*/

namespace app\Http\Controllers;

use App\User;
use Illuminate\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller{

    public function index(){
        $users = User::all();

        return view('admin.user', compact('users'));
        //return response()->json($users);
    }

    public function get($id){
        $users = User::find($id);
        //return response()->json($user);
        return view('admin.user', compact('users'));
    }

    public function create(){
        return view('admin.user-create');
    }

    public function save(Request $request){

        $user = $request->all();

        $user['name'] = $request->userName;
        $user['email'] = $request->email;
        $user['password'] = Hash::make($request->password);

        $user['created_at']  = time().'000';
        $user['udpated_at'] = time().'000';

        $user = User::create($user);
        //will need  a proper response here
        return view('admin.user', compact('user'));
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return response()->json('success');
    }

    public function updateForm($id){
        $user = User::find($id);

        return view('admin.user-update', compact('user'));
    }

    public function update(Request $request, $id){
        $user = User::find($id);

        $user['name'] = $request->userName;
        $user['email'] = $request->email;
        $user['password'] = Hash::make($request->password);

        if(isset($request->permissionLevel)){
            $user['perm_lvl'] = $request->permissionLevel;
        }
        else{
            $user['perm_lvl'] = 'user';
        }

        $user['created_at']  = time().'000';
        $user['udpated_at'] = time().'000';

        $user->save();

        return response()->json($user);
    }

    public function login(Request $request){
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'] ])) {
            return 'this is the login positive shit'; //redirect()->intended('dashboard');  //this is the list view
        }
    }
}