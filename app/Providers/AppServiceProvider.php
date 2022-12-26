<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Session,View;
use App\models\website\Setting;
use App\models\website\Banner;
use Cart,Auth;
use App\models\PageContent;
use Laravel\Dusk\DuskServiceProvider;
use App\models\product\Category;
use App\models\language\Language;
use App\models\Province;
use App\models\Services;
use App\models\Promotion;
use App\models\blog\BlogCategory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) 
        {
            if(Auth::guard('customer')->user() != null){
                $profile = Auth::guard('customer')->user();
            }else{
                $profile = "";
            }
            $language_current = Session::get('locale');
            $promotio = Promotion::where('status',1)->orderBy('id','DESC')->get();
            $servicehome = Services::where('status',1)->orderBy('id','DESC')->get();
            $setting = Setting::first();
            $lang = Language::get();
            $pageContent = PageContent::where(['language'=>$language_current,'status'=> 1])->get();
            $categoryhome = Category::with([
                'typeCate' => function ($query) {
                    $query->with(['typetwo'])->where('status',1)->orderBy('id','DESC')->select('cate_id','id', 'name','avatar','slug','cate_slug'); 
                }
            ])->where('status',1)->orderBy('id','ASC')->get(['id','name','imagehome','avatar','slug','content','description'])->map(function ($query) {
                $query->setRelation('product', $query->product->take(5));
                return $query;
            });
            $banners = Banner::where(['status'=>1])->get(['id','image','link','title','description']);
            $cartcontent = session()->get('cart', []);
            $viewold = session()->get('viewoldpro', []);
            $compare = session()->get('compareProduct', []);
            $blogCate = BlogCategory::with([
                'typeCate' => function ($query){
                    $query->select('id','slug','name','avatar','category_slug');
                }
            ])
            ->where('status',1)
            ->orderBy('id','DESC')
            ->get(['id','name','slug','avatar']);
            $view->with([
                'promotio' => $promotio,
                'setting' => $setting,
                'pageContent' => $pageContent,
                'lang' => $lang,
                'banners'=>$banners,
                'profile' =>$profile,
                'categoryhome'=> $categoryhome,
                'cartcontent'=>$cartcontent,
                'viewold'=>$viewold,
                'compare'=>$compare,
                'blogCate'=>$blogCate,
                'servicehome'=>$servicehome
                ]);    
        });  
    }
}
