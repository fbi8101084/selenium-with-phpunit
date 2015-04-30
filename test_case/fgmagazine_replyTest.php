<?php
require_once 'CustomSelenium2TestCase.php';
class Famagazine_reply extends CustomSelenium2TestCase
{
    public static function browsers() {

        return  array(
            self::$_browsersList['chrome']
        );
    }

    protected function setUp()
    {
        $this->setBrowserUrl("http://www.fashionguide.com.tw");
    }

    public function testMain()
    {
        $this->url("/ques/index.asp?num=372");
   
        // banner
        $el = $this->byXPath('/html/body/div/center/table/tbody/tr[1]/td/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
           
    }
}

?>
