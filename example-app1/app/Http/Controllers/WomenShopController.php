<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WProduct;
use App\Models\WBrand;
use App\Models\WCategory;
class WomenShopController extends Controller
{
    public function index(Request $request)
    {
        $page =$request->query('page');
        $size =$request->query('size');
        if(!$page)
        $page = 1;
        if(!$size)
        $size =12;
            $order =$request->query("order");
            if(!$order)
            $order = -1;
        $o_column = "";
        $o_order = "";
        switch($order)
        {
                case 1:
                $o_column = "created_at";
                $o_order = "DESC";
                break;
                case 2:
                $o_column = "created_at";
                $o_order = "ASC";
                 break; 
                case 3:
                $o_column = "regular_price";
                $o_order = "ASC";
                break; 
                case 4:
                $o_column = "regular_price";
                $o_order = "DESC";
                break;
                default:
                $o_column = "id";
                $o_order = "DESC";
        }
        $wbrands = WBrand::orderBy("name","ASC")->get();
        $q_wbrands= $request->query("wbrands");
        $wcategories = WCategory::orderBy("name","ASC")->get();
        $q_wcategories =$request->query("wcategories");
        $prange= $request->query("prange");
        if(!$prange)
        $prange = '0,500';
        $from= explode(",",$prange)[0];
        $to = explode(",",$prange)[1];
        $wproducts = WProduct::where(function($query) use($q_wbrands){
            $query->whereIn('brand_id',explode(',',$q_wbrands))->orWhereRaw("'".$q_wbrands."'=''");
        })
        ->where(function($query) use($q_wcategories){
            $query->whereIn('category_id',explode(',',$q_wcategories))->orWhereRaw("'".$q_wcategories."'=''");
        })
        ->whereBetween('regular_price',array($from,$to))
       ->orderBy('created_at','DESC')->orderBy($o_column,$o_order)->paginate($size);
        return view('women/shop',['wproducts'=>$wproducts,'page'=>$page,'size'=>$size,'order'=>$order,'wbrands'=>$wbrands,'q_wbrands'=>$q_wbrands,"wcategories"=>$wcategories,'q_wcategories'=>$q_wcategories,'from'=>$from,'to'=>$to]);
         
    }
    
public function wproductDetails($slug)
{
    $wcategories = WCategory::orderBy("name","ASC")->get();
   
    $wproduct = WProduct::where('slug',$slug)->first();    
    $rwproducts =WProduct::where('slug','!=',$slug)->inRandomOrder('id')->get()->take(8);
    return view('women/details',['wproduct'=>$wproduct,'rwproducts'=>$rwproducts,'wcategories'=>$wcategories]);
}




}
