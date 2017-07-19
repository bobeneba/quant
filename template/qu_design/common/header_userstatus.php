<?PHP exit('QQ:179667784');?>
<!--{if $_G['uid']}-->
<div class="qing_afterlogin y">
<a style="float:right;" href="javascript:;" id="qmenu" onMouseOver="delayShow(this, function () {showMenu({'ctrlid':'qmenu','pos':'34!','ctrlclass':'a','duration':2});showForummenu($_G[fid]);})">{lang my_nav}</a>
<div id="qing_um" class="y">
    <div class="q_author" onmouseout="this.className='q_author'" onmouseover="this.className='q_bgfff q_author'"><a class="q_xi1 q_darr" id="q_authid" href="home.php?mod=space&uid=$_G[uid]" target="_blank" title="{lang visit_my_space}">&nbsp;{$_G[member][username]}</a>
    <div class="qing_pop" id="qing_userinfo_menu">
    	<a href="home.php?mod=space&do=pm" id="pm_ntc">{lang pm_center}<!--{if $_G[member][newpm]}--> {$_G[member][newpm]}<!--{/if}--></a>
		<a href="home.php?mod=space&do=notice" id="myprompt">{lang remind}<!--{if $_G[member][newprompt]}--> $_G[member][newprompt]<!--{/if}--></a>
		<!--{hook/global_usernav_extra1}-->
		<!--{hook/global_usernav_extra4}-->
        <a href="forum.php?mod=guide&view=my">{lang myitem}{lang mypost}</a>
		<a href="home.php?mod=spacecp">{lang setup}</a>
		<!--{if $_G['setting']['taskon'] && !empty($_G['cookie']['taskdoing_'.$_G['uid']])}--><a href="home.php?mod=task&item=doing" id="task_ntc" class="new">{lang task_doing}</a><!--{/if}-->
		<!--{if ($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))}-->
			<a href="portal.php?mod=portalcp"><!--{if $_G['setting']['portalstatus'] }-->{lang portal_manage}<!--{else}-->{lang portal_block_manage}<!--{/if}--></a>
		<!--{/if}-->
		<!--{if $_G['uid'] && $_G['group']['radminid'] > 1}-->
			<a href="forum.php?mod=modcp&fid=$_G[fid]" target="_blank">{lang forum_manager}</a>
		<!--{/if}-->
		<!--{if $_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)}-->
			<a href="admin.php" target="_blank">{lang admincp}</a>
		<!--{/if}-->
		<!--{hook/global_usernav_extra2}-->
        <!--{hook/global_usernav_extra3}-->
                
    </div>
    </div>
    <a class="y q_xi1" href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a>
</div>

</div>
<!--{elseif !empty($_G['cookie']['loginuser'])}-->
<div class="qing_afterlogin y">
<div id="qing_um">
<div class="q_author"><a class="q_xi1 q_darr" href="home.php?mod=space&uid=$_G[uid]" target="_blank" title="{lang visit_my_space}">&nbsp;{$_G[member][username]}</a>
    <div class="qing_pop" id="qing_userinfo_menu">
        <a href="member.php?mod=logging&action=login" onclick="showWindow('login', this.href)">{lang activation}</a>
        <a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a>
    </div>
</div>
</div>
</div>
<!--{elseif !$_G[connectguest]}-->
	<!--{template member/login_simple}-->
<!--{else}-->
<div class="qing_afterlogin y">
<div id="qing_um">
<div class="q_author"><a class="q_xi1 q_darr" href="home.php?mod=space&uid=$_G[uid]" target="_blank" title="{lang visit_my_space}">&nbsp;{$_G[member][username]}</a>
    <div class="qing_pop" id="qing_userinfo_menu">
		<!--{hook/global_usernav_extra1}-->
		<a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a>
    </div>
</div>
</div>
</div>
<!--{/if}-->