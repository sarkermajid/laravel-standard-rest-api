<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Traits\ResponseTrait;
use Exception;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use ResponseTrait;

    public function index(){
        try{
            $products = Product::all();
            return $this->responseSuccess($products,'Product fetched successfully');
        }catch(Exception $e){
            return $this->responseError([], $e->getMessage());
        }
    }
}
