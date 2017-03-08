<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<div class="section">
    <div class="section-top gx"><span><a href="<?php echo siteurl($siteid);?>"><a href="<?php echo siteurl($siteid);?>">首页</a></a></span>〉<span><?php echo catpos($catid);?></span></div>
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e811e7385aa3e3b0764b35433a4e5cc7&action=lists&catid=%24catid&num=5&siteid=%24siteid&order=listorder&moreinfo=1&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 5;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$front_pages = front_pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
    <div class="section-center active">
        <ul>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li class="list">
                <div class="left gx"><a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" alt=""></a></div>
                <div class="right">
                    <div class="top">
                        <h5 class="top-left gx"><?php echo $r['title'];?> <small><?php echo $r['keywords'];?></small></h5></div>
                    <p class="h6 gx"><?php echo $r['description'];?></p>
                    <p class="right-section gx"><?php echo $r['gongsi'];?></p>
                </div>
            </li>
        <?php $n++;}unset($n); ?>
        </ul>
    </div>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
<div class="footer">
    <ul>
        <li class="lis btn"><a href="">←</a></li>
        <li class="lis"><a href="">1</a></li>
        <li class="lis"><a href="">2</a></li>
        <li class="lis"><a href="">3</a></li>
        <!--<li class="lis"><a href="">4</a></li>-->
        <!--<li class="lis"><a href="">5</a></li>-->
        <li class="lis sl"><a href="">......</a></li>
        <li class="lis"><a href="">30</a></li>
        <li class="lis btn"><a href="">→</a></li>
        <li class="lis one"><div>跳转到</div><span><input type="text"></span><div class="ye">页</div></li>
        <li class="lis"><a href=""></a></li>
    </ul>
    <div class="footer-box gx">
        <p>Copyright?2013-2016版权所有 优逸客科技有限公司</p>
        <p>联系电话：400-888-6747 晋ICP备 13006051 号</p>
    </div>
</div>

<?php include template("content","footer"); ?>
