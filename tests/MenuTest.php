<?php

class MenuTest extends PHPUnit_Framework_TestCase
{

    /**
     * @type \Dowilcox\KnpMenu\Menu
     */
    public $menu;

    public function setup()
    {
        $collection = new \Illuminate\Support\Collection();

        $factory = new \Knp\Menu\MenuFactory();

        $matcher = new \Knp\Menu\Matcher\Matcher();

        $renderer = new \Knp\Menu\Renderer\ListRenderer($matcher);

        $this->menu = new \Dowilcox\KnpMenu\Menu([], $collection, $factory, $matcher, $renderer);
    }

    /** @test */
    public function it_creates_menu()
    {
        $menu = $this->menu->create('testing');

        $this->assertTrue($menu instanceof \Knp\Menu\ItemInterface);
    }

    /** @test */
    public function it_gets_menu()
    {
        $this->menu->create('testing');

        $menu = $this->menu->get('testing');

        $this->assertTrue($menu instanceof \Knp\Menu\ItemInterface);
    }

    /** @test */
    public function it_forgets_menu()
    {
        $this->menu->create('testing');

        $this->menu->forget('testing');

        $menu = $this->menu->get('testing');

        $this->assertEquals(null, $menu);
    }

    /** @test */
    public function it_renders_menu()
    {
        $menu = $this->menu->create('testing');
        $menu->addChild('Test');

        $this->assertEquals('<ul>
  <li class="first last">
    <span>Test</span>
  </li>
</ul>
',
            $this->menu->render($menu));
    }

    /** @test */
    public function it_gets_factory()
    {
        $factory = $this->menu->getFactory();

        $this->assertTrue($factory instanceof \Knp\Menu\FactoryInterface);
    }

    /** @test */
    public function it_gets_matcher()
    {
        $matcher = $this->menu->getMatcher();

        $this->assertTrue($matcher instanceof \Knp\Menu\Matcher\MatcherInterface);
    }

    /** @test */
    public function it_gets_renderer()
    {
        $renderer = $this->menu->getRenderer();

        $this->assertTrue($renderer instanceof \Knp\Menu\Renderer\RendererInterface);
    }
}