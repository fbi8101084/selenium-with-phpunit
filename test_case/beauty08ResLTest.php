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

    public function testCommon() {}


    private function _assertBackgroundImgExist($xpath) {
        $el = $this->byXPath($xpath);
        preg_match('/http.*\.jpg/', $el->attribute('style'), $matchs);
        if ($matchs[0]) {
            $this->assertTrue($this->_assertRequestStatus($matchs[0]), '圖片可能有破圖');
        } else {
            echo 'not found background image\'s url. \n';
        }
    }

    public function testMain()
    {
        $this->url("/Beauty/08/resL.asp?from=fgindex");

//        // Logo
//        $this->assertTrue($this->_assertRequestStatus('http://pic2.fashionguide.com.tw/channel/fgindex/assets/images/channel_1/sprites.png?v=8'), '圖片可能有破圖');
//
//        // 市調大隊
//        sleep(5);
//        $this->_assertImgExist('//*[@id="resLd1"]/table/tbody/tr/td/table/tbody/tr/td[1]/a/img');
//        $this->_assertImgExist('//*[@id="resLd1"]/table/tbody/tr/td/table/tbody/tr/td[2]/div/div[1]/div[1]/div/img');
//        $this->_assertImgExist('//*[@id="resLd1"]/table/tbody/tr/td/table/tbody/tr/td[2]/div/div[2]/div[1]/div/img');
//        $this->_assertImgExist('//*[@id="resLd1"]/table/tbody/tr/td/table/tbody/tr/td[2]/div/div[3]/div[1]/div/img');
//
//        // 側欄微風松高開幕情報
//        $this->_assertImgExist('//*[@id="subject_blogger"][1]/div[1]/table/tbody/tr/td/a/img');
//        $this->_assertImgExist('//*[@id="subject_blogger"][2]/div[1]/table/tbody/tr/td/a/img');
//        $this->_assertImgExist('//*[@id="subject_blogger"][3]/div[1]/table/tbody/tr/td/a/img');
//        $this->_assertImgExist('//*[@id="subject_blogger"][4]/div[1]/table/tbody/tr/td/a/img');
//        $this->_assertImgExist('//*[@id="subject_blogger"][5]/div[1]/table/tbody/tr/td/a/img');
//
//        // 醫美情報站
//        $this->_assertImgExist('//*[@id="frame_wrap"]/div[6]/div[7]/div[1]/div[1]/a/div/img');
//        $this->_assertImgExist('//*[@id="frame_wrap"]/div[6]/div[7]/div[2]/div[1]/a/div/img');
//        $this->_assertImgExist('//*[@id="frame_wrap"]/div[6]/div[7]/div[3]/div[1]/a/div/img');
//        $this->_assertImgExist('//*[@id="frame_wrap"]/div[6]/div[7]/div[4]/div[1]/a/div/img');
//        $this->_assertImgExist('//*[@id="frame_wrap"]/div[6]/div[7]/div[5]/div[1]/a/div/img');
//
//        // FG 特優 icon
//        $this->assertTrue($this->_assertRequestStatus('http://i.fgi.tw/Beauty/ResImg/best.gif'), '圖片可能有破圖');
//        sleep(5);
//        $this->_assertBackgroundImgExist('//*[@id="frame_wrap"]/div[5]/table[7]/tbody/tr/td[1]/table/tbody/tr/td');
//        $this->_assertBackgroundImgExist('//*[@id="frame_wrap"]/div[5]/table[9]/tbody/tr/td[1]/table/tbody/tr/td');
//        $this->_assertBackgroundImgExist('//*[@id="frame_wrap"]/div[5]/table[11]/tbody/tr/td[1]/table/tbody/tr/td');
//        $this->_assertBackgroundImgExist('//*[@id="frame_wrap"]/div[5]/table[13]/tbody/tr/td[1]/table/tbody/tr/td');
//        $this->_assertBackgroundImgExist('//*[@id="frame_wrap"]/div[5]/table[15]/tbody/tr/td[1]/table/tbody/tr/td');
//        $this->_assertBackgroundImgExist('//*[@id="frame_wrap"]/div[5]/table[17]/tbody/tr/td[1]/table/tbody/tr/td');
//        $this->_assertBackgroundImgExist('//*[@id="frame_wrap"]/div[5]/table[19]/tbody/tr/td[1]/table/tbody/tr/td');
//        $this->_assertBackgroundImgExist('//*[@id="frame_wrap"]/div[5]/table[21]/tbody/tr/td[1]/table/tbody/tr/td');
//        $this->_assertBackgroundImgExist('//*[@id="frame_wrap"]/div[5]/table[23]/tbody/tr/td[1]/table/tbody/tr/td');
//        $this->_assertBackgroundImgExist('//*[@id="frame_wrap"]/div[5]/table[25]/tbody/tr/td[1]/table/tbody/tr/td');
//
//        // FG 部落格 TOP100
//        $this->_assertImgExist('//*[@id="adPos_fbit-0"]/table/tbody/tr[2]/td/div/div[1]/div[1]/div/a/img');
//        $this->_assertImgExist('//*[@id="adPos_fbit-0"]/table/tbody/tr[2]/td/div/div[2]/div[1]/div/a/img');
//        $this->_assertImgExist('//*[@id="adPos_fbit-0"]/table/tbody/tr[2]/td/div/div[3]/div[1]/div/a/img');
//        // FG 影音 美人教室
//        $this->_assertImgExist('//*[@id="adPos_fbit-2"]/table/tbody/tr[2]/td/div/div[1]/div[1]/div/a/img');
//        $this->_assertImgExist('//*[@id="adPos_fbit-2"]/table/tbody/tr[2]/td/div/div[2]/div[1]/div/a/img');
//        $this->_assertImgExist('//*[@id="adPos_fbit-2"]/table/tbody/tr[2]/td/div/div[3]/div[1]/div/a/img');
//
//        // 最底下八個文章圖
//        $this->_assertImgExist('/html/body/div[4]/div[2]/div[1]/div[1]/div/a/img');
//        $this->_assertImgExist('/html/body/div[4]/div[2]/div[2]/div[1]/div/a/img');
//        $this->_assertImgExist('/html/body/div[4]/div[2]/div[3]/div[1]/div/a/img');
//        $this->_assertImgExist('/html/body/div[4]/div[2]/div[4]/div[1]/div/a/img');
//        $this->_assertImgExist('/html/body/div[4]/div[3]/div[1]/div[1]/div/a/img');
//        $this->_assertImgExist('/html/body/div[4]/div[3]/div[2]/div[1]/div/a/img');
//        $this->_assertImgExist('/html/body/div[4]/div[3]/div[3]/div[1]/div/a/img');
//        $this->_assertImgExist('/html/body/div[4]/div[3]/div[4]/div[1]/div/a/img');

        // ============= 檢查廣告板位 ==============
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_2');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_10');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_11');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_15');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_17');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_18');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_19');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_23');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_24');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_25');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_26');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_45');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_46');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_47');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_65');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_77');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_92');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_145');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_153');
        $this->_assertAdElementPresent('.AdBlock.AdBlock_Loc_160');

    }
}

?>
