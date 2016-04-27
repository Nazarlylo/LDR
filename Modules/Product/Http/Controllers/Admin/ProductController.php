<?php namespace Modules\Product\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\Product\Entities\Product;
use Modules\Product\Repositories\ProductRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class ProductController extends AdminBaseController
{
    /**
     * @var ProductRepository
     */
    private $product;

    public function __construct(ProductRepository $product)
    {
        parent::__construct();

        $this->product = $product;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $products = $this->product->all();

        return view('product::admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('product::admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->product->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('product::products.title.products')]));

        return redirect()->route('admin.product.product.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Product $product
     * @return Response
     */
    public function edit(Product $product)
    {
        return view('product::admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Product $product
     * @param  Request $request
     * @return Response
     */
    public function update(Product $product, Request $request)
    {
        $this->product->update($product, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('product::products.title.products')]));

        return redirect()->route('admin.product.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Product $product
     * @return Response
     */
    public function destroy(Product $product)
    {
        $this->product->destroy($product);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('product::products.title.products')]));

        return redirect()->route('admin.product.product.index');
    }
}
