<?php namespace Modules\Currency\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\Currency\Entities\Currency;
use Modules\Currency\Repositories\CurrencyRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class CurrencyController extends AdminBaseController
{
    /**
     * @var CurrencyRepository
     */
    private $currency;

    public function __construct(CurrencyRepository $currency)
    {
        parent::__construct();

        $this->currency = $currency;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $currencies = $this->currency->all();

        return view('currency::admin.currencies.index', compact('currencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('currency::admin.currencies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {


        $this->currency->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('currency::currencies.title.currencies')]));

        return redirect()->route('admin.currency.currency.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Currency $currency
     * @return Response
     */
    public function edit(Currency $currency)
    {
        return view('currency::admin.currencies.edit', compact('currency'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Currency $currency
     * @param  Request $request
     * @return Response
     */
    public function update(Currency $currency, Request $request)
    {
        $this->currency->update($currency, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('currency::currencies.title.currencies')]));

        return redirect()->route('admin.currency.currency.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Currency $currency
     * @return Response
     */
    public function destroy(Currency $currency)
    {
        $this->currency->destroy($currency);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('currency::currencies.title.currencies')]));

        return redirect()->route('admin.currency.currency.index');
    }
}
