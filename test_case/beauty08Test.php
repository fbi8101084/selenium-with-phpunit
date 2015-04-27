<?php
require_once 'CustomSelenium2TestCase.php';
class Beauty08 extends CustomSelenium2TestCase
{
    public static function browsers() {

        return  array(
            self::$_browsersList['chrome']
        );
    }

    protected function setUp()
    {
        $this->setBrowserUrl("http://www.fashionguide.com.tw/");
    }

    public function testMain()
    {
        $this->url("/beauty/08/index.html?from=fgindex");
        // logo
        $this->assertTrue($this->_assertRequestStatus('http://pic2.fashionguide.com.tw/channel/fgindex/assets/images/channel_7/rate_sprites.png?v=4'), '圖片可能有破圖');

        // .container
        $el = $this->byXPath('//*[@id="slideshow220"]/a[1]/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="slideshow220"]/a[2]/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="slideshow220"]/a[3]/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="main"]/div/div[1]/div/ul/li[1]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="main"]/div/div[1]/div/ul/li[2]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');

        // FG特優
        $el = $this->byXPath('//*[@id="fg-premium"]/div[2]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-premium"]/div[3]/div[1]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-premium"]/div[3]/div[2]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-premium"]/div[3]/div[1]/table/tbody/tr/td[1]/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-premium"]/div[3]/div[2]/table/tbody/tr/td[1]/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-premium"]/div[3]/div[1]/div[3]/ul/li[1]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-premium"]/div[3]/div[1]/div[3]/ul/li[2]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-premium"]/div[3]/div[2]/div[3]/ul/li[1]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-premium"]/div[3]/div[2]/div[3]/ul/li[2]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');

        // 精選特優分類
        $el = $this->byXPath('//*[@id="fg-premium"]/div[2]/ul/li[1]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-premium"]/div[2]/ul/li[2]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-premium"]/div[2]/ul/li[3]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-premium"]/div[2]/ul/li[4]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-premium"]/div[2]/ul/li[5]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-premium"]/div[2]/ul/li[6]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-premium"]/div[2]/ul/li[7]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-premium"]/div[2]/ul/li[8]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-premium"]/div[2]/ul/li[9]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-premium"]/div[2]/ul/li[10]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-premium"]/div[2]/ul/li[11]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-premium"]/div[2]/ul/li[12]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');

        $el = $this->byXPath('//*[@id="div_locate_238"]/div/div[1]/a[1]/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="div_locate_238"]/div/div[1]/a[2]/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="div_locate_238"]/div/div[1]/a[3]/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="div_locate_239"]/div/div[1]/a[1]/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="div_locate_239"]/div/div[1]/a[2]/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="div_locate_239"]/div/div[1]/a[3]/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="div_locate_240"]/div/div[1]/a[1]/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="div_locate_240"]/div/div[1]/a[2]/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="div_locate_240"]/div/div[1]/a[3]/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="div_locate_241"]/div/div[1]/a[1]/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="div_locate_241"]/div/div[1]/a[2]/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="div_locate_241"]/div/div[1]/a[3]/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="div_locate_242"]/div/div[1]/a[1]/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="div_locate_242"]/div/div[1]/a[2]/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="div_locate_242"]/div/div[1]/a[3]/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="div_locate_243"]/div/div[1]/a[1]/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="div_locate_243"]/div/div[1]/a[2]/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="div_locate_243"]/div/div[1]/a[3]/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');

        // 新品搶先報
        $el = $this->byXPath('//*[@id="fg-report"]/div[2]/a[1]/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-report"]/div[2]/a[2]/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-report"]/div[2]/a[3]/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-report"]/div[2]/a[4]/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');

        // 試用開箱
        $el = $this->byXPath('//*[@id="fg-trial"]/div[2]/div[1]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-trial"]/div[2]/div[2]/div[1]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-trial"]/div[2]/div[2]/div[2]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-trial"]/div[2]/div[2]/div[3]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-trial"]/div[2]/div[1]/div/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-trial"]/div[2]/div[3]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-trial"]/div[2]/div[4]/div[2]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-trial"]/div[2]/div[5]/div[1]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-trial"]/div[2]/div[5]/div[2]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-trial"]/div[2]/div[5]/div[3]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-trial"]/div[2]/div[5]/div[4]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');

        // 愛用品排行榜
        $el = $this->byXPath('//*[@id="fg-ranking"]/div[2]/div[2]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-ranking"]/div[2]/div[3]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-ranking"]/div[2]/div[4]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');

        $el = $this->byXPath('//*[@id="fg-ranking"]/div[3]/div[2]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-ranking"]/div[3]/div[3]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-ranking"]/div[3]/div[4]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');

        $el = $this->byXPath('//*[@id="fg-ranking"]/div[4]/div[2]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-ranking"]/div[4]/div[3]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-ranking"]/div[4]/div[4]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');


        $el = $this->byXPath('//*[@id="fg-ranking"]/div[6]/div[2]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-ranking"]/div[6]/div[3]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-ranking"]/div[6]/div[4]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-ranking"]/div[7]/div[2]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-ranking"]/div[7]/div[3]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-ranking"]/div[7]/div[4]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-ranking"]/div[8]/div[2]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-ranking"]/div[8]/div[3]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-ranking"]/div[8]/div[4]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');

        // 本月新品
        $el = $this->byXPath('//*[@id="fg-arrival"]/div[2]/div[1]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-arrival"]/div[2]/div[2]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-arrival"]/div[2]/div[2]/div/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-arrival"]/div[2]/div[3]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-arrival"]/div[2]/div[3]/div/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-arrival"]/div[2]/div[4]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="fg-arrival"]/div[2]/div[4]/div/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');

        // 活動訊息
        $el = $this->byXPath('//*[@id="eventAd"]/div[2]/div/div[1]/div[1]/div/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="eventAd"]/div[2]/div/div[2]/div[1]/div/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="eventAd"]/div[2]/div/div[3]/div[1]/div/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="eventAd"]/div[2]/div/div[4]/div[1]/div/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');

        // ============= 檢查廣告板位 ==============

        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_18');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_152');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_154');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_155');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_156');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_157');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_162');
    }
}

?>