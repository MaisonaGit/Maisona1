<?php /*%%SmartyHeaderCode:853817881531fcd6d166023-24744940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0710fb7ea6acf4898159a11e12a0c10b27d8477d' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop_yarflam/modules/blocksearch/blocksearch-top.tpl',
      1 => 1393485056,
      2 => 'file',
    ),
    '90a1357a6e26f13af396e89606a00f5739b9e6df' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop_yarflam/modules/blocksearch/blocksearch-instantsearch.tpl',
      1 => 1393177455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '853817881531fcd6d166023-24744940',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5333f726330410_71247276',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5333f726330410_71247276')) {function content_5333f726330410_71247276($_smarty_tpl) {?><!-- Block search module TOP -->
	<script type="text/javascript">
	// <![CDATA[
		$('document').ready( function() {
                    $("#search_query_top")
                        .autocomplete(
                                'http://maisona.com/index.php?controller=search', {
                                minChars: 3,
                                max: 10,
                                width: 220,
                                selectFirst: false,
                                scroll: false,
                                dataType: "json",
                                formatItem: function(data, i, max, value, term) {
                                        return value;
                                },
                                parse: function(data) {
                                        var mytab = new Array();
                                        for (var i = 0; i < data.length; i++)
                                                mytab[mytab.length] = { data: data[i], value: data[i].cname + ' > ' + data[i].pname };
                                        return mytab;
                                },
                                extraParams: {
                                        ajaxSearch: 1,
                                        id_lang: 1
                                }
                            }
                        )
                        .result(function(event, data, formatted) {
                                $('#search_query_top').val(data.pname);
                                document.location.href = data.product_link;
                        });
		});
	// ]]>
	</script>

<!-- /Block search module TOP -->
<?php }} ?>