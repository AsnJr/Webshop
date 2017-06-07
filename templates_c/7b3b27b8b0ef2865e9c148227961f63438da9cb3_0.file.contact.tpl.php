<?php
/* Smarty version 3.1.29, created on 2017-04-13 10:15:21
  from "D:\wamp64\www\Webshop_2017\templates\contact.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58ef4fb9eddf77_54896477',
  'file_dependency' => 
  array (
    '7b3b27b8b0ef2865e9c148227961f63438da9cb3' => 
    array (
      0 => 'D:\\wamp64\\www\\Webshop_2017\\templates\\contact.tpl',
      1 => 1492078518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ef4fb9eddf77_54896477 ($_smarty_tpl) {
?>

<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Neem contact met ons op en wij zullen responderen binnen 24 uur.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Rotterdam, NL</p>
      <p><span class="glyphicon glyphicon-phone"></span> +031 010 443 31 50</p>
      <p><span class="glyphicon glyphicon-envelope"></span> info@ws.com</p>
    </div>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Naam" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Commentaar" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Verzenden</button>
        </div>
      </div> 
    </div>
  </div>
</div>

<!-- Set height and width with CSS -->
<div id="googleMap" style="height:400px;width:100%;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2460.6124126491277!2d4.470276851679899!3d51.922782187967556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c434a691cb81ab%3A0x7159ba775da5ac96!2sCentral+Plaza!5e0!3m2!1sen!2snl!4v1490777426429" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>

<!-- Add Google Maps -->
<?php }
}
