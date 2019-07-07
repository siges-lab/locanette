<?php

namespace App\Http\Controllers;

use App\EventEquipment;
use App\Product;
use App\ProductCategory;
use App\ProfessionalTool;
use App\Provider;
use App\Room;
use App\Space;
use App\Vehicle;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    // Get site home
    public function index()
    {
        $eventEquipements = EventEquipment::where('visible',1)->orderBy('id','DESC')->get();
        $rooms = Room::where('visible',1)->orderBy('id','DESC')->get();
        $vehicules = Vehicle::where('visible',1)->orderBy('id','DESC')->get() ;
        $toolspros = ProfessionalTool::where('visible',1)->orderBy('id','DESC')->get() ;
        $providers =  Provider::where('visible',1)->orderBy('id','DESC')->get() ;
        return view('frontend/includes/main', compact('providers','eventEquipements','rooms','vehicules','toolspros'));
    }

    //Search products method
    public function  searchproduct (Request $request)
    {
        $search = $request->search ;
        if(!empty($search))
        {
            $eventEquipements = EventEquipment::where('designation', 'LIKE', "%{$search}%")->orWhere('color', 'LIKE', "%{$search}%")->where('visible',1)
                ->orwhereHas('product',function($q) use($search) {
                    $search = $search ;
            $q->where('rental_price','LIKE',"{$search}")
               ->orWhere('rental_price','LIKE',"{$search}") ;
        })->orderBy('id','DESC')->get();
            /**Room***/
            $rooms = Room::where('name', 'LIKE', "%{$search}%")
                ->orWhere('capacity', 'LIKE', "%{$search}%")
                ->orWhere('localization', 'LIKE', "%{$search}%")
                ->orwhereHas('product',function($q) use($search) {
                    $search = $search ;
                    $q->where('rental_price','LIKE',"{$search}")
                        ->orWhere('rental_price','LIKE',"{$search}") ;
                })
                ->orwhereHas('roomtype',function($q) use($search) {
                    $search = $search ;
                    $q->where('label','LIKE',"{$search}") ;

                })
                ->where('visible',1)
                ->orderBy('id','DESC')->get();

            $vehicules = Vehicle::where('fuel_name', 'LIKE', "%{$search}%")
                ->orWhere('description', 'LIKE', "%{$search}%")
                ->orWhere('color', 'LIKE', "%{$search}%")
                ->orwhereHas('product',function($q) use($search) {
                    $search = $search ;
                    $q->where('rental_price','LIKE',"{$search}")
                        ->orWhere('rental_price','LIKE',"{$search}") ;
                })
                ->orwhereHas('product',function($q) use($search) {
                    $search = $search ;
                    $q->where('rental_price','LIKE',"{$search}")
                        ->orWhere('rental_price','LIKE',"{$search}") ;
                })
                ->orwhereHas('type',function($q) use($search) {
                    $search = $search ;
                    $q->where('label','LIKE',"{$search}") ;
                })
                ->orwhereHas('model',function($q) use($search) {
                    $search = $search ;
                    $q->where('label','LIKE',"{$search}")
                        ->orWhere('release_year','LIKE',"{$search}");
//                    $q->WhereHas('brand',function ($k) use($search){
//                             $k->where('label','LIKE',"{$search}") ;
//                        }) ;

                })
                ->where('visible',1)
                ->orderBy('id','DESC')->get();

            $toolspros = ProfessionalTool::where('designation', 'LIKE', "%{$search}%")
                ->orwhereHas('product',function($q) use($search) {
                    $search = $search ;
                    $q->where('rental_price','LIKE',"{$search}")
                        ->orWhere('rental_price','LIKE',"{$search}") ;
                })

                ->where('visible',1)->orderBy('id','DESC')->get();


            $providers = Provider::where('name', 'LIKE', "%{$search}%")
                ->orWhere('email', 'LIKE', "%{$search}%")
                ->orWhere('localization', 'LIKE', "%{$search}%")
                ->orwhereHas('product',function($q) use($search) {
                    $search = $search ;
                    $q->where('rental_price','LIKE',"{$search}")
                        ->orWhere('rental_price','LIKE',"{$search}") ;
                })
                ->orwhereHas('provider_specialty',function($q) use($search) {
                    $search = $search ;
                    $q->where('label','LIKE',"{$search}") ;

                })
                ->where('visible',1)
                ->orderBy('id','DESC')->get();

             dd($vehicules);
//            $rooms = Room::where('visible',1)->orderBy('id','DESC')->get();
//            $vehicules = Vehicle::where('visible',1)->orderBy('id','DESC')->get() ;
//            $toolspros = ProfessionalTool::where('visible',1)->orderBy('id','DESC')->get() ;
//            $providers =  Provider::where('visible',1)->orderBy('id','DESC')->get() ;
        }

    }

    //Search Box
    public function searchBox(Request $request)
    {
        $search = $request->input('query') ;
        $equipments = EventEquipment::where('color', 'LIKE', "%{$request->input('query')}%")
               ->orwhere('designation', 'LIKE', "%{$request->input('query')}%")
                ->get();
        $toolspros = ProfessionalTool::where('designation', 'LIKE', "%{$request->input('query')}%")
            ->orwhereHas('product',function($q) use($search) {
                $search = $search ;
                $q->where('rental_price','LIKE',"{$search}")
                    ->orWhere('rental_price','LIKE',"{$search}")
                    ->orWhere('code','LIKE',"{$search}") ;
            })
            ->where('visible',1)->orderBy('id','DESC')->get();

        $rooms = Room::where('name', 'LIKE', "%{$search}%")
            ->orWhere('capacity', 'LIKE', "%{$search}%")
            ->orWhere('localization', 'LIKE', "%{$search}%")
            ->orwhereHas('product',function($q) use($search) {
                $search = $search ;
                $q->where('rental_price','LIKE',"{$search}")
                    ->orWhere('rental_price','LIKE',"{$search}") ;
            })
            ->orwhereHas('roomtype',function($q) use($search) {
                $search = $search ;
                $q->where('label','LIKE',"{$search}") ;

            })
            ->where('visible',1)
            ->orderBy('id','DESC')->get();


        $providers = Provider::where('name', 'LIKE', "%{$search}%")
            ->orWhere('email', 'LIKE', "%{$search}%")
            ->orWhere('localization', 'LIKE', "%{$search}%")
            ->orwhereHas('product',function($q) use($search) {
                $search = $search ;
                $q->where('rental_price','LIKE',"{$search}")
                    ->orWhere('rental_price','LIKE',"{$search}") ;
            })
            ->orwhereHas('provider_specialty',function($q) use($search) {
                $search = $search ;
                $q->where('label','LIKE',"{$search}") ;

            })
            ->where('visible',1)
            ->orderBy('id','DESC')->get();

        $vehicules = Vehicle::where('fuel_name', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->orWhere('color', 'LIKE', "%{$search}%")
            ->orwhereHas('product',function($q) use($search) {
                $search = $search ;
                $q->where('rental_price','LIKE',"{$search}")
                    ->orWhere('rental_price','LIKE',"{$search}") ;
            })
            ->orwhereHas('product',function($q) use($search) {
                $search = $search ;
                $q->where('rental_price','LIKE',"{$search}")
                    ->orWhere('rental_price','LIKE',"{$search}") ;
            })
            ->orwhereHas('type',function($q) use($search) {
                $search = $search ;
                $q->where('label','LIKE',"{$search}") ;
            })
            ->orwhereHas('model',function($q) use($search) {
                $search = $search ;
                $q->where('label','LIKE',"{$search}")
                    ->orWhere('release_year','LIKE',"{$search}");
//                    $q->WhereHas('brand',function ($k) use($search){
//                             $k->where('label','LIKE',"{$search}") ;
//                        }) ;

            })
            ->where('visible',1)
            ->orderBy('id','DESC')->get();

        return response()->json([$equipments,$toolspros,$rooms,$providers,$vehicules]) ;
    }

    //Get sector page : result page for sector's products
    public function getSector($type){

        if($type=="event"){
            $equipments = EventEquipment::where('visible','1')->get();
            $categories =[];
            $products =[];
            $c=0;
            foreach ($equipments as $equipment){
                $categories[$c] = $equipment->product->product_category->label;
                $products[$c] = $equipment->product;
                $c++;
            }
        }elseif ($type=="space"){
            $spaces = Space::where('visible','1')->get();
            $rooms = Room::where('visible','1')->get();
            $categories =[];
            $products =[];
            $c=0;
            foreach ($spaces as $space){
                $categories[$c] = $space->product->product_category->label;
                $products[$c] = $space->product;
                $c++;
            }
            $c=0;
            foreach ($rooms as $room){
                $categories[$c] = $room->product->product_category->label;
                $products[$c] = $room->product;
                $c++;
            }
        }elseif ($type=="provider"){
            $providers = Provider::where('visible','1')->get();
            $categories =[];
            $products =[];
            $c=0;
            foreach ($providers as $provider){
                $categories[$c] = $provider->product->product_category->label;
                $products[$c] = $provider->product;
                $c++;
            }
        }elseif ($type=="tool"){
            $tools = ProfessionalTool::where('visible','1')->get();
            $categories =[];
            $products =[];
            $c=0;
            foreach ($tools as $tool){
                $categories[$c] = $tool->product->product_category->label;
                $products[$c] = $tool->product;
                $c++;
            }
        }elseif ($type=="vehicle"){
            $vehicles = Vehicle::where('visible','1')->get();
            $categories =[];
            $products =[];
            $c=0;
            foreach ($vehicles as $vehicle){
                $categories[$c] = $vehicle->product->product_category->label;
                $products[$c] = $vehicle->product;
                $c++;
            }
        }


        return view('frontend/product_sectors',compact('categories','products'));
    }

    //Get family page : result page for family's products
    public function getFamily($id){

        return view('frontend/product_families');
    }

    //Get category page : result page for category's products
    public function getCategory($id){
        $category = ProductCategory::findOrFail($id);
        $products = $category->products;
        return view('frontend/product_categories',compact('products'));
    }

    //Get product detail page
    public function getProduct($id){
        $product = Product::findOrFail($id);
        $relateds =  $product->product_category->products;
        return view('frontend/product_details',compact('product','relateds'));
    }

    //Get shopping cat page
    public function shoppingCart(){
        return view('frontend/shopping_cart');
    }

//    public function searchBox(Request $request){
//        // check if ajax request is coming or not
//        if($request->ajax()) {
//            // select country name from database
//            $data = EventEquipment::where('color', 'LIKE', "%{$request->input('query')}%")
//                ->get();
//            // declare an empty array for output
//            $output = '';
//            // if searched countries count is larager than zero
//            if (count($data)>0) {
//                // concatenate output to the array
//                $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';
//                // loop through the result array
//                foreach ($data as $row){
//                    // concatenate output to the array
//                    $output .= '<li class="list-group-item">'.$row->name.'</li>';
//                }
//                // end of output
//                $output .= '</ul>';
//            }
//            else {
//                // if there's no matching results according to the input
//                $output .= '<li class="list-group-item">'.'No results'.'</li>';
//            }
//            // return output result array
//            return $output;
//        }
//    }
}
