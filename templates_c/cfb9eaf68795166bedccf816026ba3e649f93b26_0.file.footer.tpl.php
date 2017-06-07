<?php
/* Smarty version 3.1.29, created on 2017-04-13 10:15:21
  from "D:\wamp64\www\Webshop_2017\templates\footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58ef4fb9f18e43_84000739',
  'file_dependency' => 
  array (
    'cfb9eaf68795166bedccf816026ba3e649f93b26' => 
    array (
      0 => 'D:\\wamp64\\www\\Webshop_2017\\templates\\footer.tpl',
      1 => 1492078518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ef4fb9f18e43_84000739 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\wamp64\\www\\Webshop_2017\\smarty\\libs\\plugins\\modifier.date_format.php';
?>
<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <strong>WS</strong> <br>
Addr: Rotterdam, NL <br>
Date: <?php echo smarty_modifier_date_format(time(),"%b %e, %Y");?>
 <br>
  <pWS <a href="https://www.deheldenvantechniek.nl/" title="Helden van techniek">https://www.ws_ws_ws.com/</a></p>
</footer>

<?php }
}
