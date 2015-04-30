<?php
require_once 'CustomSelenium2TestCase.php';
class Beauty08ResL extends CustomSelenium2TestCase
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
        $this->url("/Beauty/08/resL.asp?from=fgindex");

        // Logo
        $this->assertTrue($this->_assertRequestStatus('http://pic2.fashionguide.com.tw/channel/fgindex/assets/images/channel_1/sprites.png?v=8'), '圖片可能有破圖');

        // 市調大隊
        $el = $this->byXPath('//*[@id="resLd1"]/table/tbody/tr/td/table/tbody/tr/td[1]/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="resLd1"]/table/tbody/tr/td/table/tbody/tr/td[2]/div/div[1]/div[1]/div/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="resLd1"]/table/tbody/tr/td/table/tbody/tr/td[2]/div/div[2]/div[1]/div/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="resLd1"]/table/tbody/tr/td/table/tbody/tr/td[2]/div/div[3]/div[1]/div/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');

        // 側欄微風松高開幕情報
        $el = $this->byXPath('//*[@id="subject_blogger"][1]/div[1]/table/tbody/tr/td/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="subject_blogger"][2]/div[1]/table/tbody/tr/td/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="subject_blogger"][3]/div[1]/table/tbody/tr/td/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="subject_blogger"][4]/div[1]/table/tbody/tr/td/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="subject_blogger"][5]/div[1]/table/tbody/tr/td/a/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');

        $el = $this->byXPath('//*[@id="frame_wrap"]/div[6]/div[7]/div[1]/div[1]/a/div/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="frame_wrap"]/div[6]/div[7]/div[2]/div[1]/a/div/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="frame_wrap"]/div[6]/div[7]/div[3]/div[1]/a/div/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="frame_wrap"]/div[6]/div[7]/div[4]/div[1]/a/div/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="frame_wrap"]/div[6]/div[7]/div[5]/div[1]/a/div/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');



        // FG 特優 icon
        $this->assertTrue($this->_assertRequestStatus('http://i.fgi.tw/Beauty/ResImg/best.gif'), '圖片可能有破圖');

        $el = $this->byXPath('//*[@id="frame_wrap"]/div[5]/table[7]/tbody/tr/td[1]/table/tbody/tr/td');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');

        $el = $this->byXPath('//*[@id="frame_wrap"]/div[5]/table[9]/tbody/tr/td[1]/table/tbody/tr/td');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');






        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('');
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
