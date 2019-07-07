<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class CartController extends Controller
{
    public function index()
    {

    }

    public function  store(Request $request)
    {
//        dd(Cart::count());

        $duplicate  = Cart::search(function ($cartItem,$rowId) use ($request){
            return $cartItem ===  $request->id;
        });

        if($duplicate->isNotEmpty())
        {

            return redirect()->route('cart.index')->with('success_message',"Aricle exisatant déja dans le panier ");
        }

      $data = Cart::add($request->id,$request->designation,1,$request->price)
            ->associate('App\Product');



        Session::flash('message','ajout au panier effectuer') ;
        return redirect()->route('/') ;

    }

    public function update(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'quantity'=> 'required|numeric|between:1,300'
        ]);



        if($validator->fails())
        {
            session()->flash('errors',collect(['quantite doit etre entre 1 et 300! merci']));
            return  response()->json(['success'=>false],400) ;
        }
           /***condition pour le st*****/

//        if($request->quantity > $request->productQuantity)
//        {
//            session()->flash('errors',collect(['nous avons actuellement pas assez d\'articles en stock']));
//            return  response()->json(['success'=>false],400) ;
//        }



        Cart::update($request->rowId, $request->quantity);


        session()->flash('success_message','quantite modifier avec success');

        $Subtotal = ( Cart::subtotal()  );
        $total = Cart::total() ;
        $count = Cart::count();

        return response()->json([
            'subtotal'=> $Subtotal,
            'total'=> $total,
            'count'=> $count,
        ]) ;

    }

    public function destroy($id)
    {
        Cart::remove($id);

        return back()->with('success_message',"Vous avez supprimé du panier");
    }
}
