<?php

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Redirect;



define('PAGINATION_COUNT', 10);
//define('DOMAIN_NAME',str_replace("www.", "", $_SERVER['HTTP_HOST']));
function getFolder()
{

    return app()->getLocale() == 'ar' ? 'css-rtl' : 'css';
}


function uploadImage($folder,$image){
    $image->store('/', $folder);
    $filename = $image->hashName();
    return  $filename;
}




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