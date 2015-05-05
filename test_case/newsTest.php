<?
require_once 'CustomSelenium2TestCase.php';

class NewsTest extends CustomSelenium2TestCase
{
    protected function setUp()
    {
        $this->setBrowserUrl("http://news.fashionguide.com.tw/");
    }

    public function testMainPage()
    {
        $this->url('/');

        $this->assertEquals('FG新聞中心-FashionGuide華人第一女性時尚美妝傳媒', $this->title());
    }

    // 測試搜尋
    public function testSearch()
    {
        $this->url('/');
        /**
         * 輸入關鍵字美白並且送出查詢
         **/
        $keyword = $this->byXPath('//*[@id="keyword"]');
        $keyword->value('美白');
        $submit = $this->byXPath('//*[@id="frame_header"]/div[4]/div[2]/div[2]/form/input[2]');
        $submit->click();

        // 是否成功導到搜尋結果頁
        $this->assertEquals('http://search.fashionguide.com.tw/?q=%E7%BE%8E%E7%99%BD', $this->url());
    }
}
