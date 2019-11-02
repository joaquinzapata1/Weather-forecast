<?php
/* Smarty version 3.1.33, created on 2019-11-02 02:44:44
  from 'C:\xampp\htdocs\geo\templates\handlebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbcdf8ca48269_58141980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73a509e480e1caf7545b01fc729edb74a30066b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\geo\\templates\\handlebar.tpl',
      1 => 1572656945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dbcdf8ca48269_58141980 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 id="entry-template" type="text/x-handlebars-template">
    <div id="weather_wrapper">
	<div class="weatherCard">
		<div class="currentTemp">
			<span class="temp">{{temp}}&deg;</span>
			<span class="location">{{info.name}}</span>
		</div>
		<div class="currentWeather">
			<span class="conditions"><i class="{{icon}}"></i></span>
			<div class="info">
				<span class="rain">{{info.humidity}} %</span>
				<span class="wind">{{info.wind}} m/h</span>
			</div>
		</div>
	</div>
</div>
<?php echo '</script'; ?>
>
<div id="content-placeholder"></div>
<?php }
}
