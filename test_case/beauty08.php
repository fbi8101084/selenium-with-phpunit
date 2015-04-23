<?php
require_once 'CustomSelenium2TestCase.php';
class Beauty08 extends CustomSelenium2TestCase
{
    protected function setUp()
    {
        $this->setBrowserUrl("http://www.fashionguide.com.tw/");
    }

    public function testMyTestCase()
    {
        $this->url("/beauty/08/index.html?from=fgindex");
        $el = $this->byXPath('//*[@id="slideshow220"]/a[1]/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="slideshow220"]/a[2]/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
        $el = $this->byXPath('//*[@id="slideshow220"]/a[3]/img');
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), '圖片可能有破圖');
    }
}

?>