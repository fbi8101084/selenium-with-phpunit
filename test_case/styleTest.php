<?
require_once 'CustomSelenium2TestCase.php';

class StyleTest extends CustomSelenium2TestCase
{
    protected function setUp()
    {
        $this->setBrowserUrl("http://style.fashionguide.com.tw");
    }

    public function testMainPage()
    {
        $this->url('/');

        $this->assertEquals('我的穿搭我的時尚|FG StyleWall 美圖牆', $this->title());

        # 九宮格測試
        $this->_mainPage9BlockTest();

        # 瀑布流測試
        $this->_mainPageMasonryTest();
    }

    public function testLogin()
    {
        $this->url('/');
        $element = $this->byXPath('//*[@id="function"]/ul/li[2]/a');
        $element->click();

        $this->assertEquals($this->getBrowserUrl() . '/platform/index', $this->url());

        $element = $this->byXPath('//*[@id="wrap"]/div[3]/div/a[2]');
        $element->click();

        $this->assertEquals($this->getBrowserUrl() . '/platform/sign_in', $this->url());

        $element = $this->byXPath('//*[@id="account"]');
        $element->value('');

        $element = $this->byXPath('//*[@id="password"]');
        $element->value('');

        $element = $this->byXPath('//*[@id="sign_in"]');
        $element->click();

        $this->assertEquals($this->getBrowserUrl() . '/welcome/index', $this->url());
    }

    protected function _mainPage9BlockTest()
    {
        $elements = $this->elements(
            $this->using('xpath')->value('//*[@id="maincontent"]/div[2]/ul/li')
        );

        # 九宮格數量
        $this->assertEquals(9, count($elements));

        # 九宮格背景
        foreach ($elements as $element) {
            $background = $element->byCssSelector('.group')->css('background');

            preg_match('/http:\/\/.+\.jpg/', $background, $matches);

            if (!isset($matches[0])) {
                throw new Exception('九宮格網址錯誤');
            }

            $this->assertTrue($this->_assertRequestStatus($matches[0]), '九宮格圖片可能破圖');
        }
    }

    protected function _mainPageMasonryTest()
    {
        $elements = $this->elements(
            $this->using('xpath')->value('//*[@id="masonry"]/div')
        );

        if (!count($elements)) {
            throw new Exception('首頁瀑布流消失');
        }

        foreach ($elements as $element) {
            $src = $element->byCssSelector('.box-img a img')->attribute('src');
            $this->assertTrue($this->_assertRequestStatus($src), '瀑布流圖片可能有破圖');
        }
    }
}