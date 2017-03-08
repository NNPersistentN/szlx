<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f0d643e4fad3721297850790e75ed3c1&action=lists&catid=%24catid&num=25&order=listorder&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder','moreinfo'=>'1','limit'=>'25',));}?>
<div class="section" style="padding-bottom: 0">
    <div class="section-top"><span><a href="<?php echo siteurl($siteid);?>">首页</a></span>〉<span><?php echo catpos($catid);?></span></div>
    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    <div class="section-about mt">
        <h6><?php echo $r['title'];?></h6>
        <div class="section-mt">
            <div class="mt-left"><img src="<?php echo $r['thumb'];?>" alt=""></div>
            <div class="mt-right">
                <a href="<?php echo $r['url'];?>">
                <p><?php echo $r['description'];?></p>
                </a>
            </div>
        </div>
        <div class="section-mtbom">
            <span>2016.4.22</span>
            <span>点击量:283977</span>
            <span>点击量:283997</span>
        </div>
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
        <li class="lis btn btn2"><a href="">→</a></li>
        <li class="lis one"><div>跳转到</div><span><input type="text"></span><div class="ye">页</div></li>
        <li class="lis"><a href=""></a></li>
    </ul>
    <div class="footer-box gx">
        <p>Copyright?2013-2016版权所有 优逸客科技有限公司</p>
        <p>联系电话：400-888-6747 晋ICP备 13006051 号</p>
    </div>
</div>

<?php include template("content","footer"); ?>
