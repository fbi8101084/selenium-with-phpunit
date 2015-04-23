<?php
class CustomSelenium2TestCase extends PHPUnit_Extensions_Selenium2TestCase {
    public static function browsers() {
        return array(
//            array(
//                'name'    => 'Firefox on Mac',
//                'browser' => 'firefox',
//                'browserName' => 'firefox',
//                'host'    => '0.0.0.0',
//                'port'    => 4444,
//                'timeout' => 30000,
//            ),
            array(
                'name'    => 'Chrome on Mac',
                'browser' => 'chrome',
                'browserName' => 'chrome',
                'host'    => '0.0.0.0',
                'port'    => 4444,
                'timeout' => 30000,
            )
        );
    }
    protected function _assertRequestStatus($url, $status = 200) {
        file_get_contents($url);
        return (bool) preg_match('/.+' . $status . '.+/i', $http_response_header[0]);
    }
}