<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserAddRequest;
use App\Models\User;

class UserController extends Controller
{
    public function indexAction()
    {
        $users = User::select('id', 'name', 'username', 'email', 'level')->get()->toArray();
        return view ('admin.user.list', array('users' => $users));
    }
    
    public function viewAddAction()
    {
        return view('admin.user.add');
    }
    
    public function doAddAction(UserAddRequest $request)
    {
        $user = new User();
        $user->name       = $request->full_name;
        $user->username   = $request->username;
        $user->password   = bcrypt($request->password);
        $user->email      = $request->email;
        $user->level      = $request->level;
        $user->created_at = new \DateTime();
        if ($user->save()) {
            return redirect('administration/user')->with(
                    array('notification' => 'result_msg', 'notification_message' => EVO_USER_ADD_SUCCESS));
        }
    }
}
