<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function profile()
    {
        $adminData = Admin::find(1);
    return view('admin.admin_profile', compact('adminData'));

    }
}
