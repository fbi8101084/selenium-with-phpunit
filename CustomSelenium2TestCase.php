<?php
class CustomSelenium2TestCase extends PHPUnit_Extensions_Selenium2TestCase {
    protected static $_browsersList = array(
        'firefox' => array(
            'name'    => 'Firefox on Mac',
            'browser' => 'firefox',
            'browserName' => 'firefox',
            'host'    => '0.0.0.0',
            'port'    => 4444,
            'timeout' => 30000,
        ),
        'chrome' => array(
            'name'    => 'Chrome on Mac',
            'browser' => 'chrome',
            'browserName' => 'chrome',
            'host'    => '0.0.0.0',
            'port'    => 4444,
            'timeout' => 30000,
        )
    );

    protected function _assertRequestStatus($url, $status = 200) {
        file_get_contents($url);
        return (bool) preg_match('/.+' . $status . '.+/i', $http_response_header[0]);
    }

    protected function _assertAdElementPresent($cssSelector) {
        try {
            // 檢查外框是否存在
            $adBlocks = $this->elements($this->using('css selector')->value($cssSelector));

            foreach ($adBlocks as $adBlock) {
                $this->assertEquals(true, $adBlock->displayed(), 'Test Failed: ' . $cssSelector . ' 廣告不可見（工程部協助）。\n');
                if ($adBlock->displayed()) {

                    // 檢查是否有廣告內容
                    $items = $this->elements($this->using('css selector')->value($cssSelector . '>div'));

                    foreach ($items as $item) {
                        $this->assertEquals(true, $item->displayed(), 'Test Failed: ' . $cssSelector . ' 的內容不可見（）。\n');
                    }
                }
            }
            return true;

        } catch (Exception $e) {
            echo $e->getMessage() . "\n";
            return false;
        }
    }
}
