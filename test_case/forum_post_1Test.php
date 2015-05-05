<?php
require_once 'CustomSelenium2TestCase.php';
class Forum_post_1Test extends CustomSelenium2TestCase
{
    public static function browsers() {

        return  array(
            self::$_browsersList['firefox']
        );
    }

    protected function setUp()
    {
        $this->setBrowserUrl("http://forum.fashionguide.com.tw/");
    }

    public function testMain()
    {
        //此頁為Fashion時尚討論區張貼新話題內頁
        //http://forum.fashionguide.com.tw/post.php?forum_id=1&action=post&LinkTo=TopicL
        $this->url("/post.php?forum_id=1&action=post&LinkTo=TopicL");
        
        // .container
        //TODO: 以下這些區塊是輪播的，一次只會出現三個區塊(隨機)
        $el = $this->byXPath('//*[@id="adLoc_25"]/table/tbody/tr[2]/td/div/div[1]/div[1]/div/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="adLoc_25"]/table/tbody/tr[2]/td/div/div[2]/div[1]/div/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="adLoc_25"]/table/tbody/tr[2]/td/div/div[3]/div[1]/div/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');

        $el = $this->byXPath('//*[@id="adLoc_46"]/table/tbody/tr[2]/td/div/div[1]/div[1]/div/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="adLoc_46"]/table/tbody/tr[2]/td/div/div[2]/div[1]/div/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="adLoc_46"]/table/tbody/tr[2]/td/div/div[3]/div[1]/div/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');

        $el = $this->byXPath('//*[@id="adLoc_26"]/table/tbody/tr[2]/td/div/div[1]/div[1]/div/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="adLoc_26"]/table/tbody/tr[2]/td/div/div[2]/div[1]/div/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="adLoc_26"]/table/tbody/tr[2]/td/div/div[3]/div[1]/div/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');

        $el = $this->byXPath('//*[@id="adLoc_47"]/table/tbody/tr[2]/td/div/div[1]/div[1]/div/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="adLoc_47"]/table/tbody/tr[2]/td/div/div[2]/div[1]/div/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="adLoc_47"]/table/tbody/tr[2]/td/div/div[3]/div[1]/div/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');

        $el = $this->byXPath('//*[@id="adLoc_194"]/table/tbody/tr[2]/td/div/div[1]/div[1]/div/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="adLoc_194"]/table/tbody/tr[2]/td/div/div[2]/div[1]/div/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="adLoc_194"]/table/tbody/tr[2]/td/div/div[3]/div[1]/div/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');


        // ============= 檢查廣告板位 ==============
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_153');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_18');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_24');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_15');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_23');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_19');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_17');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_145');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_160');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_25');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_47');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_26');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_46');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_194');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_77');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_65');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_10');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_11');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_45');
    }
}

?>
