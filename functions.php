<?php
/*主题选项*/

function themeConfig($form) {

    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL,'http://typecho.org/usr/themes/bluecode/img/typecho-logo.svg', _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 可以在替换默认的LOGO'));
    $form->addInput($logoUrl);
    
    $FooterCopyRight = new Typecho_Widget_Helper_Form_Element_Text('FooterCopyRight',NULL,'2014 - 2015 QIHU 360 SOFTWARE CO. LIMITED', _t('底部文字'), _t('在这里输入底部的CopyRight文字'));
    $form->addInput($FooterCopyRight);
    $FaceBookLink = new Typecho_Widget_Helper_Form_Element_Text('FaceBookLink',NULL,NULL, _t('FaceBook 主页'), _t('在这里输入FaceBook主页地址'));
    $form->addInput($FaceBookLink);

    $TwitterLink = new Typecho_Widget_Helper_Form_Element_Text('TwitterLink',NULL,NULL, _t('Twitter 主页'), _t('在这里输入Twitter主页地址'));
    $form->addInput($TwitterLink);

    $GooglePlusLink = new Typecho_Widget_Helper_Form_Element_Text('GooglePlusLink',NULL,NULL, _t('GooglePlus 主页'), _t('在这里输入GooglePlus主页地址'));
    $form->addInput($GooglePlusLink);

    $VKLink = new Typecho_Widget_Helper_Form_Element_Text('VKLink',NULL,NULL, _t('VK.COM 主页'), _t('在这里输入VK.COM主页地址'));
    $form->addInput($VKLink);

    $WBShowLink = new Typecho_Widget_Helper_Form_Element_Textarea('WBShowLink',NULL,NULL, _t('微博秀代码'), _t('在这里输入微博秀代码，可从<a href="http://app.weibo.com/tool/weiboshow" >这里</a>获取'));
   $form->addInput($WBShowLink);

    $SidebarImageLink = new Typecho_Widget_Helper_Form_Element_Textarea('SidbarImageLink',NULL,'<a class="download" data-ga="download|sidebar|ts" target="_blank" href="http://www.360totalsecurity.com/zh-cn/download/ts/"></a>', _t('侧边栏图片地址'), _t('在这里输入侧边栏图片地址或自定义Html'));
    $form->addInput($SidebarImageLink);
}

/*留言墙*/
function getFriendWall(){
   $period = time() - 2592000; // 单位: 秒, 时间范围: 30天
   $db = Typecho_Db::get();
   $sql = $db->select('COUNT(author) AS cnt', 'author', 'url', 'mail')
   ->from('table.comments')
   ->where('created > ?', $period )
   ->where('status = ?', 'approved')
   ->where('type = ?', 'comment')          
   ->where('authorId = ?', '0')
   ->where('mail != ?', 'itlobo@itlobo.com')   //排除自己上墙
   ->group('author')
   ->order('cnt', Typecho_Db::SORT_DESC)
   ->limit('26');    //读取几位用户的信息
   $result = $db->fetchAll($sql);
$mostactive = "";
$my_array=array('www','0','1','2'); //我自定义的随机一个头像服务器,减少同时往一个服务器发起多次请求
   if (count($result) > 0) {
       foreach ($result as $value) {
           $mostactive .= '<li><a href="' . $value['url'] . '" title="' . $value['author'] . ' : ' . $value['cnt'] . '次重要讲话" target="_blank" rel="nofollow">';
           $mostactive .= '<img class="avatar" src="http://'.$my_array[rand(0,3)].'.gravatar.com/avatar/'.md5(strtolower($value['mail'])).'?s=32&d=&r=G" width="32" height="32" /></a></li>';
       }
       echo $mostactive;
   }
}
