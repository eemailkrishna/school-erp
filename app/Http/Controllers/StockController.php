<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
    public function stock(){
        return view('stock.stock');
    }
    public function CategoryAdd(){
        
        return view('stock.category_add');
    }
    public function ListCategory(){
        
        return view('stock.category_list');
    }
    public function AddItem(){
        
        return view('stock.add_item');
    }
    public function ItemList(){
        
        return view('stock.item_list');
    }
    public function PurchaseList(){
        
        return view('stock.purchase_list');
    }
    public function SaleList(){
        
        return view('stock.sale_list');
    }
    public function SaleItem(){
        
        return view('stock.sales_item');
    }



}