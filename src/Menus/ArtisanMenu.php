<?php

namespace TomatoPHP\TomatoArtisan\Menus;

use TomatoPHP\TomatoPHP\Services\Menu\Menu;
use TomatoPHP\TomatoPHP\Services\Menu\TomatoMenu;

class ArtisanMenu extends TomatoMenu
{
    /**
     * @var ?string
     * @example ACL
     */
    public ?string $group;

    /**
     * @var ?string
     * @example dashboard
     */
    public ?string $menu = "dashboard";

    public function __construct()
    {
        $this->group = trans('tomato-logs::global.group');
    }

    /**
     * @return array
     */
    public static function handler(): array
    {
        return [
            Menu::make()
                ->label("Artisan Terminal")
                ->icon("bx bxs-terminal")
                ->route("admin.artisan.index"),
        ];
    }
}
