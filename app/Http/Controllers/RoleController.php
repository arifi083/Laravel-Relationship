<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;

class RoleController extends Controller
{
    public function addRole(){
        $roles = [
            [ "name" => "administrator"],
            [ "name" => "editor"],
            [ "name" => "author"],
            [ "name" => "contributor"],
            [ "name" => "subscriber"],
            
        ];
        Role::insert($roles);
        return "role are created successfully";
    }

    public function addUser(){
        $user = new User();
        $user->name = "arif";
        $user->email = "arif5@gmail.com";
        $user->save();
        
        $rolesids = [4,5];
        $user->roles()->attach($rolesids);
        return "record has been created successfully";
    }

    public function getAllRoleByUser($id){
        $user = User::find($id);
        $roles = $user->roles;
        return $roles;
    }

    public function getAllUserByRole($id){
        $role= Role::find($id);
        $users = $role->users;
        return $users;
    }
}
