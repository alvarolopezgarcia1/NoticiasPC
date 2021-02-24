<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Models\Curso;


class CartController extends Controller
{
    
    public function add(Request $request){
     
        $curso = Curso::find($request->id);

        Cart::add(
            $curso->id, 
            $curso->nombre, 
            $curso->precio, 
            1,
            array("foto"=>$curso->foto)
            
        );

        return back()->with('success',"$curso->nombre Curso agregado al carrito correctamente");
        
    }

    public function cart(){
        $cart = Cart::getContent();
        $total = 0;
        foreach($cart as $curso){
            $total = $total + $curso->price * $curso->quantity;
        }
        return view('/curso/checkout',compact('total'));
    }

    public function removeitem(Request $request) {
        //$producto = Producto::where('id', $request->id)->firstOrFail();
        Cart::remove([
            'id' => $request->id,
        ]);
        return back()->with('success',"Curso eliminado con éxito de su carrito.");
    }

    public function clear(){
        Cart::clear();
        return back()->with('success',"The shopping cart has successfully beed added to the shopping cart!");
    }

}