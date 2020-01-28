<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class UserController extends Controller
{

    public function index()
    {
        $title = trans('titles.users_index');
        $users = User::all();

        return view('admin.users.index', compact('users', 'title'));
    }


    public function create()
    {
        if(auth()->user()->role == User::USER_ROLE_ADMIN){
        $title = trans('titles.users_create');

        return view('admin.users.create', compact('title'));
        }else{
            return redirect(adminUrl('logout'));
        }
    }


    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'role' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'image' => '',
        ]);

        $data['password'] = bcrypt($request->password);

        if (request()->hasFile('image')) {
            $photo = request()->file('image');
            $data['image'] = User::MEDIA_PATH . 'User_Image' . '_' . rand() . '_' . $data['image']->getClientOriginalName();
            $photo->move(public_path(User::MEDIA_PATH), $data['image']);
        } else {
            $data['image'] = '';
        }

        User::create($data);
        session()->flash('success', trans('session.users_record_stored'));

        return redirect(adminUrl('users'));
    }


    public function show(User $user)
    {

        return view('admin.users.show', compact('user'));
    }


    public function edit(User $user)
    {
        if ($user->id == auth()->user()->id || auth()->user()->role == User::USER_ROLE_ADMIN) {
            $title = trans('titles.users_edit');
            return view('admin.users.edit', compact('user', 'title'));
        }else{
            return redirect(adminUrl('logout'));
        }
    }


    public function update(Request $request, User $user)
    {


        $data = $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => '',
            'image' => '',
        ]);

        if (auth()->user()->role == User::USER_ROLE_ADMIN) {
            $data['role'] = User::USER_ROLE_ADMIN;
        } else {
            $data['role'] = User::USER_ROLE_ACCOUNTANT;
        }

        if (empty($data['password'])) {
            $data['password'] = $user->password;
        } else {
            $data['password'] = bcrypt(request('password'));
        }

        if ( ! empty(request()->hasFile('image'))) {
            $image_path = $user->image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }

            $image = request()->file('image');
            $data['image'] = User::MEDIA_PATH . 'User_Image_' . $data['name'] . "_"
                . rand() . '_' . $image->getClientOriginalName();
            $image->move(public_path(User::MEDIA_PATH), $data['image']);

        }


        User::where('id', $user->id)->update($data);
        session()->flash('success', trans('session.users_record_updated'));

        return redirect(adminUrl('users/' . $user->id));

    }


    public function destroy($id)
    {
        User::find($id)->delete();
        session()->flash('success', trans('session.users_record_deleted'));

        return redirect(adminUrl('users'));
    }

    public function bills($id)
    {
        $title = trans('titles.users_bills');
        $user = User::find($id);
//        dd($user->name);
        return view('admin.users.bills', compact('title', 'user'));
    }
}
