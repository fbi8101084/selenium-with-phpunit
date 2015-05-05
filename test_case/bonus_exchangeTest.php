<?php
require_once 'CustomSelenium2TestCase.php';
class Bonus_exchangeTest extends CustomSelenium2TestCase
{
    public static function browsers() {

        return  array(
            self::$_browsersList['firefox']
        );
    }

    protected function setUp()
    {
        $this->setBrowserUrl("http://fgcash.fashionguide.com.tw/");
    }

    public function testMain()
    {
        $this->url("/bonus_exchange.php?from=fgindex");
        
        // .container
        $el = $this->byXPath('//*[@id="top"]/div[1]/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="wrapper"]/div[3]/div[1]/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="wrapper"]/div[5]/div[1]/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="wrapper"]/div[6]/div[1]/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');


        // ============= 檢查廣告板位 ==============
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_153');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_18');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_15');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_23');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_19');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_17');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_145');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_160');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_86');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_77');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_65');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_10');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_11'); 
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_45');
        
    }
}

?>
