<?php
abstract class CustomSelenium2TestCase extends PHPUnit_Extensions_Selenium2TestCase
{
    protected static $_browsersList = array(
        'firefox' => array(
            'browserName' => 'firefox',
            'host'    => '0.0.0.0',
            'port'    => 4444,
            'timeout' => 30000
        ),
        'chrome' => array(
            'browserName' => 'chrome',
            'host'    => '0.0.0.0',
            'port'    => 4444,
            'timeout' => 30000
        )
    );

    public static function browsers()
    {
        return array(
            self::$_browsersList['firefox']
        );
    }

    protected function _assertRequestStatus($url, $status = 200)
    {
        file_get_contents($url);
        return (bool) preg_match('/.+' . $status . '.+/i', $http_response_header[0]);
    }

    protected function _assertImgExist($xpath, $errMsg = '圖片可能有破圖')
    {
        $el = $this->byXPath($xpath);
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), $errMsg);
    }

    protected function _assertAdElementPresent($cssSelector)
    {
        try {

            // 檢查外框是否存在
            $adBlocks = $this->elements($this->using('css selector')->value($cssSelector));

            foreach ($adBlocks as $index => $adBlock) {
                $this->assertTrue($adBlock->displayed(), 'Test Failed: ' . $cssSelector . '[' . $index . '] 廣告不可見（工程部協助）。');
                if ($adBlock->displayed()) {

                    // 檢查是否有廣告內容
                    $items = $this->elements($this->using('css selector')->value($cssSelector . '>div'));

                    foreach ($items as $item) {
                        $this->assertTrue($item->displayed(), 'Test Failed: ' . $cssSelector . ' 的內容不可見（可能沒有廣告，請業務協助）。');
                    }
                }
            }
            return true;

        } catch (Exception $e) {
            echo " Selector: \033[01;31m" . $cssSelector . "\033[0m => " . $e->getMessage() . "\n";
            return false;
        }
    }

    protected function _screenShot($name)
    {
        try {
            $filedata = $this->currentScreenshot();
            $filepath = 'screenshots/' . $name . '.png';
            file_put_contents($filepath, $filedata);
            return true;
        } catch (Exception $e) {
            echo " Site Name: \033[01;31m" . $name . "\033[0m\n => " . $e->getMessage() . "";
        }
    }

    /**
     * 測試通用項目
     *
     */
    public function testCommon()
    {
        $configs = $this->_loadConfig();

        if($configs) {
            foreach($this->_loadConfig() as $url => $data) {
                $this->url($url);

                if(isset($data['imgs'])) {
                    foreach($data['imgs'] as $img => $name) {
                        $this->_assertImg($img, $name);
                    }
                }

                if(isset($data['ad'])) {
                    foreach($data['ad'] as $ad) {
                        $this->_assertAdElementPresent($ad);
                    }
                }
            }
        }
    }

    protected function _assertImg($xPath, $name)
    {
        $el = $this->byXPath($xPath);
        $this->assertTrue($this->_assertRequestStatus($el->attribute('src')), $name . '圖片可能有破圖');
    }

    protected function _loadConfig()
    {
        $class = get_class($this);
        $configName = substr($class, 0, strpos($class, 'Test'));
        $configName = lcfirst($configName);

        $file = __DIR__ . '/config/' . $configName . '.php';
        if(!file_exists($file)) {
            return false;
        }

        return require $file;
    }
}
