<?php

namespace App\Http\Controllers\Api\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\product\Product;

class ProductController extends Controller
{
    public function create(Request $request, Product $product)
    {
        $data = $product->createOrEdit($request);
        return response()->json([ 'data' => $data, 'message' => 'success'], 200);
    }
    public function list(Request $request)
    {
        $keyword = $request->keyword;
        if($keyword == ""){
            $data = Product::leftJoin('product_category', function($join){
                $join->on('product_category.id','=','products.category');
            })
            ->select('products.*','product_category.name as cate')->orderBy('id','DESC')
            ->get();
        }else{
            $data = Product::where('products.name', 'LIKE', '%'.$keyword.'%')
            ->leftJoin('product_category', function($join){
                $join->on('product_category.id','=','products.category');
            })
            ->select('products.*','product_category.name as cate')->orderBy('id','DESC')
            ->get()->toArray();
        }
        return response()->json([
            'data' => $data,
            'message' => 'success'
        ]);
    }
    public function edit($id)
    {
        $data = Product::where([
            'id'=> $id
        ])
        ->first();
        return response()->json([
            'data' => $data,
            'message' => 'success'
        ]);
    }
    public function delete($id)
    {
        $query = Product::where(['id'=>$id])
        ->first();
        if($query->images){
            $imgArr = json_decode($query->images);
            foreach($imgArr as $i){
                $file= str_replace('http://localhost:8080','',$i);
                $filename = public_path().$file;
                if(file_exists( public_path().$file ) ){
                    \File::delete($filename);
                }
            }
        }
        $query->delete();
       
        return response()->json([
            'message' => 'Delete success'
        ]); 
    }
}
