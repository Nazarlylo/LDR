<?php namespace Modules\Product\Sidebar;

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
        $menu->group(trans('core::sidebar.content'), function (Group $group) {
            $group->item(trans('product::products.title.products'), function (Item $item) {
                $item->icon('fa fa-copy');
                $item->weight(10);
                $item->append('admin.product.product.create');
                $item->route('admin.product.product.index');
                $item->authorize(
                    $this->auth->hasAccess('product.products.index')
                );

            });
        });

        return $menu;
    }
}
