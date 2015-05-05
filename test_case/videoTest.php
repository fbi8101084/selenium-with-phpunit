<?php
require_once 'CustomSelenium2TestCase.php';
class VideoTest extends CustomSelenium2TestCase
{
    public static function browsers() {

        return  array(
            self::$_browsersList['firefox']
        );
    }

    protected function setUp()
    {
        $this->setBrowserUrl("http://video.fashionguide.com.tw/");
    }

    public function testMain()
    {
        $this->url("");
        
        // .container
        $el = $this->byXPath('//*[@id="div0"]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="div1"]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="div2"]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="div3"]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="div4"]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');

        $el = $this->byXPath('//*[@id="divC0"]/div[1]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="divC1"]/div[1]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="divC2"]/div[1]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="divC3"]/div[1]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="divC4"]/div[1]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');

        $el = $this->byXPath('//*[@id="all"]/div[11]/div/div[1]/div[1]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="all"]/div[11]/div/div[2]/div[1]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="all"]/div[11]/div/div[3]/div[1]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="all"]/div[11]/div/div[4]/div[1]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');

        $el = $this->byXPath('//*[@id="all"]/div[11]/div/div[5]/div[1]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="all"]/div[11]/div/div[6]/div[1]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="all"]/div[11]/div/div[7]/div[1]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="all"]/div[11]/div/div[8]/div[1]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');

        $el = $this->byXPath('//*[@id="all"]/div[11]/div/div[9]/div[1]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="all"]/div[11]/div/div[10]/div[1]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="all"]/div[11]/div/div[11]/div[1]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="all"]/div[11]/div/div[12]/div[1]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');

        $el = $this->byXPath('//*[@id="all"]/div[11]/div/div[13]/div[1]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="all"]/div[11]/div/div[14]/div[1]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="all"]/div[11]/div/div[15]/div[1]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="all"]/div[11]/div/div[16]/div[1]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');

        $el = $this->byXPath('//*[@id="all"]/div[11]/div/div[17]/div[1]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="all"]/div[11]/div/div[18]/div[1]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="all"]/div[11]/div/div[19]/div[1]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="all"]/div[11]/div/div[20]/div[1]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');



        // ============= 檢查廣告板位 ==============
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_152');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_18');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_160');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_15');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_23');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_19');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_17');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_157');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_162');
        
    }
}

?>
