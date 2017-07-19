<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); if($_G['uid']) { ?>
<div class="qing_afterlogin y">
<a style="float:right;" href="javascript:;" id="qmenu" onMouseOver="delayShow(this, function () {showMenu({'ctrlid':'qmenu','pos':'34!','ctrlclass':'a','duration':2});showForummenu(<?php echo $_G['fid'];?>);})">快捷导航</a>
<div id="qing_um" class="y">
    <div class="q_author" onmouseout="this.className='q_author'" onmouseover="this.className='q_bgfff q_author'"><a class="q_xi1 q_darr" id="q_authid" href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" target="_blank" title="访问我的空间">&nbsp;<?php echo $_G['member']['username'];?></a>
    <div class="qing_pop" id="qing_userinfo_menu">
    	<a href="home.php?mod=space&amp;do=pm" id="pm_ntc">消息<?php if($_G['member']['newpm']) { ?> <?php echo $_G['member']['newpm'];?><?php } ?></a>
<a href="home.php?mod=space&amp;do=notice" id="myprompt">提醒<?php if($_G['member']['newprompt']) { ?> <?php echo $_G['member']['newprompt'];?><?php } ?></a>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra1'])) echo $_G['setting']['pluginhooks']['global_usernav_extra1'];?>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra4'])) echo $_G['setting']['pluginhooks']['global_usernav_extra4'];?>
        <a href="forum.php?mod=guide&amp;view=my">我的帖子</a>
<a href="home.php?mod=spacecp">设置</a>
<?php if($_G['setting']['taskon'] && !empty($_G['cookie']['taskdoing_'.$_G['uid']])) { ?><a href="home.php?mod=task&amp;item=doing" id="task_ntc" class="new">进行中的任务</a><?php } if(($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))) { ?>
<a href="portal.php?mod=portalcp"><?php if($_G['setting']['portalstatus'] ) { ?>门户管理<?php } else { ?>模块管理<?php } ?></a>
<?php } if($_G['uid'] && $_G['group']['radminid'] > 1) { ?>
<a href="forum.php?mod=modcp&amp;fid=<?php echo $_G['fid'];?>" target="_blank"><?php echo $_G['setting']['navs']['2']['navname'];?>管理</a>
<?php } if($_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)) { ?>
<a href="admin.php" target="_blank">管理中心</a>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra2'])) echo $_G['setting']['pluginhooks']['global_usernav_extra2'];?>
        <?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra3'])) echo $_G['setting']['pluginhooks']['global_usernav_extra3'];?>
                
    </div>
    </div>
    <a class="y q_xi1" href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">退出</a>
</div>

</div>
<?php } elseif(!empty($_G['cookie']['loginuser'])) { ?>
<div class="qing_afterlogin y">
<div id="qing_um">
<div class="q_author"><a class="q_xi1 q_darr" href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" target="_blank" title="访问我的空间">&nbsp;<?php echo $_G['member']['username'];?></a>
    <div class="qing_pop" id="qing_userinfo_menu">
        <a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href)">激活</a>
        <a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">退出</a>
    </div>
</div>
</div>
</div>
<?php } elseif(!$_G['connectguest']) { include template('member/login_simple'); } else { ?>
<div class="qing_afterlogin y">
<div id="qing_um">
<div class="q_author"><a class="q_xi1 q_darr" href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" target="_blank" title="访问我的空间">&nbsp;<?php echo $_G['member']['username'];?></a>
    <div class="qing_pop" id="qing_userinfo_menu">
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra1'])) echo $_G['setting']['pluginhooks']['global_usernav_extra1'];?>
<a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">退出</a>
    </div>
</div>
</div>
</div>
<?php } ?>