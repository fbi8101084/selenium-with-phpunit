<?php
require_once 'CustomSelenium2TestCase.php';
class Member_indexTest extends CustomSelenium2TestCase
{
    public static function browsers() {

        return  array(
            self::$_browsersList['firefox']
        );
    }

    protected function setUp()
    {
        $this->setBrowserUrl("http://member.fashionguide.com.tw/");
    }

    public function testMain()
    {
        //此頁為會員中心首頁
        //http://member.fashionguide.com.tw/index.php
        $this->url("/index.php");
        
        // .container
        $el = $this->byXPath('//*[@id="R"]/div[4]/div[3]/table/tbody/tr/td[2]/table/tbody/tr[1]/td/div[1]/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="R"]/div[5]/div[2]/a/img');
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
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_77');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_65');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_10');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_11');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_45');
        
    }
}

?>
