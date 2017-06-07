<?php
/* Smarty version 3.1.29, created on 2017-03-06 15:47:35
  from "C:\wamp64\www\webshop\Webshop_2017_framework\templates\footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58bd8497907a54_23325343',
  'file_dependency' => 
  array (
    '27307f88a44846b6ec1f4260b67a1ce7d42aa45d' => 
    array (
      0 => 'C:\\wamp64\\www\\webshop\\Webshop_2017_framework\\templates\\footer.tpl',
      1 => 1488815254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bd8497907a54_23325343 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\wamp64\\www\\webshop\\Webshop_2017_framework\\smarty\\libs\\plugins\\modifier.date_format.php';
?>
<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <strong>Eagle Carz</strong> <br>
Addr: Rotterdam, NL <br>
Date: <?php echo smarty_modifier_date_format(time(),"%b %e, %Y");?>
 <br>
  <p>Eagle Carz <a href="https://www.deheldenvantechniek.nl/" title="Helden van techniek">https://www.eaglecarz.com/</a></p>
</footer>

<?php }
}
