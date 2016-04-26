<?php namespace Modules\Category\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\Category\Entities\Category;
use Modules\Category\Entities\CategoryTranslation;
use Modules\Category\Repositories\CategoryRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class CategoryController extends AdminBaseController
{
    /**
     * @var CategoryRepository
     */
    private $category;

    public function __construct(CategoryRepository $category)
    {
        parent::__construct();

        $this->category = $category;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $categories = $this->category->all();
        return view('category::admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $category = CategoryTranslation::lists("name", "id")->prepend('Please select', '');
        return view('category::admin.categories.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->category->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('category::categories.title.categories')]));

        return redirect()->route('admin.category.category.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Category $category
     * @return Response
     */
    public function edit(Category $category)
    {
       //$parent_id = Category::find(id);

        $category_parent = CategoryTranslation::find($category->parent_id);
        $category_list = CategoryTranslation::lists("name", "id")->prepend('Please select', '');
        return view('category::admin.categories.edit', compact('category','category_parent','category_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Category $category
     * @param  Request $request
     * @return Response
     */
    public function update(Category $category, Request $request)
    {
        $this->category->update($category, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('category::categories.title.categories')]));

        return redirect()->route('admin.category.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Category $category
     * @return Response
     */
    public function destroy(Category $category)
    {
        $this->category->destroy($category);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('category::categories.title.categories')]));

        return redirect()->route('admin.category.category.index');
    }
}
