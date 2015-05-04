<?
require_once 'CustomSelenium2TestCase.php';

class DietTest extends CustomSelenium2TestCase
{
    protected function setUp()
    {
        $this->setBrowserUrl("http://diet.fashionguide.com.tw/");
    }

    public function testMainPage()
    {
        # 達人專欄
        $this->_expertPage();

         # 達人專欄
        $this->_activePage();
    }

    protected $_ads = array(
        '.AdBlock.AdBlock_Loc_10',
        '.AdBlock.AdBlock_Loc_11',
        '.AdBlock.AdBlock_Loc_15',
        '.AdBlock.AdBlock_Loc_17',
        '.AdBlock.AdBlock_Loc_18',
        '.AdBlock.AdBlock_Loc_45',
        '.AdBlock.AdBlock_Loc_145',
        '.AdBlock AdBlock_Loc_153'
    );

    protected function _expertPage()
    {
        $page = 1;
        while($page <= 10) {
            $this->url("/expert/expert_list?page=".$page);
            $i = 3;
            while($i <= 22) {
                $tmp_xpath = '//*[@id="contents"]/div/div[1]/div['.$i.']/div[1]/table/tbody/tr/td/a/img';
                $imgs[$tmp_xpath] = '第'.$page.'頁 第'.($i-2).'張';
                $i++;
            }

            //檢查圖片
            $this->_checkImg($imgs);

            $page++;
        }

         //檢查廣告板位
        foreach ($this->_ads as $ad) {
            $this->_assertAdElementPresent($ad);
        }
    }

    protected function _activePage()
    {
        $page = 1;
        while($page <= 10) {
            $this->url("/active?page=".$page);
            $count = count($this->elements($this->using('xpath')->value('//*[@id="frame_wrap"]/div[2]/div[1]/div/a')));
            if($count != 0) {
                $i = 1;
                while($i <= $count) {
                    $tmp_xpath = '//*[@id="frame_wrap"]/div[2]/div[1]/div/a['.$i.']/img';
                    $imgs[$tmp_xpath] = '第'.$page.'頁 第'.$i.'張';
                    $i++;
                }

                //檢查圖片
                $this->_checkImg($imgs);

                $page++;
            }
            else { break; }
        }
    }

    protected function _checkImg($imgs)
    {
        foreach($imgs as $img => $name) {
            $this->_assertImg($img, $name);
        }
    }
}