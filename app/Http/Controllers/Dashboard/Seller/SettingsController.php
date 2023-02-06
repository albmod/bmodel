<?php

namespace App\Http\Controllers\Dashboard\Seller;

use App\Http\Controllers\Controller;
use App\Http\Requests\Seller\ShippingsRequest;
use App\Models\Setting;
use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingsController extends Controller
{


    public function __construct()
    {

        $this->middleware(['auth','GoToTenant']);



    }
    public function index(Request $request)
    {

        // $tenant = Tenant::find(1);
        //$tenant= GetLoginTenant();
        //tenancy()->initialize($tenant);





        return view('sellers.settings.index');

    }



    public function editShippingMethods($type)
    {


        //go to tenant database for login user
        //$tenant= GetLoginTenant();
        //tenancy()->initialize($tenant);



        //free , inner , outer for shipping methods

        if ($type === 'free')
        {
            $shippingMethod = Setting::where('key', 'free_shipping_label')->first();
            //return $shippingMethod;
            return view('sellers.settings.shipping.free', compact('shippingMethod'));
        }


        elseif ($type === 'inner')
        {
            $shippingMethod = Setting::where('key', 'local_label')->first();
            return view('sellers.settings.shipping.inner', compact('shippingMethod'));
        }


        elseif ($type === 'outer')
        {
            $shippingMethod = Setting::where('key', 'outer_label')->first();
            return view('sellers.settings.shipping.outer', compact('shippingMethod'));
        }

        else
            $shippingMethod = Setting::where('key', 'free_shipping_label')->first();
        return view('sellers.settings.shipping.free', compact('shippingMethod'));

    }



    public function updateShippingMethods(ShippingsRequest $request, $id)
    {

        //validation

        //update db
        //return $request->all();
        try {
            $shipping_method = Setting::find($id);

            DB::beginTransaction();
            $shipping_method->update(['plain_value' => $request->plain_value]);
            //save translations
            $shipping_method->value = $request->value;
            $shipping_method->save();

            DB::commit();
            return redirect()->back()->with(['success' => 'تم التحديث بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاولة فيما بعد']);
            DB::rollback();
        }

    }


}
