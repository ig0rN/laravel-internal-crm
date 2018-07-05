<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('admin.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        if(isset($request)){

            $password_slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '', $request->name)));

            $user = new User;
            $user->name = $request->name;
            $user->password = bcrypt($password_slug . '123');
            $user->email = $request->email;
            $user->role_id = $request->role;
            $user->save();

            return redirect('/admin')->with(['success' => 'You have successfully added new user.']);

        } else {

            return redirect('/admin')->with(['error' => 'Something went wrong, please try again.']);

        }
    }

    /**
     * Show the form for deleting the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(User $user){

        return view('admin.delete',compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(isset($_POST['yes'])){
            $client = User::findOrFail($id);
            $client->delete();
            return redirect('/admin')->with(['success' => 'You have successfully deleted a user.']);
        }

        if(isset($_POST['no'])){
            return redirect('/admin')->with(['error' => 'You have canceled the deletion of this user.']);
        }

    }

    public function makeAdmin($id) {
        $user = User::find($id);

        $user->role_id = 1;
        $user->save();

        return redirect()->back()->with(['success' => 'You have gave role of Admin to that user.']);
    }

    public function removeAdmin($id) {
        $user = User::find($id);

        $user->role_id = 2;
        $user->save();

        return redirect()->back()->with(['error' => 'You have removed this user from the Admin list.']);
    }
}
