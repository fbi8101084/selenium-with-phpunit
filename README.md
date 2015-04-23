# Selenium With Phpunit
## Introduction
此 Repository 的目標將會陸續教你學會如何產生測試腳本並透過 selenium 自動幫你的網站在各種瀏覽器上進行測試。

## Getting started
### Selenium IDE
1. 先下載 firefox 瀏覽器，[取得最新 firefox 瀏覽器](http://mozilla.com.tw/)
2. 安裝完下載 [Selenuim IDE 2.9.0](http://release.seleniumhq.org/selenium-ide/2.9.0/selenium-ide-2.9.0.xpi)
3. 如此，只要打開想要測試的網頁，並且按下錄製按鈕，就可以錄製操作過程成為腳本。
4. 轉換為 phpunit 腳本:
`檔案 > Exports Test Case As > PHP(PHPUnit)`

### 安裝 Selenium RC Server
1. 需要安裝 JAVA runtime，如果是 Mac 就已經有內建了；如果沒有安裝請到這裡安裝：[https://java.com/download/](https://java.com/download/)
2. 下 `make` 由 Makfile 自動幫你完成安裝
3. `make run`: 啟動 Selenium RC Server

### 參考資料
- [PHPUnit 文件](https://phpunit.de/manual/current/zh_cn/index.html)
- [Selenium2 with PHPUnit 文件](http://shortwhitebaldguy.com/blog/2012/09/using-selenium2-with-phpunit)
