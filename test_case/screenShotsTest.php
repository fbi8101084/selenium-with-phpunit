<?php
require_once 'CustomSelenium2TestCase.php';
class screenShots extends CustomSelenium2TestCase
{
    public function browsers() {
        return  array(
            self::$_browsersList['firefox']
        );
    }
    protected function setUp()
    {
        $this->setBrowserUrl("http://www.fashionguide.com.tw/");
    }

    public function testMain()
    {
        $this->url("/beauty/08/index.html?from=fgindex");

        // 拍照
        $this->_screenShot(get_class($this));
    }
}

?>
