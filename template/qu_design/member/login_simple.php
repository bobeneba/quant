<?PHP exit('QQ:179667784');?>
<!--{if CURMODULE != 'logging'}-->
	<script type="text/javascript" src="{$_G[setting][jspath]}logging.js?{VERHASH}"></script>
<style>
.qpipe {
    margin: 0px 5px;
    color: #CCC;
	float:left;
}
</style>
    	<a class="q_xi1" href="member.php?mod=logging&amp;action=login&amp;referer=" onclick="showWindow('login', this.href);return false;">{lang login}</a>
        <span class="qpipe">|</span>
		<a class="q_xi1" href="member.php?mod={$_G[setting][regname]}">{$_G['setting']['reglinkname']}</a>
	<!--{if $_G['setting']['pwdsafety']}-->
		<script type="text/javascript" src="{$_G['setting']['jspath']}md5.js?{VERHASH}" reload="1"></script>
	<!--{/if}-->

<!--{/if}-->