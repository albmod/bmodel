<?php

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Redirect;

function isTenants()
{
    if (auth()->user()->tenants()->where('id', tenant('id'))->doesntExist()) {
       return false;
    }

    else {
        return true;
    }


}


function GetLoginTenant()
{
    if (auth()->user()->tenants) {
        $tenants = auth()->user()->tenants;

        foreach ($tenants as $t)
        {
            return $t->pivot->tenant_id;
        }

    }

    else {
        return true;
    }


}

function isNotTenants()
{
    if (auth()->user()->tenants()->where('id', tenant('id'))->doesntExist()) {
        return true;
    }

    else {
        return false;
    }


}