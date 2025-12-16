<?php
use App\Models\ProductAtk;
use Illuminate\Http\Request;

class ProductAtkController extends Controller
{
    public function index()
    {
        $products = ProductAtk::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        ProductAtk::create($request->all());
        return redirect()->route('products.index');
    }
}

