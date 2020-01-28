<?php

namespace App\Http\Controllers\Admin;

use App\Message;
use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class SettingController extends Controller
{
    public function show()
    {
        $title = trans('titles.settings_show');
        return view('admin.settings.show', compact('title'));
    }

    public function edit()
    {
        $title = trans('titles.settings_edit');
        return view('admin.settings.edit', compact('title'));
    }

    public function delete()
    {
        $logo_path = "images\settings\\" . setting()->logo;
        if (File::exists($logo_path)) {
            File::delete($logo_path);
        }
        $icon_path = "images\settings\\" . setting()->icon;
        if (File::exists($icon_path)) {
            File::delete($icon_path);
        }
    }

    public function store(Request $request)
    {

        $data = $this->validate(request(), [
            'name' => '',
            'logo' => 'image|mimes:jpg,jpeg,png,gif',
            'icon' => 'image|mimes:jpg,jpeg,png,gif',
        ]);

        if ( ! empty(request()->hasFile('logo')) && ! empty(request()->hasFile('icon'))) {
            $this->delete();
        }

        if (request()->hasFile('logo')) {
            $logo = request()->file('logo');
            $data['logo'] = 'Setting_Logo' . '_' . rand() . '_' . $data['logo']->getClientOriginalName();
            $logo->move(public_path(Setting::MEDIA_PATH), $data['logo']);
        }

        if (request()->hasFile('icon')) {
            $logo = request()->file('icon');
            $data['icon'] = 'Setting_Icon' . '_' . rand() . '_' . $data['icon']->getClientOriginalName();
            $logo->move(public_path(Setting::MEDIA_PATH), $data['icon']);
        }

        Setting::orderBy    ('id', 'desc')->update($data);
        session()->flash('success', trans('admin.updated_record'));

        return redirect(adminUrl('settings'));
    }
}
