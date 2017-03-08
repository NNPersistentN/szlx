<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<!--内容-->
<div class="section">
    <div class="section-top"><span><a href="<?php echo siteurl($siteid);?>">首页</a></span>〉<span><?php echo catpos($catid);?></span></div>
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=84ac4062e29cfa26835addbc78252fc9&action=category&catid=%24catid&num=25&order=listorder&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$catid,'order'=>'listorder','moreinfo'=>'1','limit'=>'25',));}?>
    <div class="section-header">
       <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <button  <?php if($catid==$r[catid]) { ?>style="background:#01b5ff"<?php } ?>   type="button" class="section-hea-box"><a  <?php if($catid==$r[catid]) { ?>style="color:#fff;"<?php } ?>    href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></button>
        <?php $n++;}unset($n); ?>
    </div>

<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a902a5a630ba776c4e8a8315488fa783&action=lists&catid=27&num=25&siteid=%24siteid&order=listorder&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'27','siteid'=>$siteid,'order'=>'listorder','moreinfo'=>'1','limit'=>'25',));}?>
    <div class="section-center active">
        <ul>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li>
                <div class="left"><img src="<?php echo $r['thumb'];?>" alt=""></div>
                <div class="right">
                    <div class="top"><span class="top-left"><?php echo $r['title'];?></span><span class="top-right"><a href="<?php echo $r['url'];?>">查看更多</a>></span></div>
                    <p class="h6"><?php echo $r['keywords'];?></p>
                    <p class="right-section"><?php echo $r['description'];?></p>
                </div>
            </li>
            <?php $n++;}unset($n); ?>
        </ul>
    </div>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
 
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
    <div class="footer-box">
        <p>Copyright?2013-2016版权所有 优逸客科技有限公司</p>
        <p>联系电话：400-888-6747 晋ICP备 13006051 号</p>
     </div>
</div>

<?php include template("content","footer"); ?>