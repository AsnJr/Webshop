<?php
/* Smarty version 3.1.29, created on 2017-04-11 15:33:46
  from "C:\wamp64\www\webshop\Webshop_2017_framework\templates\products.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58ecf75aec02e0_44446399',
  'file_dependency' => 
  array (
    'fc4275d6851951760d8b7e0436cbb0ba73f8f6e7' => 
    array (
      0 => 'C:\\wamp64\\www\\webshop\\Webshop_2017_framework\\templates\\products.tpl',
      1 => 1491924826,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ecf75aec02e0_44446399 ($_smarty_tpl) {
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
</strong></td> <td><a href="huren.php"<?php echo $_smarty_tpl->tpl_vars['row']->value['productID'];?>
">Huren</a></td> <td><a href="kopen.php"<?php echo $_smarty_tpl->tpl_vars['row']->value['productID'];?>
">Kopen</a></td> </tr>
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
