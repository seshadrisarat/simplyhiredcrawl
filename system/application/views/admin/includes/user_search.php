<script type="text/javascript">
	function clear_form() {
		document.getElementsByName('name')[0].value = '';
		document.getElementsByName('username')[0].value = '';
	}
</script>
<!-- Search form -->
<ul class="tablist">
	<li class="active"><a class="current">Search</a></li>	
</ul>
<form name='search_form' method="post" action="<?=site_url('admin/user/search')?>">
	<input type="hidden" name="make_new_search" value="true"/>
	<table cellpadding="0" cellspacing="0" border="0" width="100%" style="border-top: 0px none; margin-bottom: 4px" class="tabForm">
		<tr>
			<td>
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td class="dataLabel" noWrap>
							Name:&nbsp;&nbsp;<input type="text" size="30" name="name" class="dataField" value="<?=isset($user_search_params['name']) ? $user_search_params['name'] : ''?>">
							&nbsp;&nbsp;
							User name:&nbsp;&nbsp;<input type="text" size="30" name="username" class="dataField" value="<?=isset($user_search_params['username']) ? $user_search_params['username'] : ''?>">
						</td>
						<td align="right" width="100%">&nbsp;</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<input class='button' type='submit' name='button' value=' Search '/>&nbsp;<input class='button' type='button' name='clear' value=' Clear ' onclick="clear_form();"/>
</form>
<!-- End search form -->

<!-- Search result -->
<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td nowrap style="padding-top: 10px;"">
			<h3><img src="<?=base_url()?>/images/admin/h3Arrow.gif" width="11" height="11" border="0" />&nbsp;Users</h3>
		</td>
		<td width='100%'><img height='1' width='1' src='<?=base_url()?>/images/admin/blank.gif' alt=''></td>
		</tr>
</table>
<?=$data_grid?>
<!-- End search result -->