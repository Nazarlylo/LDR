<?php namespace Modules\Currency\Sidebar;

use Maatwebsite\Sidebar\Group;
use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Menu;
use Modules\Core\Contracts\Authentication;

class SidebarExtender implements \Maatwebsite\Sidebar\SidebarExtender
{
    /**
     * @var Authentication
     */
    protected $auth;

    /**
     * @param Authentication $auth
     *
     * @internal param Guard $guard
     */
    public function __construct(Authentication $auth)
    {
        $this->auth = $auth;
    }

    /**
     * @param Menu $menu
     *
     * @return Menu
     */
    public function extendWith(Menu $menu)
    {
        $menu->group(trans('workshop::workshop.title'), function (Group $group) {
            $group->item(trans('currency::currencies.title.currencies'), function (Item $item) {
                $item->icon('fa fa-copy');
                $item->weight(10);
                $item->append('admin.currency.currency.create');
                $item->route('admin.currency.currency.index');
                $item->authorize(
                    $this->auth->hasAccess('currency.currencies.index')
                );


            });
        });

        return $menu;
    }
}
