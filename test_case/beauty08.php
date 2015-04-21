<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://www.fashionguide.com.tw/");
  }

  public function testMyTestCase()
  {
    $this->open("/beauty/08/index.html?from=fgindex");
    $this->assertTrue($this->isElementPresent("css=#slideshow220 > a > img"));
    $this->assertTrue($this->isElementPresent("//img[contains(@src,'http://pic2.fashionguide.com.tw/channel/fgindex/upload/img/ad/2015/0420/132918.jpg?0')]"));
    $this->assertTrue($this->isElementPresent("//img[contains(@src,'http://pic2.fashionguide.com.tw/channel/fgindex/upload/img/ad/2015/0420/132919.jpg?1')]"));
    $this->assertTrue($this->isElementPresent("css=li > a > img"));
    $this->assertTrue($this->isElementPresent("//img[contains(@src,'http://pic2.fashionguide.com.tw/channel/fgindex/upload/img/ad/2015/0413/132745.jpg?3')]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"THE FACE SHO 芒果籽絲潤俏顏約會霜\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"Schick舒適舒綺美型之刀(敏感肌用)\"]"));
    $this->assertTrue($this->isElementPresent("xpath=(//img[contains(@src,'http://pic2.fashionguide.com.tw/channel/fgindex/assets/images/channel_1/fg_star.png')])[2]"));
    $this->assertTrue($this->isElementPresent("css=li.left-img > a > img"));
    $this->assertTrue($this->isElementPresent("//img[contains(@src,'http://pic2.fashionguide.com.tw/channel/fgindex/upload/img/ad/2015/0421/46426_3.jpg?332')]"));
    $this->assertTrue($this->isElementPresent("//img[contains(@src,'http://pic2.fashionguide.com.tw/channel/fgindex/upload/img/ad/2015/0421/46427_2.jpg?316')]"));
    $this->assertTrue($this->isElementPresent("//img[contains(@src,'http://pic2.fashionguide.com.tw/channel/fgindex/upload/img/ad/2015/0421/46427_3.jpg?316')]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"粉餅/85件\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"保養油/5件\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"洗面乳/86件\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"潤髮乳/22件\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"粉底液/76件\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"沐浴乳/36件\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"妝前霜/33件\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"乳霜/91件\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"面膜/204件\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"凝露/35件\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"防曬‧隔離/11件\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"私密保養/14件\"]"));
    $this->assertTrue($this->isElementPresent("css=#div_locate_239 > div.entry.clearfix > div.latest_content.pane-content"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"CLEAR淨女士去屑洗髮乳控油平衡型\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"施華蔻深層修護導入精華\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"PANTENE潘婷乳液修護潤髮精華素\"]"));
    $this->assertTrue($this->isElementPresent("css=a.smallimg > img[alt=\"KATE進化版持久液體眼線筆(蛛絲美姬)Ⅱ濃黑\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"KATE凱婷黑白決色眼影盒BK-1\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"Kiss Me奇士美花漾美姬輕羽捷薄膜型睫毛膏\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"CLARINS克蘭詩比基尼美體霜\"]"));
    $this->assertTrue($this->isElementPresent("xpath=(//img[@alt='嬌蘭珍珠極光綻白潤色隔離乳SPF30 PA+++(玫瑰色)'])[3]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"Bio-Oil®百洛\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"Neutrogena露得清水活保濕晚間凝膜\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"芳芯嫩白潔浴露\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"雅詩蘭黛超電能抗皺拉提精華\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"Bio-Oil®百洛\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"克蘭詩輕呼吸全效UV隔離露SPF50 PA++++\"]"));
    $this->assertTrue($this->isElementPresent("xpath=(//img[@alt='Neutrogena露得清水活保濕晚間凝膜'])[4]"));
    $this->assertTrue($this->isElementPresent("css=#div_locate_243 > div.entry.clearfix > div.latest_content.pane-content > a[title=\"伊麗莎白雅頓艾地苯極緻水潤亮眼霜SPF 15 PA++\"] > img[alt=\"伊麗莎白雅頓艾地苯極緻水潤亮眼霜SPF 15 PA++\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"潘婷 夏日護髮大作戰\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"StarMIMI 來自咪咪的癮-膠原蛋白飲\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"Dr.Neo 晶漾多肽撫紋精華乳\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"雪芙蘭 微晶保養系列\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"幫你臉部作SPA！\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"好朋友的好朋友\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"超水感、超輕盈！\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"以滑溜溜的肌膚來迎接夏天\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"來自法國改變肌膚命運!\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"擁有透明水潤底妝的新寶物\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"不想被曬黑或曬出小黑斑？\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"芳芯淨嫩潔浴露\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"凡士林修護保濕潤膚噴霧\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"Kiss Me 零阻力絲滑濃黑眼線液筆\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"Jurlique活能菁萃進化版\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"ettusais艾杜紗眉彩膏\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"KATE凱婷立體持久眉彩膠\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"shu uemura植村秀絲滑持久眉膠\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"ALBION艾倫比亞健康化妝水\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"雪肌精藥用雪肌精〔醫藥部外用〕\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"CHANEL香奈兒淨白防護妝前乳SPF30/PA++\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"Vital SPA山藥美胸精華乳\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"CLARINS克蘭詩胸部緊實露\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"珍珠粉奈米面膜\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"紅酒多酚奈米面膜\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"水蜜桃蘇打眼唇卸妝液\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"全效美白CC精華霜 SPF50 PA+++\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"深層潔淨眼唇卸妝液\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"深層潔淨卸妝乳\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"亮白淨化無瑕裸妝霜\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"亮白淨化精華液\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"紀梵希 都會雅痞淡香水\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"法國柏絲淨綠香氛護理乳\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"艾杜紗 零毛孔防曬美肌乳\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"碧兒泉 小清新香霧\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"雅詩蘭黛 DNA特潤再生眼部修護霜\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"天使草控油水凝露\"]"));
    $this->assertTrue($this->isElementPresent("css=img[alt=\"金盞花潔面泡泡凝露\"]"));
    $this->assertTrue($this->isElementPresent("css=div.AdItem.AdItem_Loc_157 > div.AdImg > a > img"));
    $this->assertTrue($this->isElementPresent("//img[contains(@src,'http://ad3.fashionguide.com.tw/i/3/9/4/6/63946_s6g26DlY.jpg')]"));
    $this->assertTrue($this->isElementPresent("//img[contains(@src,'http://ad3.fashionguide.com.tw/i/4/5/6/7/64567_eki3Elus.jpg')]"));
    $this->assertTrue($this->isElementPresent("css=div.AdFrameL.AdFrameL_Loc_162 > div.AdImg > a > img"));
    $this->assertTrue($this->isElementPresent("//img[contains(@src,'http://ad3.fashionguide.com.tw/i/5/7/7/5/65775_5AdBsiWp.jpg')]"));
    $this->assertTrue($this->isElementPresent("//img[contains(@src,'http://ad3.fashionguide.com.tw/i/6/7/8/2/66782_IyyzAgfM.jpg')]"));
    $this->assertTrue($this->isElementPresent("//img[contains(@src,'http://ad3.fashionguide.com.tw/i/6/6/5/1/66651_zQo42OJH.jpg')]"));
    $this->assertTrue($this->isElementPresent("link=商品試用評鑑"));
    $this->assertTrue($this->isElementPresent("css=img"));
    $this->assertTrue($this->isElementPresent("css=div.AdItem.AdItem_Loc_154 > div.AdImg > a > img"));
    $this->assertTrue($this->isElementPresent("css=div.AdItem.AdItem_Loc_155 > div.AdImg > a > img"));
    $this->assertTrue($this->isElementPresent("css=div.AdItem.AdItem_Loc_156 > div.AdImg > a > img"));
    $this->assertTrue($this->isElementPresent("css=#fg-trial > div.head > div.logo_ad > div.AdBlock.AdBlock_Loc_156 > div.AdItem.AdItem_Loc_156 > div.AdImg > a > img"));
    $this->assertTrue($this->isElementPresent("css=#fg-ranking > div.head > div.logo_ad > div.AdBlock.AdBlock_Loc_156 > div.AdItem.AdItem_Loc_156 > div.AdImg > a > img"));
    $this->assertTrue($this->isElementPresent("css=#fg-arrival > div.head > div.logo_ad > div.AdBlock.AdBlock_Loc_156 > div.AdItem.AdItem_Loc_156 > div.AdImg > a > img"));
  }
}
?>