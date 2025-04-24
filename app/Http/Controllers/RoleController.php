<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;

/**
 * CRUD User controller
 */
class RoleController extends Controller
{
    public function role(Request $request)
    {
        try {
            // Lấy role_id từ request và tìm kiếm vai trò
            $role_id = $request->get('id');
            $role = Role::findOrFail($role_id); // Nếu không tìm thấy, sẽ ném ra ModelNotFoundException

            // Nếu tìm thấy vai trò, trả về view với dữ liệu
            $data = [
                'role' => $role,
                'users' => $role->users
            ];

            return view('role.view', $data);

        } catch (ModelNotFoundException $e) {
            // Nếu không tìm thấy vai trò, trả về thông báo lỗi
            return redirect()->route('user.list')->with('error', 'Roles không tồn tại!');
        }
    }
}
