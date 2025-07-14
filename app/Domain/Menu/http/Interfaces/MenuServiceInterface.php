<?php

namespace App\Domain\Menu\http\Interfaces;

use App\Domain\Menu\http\Models\Menu;
use Illuminate\Support\Collection;

interface MenuServiceInterface
{
    public function findBySlug(string $slug) : ?Collection;

    public function create(array $data) : Menu;

    public function findMenuById($slug, $menuId): Menu;
    public function update(array $data , $menuId): void;
    public function delete($menuId): void ;
}
