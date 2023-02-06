<?php

namespace App\Http\Controllers\Dashboard\Seller;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class MainCategoriesController extends Controller
{
    public function __construct()
    {

        $this->middleware(['auth','GoToTenant']);



    }


    public function index()
    {
        $categories = Category::with('_parent')->orderBy('id','DESC') -> paginate(PAGINATION_COUNT);

        return view('sellers.categories.index', compact('categories'));
    }

    public function create()
    {
        $categories =   Category::select('id','parent_id')->get();
        return view('sellers.categories.create',compact('categories'));
    }








}
