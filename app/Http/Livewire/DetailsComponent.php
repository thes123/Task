<?php


namespace App\Http\Livewire;
use App\Model\Product;
use Livewire\Component;
use Cart;

class DetailsComponent extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug=$slug;
    }
    public function store($product_id,$product_name,$product_price){
        Cart::add($product_id,$product_name,1, $product_price)->associate('App\Models\Product');
        session()->flash('success message','item added in cart');
        return redirect()->route('product.cart');
    }
    public function render()
    {
        $product=Product::where('slug',$this->slug)-first();
        return view('livewire.details-component',['product'=>$product])->layout('layouts.base');
    }
}






