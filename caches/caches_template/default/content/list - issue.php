<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=68d1063cacd53ae17cbe4430d6ee0e3e&action=lists&catid=%24catid&num=25&siteid=%24siteid&order=listorder&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder','moreinfo'=>'1','limit'=>'25',));}?>
<div class="section" style="padding-bottom: 0">
    <div class="section-top"><span><a href="<?php echo siteurl($siteid);?>">首页</a></span>〉<span><?php echo catpos($catid);?></span></div>
    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    <div class="section-about rm">
        <h6><?php echo $r['title'];?></h6>
        <ul class="jy-uls rm l">
            <li class="list rm">
                <div></div>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2ee3a590afa0b3f30b382dbc272630f4&action=lists&catid=%24r%5Bcatid%5D&num=1&siteid=%24siteid&order=listorder&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'listorder','moreinfo'=>'1','limit'=>'1',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <p class="ppt rm"><a href="<?php echo $r['url'];?>"><?php echo $r['description'];?></a></p>
                <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </li>
        </ul>
        <div class="aal-box"><a href="<?php echo $r['url'];?>" class="aal">全部展开></a></div>
    </div>
    <?php $n++;}unset($n); ?>


</div>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
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
