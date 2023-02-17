<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permission;
use App\Http\Requests\PermissionRequest;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();//->toArray();
       //dd($permissions);
       //foreach ($permissions as $permission) {
          // dd($permission->name);
        //return view('rolesviews', compact('roles'));
       //}
       return view('permissionviews', compact('permissions'));
    }

    public function save(PermissionRequest $request)
    {
        $permission = new Permission;
        $permission->name = $request->name;
        $permission->save();
        return redirect('permisos');
    }

    public function edit($id)
    {
        $permission=Permission::find($id);
        return view('editar-permiso', compact('permission'));
    }

    public function update($id)
    {
        $permission = Permission::find($id);
                    //where('id', $id);
        $permission->name = 'Ver Rol';
        $permission->save();
    }

    public function delete($id)
    {
        Permission::find($id)->delete();
    }
}
