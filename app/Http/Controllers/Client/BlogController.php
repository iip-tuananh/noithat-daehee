<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\blog\Blog;
use App\models\product\Category;
use App\models\blog\BlogCategory;
use App\models\blog\BlogTypeCate;
use App\models\construction\Construction;
use App\models\product\Product;
use App\models\website\Partner;
use Session;

class BlogController extends Controller
{
    public function list()
    {
        $data['blog'] = Blog::where(['status'=>1])
        ->orderBy('id','DESC')
        ->select(['id','title','image','description','created_at','slug'])
        ->paginate(9);
        $data['title_page'] = 'Tất cả tin tức';
        return view('blog.list',$data);
    }
    public function listCateBlog($slug)
    {
        $data['blog'] = Blog::where(['status'=>1,'category'=>$slug])
        ->orderBy('id','DESC')
        ->select(['id','title','image','description','created_at','slug'])
        ->paginate(9);
        $data['partner'] = Partner::where(['status'=>1])->get(['id','image','name','link']);
        $data['blognew'] = Blog::where(['status'=>1])
        ->orderBy('id','DESC')
        ->select(['id','title','image','description','created_at','slug'])
        ->paginate(9);
        $cate = BlogCategory::where('slug', $slug)->first(['name']);
        $data['title_page'] = languageName($cate->name);
        return view('blog.list',$data);
    }
    public function listTypeBlog($slug)
    {
        $data['blog'] = Blog::where(['status'=>1,'type_cate'=>$slug])
        ->orderBy('id','DESC')
        ->select(['id','title','image','description','created_at','slug'])
        ->paginate(9);
        $cate = BlogTypeCate::where('slug', $slug)->first(['name']);
        $data['title_page'] = languageName($cate->name);
        return view('blog.list',$data);
    }
    public function detailBlog($slug)
    {
        $data['blog_detail'] = Blog::with('cate')->where(['slug' => $slug])->first();
        $data['partner'] = Partner::where(['status'=>1])->get(['id','image','name','link']);
        $data['bloglq'] = Blog::where(['status' => 1])->get();
        $data['blognew'] = Blog::where(['status'=>1])
        ->orderBy('id','DESC')
        ->select(['id','title','image','description','created_at','slug'])
        ->paginate(9);
        return view('blog.detail',$data);
    }
    public function search_blog(Request $request)
    {
        $keyword = $request->keyword;
        $code = Session::get('locale');
        $arr = [];
        $arrb = [];
        $arrOpt = [];
        //search option
        $productOpt =  Blog::where('status',1)
        ->get(['title','image','description','created_at','slug'])
        ->toArray();
        foreach($productOpt as $key => $item){
            $fielName = json_decode($item['title']);
            foreach($fielName as $i){
                if(strpos(strtolower(stripVN($i->content)), strtolower(stripVN($keyword))) !== false && $i->lang_code == $code){
                    array_push($arr,$productOpt[$key]);
                }
            }
        }
        $data['keyword'] = $request->keyword;
        $data['countproduct'] = count($arr);
        $data['resultPro'] = $arr;
        return view('search_result',$data);
    }
}
