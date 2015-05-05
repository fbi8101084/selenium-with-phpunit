<?
require_once 'CustomSelenium2TestCase.php';

class MagazineTest extends CustomSelenium2TestCase
{
    protected function setUp()
    {
        $this->setBrowserUrl("http://fgmagazine.fashionguide.com.tw/");
    }

    public function testMainPage()
    {
        $this->url('/');

        $this->assertEquals('FG美妝雜誌2月號優惠情報', $this->title());
    }
}
