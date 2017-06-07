<?php
/* Smarty version 3.1.29, created on 2017-04-13 11:01:51
  from "D:\wamp64\www\Webshop_2017\templates\products.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58ef5a9facd6b5_03560229',
  'file_dependency' => 
  array (
    '3b1469f5e7d7475e8a46e979f9cb7d7269b53d88' => 
    array (
      0 => 'D:\\wamp64\\www\\Webshop_2017\\templates\\products.tpl',
      1 => 1492081311,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ef5a9facd6b5_03560229 ($_smarty_tpl) {
?>
<div id="products">
    <section id="ORDERS">
        <div class="container">
            <table class="table">
            <theader>
                
                <th>order </th><th>Detail</th><th>artikel nummer</th><th>product</th> <th>beschrijving</th> <th>prijs</th> <th>voorraad</th>
                
            </theader>
            <tbody>
                <?php
$_from = $_smarty_tpl->tpl_vars['products']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_0_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_0_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
                <td class="proimages"><?php echo $_smarty_tpl->tpl_vars['row']->value['productID'];?>
<img src="./products_pictures/<?php echo $_smarty_tpl->tpl_vars['row']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" border=0></td> <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
</td> <td class="prijs">&euro;<?php echo $_smarty_tpl->tpl_vars['row']->value['price'];?>
</td> <td>Aantal <strong><?php echo $_smarty_tpl->tpl_vars['row']->value['in_stock'];?>
</strong></td> <td><a href="kopen.php"<?php echo $_smarty_tpl->tpl_vars['row']->value['productID'];?>
">kopen</a></td> </tr>
                <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>
            </tbody>
            
        </table>
    </section>

</div><?php }
}
