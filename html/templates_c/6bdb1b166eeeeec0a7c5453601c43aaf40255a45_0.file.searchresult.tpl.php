<?php
/* Smarty version 3.1.33, created on 2019-02-24 02:57:10
  from '/var/www/html/templates/searchresult.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c71f9f6cf3e99_51170397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bdb1b166eeeeec0a7c5453601c43aaf40255a45' => 
    array (
      0 => '/var/www/html/templates/searchresult.tpl',
      1 => 1550973428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c71f9f6cf3e99_51170397 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- template d'affichage des résultat de la recherche. variable= $liste_resultat
auteur:Thibaud Jacquelin
24.02.2019
-->

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_resultat']->value, 'resultat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['resultat']->value) {
?>

	<article>
		<ul>
			<li><strong>N°<?php echo $_smarty_tpl->tpl_vars['resultat']->value['idP'];?>
</strong></li>
			<li><strong>Type: <?php echo $_smarty_tpl->tpl_vars['resultat']->value['type'];?>
</strong></li>
			<li><strong>description: <?php echo $_smarty_tpl->tpl_vars['resultat']->value['description'];?>
</strong></li>
		</ul>
	</article>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
