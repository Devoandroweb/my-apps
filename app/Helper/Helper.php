<?php

function checkRole($userRole){
//    get Role User -> ini akan menghasilkan Role User Collection
    $role = auth()->user()->getRoleNames();
    // mengubah hasil role collection jadi array
    $role = $role->toArray();
    // dd($role);

    if(in_array($userRole, $role)){
        // dd(true);
        return true;
    }else {
        // dd(false);
        return false;
    }
}
