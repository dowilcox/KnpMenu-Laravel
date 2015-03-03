<?php namespace Dowilcox\KnpMenu\Interfaces;

use Knp\Menu\ItemInterface;

interface MenuInterface
{
    /**
     * Create a new menu.
     *
     * @param $name
     * @param $options
     * @return mixed
     */
    public function create($name, $options = []);

    /**
     * Get a menu by the name.
     *
     * @param $name
     * @return mixed
     */
    public function get($name);

    /**
     * Render passed menu.
     *
     * @param ItemInterface $menu
     * @param array         $options
     * @return mixed
     */
    public function render(ItemInterface $menu, $options = []);

    /**
     * Get the factory instance.
     *
     * @return mixed
     */
    public function getFactory();

    /**
     * Get the matcher instance.
     *
     * @return mixed
     */
    public function getMatcher();

    /**
     * Get the renderer instance.
     *
     * @return mixed
     */
    public function getRenderer();

}