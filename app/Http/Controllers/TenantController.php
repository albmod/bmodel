<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function changeTenant()
    {
        // Check tenant
        $tenants = auth()->user()->tenants;

        foreach($tenants as $tenant)
        {
            foreach($tenant->domains as $domain)
            {
                $name= $domain['domain'];
            }
        }



        // Change tenant
//
//        $this->redirectTo = 'https://' . $tenant->hostname->fqdn;
//
//        return auth()->user();

        //return redirect()->away('http://'. $name .  config('session.domain') . RouteServiceProvider::HOME);
          //return redirect()->away('http://'. $name .  config('session.domain') . RouteServiceProvider::HOME);
        return redirect()->away('http://'. $name .'.'. config('tenancy.central_domains')[0] );

    }
}
