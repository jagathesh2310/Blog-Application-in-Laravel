<?php

namespace App\Http\Controllers\BackPanel;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminDashboard extends Controller
{
  public  function index(){
    //list the roles
    $role = Role::all();
    return view('admin.roles.list',compact('role'));
  }
  public function create(){
    $permission = Permission::all();
    return view('admin.roles.create',compact('permission'));
  }
  public function store(Request $request){
    $role = new Role;
    $role->name = $request->name;
    $role->save();
    $role->syncPermissions($request->permissionid);
    return redirect()->back()->with('message','Role created successfully');
  }
  public function edit(Request $request){
    // change
    $role = Role::find($request->id);
    $permission = Permission::all();
    return view('admin.roles.update',compact('role','permission'));
  }
  public function update(Request $request){
    $role = Role::find($request->id);
    $role->name = $request->name;
    $role->save();
    $role->syncPermissions($request->permissionid);
    return redirect('role');
  }
  public function delete(Request $request){
     $role= Role::find($request->id);
     $role->delete();
     return redirect()->back()->with('message','Role deleted successfully');
  }
  public function roleassign(){
    $role = Role::get();
    $user = User::get();
    return view('admin.assignrole.create',compact('role','user'));
  }
  public function assign(Request $request){
     $user = User::find($request->userid);
     $role = Role::find($request->roleid);
     $user->assignRole($role->name);
     return redirect()->back()->with('message',"Role Assign Successfully");

  }
}
