<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    

    public function list (Request $request) {

        return view('pages.role.list', [
            'action' => $action,
            'role' => $role,
            'available_perms' => $available_perms,
            'permissions' => Permission::all()->sortBy('name')
        ]);
    }


    public function form (Request $request) {

        $action = 'create';
        $role = false;
        $available_perms = [];

        if ( isset($request->id) && !empty($request->id) ) {
            $role = Role::find($request->id);
            $action = 'update';
        }

        if ( isset($role->permissions)) {
            foreach($role->permissions as $perm) {
                $available_perms[] = $perm->id;
            }
        }

        return view('pages.role.form', [
            'action' => $action,
            'role' => $role,
            'available_perms' => $available_perms,
            'permissions' => Permission::all()->sortBy('name')
        ]);
    }


    public function store (Request $request) {

        $id = false;

        //$props['user_id'] = Auth::id();

        if ( isset($request->id) && !empty($request->id)) {

            $validated = $request->validate([
                'name' => ['required'],
            ]);

            // update
            Role::find($request->id)->update(['name' => $request->name]);
            $role = Role::find($request->id);

            $id = $request->id;
        } else {

            $validated = $request->validate([
                'name' => ['required', 'unique:roles'],
            ]);

            // create
            $role = Role::create(['name' => $request->name]);
            $id = $role->id;
        }



        // Get Role Permissions
        $permissions = Permission::all()->sortBy('name');

        if ( count($permissions) > 0 ) {
            foreach ($permissions as $permission) {

                $degisken = 'perm'.$permission->id;

                if (request($degisken)) {

                    $selected_perms[] = Permission::find($permission->id);
                }
            }

            $role->syncPermissions($selected_perms);
        }


        return redirect('/admin/roles/view/'.$id);

    }



    public function view (Request $request) {

        $this->action = 'read';

        return view('pages.role.view', [
            'action' => $this->action,
            'role' => Role::find($request->id)
        ]);
    }










}
