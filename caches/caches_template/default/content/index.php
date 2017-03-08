<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <meta name="viewport" content = "width = device-width, initial-scale =1.0,maximum-scale =1.0. user-scalable =  0"/> 
    <meta name="renderer" content="webkit"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>mobile/index.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>mobile/swiper.min.css">
</head>
<body>
<!-- 头部 -->
<header>
    <div class="header-box">
        <!-- <img class="imgs" src="<?php echo IMG_PATH;?>mobile/logo.png" alt=""> -->
        <span>神州</span>
    </div>
</header>
<!-- 轮播图 -->
<div class="swiper-container banner">
    <div class="swiper-wrapper">
        <div class="swiper-slide"></div>
        <div class="swiper-slide"></div>
        <div class="swiper-slide"></div>
    </div>
</div>
<!-- 导航 -->
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a087d1139478a1b5bc108c6a54af4d40&action=category&catid=0&num=25&order=listorder&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','order'=>'listorder','moreinfo'=>'1','limit'=>'25',));}?>
<div class="section">

    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    <div class="section-box">
        <figure>
            <a href="<?php echo $r['url'];?>"><img class="images" src="<?php echo $r['image'];?>" alt=""></a>
            <figcaption>
                <a class="as e" href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
            </figcaption>
        </figure>
    </div>
    <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

</div>

<div class="section-one">
    <h3>服务体系</h3>
    <div class="center">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2c914971f585f22282df1c16584d55b5&action=position&posid=1&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','limit'=>'1',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="center-one">
        <a style="text-decoration: none"  href="<?php echo $r['url'];?>">
            <p class="center-t">免费体检</p>
            <p class="center-b">健康由你掌控</p>
            <img src="<?php echo IMG_PATH;?>mobile/Layer%207.png" alt="">
            </a>
        </div>
        <?php $n++;}unset($n); ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9d2fa9fed4ecab1fd883ead661e32b02&action=position&posid=2&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','limit'=>'1',));}?> 
        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
        <div class="center-one">
        <a style="text-decoration: none" href="<?php echo $v['url'];?>">
            <p class="center-t">助学贷款</p>
            <p class="center-b">前程我来把关</p>
            <a href="<?php echo $v['url'];?>">
                <img src="<?php echo IMG_PATH;?>mobile/Capa%201%20副本.png" alt="">
            </a>
        </a>
        </div>
        <?php $n++;}unset($n); ?>
    
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
    <div class="bottom">
        <div class="bottom-one">
            <img src="<?php echo IMG_PATH;?>mobile/Layer%205.png" alt="">
            <div class="bottom-right">
                <p class="center-t">免费试听</p>
                <p class="center-b">千人免费学设计</p>
            </div>
        </div>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b733d8ed7207329b45e9b2a0f8dc49d1&action=lists&catid=15&num=15\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'15','limit'=>'15',));}?>
        <div class="bottom-one">
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <a href="<?php echo $r['url'];?>">
            <img src="<?php echo IMG_PATH;?>mobile/Layer%206.png" alt="">
            <div class="bottom-right">
                <p class="center-t">神州动态</p>
                <p class="center-b">近在咫尺</p>
            </div>
            </a>
            <?php $n++;}unset($n); ?>
        </div>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=705e04855ab78ea52ac175b5d18f30e8&action=position&posid=16\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'16','limit'=>'20',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="bottom-one">
            <a href="<?php echo $r['url'];?>">
            <img src="<?php echo IMG_PATH;?>mobile/Layer%204.png" alt="">
            <div class="bottom-right">
                <p class="center-t">关于我们</p>
                <p class="center-b">实力保证</p>
            </div>
            </a>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
</div>

<div class="footer">
    <div class="left active"><img src="<?php echo IMG_PATH;?>mobile/search.png" alt="">校区查询</div>
    <button type="button" class="center"><img src="<?php echo IMG_PATH;?>mobile/call%20out.png" alt="">免费拨打</button>
    <div class="right active"><img src="<?php echo IMG_PATH;?>mobile/feedback.png" alt="">在线沟通</div>
</div>





</body>
</html>
<script src="<?php echo JS_PATH;?>mobile/swiper.min.js"></script>
<script src="<?php echo JS_PATH;?>mobile/index.js"></script>