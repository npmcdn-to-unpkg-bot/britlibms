<?php
/* Smarty version 3.1.28, created on 2016-08-23 15:53:09
  from "/var/www/html/britlibms/sync/templates/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57bc6355495d30_89281495',
  'file_dependency' => 
  array (
    '2dbf01d10aabe9d317684f233c3a73b6fbe3ba98' => 
    array (
      0 => '/var/www/html/britlibms/sync/templates/index.tpl',
      1 => 1471963943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57bc6355495d30_89281495 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/var/www/html/britlibms/sync/includes/Smarty-3.1.28/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_replace')) require_once '/var/www/html/britlibms/sync/includes/Smarty-3.1.28/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_regex_replace')) require_once '/var/www/html/britlibms/sync/includes/Smarty-3.1.28/libs/plugins/modifier.regex_replace.php';
if (!is_callable('smarty_modifier_truncate')) require_once '/var/www/html/britlibms/sync/includes/Smarty-3.1.28/libs/plugins/modifier.truncate.php';
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src='../bootstrap-extra.js'><?php echo '</script'; ?>
>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' type='text/css' href='../style.css'>
</head>
<body>
    <div class='container-fluid'>
        
        <div id='header-row' class='row'>
            <div class='col-sm-12'>
                <header>
                    <h2>
                        Header
                    </h2>
                </header>
            </div>
        </div> <!-- end of header-row -->
        
        <div id='content-row' class='row'>
            <div id='filter-column' class='col-xs-3'>
                <nav>
                    <h2>
                        Filters
                    </h2>
                    <?php if (count($_smarty_tpl->tpl_vars['filter_lists']->value) == 0) {?>
                    <p>
                        No further filtering possible
                    </p>
                    <?php } else { ?>
                    <ul class='nav nav-tabs'>
                        <?php
$_from = $_smarty_tpl->tpl_vars['filter_lists']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_list_0_saved_item = isset($_smarty_tpl->tpl_vars['list']) ? $_smarty_tpl->tpl_vars['list'] : false;
$__foreach_list_0_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['list'] = new Smarty_Variable();
$__foreach_list_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_list_0_total) {
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
$__foreach_list_0_first = true;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->first = $__foreach_list_0_first;
$__foreach_list_0_first = false;
$__foreach_list_0_saved_local_item = $_smarty_tpl->tpl_vars['list'];
?>
                        <li <?php if ($_smarty_tpl->tpl_vars['list']->first) {?>class='active'<?php }?>>
                            <a data-toggle='tab' href='#<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
'>
                                <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['name']->value);?>

                            </a>
                        </li>
                        <?php
$_smarty_tpl->tpl_vars['list'] = $__foreach_list_0_saved_local_item;
}
}
if ($__foreach_list_0_saved_item) {
$_smarty_tpl->tpl_vars['list'] = $__foreach_list_0_saved_item;
}
if ($__foreach_list_0_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_list_0_saved_key;
}
?>
                    </ul> <!-- end of facet tabs -->
                    <div class='tab-content'>
                        <?php
$_from = $_smarty_tpl->tpl_vars['filter_lists']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_list_1_saved_item = isset($_smarty_tpl->tpl_vars['list']) ? $_smarty_tpl->tpl_vars['list'] : false;
$__foreach_list_1_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['list'] = new Smarty_Variable();
$__foreach_list_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_list_1_total) {
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
$__foreach_list_1_first = true;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->first = $__foreach_list_1_first;
$__foreach_list_1_first = false;
$__foreach_list_1_saved_local_item = $_smarty_tpl->tpl_vars['list'];
?>
                        <div id='<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
' class='tab-pane <?php if ($_smarty_tpl->tpl_vars['list']->first) {?>active<?php }?>'>
                            <?php if ($_smarty_tpl->tpl_vars['name']->value == 'date') {?>
                            <form class='form-inline' role='form' method='get'>
                                <div class='form-group'>
                                    <label for='yearstart'>From year:</label>
                                    <input type='number' min='300' max='1873' name='yearstart' style='width: 70%;'>
                                </div>
                                <div class='form-group'>
                                    <label for='yearend'>to year:</label>
                                    <input type='number' min='300' max='1873' name='yearend' style='width: 70%;'>
                                </div>
                                <?php
$_from = $_smarty_tpl->tpl_vars['get']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_2_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$__foreach_v_2_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$__foreach_v_2_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_v_2_total) {
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$__foreach_v_2_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
                                <?php if ($_smarty_tpl->tpl_vars['k']->value != 'yearstart' && $_smarty_tpl->tpl_vars['k']->value != 'yearend' && $_smarty_tpl->tpl_vars['k']->value != 'page') {?>
                                <input type='hidden' name='<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
' value='<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
'>
                                <?php }?>
                                <?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_2_saved_local_item;
}
}
if ($__foreach_v_2_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_2_saved_item;
}
if ($__foreach_v_2_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_v_2_saved_key;
}
?>
                                <?php
$_from = $_smarty_tpl->tpl_vars['get_arrays']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_3_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$__foreach_v_3_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$__foreach_v_3_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_v_3_total) {
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$__foreach_v_3_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
                                <?php if ($_smarty_tpl->tpl_vars['k']->value != 'yearstart' && $_smarty_tpl->tpl_vars['k']->value != 'yearend' && $_smarty_tpl->tpl_vars['k']->value != 'page') {?>
                                <input type='hidden' name='<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
' value='<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
'>
                                <?php }?>
                                <?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_3_saved_local_item;
}
}
if ($__foreach_v_3_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_3_saved_item;
}
if ($__foreach_v_3_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_v_3_saved_key;
}
?>
                                <div class='form-group'>
                                    <button type='submit' class='btn btn-primary'>
                                        <span class='glyphicon glyphicon-refresh'></span>
                                    </button>
                                </div>
                            </form>
                            <table>
                                <?php
$_from = $_smarty_tpl->tpl_vars['list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_4_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$__foreach_item_4_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_item_4_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$__foreach_item_4_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value['start']) {?> 
                                <tr>
                                    <td>
                                        <?php if ($_smarty_tpl->tpl_vars['item']->value['count'] != 0) {?>
                                        <a href='?yearstart=<?php echo $_smarty_tpl->tpl_vars['item']->value['start'];?>
&amp;yearend=<?php echo $_smarty_tpl->tpl_vars['item']->value['end'];
$_from = $_smarty_tpl->tpl_vars['get']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_5_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$__foreach_val_5_saved_key = isset($_smarty_tpl->tpl_vars['arg']) ? $_smarty_tpl->tpl_vars['arg'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$__foreach_val_5_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_val_5_total) {
$_smarty_tpl->tpl_vars['arg'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['arg']->value => $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_5_saved_local_item = $_smarty_tpl->tpl_vars['val'];
if ($_smarty_tpl->tpl_vars['arg']->value != 'page' && $_smarty_tpl->tpl_vars['arg']->value != 'yearstart' && $_smarty_tpl->tpl_vars['arg']->value != 'yearend') {?>&amp;<?php echo $_smarty_tpl->tpl_vars['arg']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['val']->value;
}
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_5_saved_local_item;
}
}
if ($__foreach_val_5_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_5_saved_item;
}
if ($__foreach_val_5_saved_key) {
$_smarty_tpl->tpl_vars['arg'] = $__foreach_val_5_saved_key;
}
$_from = $_smarty_tpl->tpl_vars['get_arrays']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_6_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$__foreach_val_6_saved_key = isset($_smarty_tpl->tpl_vars['arg']) ? $_smarty_tpl->tpl_vars['arg'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$__foreach_val_6_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_val_6_total) {
$_smarty_tpl->tpl_vars['arg'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['arg']->value => $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_6_saved_local_item = $_smarty_tpl->tpl_vars['val'];
?>&amp;<?php echo $_smarty_tpl->tpl_vars['arg']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['val']->value;
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_6_saved_local_item;
}
}
if ($__foreach_val_6_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_6_saved_item;
}
if ($__foreach_val_6_saved_key) {
$_smarty_tpl->tpl_vars['arg'] = $__foreach_val_6_saved_key;
}
?>'>
                                        <?php }?>
                                            <?php if (($_smarty_tpl->tpl_vars['item']->value['start']%10 == 0 && $_smarty_tpl->tpl_vars['item']->value['end'] == $_smarty_tpl->tpl_vars['item']->value['start']+9 && $_smarty_tpl->tpl_vars['item']->value['start']%100 != 0) || ($_smarty_tpl->tpl_vars['item']->value['start']%100 == 0 && $_smarty_tpl->tpl_vars['item']->value['end'] == $_smarty_tpl->tpl_vars['item']->value['start']+99)) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value['start'];?>
s 
                                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['start'] == $_smarty_tpl->tpl_vars['item']->value['end']) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value['start'];?>
 
                                            <?php } else { ?>
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value['start'];?>
&ndash;<?php echo $_smarty_tpl->tpl_vars['item']->value['end'];?>
 
                                            <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['item']->value['count'] != 0) {?>
                                        </a>
                                        <?php }?>
                                    </td>
                                    <td>
                                        <meter value='<?php echo $_smarty_tpl->tpl_vars['item']->value['count'];?>
' min='0' max='<?php echo $_smarty_tpl->tpl_vars['rescount']->value;?>
' style='float: right; width: 100%;'>
                                            (<?php echo $_smarty_tpl->tpl_vars['item']->value['count'];?>
)
                                        </meter>
                                    </td>
                                </tr>
                                <?php } else { ?>
                                
                                <?php }?>
                                <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_4_saved_local_item;
}
}
if ($__foreach_item_4_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_4_saved_item;
}
?>
                            </table> <!-- end of date-list -->
                            <?php } else { ?>
                            <table>
                                <?php
$_from = $_smarty_tpl->tpl_vars['list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_7_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$__foreach_item_7_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_item_7_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$__foreach_item_7_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
                                <tr>
                                    <td>
                                        <a href='?<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['item']->value[0];
$_from = $_smarty_tpl->tpl_vars['get']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_8_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$__foreach_val_8_saved_key = isset($_smarty_tpl->tpl_vars['arg']) ? $_smarty_tpl->tpl_vars['arg'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$__foreach_val_8_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_val_8_total) {
$_smarty_tpl->tpl_vars['arg'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['arg']->value => $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_8_saved_local_item = $_smarty_tpl->tpl_vars['val'];
if ($_smarty_tpl->tpl_vars['arg']->value != 'page') {?>&amp;<?php echo $_smarty_tpl->tpl_vars['arg']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['val']->value;
}
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_8_saved_local_item;
}
}
if ($__foreach_val_8_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_8_saved_item;
}
if ($__foreach_val_8_saved_key) {
$_smarty_tpl->tpl_vars['arg'] = $__foreach_val_8_saved_key;
}
$_from = $_smarty_tpl->tpl_vars['get_arrays']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_9_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$__foreach_val_9_saved_key = isset($_smarty_tpl->tpl_vars['arg']) ? $_smarty_tpl->tpl_vars['arg'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$__foreach_val_9_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_val_9_total) {
$_smarty_tpl->tpl_vars['arg'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['arg']->value => $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_9_saved_local_item = $_smarty_tpl->tpl_vars['val'];
?>&amp;<?php echo $_smarty_tpl->tpl_vars['arg']->value;?>
=<?php if ($_smarty_tpl->tpl_vars['arg']->value == $_smarty_tpl->tpl_vars['name']->value) {
echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['val']->value,'[]','['),']',',');
echo $_smarty_tpl->tpl_vars['item']->value[0];?>
]<?php } else {
echo $_smarty_tpl->tpl_vars['val']->value;
}
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_9_saved_local_item;
}
}
if ($__foreach_val_9_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_9_saved_item;
}
if ($__foreach_val_9_saved_key) {
$_smarty_tpl->tpl_vars['arg'] = $__foreach_val_9_saved_key;
}
?>'>
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value[1];?>

                                        </a>
                                    </td>
                                    <td>
                                        <meter value='<?php echo $_smarty_tpl->tpl_vars['item']->value[2];?>
' min='0' max='<?php echo $_smarty_tpl->tpl_vars['rescount']->value;?>
' style='float: right; width: 100%;'>
                                            (<?php echo $_smarty_tpl->tpl_vars['item']->value[2];?>
)
                                        </meter>
                                    </td>
                                </tr>
                                <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_7_saved_local_item;
}
}
if ($__foreach_item_7_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_7_saved_item;
}
?>
                            </table>
                            <?php }?>
                        </div>
                        <?php
$_smarty_tpl->tpl_vars['list'] = $__foreach_list_1_saved_local_item;
}
}
if ($__foreach_list_1_saved_item) {
$_smarty_tpl->tpl_vars['list'] = $__foreach_list_1_saved_item;
}
if ($__foreach_list_1_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_list_1_saved_key;
}
?>
                    </div>
                    <?php }?>
                </nav>
            </div> <!-- end of filter-column -->
            <div id='results-column' class='col-xs-9'>
                <section>
                    <?php if (!$_smarty_tpl->tpl_vars['no_filters']->value) {?>
                    <h2>
                        Active filters
                    </h2>
                    <button type='button' class='btn btn-primary' data-toggle='collapse' data-target='#active-filters-list'>
                        Show/Hide
                    </button>
                    <div id='active-filters-list' class='collapse'>
                        <dl>
                            <?php
$_from = $_smarty_tpl->tpl_vars['active_filters']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_10_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_10_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$__foreach_value_10_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_value_10_total) {
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_10_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
                            <dt>
                                <a href='?page=1<?php
$_from = $_smarty_tpl->tpl_vars['get']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_11_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$__foreach_val_11_saved_key = isset($_smarty_tpl->tpl_vars['arg']) ? $_smarty_tpl->tpl_vars['arg'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$__foreach_val_11_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_val_11_total) {
$_smarty_tpl->tpl_vars['arg'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['arg']->value => $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_11_saved_local_item = $_smarty_tpl->tpl_vars['val'];
if ($_smarty_tpl->tpl_vars['arg']->value != 'page' && $_smarty_tpl->tpl_vars['arg']->value != $_smarty_tpl->tpl_vars['name']->value) {?>&amp;<?php echo $_smarty_tpl->tpl_vars['arg']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['val']->value;
}
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_11_saved_local_item;
}
}
if ($__foreach_val_11_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_11_saved_item;
}
if ($__foreach_val_11_saved_key) {
$_smarty_tpl->tpl_vars['arg'] = $__foreach_val_11_saved_key;
}
$_from = $_smarty_tpl->tpl_vars['get_arrays']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_12_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$__foreach_val_12_saved_key = isset($_smarty_tpl->tpl_vars['arg']) ? $_smarty_tpl->tpl_vars['arg'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$__foreach_val_12_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_val_12_total) {
$_smarty_tpl->tpl_vars['arg'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['arg']->value => $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_12_saved_local_item = $_smarty_tpl->tpl_vars['val'];
if ($_smarty_tpl->tpl_vars['arg']->value != $_smarty_tpl->tpl_vars['name']->value) {?>&amp;<?php echo $_smarty_tpl->tpl_vars['arg']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['val']->value;
}
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_12_saved_local_item;
}
}
if ($__foreach_val_12_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_12_saved_item;
}
if ($__foreach_val_12_saved_key) {
$_smarty_tpl->tpl_vars['arg'] = $__foreach_val_12_saved_key;
}
?>' class='btn btn-xs btn-danger' data-toggle='tooltip' title='Click to clear all <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 filters.'>
                                    <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['name']->value);?>

                                </a>
                            </dt>
                            <dd>
                            <?php if ($_smarty_tpl->tpl_vars['name']->value == 'collection') {?>
                                <a href='?page=1<?php
$_from = $_smarty_tpl->tpl_vars['get']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_13_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$__foreach_val_13_saved_key = isset($_smarty_tpl->tpl_vars['arg']) ? $_smarty_tpl->tpl_vars['arg'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$__foreach_val_13_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_val_13_total) {
$_smarty_tpl->tpl_vars['arg'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['arg']->value => $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_13_saved_local_item = $_smarty_tpl->tpl_vars['val'];
if ($_smarty_tpl->tpl_vars['arg']->value != 'page' && $_smarty_tpl->tpl_vars['arg']->value != $_smarty_tpl->tpl_vars['name']->value) {?>&amp;<?php echo $_smarty_tpl->tpl_vars['arg']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['val']->value;
}
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_13_saved_local_item;
}
}
if ($__foreach_val_13_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_13_saved_item;
}
if ($__foreach_val_13_saved_key) {
$_smarty_tpl->tpl_vars['arg'] = $__foreach_val_13_saved_key;
}
$_from = $_smarty_tpl->tpl_vars['get_arrays']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_14_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$__foreach_val_14_saved_key = isset($_smarty_tpl->tpl_vars['arg']) ? $_smarty_tpl->tpl_vars['arg'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$__foreach_val_14_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_val_14_total) {
$_smarty_tpl->tpl_vars['arg'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['arg']->value => $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_14_saved_local_item = $_smarty_tpl->tpl_vars['val'];
if ($_smarty_tpl->tpl_vars['arg']->value != $_smarty_tpl->tpl_vars['name']->value) {?>&amp;<?php echo $_smarty_tpl->tpl_vars['arg']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['val']->value;
}
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_14_saved_local_item;
}
}
if ($__foreach_val_14_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_14_saved_item;
}
if ($__foreach_val_14_saved_key) {
$_smarty_tpl->tpl_vars['arg'] = $__foreach_val_14_saved_key;
}
?>' class='btn btn-xs btn-warning' data-toggle='tooltip' title='Click to remove <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
 from <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 filters'>
                                    <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

                                </a>
                            <?php } else { ?>
                            <dd>
                                <ul class='hlist'>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['value']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_name_15_saved_item = isset($_smarty_tpl->tpl_vars['val_name']) ? $_smarty_tpl->tpl_vars['val_name'] : false;
$__foreach_val_name_15_saved_key = isset($_smarty_tpl->tpl_vars['val_id']) ? $_smarty_tpl->tpl_vars['val_id'] : false;
$_smarty_tpl->tpl_vars['val_name'] = new Smarty_Variable();
$__foreach_val_name_15_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_val_name_15_total) {
$_smarty_tpl->tpl_vars['val_id'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['val_id']->value => $_smarty_tpl->tpl_vars['val_name']->value) {
$__foreach_val_name_15_saved_local_item = $_smarty_tpl->tpl_vars['val_name'];
?>
                                    <li>
                                        <a href='?page=1<?php
$_from = $_smarty_tpl->tpl_vars['get']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_16_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$__foreach_val_16_saved_key = isset($_smarty_tpl->tpl_vars['arg']) ? $_smarty_tpl->tpl_vars['arg'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$__foreach_val_16_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_val_16_total) {
$_smarty_tpl->tpl_vars['arg'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['arg']->value => $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_16_saved_local_item = $_smarty_tpl->tpl_vars['val'];
if ($_smarty_tpl->tpl_vars['arg']->value != 'page') {?>&amp;<?php echo $_smarty_tpl->tpl_vars['arg']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['val']->value;
}
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_16_saved_local_item;
}
}
if ($__foreach_val_16_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_16_saved_item;
}
if ($__foreach_val_16_saved_key) {
$_smarty_tpl->tpl_vars['arg'] = $__foreach_val_16_saved_key;
}
$_from = $_smarty_tpl->tpl_vars['get_arrays']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_17_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$__foreach_val_17_saved_key = isset($_smarty_tpl->tpl_vars['arg']) ? $_smarty_tpl->tpl_vars['arg'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$__foreach_val_17_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_val_17_total) {
$_smarty_tpl->tpl_vars['arg'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['arg']->value => $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_17_saved_local_item = $_smarty_tpl->tpl_vars['val'];
?>&amp;<?php echo $_smarty_tpl->tpl_vars['arg']->value;?>
=<?php if ($_smarty_tpl->tpl_vars['arg']->value == $_smarty_tpl->tpl_vars['name']->value) {
echo smarty_modifier_regex_replace(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['val']->value,"/,".((string)$_smarty_tpl->tpl_vars['val_id']->value)."(?!\d)/",''),"/\[".((string)$_smarty_tpl->tpl_vars['val_id']->value).",?/",'[');
} else {
echo $_smarty_tpl->tpl_vars['val']->value;
}
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_17_saved_local_item;
}
}
if ($__foreach_val_17_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_17_saved_item;
}
if ($__foreach_val_17_saved_key) {
$_smarty_tpl->tpl_vars['arg'] = $__foreach_val_17_saved_key;
}
?>' class='btn btn-xs btn-warning' data-toggle='tooltip' title='Click to remove <?php echo $_smarty_tpl->tpl_vars['val_name']->value;?>
 from <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 filters'>
                                            <?php echo $_smarty_tpl->tpl_vars['val_name']->value;?>

                                        </a>
                                    </li>
                                    <?php
$_smarty_tpl->tpl_vars['val_name'] = $__foreach_val_name_15_saved_local_item;
}
}
if ($__foreach_val_name_15_saved_item) {
$_smarty_tpl->tpl_vars['val_name'] = $__foreach_val_name_15_saved_item;
}
if ($__foreach_val_name_15_saved_key) {
$_smarty_tpl->tpl_vars['val_id'] = $__foreach_val_name_15_saved_key;
}
?>
                                </ul>
                            </dd>
                            <?php }?>
                            <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_10_saved_local_item;
}
}
if ($__foreach_value_10_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_10_saved_item;
}
if ($__foreach_value_10_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_value_10_saved_key;
}
?>
                            </dd>
                        </dl>
                    </div>
                    
                    <?php }?>
                    <h2>
                        Group/sort
                    </h2>
                    <button type='button' class='btn btn-primary' data-toggle='collapse' data-target='#group-sort-controls'>
                        Show/Hide
                    </button>
                    <div id='group-sort-controls' class='collapse'>
                    <h6>
                        Group by:
                    </h6>
                    <ul class='nav nav-pills'>
                        <li<?php if ($_smarty_tpl->tpl_vars['get']->value['grouping'] == 'm') {?> class='active'<?php }?>>
                            <a href='?grouping=m<?php
$_from = $_smarty_tpl->tpl_vars['get']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_18_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_18_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$__foreach_value_18_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_value_18_total) {
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_18_saved_local_item = $_smarty_tpl->tpl_vars['value'];
if ($_smarty_tpl->tpl_vars['name']->value != 'page' && $_smarty_tpl->tpl_vars['name']->value != 'grouping') {?>&amp;<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['value']->value;
}
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_18_saved_local_item;
}
}
if ($__foreach_value_18_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_18_saved_item;
}
if ($__foreach_value_18_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_value_18_saved_key;
}
$_from = $_smarty_tpl->tpl_vars['get_arrays']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_19_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$__foreach_val_19_saved_key = isset($_smarty_tpl->tpl_vars['arg']) ? $_smarty_tpl->tpl_vars['arg'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$__foreach_val_19_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_val_19_total) {
$_smarty_tpl->tpl_vars['arg'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['arg']->value => $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_19_saved_local_item = $_smarty_tpl->tpl_vars['val'];
?>&amp;<?php echo $_smarty_tpl->tpl_vars['arg']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['val']->value;
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_19_saved_local_item;
}
}
if ($__foreach_val_19_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_19_saved_item;
}
if ($__foreach_val_19_saved_key) {
$_smarty_tpl->tpl_vars['arg'] = $__foreach_val_19_saved_key;
}
?>'>
                                Manuscript
                            </a>
                        </li>
                        <li<?php if ($_smarty_tpl->tpl_vars['get']->value['grouping'] == 'p') {?> class='active'<?php }?>>
                            <a href='?grouping=p<?php
$_from = $_smarty_tpl->tpl_vars['get']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_20_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_20_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$__foreach_value_20_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_value_20_total) {
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_20_saved_local_item = $_smarty_tpl->tpl_vars['value'];
if ($_smarty_tpl->tpl_vars['name']->value != 'page' && $_smarty_tpl->tpl_vars['name']->value != 'grouping') {?>&amp;<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['value']->value;
}
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_20_saved_local_item;
}
}
if ($__foreach_value_20_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_20_saved_item;
}
if ($__foreach_value_20_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_value_20_saved_key;
}
$_from = $_smarty_tpl->tpl_vars['get_arrays']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_21_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$__foreach_val_21_saved_key = isset($_smarty_tpl->tpl_vars['arg']) ? $_smarty_tpl->tpl_vars['arg'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$__foreach_val_21_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_val_21_total) {
$_smarty_tpl->tpl_vars['arg'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['arg']->value => $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_21_saved_local_item = $_smarty_tpl->tpl_vars['val'];
?>&amp;<?php echo $_smarty_tpl->tpl_vars['arg']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['val']->value;
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_21_saved_local_item;
}
}
if ($__foreach_val_21_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_21_saved_item;
}
if ($__foreach_val_21_saved_key) {
$_smarty_tpl->tpl_vars['arg'] = $__foreach_val_21_saved_key;
}
?>'>
                                Part
                            </a>
                        </li>
                        <li<?php if ($_smarty_tpl->tpl_vars['get']->value['grouping'] == 'i') {?> class='active'<?php }?>>
                            <a href='?grouping=i<?php
$_from = $_smarty_tpl->tpl_vars['get']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_22_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_22_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$__foreach_value_22_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_value_22_total) {
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_22_saved_local_item = $_smarty_tpl->tpl_vars['value'];
if ($_smarty_tpl->tpl_vars['name']->value != 'page' && $_smarty_tpl->tpl_vars['name']->value != 'grouping') {?>&amp;<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['value']->value;
}
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_22_saved_local_item;
}
}
if ($__foreach_value_22_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_22_saved_item;
}
if ($__foreach_value_22_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_value_22_saved_key;
}
$_from = $_smarty_tpl->tpl_vars['get_arrays']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_23_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$__foreach_val_23_saved_key = isset($_smarty_tpl->tpl_vars['arg']) ? $_smarty_tpl->tpl_vars['arg'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$__foreach_val_23_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_val_23_total) {
$_smarty_tpl->tpl_vars['arg'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['arg']->value => $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_23_saved_local_item = $_smarty_tpl->tpl_vars['val'];
?>&amp;<?php echo $_smarty_tpl->tpl_vars['arg']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['val']->value;
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_23_saved_local_item;
}
}
if ($__foreach_val_23_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_23_saved_item;
}
if ($__foreach_val_23_saved_key) {
$_smarty_tpl->tpl_vars['arg'] = $__foreach_val_23_saved_key;
}
?>'>
                                Image
                            </a>
                        </li>
                    </ul>
                    <?php if ($_smarty_tpl->tpl_vars['rescount']->value > 1) {?>
                    <h6>
                        Sort:
                    </h6>
                    <ul class='nav nav-pills'>
                        <?php
$_from = $_smarty_tpl->tpl_vars['sortings']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_sort_24_saved_item = isset($_smarty_tpl->tpl_vars['sort']) ? $_smarty_tpl->tpl_vars['sort'] : false;
$_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable();
$__foreach_sort_24_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_sort_24_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['sort']->value) {
$__foreach_sort_24_saved_local_item = $_smarty_tpl->tpl_vars['sort'];
?>
                        <li<?php if ($_smarty_tpl->tpl_vars['get']->value['sort'] == $_smarty_tpl->tpl_vars['sort']->value) {?> class='active'<?php }?>>
                            <a href='?sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;
$_from = $_smarty_tpl->tpl_vars['get']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_25_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_25_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$__foreach_value_25_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_value_25_total) {
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_25_saved_local_item = $_smarty_tpl->tpl_vars['value'];
if ($_smarty_tpl->tpl_vars['name']->value != 'page' && $_smarty_tpl->tpl_vars['name']->value != 'sort') {?>&amp;<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['value']->value;
}
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_25_saved_local_item;
}
}
if ($__foreach_value_25_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_25_saved_item;
}
if ($__foreach_value_25_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_value_25_saved_key;
}
$_from = $_smarty_tpl->tpl_vars['get_arrays']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_26_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$__foreach_val_26_saved_key = isset($_smarty_tpl->tpl_vars['arg']) ? $_smarty_tpl->tpl_vars['arg'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$__foreach_val_26_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_val_26_total) {
$_smarty_tpl->tpl_vars['arg'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['arg']->value => $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_26_saved_local_item = $_smarty_tpl->tpl_vars['val'];
?>&amp;<?php echo $_smarty_tpl->tpl_vars['arg']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['val']->value;
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_26_saved_local_item;
}
}
if ($__foreach_val_26_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_26_saved_item;
}
if ($__foreach_val_26_saved_key) {
$_smarty_tpl->tpl_vars['arg'] = $__foreach_val_26_saved_key;
}
?>'>
                                <?php if ($_smarty_tpl->tpl_vars['sort']->value == 'rchron') {?>
                                New to old
                                <?php } elseif ($_smarty_tpl->tpl_vars['sort']->value == 'chron') {?>
                                Old to new
                                <?php } elseif ($_smarty_tpl->tpl_vars['sort']->value[0] == 'r') {?>
                                <?php echo smarty_modifier_capitalize(substr($_smarty_tpl->tpl_vars['sort']->value,1));?>
 <span class='glyphicon glyphicon-sort-by-alphabet-alt'></span>
                                <?php } else { ?>
                                <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['sort']->value);?>
 <span class='glyphicon glyphicon-sort-by-alphabet'></span>
                                <?php }?>
                            </a>
                        </li>
                        <?php
$_smarty_tpl->tpl_vars['sort'] = $__foreach_sort_24_saved_local_item;
}
}
if ($__foreach_sort_24_saved_item) {
$_smarty_tpl->tpl_vars['sort'] = $__foreach_sort_24_saved_item;
}
?>
                    </ul>
                    <?php }?>
                    </div>
                    <h1>
                        Results
                    </h1>
                    <p>
                        <?php if ($_smarty_tpl->tpl_vars['maxpage']->value > 1) {?>
                        <?php echo $_smarty_tpl->tpl_vars['firstret']->value;?>
&ndash;<?php echo $_smarty_tpl->tpl_vars['lastret']->value;?>
 of <?php echo $_smarty_tpl->tpl_vars['rescount']->value;?>
 (page <?php echo $_smarty_tpl->tpl_vars['pageno']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['maxpage']->value;?>
)
                        <?php } elseif ($_smarty_tpl->tpl_vars['rescount']->value > 1) {?>
                        Viewing all <?php echo $_smarty_tpl->tpl_vars['rescount']->value;?>
 results found
                        <?php } elseif ($_smarty_tpl->tpl_vars['rescount']->value == 1) {?>
                        Only 1 result found
                        <?php } else { ?>
                        None found
                        <?php }?>
                    </p>
                    <?php if ($_smarty_tpl->tpl_vars['maxpage']->value > 1) {?> 
                    <nav>
                        <ul class='pagination'>
                            <?php
$_smarty_tpl->tpl_vars['linkno'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['linkno']->step = 1;$_smarty_tpl->tpl_vars['linkno']->total = (int) ceil(($_smarty_tpl->tpl_vars['linkno']->step > 0 ? $_smarty_tpl->tpl_vars['pageno']->value+7+1 - ($_smarty_tpl->tpl_vars['pageno']->value-7) : $_smarty_tpl->tpl_vars['pageno']->value-7-($_smarty_tpl->tpl_vars['pageno']->value+7)+1)/abs($_smarty_tpl->tpl_vars['linkno']->step));
if ($_smarty_tpl->tpl_vars['linkno']->total > 0) {
for ($_smarty_tpl->tpl_vars['linkno']->value = $_smarty_tpl->tpl_vars['pageno']->value-7, $_smarty_tpl->tpl_vars['linkno']->iteration = 1;$_smarty_tpl->tpl_vars['linkno']->iteration <= $_smarty_tpl->tpl_vars['linkno']->total;$_smarty_tpl->tpl_vars['linkno']->value += $_smarty_tpl->tpl_vars['linkno']->step, $_smarty_tpl->tpl_vars['linkno']->iteration++) {
$_smarty_tpl->tpl_vars['linkno']->first = $_smarty_tpl->tpl_vars['linkno']->iteration == 1;$_smarty_tpl->tpl_vars['linkno']->last = $_smarty_tpl->tpl_vars['linkno']->iteration == $_smarty_tpl->tpl_vars['linkno']->total;?>
                            <?php if (($_smarty_tpl->tpl_vars['linkno']->value <= 0)) {?>
                            <?php continue 1;?>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['linkno']->value == $_smarty_tpl->tpl_vars['pageno']->value) {?>
                            <li class='active'>
                            <?php } else { ?>
                            <li>
                            <?php }?>
                                <a href='?page=<?php echo $_smarty_tpl->tpl_vars['linkno']->value;
$_from = $_smarty_tpl->tpl_vars['get']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_27_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_27_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$__foreach_value_27_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_value_27_total) {
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_27_saved_local_item = $_smarty_tpl->tpl_vars['value'];
if ($_smarty_tpl->tpl_vars['name']->value != 'page') {?>&amp;<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['value']->value;
}
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_27_saved_local_item;
}
}
if ($__foreach_value_27_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_27_saved_item;
}
if ($__foreach_value_27_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_value_27_saved_key;
}
$_from = $_smarty_tpl->tpl_vars['get_arrays']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_28_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$__foreach_val_28_saved_key = isset($_smarty_tpl->tpl_vars['arg']) ? $_smarty_tpl->tpl_vars['arg'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$__foreach_val_28_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_val_28_total) {
$_smarty_tpl->tpl_vars['arg'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['arg']->value => $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_28_saved_local_item = $_smarty_tpl->tpl_vars['val'];
?>&amp;<?php echo $_smarty_tpl->tpl_vars['arg']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['val']->value;
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_28_saved_local_item;
}
}
if ($__foreach_val_28_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_28_saved_item;
}
if ($__foreach_val_28_saved_key) {
$_smarty_tpl->tpl_vars['arg'] = $__foreach_val_28_saved_key;
}
?>'>
                                    <?php echo $_smarty_tpl->tpl_vars['linkno']->value;?>

                                </a>
                            </li>
                            <?php if (($_smarty_tpl->tpl_vars['linkno']->value == $_smarty_tpl->tpl_vars['maxpage']->value)) {?>
                            <?php break 1;?>
                            <?php }?>
                            <?php }
}
?>

                        </ul>
                        <?php if ($_smarty_tpl->tpl_vars['pageno']->value > 8 || $_smarty_tpl->tpl_vars['pageno']->value+7 < $_smarty_tpl->tpl_vars['maxpage']->value) {?>
                        <form class='form-inline' role='form' method='get'>
                            <div class='form-group'>
                                <label for='page'>
                                    Take me to page
                                </label>
                                <input type='number' min='1' max='<?php echo $_smarty_tpl->tpl_vars['maxpage']->value;?>
' name='page' value='<?php echo $_smarty_tpl->tpl_vars['pageno']->value;?>
'>
                                <?php
$_from = $_smarty_tpl->tpl_vars['get']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_29_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$__foreach_v_29_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$__foreach_v_29_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_v_29_total) {
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$__foreach_v_29_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
                                <?php if ($_smarty_tpl->tpl_vars['k']->value != 'page') {?>
                                <input type='hidden' name='<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
' value='<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
'>
                                <?php }?>
                                <?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_29_saved_local_item;
}
}
if ($__foreach_v_29_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_29_saved_item;
}
if ($__foreach_v_29_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_v_29_saved_key;
}
?>
                                <?php
$_from = $_smarty_tpl->tpl_vars['get_arrays']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_30_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$__foreach_v_30_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$__foreach_v_30_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_v_30_total) {
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$__foreach_v_30_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
                                <?php if ($_smarty_tpl->tpl_vars['k']->value != 'yearstart' && $_smarty_tpl->tpl_vars['k']->value != 'yearend' && $_smarty_tpl->tpl_vars['k']->value != 'page') {?>
                                <input type='hidden' name='<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
' value='<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
'>
                                <?php }?>
                                <?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_30_saved_local_item;
}
}
if ($__foreach_v_30_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_30_saved_item;
}
if ($__foreach_v_30_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_v_30_saved_key;
}
?>
                                <div class='form-group'>
                                    <button type='submit' class='btn btn-primary'>
                                        GO
                                    </button>
                                </div>
                            </div>
                        </form>
                        <?php }?>
                    </nav>
                    <?php }?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['reslist']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_res_31_saved_item = isset($_smarty_tpl->tpl_vars['res']) ? $_smarty_tpl->tpl_vars['res'] : false;
$_smarty_tpl->tpl_vars['res'] = new Smarty_Variable();
$__foreach_res_31_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_res_31_total) {
$_smarty_tpl->tpl_vars['res']->iteration=0;
$__foreach_res_31_iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['res']->value) {
$_smarty_tpl->tpl_vars['res']->iteration++;
$__foreach_res_31_iteration++;
$_smarty_tpl->tpl_vars['res']->last = $__foreach_res_31_iteration == $__foreach_res_31_total;
$__foreach_res_31_saved_local_item = $_smarty_tpl->tpl_vars['res'];
?>
                    <?php if ($_smarty_tpl->tpl_vars['get']->value['grouping'] == 'i') {?>
                    <?php if (!(($_smarty_tpl->tpl_vars['res']->iteration-1) % 2)) {?>
                    <hr>
                    <div class='row'>
                    <?php }?>
                        <div class='col-lg-6'>
                            <a href='../illumination?id=<?php echo $_smarty_tpl->tpl_vars['res']->value[0];?>
'>
                                <h4>
                                    <?php echo $_smarty_tpl->tpl_vars['res']->value[3];?>
 <?php echo $_smarty_tpl->tpl_vars['res']->value[4];?>
 (<?php echo $_smarty_tpl->tpl_vars['res']->value[5];?>
)
                                </h4>
                                <h3>
                                    <?php echo smarty_modifier_regex_replace((($tmp = @$_smarty_tpl->tpl_vars['res']->value[6])===null||$tmp==='' ? '(untitled)' : $tmp),'/~([^~]*)~/','<i>\1</i>');?>

                                </h3>
                                <?php if ($_smarty_tpl->tpl_vars['res']->value[8] == 1) {?>
                                <p>
                                    (image of <?php echo $_smarty_tpl->tpl_vars['res']->value[2];?>
 from folder <?php echo $_smarty_tpl->tpl_vars['res']->value[1];?>
)
                                </p>
                                <?php } elseif ($_smarty_tpl->tpl_vars['res']->value[8] == 5 || $_smarty_tpl->tpl_vars['res']->value[8] == 8 || $_smarty_tpl->tpl_vars['res']->value[8] == 9) {?>
                                <img class='img-responsive' src="http://www.bl.uk/IllImages/<?php echo $_smarty_tpl->tpl_vars['res']->value[1];?>
/mid/<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['res']->value[2],4,'',true);?>
/<?php echo $_smarty_tpl->tpl_vars['res']->value[2];?>
.jpg">
                                <?php } else { ?>
                                <img class='img-responsive' src="http://www.bl.uk/IllImages/<?php echo $_smarty_tpl->tpl_vars['res']->value[1];?>
/mid/<?php echo $_smarty_tpl->tpl_vars['res']->value[2];?>
.jpg">
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['res']->value[7]) {?>
                                <p>
                                    by <?php echo $_smarty_tpl->tpl_vars['res']->value[7];?>

                                </p>
                                <?php }?>
                            </a>
                        </div>
                    <?php if (!($_smarty_tpl->tpl_vars['res']->iteration % 2)) {?>
                    </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['res']->last) {?>
                    <div class='row'>
                    <?php }?>
                    
                    <?php } elseif ($_smarty_tpl->tpl_vars['get']->value['grouping'] == 'p') {?>
                    <hr>
                    <a href='../manuscript?id=<?php echo $_smarty_tpl->tpl_vars['res']->value[8];?>
#part<?php echo $_smarty_tpl->tpl_vars['res']->value[6];?>
'>
                        <h4>
                            <?php echo $_smarty_tpl->tpl_vars['res']->value[1];?>
 <?php echo $_smarty_tpl->tpl_vars['res']->value[2];?>
 <?php if ($_smarty_tpl->tpl_vars['res']->value[3]) {?>(<?php echo $_smarty_tpl->tpl_vars['res']->value[3];?>
)<?php }?>
                            [part <?php echo $_smarty_tpl->tpl_vars['res']->value[6];?>
 of <?php echo $_smarty_tpl->tpl_vars['res']->value[7];?>
]
                        </h4>
                        <h3>
                            <?php echo smarty_modifier_regex_replace((($tmp = @$_smarty_tpl->tpl_vars['res']->value[5])===null||$tmp==='' ? '(untitled)' : $tmp),"/~([^~]*)~/","<i>\\1</i>");?>

                        </h3>
                        <?php if ($_smarty_tpl->tpl_vars['res']->value[4]) {?>
                        <h5>
                            
                            by <?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['res']->value[4],"/\(index[^\)]*\)/",'');?>

                        </h5>
                        <?php }?>
                    </a>
                    <?php if (count($_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->tpl_vars['res']->value[0]]) > 0) {?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->tpl_vars['res']->value[0]];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_image_32_saved_item = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image'] : false;
$_smarty_tpl->tpl_vars['image'] = new Smarty_Variable();
$__foreach_image_32_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_image_32_total) {
$_smarty_tpl->tpl_vars['image']->iteration=0;
$__foreach_image_32_iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->iteration++;
$__foreach_image_32_iteration++;
$_smarty_tpl->tpl_vars['image']->last = $__foreach_image_32_iteration == $__foreach_image_32_total;
$__foreach_image_32_saved_local_item = $_smarty_tpl->tpl_vars['image'];
?>
                    <?php if (!(($_smarty_tpl->tpl_vars['image']->iteration-1) % 6)) {?>
                    <div class='row'>
                    <?php }?>
                        <?php if (!(($_smarty_tpl->tpl_vars['image']->iteration-1) % 3)) {?>
                        <div class='col-lg-6'>
                            <div class='row'>
                        <?php }?>
                                <div class='col-sm-4'>
                                    <a href='../illumination?id=<?php echo $_smarty_tpl->tpl_vars['image']->value[0];?>
'>
                                        <h6>
                                            <?php if ($_smarty_tpl->tpl_vars['image']->value[1]) {
echo $_smarty_tpl->tpl_vars['image']->value[1];?>
:<?php }?> <?php echo (($tmp = @smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['image']->value[2],'/~([^~]*)~/','<i>\1</i>'))===null||$tmp==='' ? '(No caption)' : $tmp);?>

                                        </h6>
                                        <?php if ($_smarty_tpl->tpl_vars['image']->value[3] == 1) {?>
                                        <p>
                                            (image of <?php echo $_smarty_tpl->tpl_vars['image']->value[5];?>
 from folder <?php echo $_smarty_tpl->tpl_vars['image']->value[4];?>
)
                                        </p>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['image']->value[3] == 5 || $_smarty_tpl->tpl_vars['image']->value[3] == 8 || $_smarty_tpl->tpl_vars['image']->value[3] == 9) {?>
                                        <img class='img-responsive' src="http://www.bl.uk/IllImages/<?php echo $_smarty_tpl->tpl_vars['image']->value[4];?>
/thm/<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['image']->value[5],4,'',true);?>
/<?php echo $_smarty_tpl->tpl_vars['image']->value[5];?>
.jpg">
                                        <?php } else { ?>
                                        <img class='img-responsive' src="http://www.bl.uk/IllImages/<?php echo $_smarty_tpl->tpl_vars['image']->value[4];?>
/thm/<?php echo $_smarty_tpl->tpl_vars['image']->value[5];?>
.jpg">
                                        <?php }?>
                                    </a>
                                </div>
                        <?php if (!($_smarty_tpl->tpl_vars['image']->iteration % 3)) {?>
                            </div>
                        </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['image']->last) {?>
                            </div>
                        </div>
                        <?php }?>
                    <?php if (!($_smarty_tpl->tpl_vars['image']->iteration % 6)) {?>
                    </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['image']->last) {?>
                    </div>
                    <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_32_saved_local_item;
}
}
if ($__foreach_image_32_saved_item) {
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_32_saved_item;
}
?>
                    <?php }?>
                    
                    <?php } else { if (!isset($_smarty_tpl->tpl_vars['get']) || !is_array($_smarty_tpl->tpl_vars['get']->value)) $_smarty_tpl->smarty->ext->_var->createLocalArrayVariable($_smarty_tpl, 'get');
if ($_smarty_tpl->tpl_vars['get']->value['grouping'] = 'm') {?>
                    <hr>
                    <h3>
                        <a href='../manuscript?id=<?php echo $_smarty_tpl->tpl_vars['res']->value[0];?>
'>
                            <?php echo $_smarty_tpl->tpl_vars['res']->value[1];?>
 <?php echo $_smarty_tpl->tpl_vars['res']->value[2];?>

                        </a>
                    </h3>
                    <dl>
                        <?php if ($_smarty_tpl->tpl_vars['res']->value[3]) {?>
                        <dt>
                            Official foliation
                        </dt>
                        <dd class='oneline'>
                            <?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['res']->value[3],'/\^([^\^]*)\^/','<sup>\1</sup>');?>

                        </dd>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['res']->value[4]) {?>
                        <dt>
                            Collation
                        </dt>
                        <dd class='oneline'>
                            <?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['res']->value[4],'/\^([^\^]*)\^/','<sup>\1</sup>');?>

                        </dd>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['res']->value[5]) {?>
                        <dt>
                            Form
                        </dt>
                        <dd class='oneline'>
                            <?php echo $_smarty_tpl->tpl_vars['res']->value[5];?>

                        </dd>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['res']->value[6]) {?>
                        <dt>
                            Binding
                        </dt>
                        <dd class='oneline'>
                            <?php echo $_smarty_tpl->tpl_vars['res']->value[6];?>

                        </dd>
                        <?php }?>
                    </dl>
                    <?php if (count($_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->tpl_vars['res']->value[0]]) > 0) {?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->tpl_vars['res']->value[0]];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_image_33_saved_item = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image'] : false;
$_smarty_tpl->tpl_vars['image'] = new Smarty_Variable();
$__foreach_image_33_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_image_33_total) {
$_smarty_tpl->tpl_vars['image']->iteration=0;
$__foreach_image_33_iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->iteration++;
$__foreach_image_33_iteration++;
$_smarty_tpl->tpl_vars['image']->last = $__foreach_image_33_iteration == $__foreach_image_33_total;
$__foreach_image_33_saved_local_item = $_smarty_tpl->tpl_vars['image'];
?>
                    <?php if (!(($_smarty_tpl->tpl_vars['image']->iteration-1) % 6)) {?>
                    <div class='row'>
                    <?php }?>
                        <?php if (!(($_smarty_tpl->tpl_vars['image']->iteration-1) % 3)) {?>
                        <div class='col-lg-6'>
                            <div class='row'>
                        <?php }?>
                                <div class='col-sm-4'>
                                    <a href='../illumination?id=<?php echo $_smarty_tpl->tpl_vars['image']->value[0];?>
'>
                                        <h6>
                                            <?php if ($_smarty_tpl->tpl_vars['image']->value[1]) {
echo $_smarty_tpl->tpl_vars['image']->value[1];?>
:<?php }?> <?php echo (($tmp = @smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['image']->value[2],'/~([^~]*)~/','<i>\1</i>'))===null||$tmp==='' ? '(No caption)' : $tmp);?>

                                        </h6>
                                        <?php if ($_smarty_tpl->tpl_vars['image']->value[3] == 1) {?>
                                        <p>
                                            (image of <?php echo $_smarty_tpl->tpl_vars['image']->value[5];?>
 from folder <?php echo $_smarty_tpl->tpl_vars['image']->value[4];?>
)
                                        </p>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['image']->value[3] == 5 || $_smarty_tpl->tpl_vars['image']->value[3] == 8 || $_smarty_tpl->tpl_vars['image']->value[3] == 9) {?>
                                        <img class='img-responsive' src="http://www.bl.uk/IllImages/<?php echo $_smarty_tpl->tpl_vars['image']->value[4];?>
/thm/<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['image']->value[5],4,'',true);?>
/<?php echo $_smarty_tpl->tpl_vars['image']->value[5];?>
.jpg">
                                        <?php } else { ?>
                                        <img class='img-responsive' src="http://www.bl.uk/IllImages/<?php echo $_smarty_tpl->tpl_vars['image']->value[4];?>
/thm/<?php echo $_smarty_tpl->tpl_vars['image']->value[5];?>
.jpg">
                                        <?php }?>
                                    </a>
                                </div>
                        <?php if (!($_smarty_tpl->tpl_vars['image']->iteration % 3)) {?>
                            </div>
                        </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['image']->last) {?>
                            </div>
                        </div>
                        <?php }?>
                    <?php if (!($_smarty_tpl->tpl_vars['image']->iteration % 6)) {?>
                    </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['image']->last) {?>
                    </div>
                    <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_33_saved_local_item;
}
}
if ($__foreach_image_33_saved_item) {
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_33_saved_item;
}
?>
                    <?php }?>
                    
                    <?php }}?>
                    
                    <?php
$_smarty_tpl->tpl_vars['res'] = $__foreach_res_31_saved_local_item;
}
}
if ($__foreach_res_31_saved_item) {
$_smarty_tpl->tpl_vars['res'] = $__foreach_res_31_saved_item;
}
?>
                </section>
            </div> <!-- end of results-column -->
        </div> <!-- end of content-row -->
        
        <?php if ($_smarty_tpl->tpl_vars['maxpage']->value > 1) {?> 
        <div id='pagination-row' class='row'>
            <div class='col-sm-12'>
                <nav>
                    <ul class='pagination'>
                        <?php
$_smarty_tpl->tpl_vars['linkno'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['linkno']->step = 1;$_smarty_tpl->tpl_vars['linkno']->total = (int) ceil(($_smarty_tpl->tpl_vars['linkno']->step > 0 ? $_smarty_tpl->tpl_vars['pageno']->value+4+1 - ($_smarty_tpl->tpl_vars['pageno']->value-4) : $_smarty_tpl->tpl_vars['pageno']->value-4-($_smarty_tpl->tpl_vars['pageno']->value+4)+1)/abs($_smarty_tpl->tpl_vars['linkno']->step));
if ($_smarty_tpl->tpl_vars['linkno']->total > 0) {
for ($_smarty_tpl->tpl_vars['linkno']->value = $_smarty_tpl->tpl_vars['pageno']->value-4, $_smarty_tpl->tpl_vars['linkno']->iteration = 1;$_smarty_tpl->tpl_vars['linkno']->iteration <= $_smarty_tpl->tpl_vars['linkno']->total;$_smarty_tpl->tpl_vars['linkno']->value += $_smarty_tpl->tpl_vars['linkno']->step, $_smarty_tpl->tpl_vars['linkno']->iteration++) {
$_smarty_tpl->tpl_vars['linkno']->first = $_smarty_tpl->tpl_vars['linkno']->iteration == 1;$_smarty_tpl->tpl_vars['linkno']->last = $_smarty_tpl->tpl_vars['linkno']->iteration == $_smarty_tpl->tpl_vars['linkno']->total;?>
                        <?php if (($_smarty_tpl->tpl_vars['linkno']->value <= 0)) {?>
                        <?php continue 1;?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['linkno']->value == $_smarty_tpl->tpl_vars['pageno']->value) {?>
                        <li class='active'>
                        <?php } else { ?>
                        <li>
                        <?php }?>
                            <a href='?page=<?php echo $_smarty_tpl->tpl_vars['linkno']->value;
$_from = $_smarty_tpl->tpl_vars['get']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_34_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_34_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$__foreach_value_34_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_value_34_total) {
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_34_saved_local_item = $_smarty_tpl->tpl_vars['value'];
if ($_smarty_tpl->tpl_vars['name']->value != 'page') {?>&amp;<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['value']->value;
}
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_34_saved_local_item;
}
}
if ($__foreach_value_34_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_34_saved_item;
}
if ($__foreach_value_34_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_value_34_saved_key;
}
$_from = $_smarty_tpl->tpl_vars['get_arrays']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_35_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$__foreach_val_35_saved_key = isset($_smarty_tpl->tpl_vars['arg']) ? $_smarty_tpl->tpl_vars['arg'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$__foreach_val_35_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_val_35_total) {
$_smarty_tpl->tpl_vars['arg'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['arg']->value => $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_35_saved_local_item = $_smarty_tpl->tpl_vars['val'];
?>&amp;<?php echo $_smarty_tpl->tpl_vars['arg']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['val']->value;
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_35_saved_local_item;
}
}
if ($__foreach_val_35_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_35_saved_item;
}
if ($__foreach_val_35_saved_key) {
$_smarty_tpl->tpl_vars['arg'] = $__foreach_val_35_saved_key;
}
?>'>
                                <?php echo $_smarty_tpl->tpl_vars['linkno']->value;?>

                            </a>
                        </li>
                        <?php if (($_smarty_tpl->tpl_vars['linkno']->value == $_smarty_tpl->tpl_vars['maxpage']->value)) {?>
                        <?php break 1;?>
                        <?php }?>
                        <?php }
}
?>

                    </ul>
                </nav>
            </div>
        </div> <!-- end of pagination-row -->
        <?php }?>
        
        <div class='row'>
            <div class='col-sm-12'>
                <footer>
                    <h2>
                        Footer
                    </h2>
                </footer>
            </div>
        </div>
        
    </div>
</body>
</html>
<?php }
}
