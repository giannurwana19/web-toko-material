<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Profile;
use App\Models\Slider;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $this->data['totalProduct'] = Product::count();
        $this->data['totalCategory'] = Category::count();
        $this->data['totalSlider'] = Slider::count();
        $this->data['totalBrand'] = Brand::count();
        $this->data['profile'] = Profile::first();

        return view('dashboard', $this->data);
    }
}
