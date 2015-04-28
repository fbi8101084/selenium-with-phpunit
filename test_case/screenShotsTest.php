<?php
require_once 'CustomSelenium2TestCase.php';
class screenShots extends CustomSelenium2TestCase
{
    protected static $_url_list = array(
        'main_page'             => 'http://www.fashionguide.com.tw/', // 大首頁

        'style'                 => 'http://style.fashionguide.com.tw/', // Style wall - 首頁
        'style_picture'         => 'http://style.fashionguide.com.tw/shares', // - 看美圖
        'style_mag'             => 'http://style.fashionguide.com.tw/magazines/select', // - 看雜誌
        'style_shop'            => 'http://style.fashionguide.com.tw/shops', //- Shopping

        'hair'                  => 'http://hair.fashionguide.com.tw', // Hair - 首頁
        'hair_detail'           => 'http://hair.fashionguide.com.tw/hairs/371429', // - 單圖內頁
        'hair_stores'           => 'http://hair.fashionguide.com.tw/hair_stores', // -找髮廊
        'hair_hairs'            => 'http://hair.fashionguide.com.tw/hairs', // -找髮型
        'hair_products'         => 'http://hair.fashionguide.com.tw/products', // -找髮品
        'hair_expert'           => 'http://hair.fashionguide.com.tw/expert/?from=hair', // -髮類專家
        'hair_news'             => 'http://hair.fashionguide.com.tw/news', // -看新知
        'hair_users'            => 'http://hair.fashionguide.com.tw/users', // -我的首頁 , 會員登入

        'blog'                  => 'http://blog.fashionguide.com.tw/', // Blog
        'blog_promo'            => 'http://blog.fashionguide.com.tw/promo', // - 專欄精選
        'blog_category456'      => 'http://blog.fashionguide.com.tw/category/4,5,6', // - 美容保養
        'blog_category2'        => 'http://blog.fashionguide.com.tw/category/2', // - 流行彩妝
        'blog_category89'       => 'http://blog.fashionguide.com.tw/category/8,9', // - 時尚潮流
        'blog_category11121322' => 'http://blog.fashionguide.com.tw/category/11,12,13,22', // - 生活3C
        'blog_category17'       => 'http://blog.fashionguide.com.tw/category/17', // - 醫學美容
        'blog_category1516'     => 'http://blog.fashionguide.com.tw/category/15,16', // - 美食旅遊
        'blog_category2_list'   => 'http://blog.fashionguide.com.tw/category/2/blogger_list', // - 部落客列表

        'bonus_exchange'        => 'http://fgcash.fashionguide.com.tw/bonus_exchange.php?from=fgindex', // G幣 - 首頁
        'bonus_my_member'       => 'http://fgcash.fashionguide.com.tw/bonus_my_member.php', //  - 我的G幣紀錄
        'reflection_all'        => 'http://fgcash.fashionguide.com.tw/reflection_all.php', //  - 試用心得

        'beauty08'              => 'http://www.fashionguide.com.tw/beauty/08/index.html?from=fgindex', // 評鑑
        'beauty08_resL'         => 'http://www.fashionguide.com.tw/Beauty/08/resL.asp?from=fgindex', // 市調

        'video'                 => 'http://video.fashionguide.com.tw/', // 影音

        'fgmagazine'            => 'http://fgmagazine.fashionguide.com.tw/', // 雜誌 - 首頁
        'fgmagazine_reply'      => 'http://fgmagazine.fashionguide.com.tw/index.php/main/reply', //  - 填回函

        'news'                  => 'http://news.fashionguide.com.tw/', // 新品 - NEWS
        'news_active'           => 'http://news.fashionguide.com.tw/news/active', //  - 上方頁籤內頁

        'sale_dm_list'          => 'http://sale.fashionguide.com.tw/index.php/show/dm_list', // DM TODO: 從DM首頁選擇幾本DM進內頁(請另外提供網址)
        'sale_bestbuy'          => 'http://sale.fashionguide.com.tw/index.php/shopping_site/bestbuy', // 折扣

        'man'                   => 'http://man.fashionguide.com.tw/', // 男性
        '3c'                    => 'http://3c.fashionguide.com.tw/?from=channel', // 3C
        'travel'                => 'http://travel.fashionguide.com.tw/?from=channel', // 旅遊

        'forum'                 => 'http://forum.fashionguide.com.tw/topic_list.php?from=fgindex', // 討論區
        'forum_1'               => 'http://forum.fashionguide.com.tw/topic_list.php?forum_id=1&from=forumHomeBar', // - fashion討論區
        'forum_2'               => 'http://forum.fashionguide.com.tw/topic_list.php?forum_id=2&from=forumHomeBar', // - beauty討論區
        'forum_3'               => 'http://forum.fashionguide.com.tw/topic_list.php?forum_id=3&from=forumHomeBar', // - freetalk討論區
        'forum_6'               => 'http://forum.fashionguide.com.tw/topic_list.php?forum_id=6&from=forumHomeBar', // - 醫美纖體討論區
        'forum_topic_new_all'   => 'http://forum.fashionguide.com.tw/topic_new_all.php', // - 張貼新話題

        'member'                => 'http://member.fashionguide.com.tw/login.php?url=http%3A%2F%2Fmember.fashiong,uide.com.tw%2F', // 會員中心

        'fit'                   => 'http://fit.fashionguide.com.tw/', // 醫美
        'fit_forum'             => 'http://fit.fashionguide.com.tw/index.php/forum/topic_list', //  - 討論區
        'fit_topic_type5'       => 'http://fit.fashionguide.com.tw/index.php/topic/index?type=5', //  - 部落格
        'fit_knowledge'         => 'http://fit.fashionguide.com.tw/index.php/knowledge', //  - 情報
        'fit_topic'             => 'http://fit.fashionguide.com.tw/index.php/topic', //  - 新知
        'fit_topic_type6'       => 'http://fit.fashionguide.com.tw/index.php/topic/index?type=6', //  - 影音
        'fit_diary'             => 'http://fit.fashionguide.com.tw/index.php/diary', //  - 日記
        'fit_group_map'         => 'http://fit.fashionguide.com.tw/index.php/clinic/group_map', //  - 診所查詢
        'fit_appraise'          => 'http://fit.fashionguide.com.tw/index.php/product/appraise', //  - 試用心得

        'diet'                  => 'http://diet.fashionguide.com.tw/',// 纖體
        'diet_expert_list'      => 'http://diet.fashionguide.com.tw/expert/expert_list',//  - 達人專欄
        'diet_topic_list'       => 'http://fit.fashionguide.com.tw/index.php/forum/topic_list?channel=diet',//  - 來討論
        'diet_active'           => 'http://diet.fashionguide.com.tw/active',//  - 熱門企劃
        'diet_period'           => 'http://fit.fashionguide.com.tw/index.php/tools/period'//  - 用工具

        // 從blog 首頁點選文章看內頁呈現是否正常 Mobile Blog 暫時沒有瀏覽器測試
//        '' => 'http://m.blog.fashionguide.com.tw/blog_type_list.html', //  - 文章列表
//        '' => 'http://m.blog.fashionguide.com.tw/article.html?user_id=8240&post_id=200682', //  - 文章內頁
    );

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
        foreach (self::$_url_list as $key => $value) {
            $this->url($value);
            $this->_screenShot($key);
        }
    }
}

?>
