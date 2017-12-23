<?php /* Smarty version Smarty-3.1.14, created on 2016-03-18 14:36:33
         compiled from "/home/it/web/wa-data/public/shop/themes/site_camera/navigation.html" */ ?>
<?php /*%%SmartyHeaderCode:190126887956ebe8417f4a79-37572901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '305d648ab7c521275c0747f40f5b95ee20533080' => 
    array (
      0 => '/home/it/web/wa-data/public/shop/themes/site_camera/navigation.html',
      1 => 1456393029,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190126887956ebe8417f4a79-37572901',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'shop_pages' => 0,
    'category' => 0,
    'wa_app_url' => 0,
    'categories' => 0,
    'selected_category' => 0,
    'cloud' => 0,
    'tag' => 0,
    'frontend_nav' => 0,
    '_key' => 0,
    '_' => 0,
    'frontend_nav_aux' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56ebe8418e5ad2_13079012',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ebe8418e5ad2_13079012')) {function content_56ebe8418e5ad2_13079012($_smarty_tpl) {?><?php if (!is_callable('smarty_function_wa_print_tree')) include '/home/it/web/wa-system/vendors/smarty-plugins/function.wa_print_tree.php';
?><!-- storefront navigation -->
<div class="app-navigation" role="navigation">

    <!-- info pages -->
    <?php $_smarty_tpl->tpl_vars['shop_pages'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->pages(), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['shop_pages']->value){?>
        <div class="float-right">
            <?php echo smarty_function_wa_print_tree(array('tree'=>$_smarty_tpl->tpl_vars['shop_pages']->value,'class'=>"menu-h dropdown",'attrs'=>'id="page-list"','elem'=>'
        <a href=":url" title=":title">:name</a>','collapsible_class'=>'collapsible','selected'=>$_smarty_tpl->tpl_vars['wa']->value->param('page_id')),$_smarty_tpl);?>

        </div>
    <?php }?>
    
    <!-- phone number -->
    <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->settings('phone')){?>
        <div class="float-right static-text">
            <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->settings('phone');?>

        </div>
    <?php }?>    
    
    <?php if (isset($_smarty_tpl->tpl_vars['category']->value)){?><?php $_smarty_tpl->tpl_vars['selected_category'] = new Smarty_variable($_smarty_tpl->tpl_vars['category']->value['id'], null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['selected_category'] = new Smarty_variable(null, null, 0);?><?php }?>
    <?php $_smarty_tpl->tpl_vars['categories'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->categories(0,null,true), null, 0);?>
    <ul class="menu-h dropdown">
        <!-- category tree -->
        <li class="collapsible">
            <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
">All products</a>
            <?php echo smarty_function_wa_print_tree(array('tree'=>$_smarty_tpl->tpl_vars['categories']->value,'selected'=>$_smarty_tpl->tpl_vars['selected_category']->value,'unfolded'=>true,'collapsible_class'=>'collapsible','class'=>"menu-v category-tree",'elem'=>'<a href=":url" title=":name">:name</a>'),$_smarty_tpl);?>

        </li>
        <?php if (!isset($_smarty_tpl->tpl_vars['cloud'])) $_smarty_tpl->tpl_vars['cloud'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['cloud']->value = $_smarty_tpl->tpl_vars['wa']->value->shop->tags()){?>
            <!-- tags -->            
            <li class="collapsible">
                <a href="#" onClick="return false">Tags</a>
                <div class="inner shadowed">
                    <div class="tags block align-center">
                        <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cloud']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
tag/<?php echo $_smarty_tpl->tpl_vars['tag']->value['uri_name'];?>
/" style="font-size: <?php echo $_smarty_tpl->tpl_vars['tag']->value['size'];?>
%; opacity: <?php echo $_smarty_tpl->tpl_vars['tag']->value['opacity'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                        <?php } ?>
                    </div>
                </div>
            </li>
        <?php }?>
        <!-- plugin hook: 'frontend_nav' -->
        
        <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_smarty_tpl->tpl_vars['_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontend_nav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
 $_smarty_tpl->tpl_vars['_key']->value = $_smarty_tpl->tpl_vars['_']->key;
?>
            <li class="collapsible">
                <a href="#" onClick="return false">
                    <?php if (substr($_smarty_tpl->tpl_vars['_key']->value,-7)=='-plugin'){?><?php echo $_smarty_tpl->tpl_vars['wa']->value->pluginName(substr($_smarty_tpl->tpl_vars['_key']->value,0,-7));?>
<?php }else{ ?>More<?php }?>
                </a>
                <div class="inner">
                    <?php echo $_smarty_tpl->tpl_vars['_']->value;?>
          
                </div>
            </li>
        <?php } ?>
        <!-- plugin hook: 'frontend_nav_aux' -->
        
        <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_smarty_tpl->tpl_vars['_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontend_nav_aux']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
 $_smarty_tpl->tpl_vars['_key']->value = $_smarty_tpl->tpl_vars['_']->key;
?>
        <li class="collapsible">
            <a href="#" onClick="return false">
                <?php if (substr($_smarty_tpl->tpl_vars['_key']->value,-7)=='-plugin'){?><?php echo $_smarty_tpl->tpl_vars['wa']->value->pluginName(substr($_smarty_tpl->tpl_vars['_key']->value,0,-7));?>
<?php }else{ ?>More<?php }?>
            </a>
            <div class="inner">
                <?php echo $_smarty_tpl->tpl_vars['_']->value;?>

            </div>
        </li>
        <?php } ?>
    </ul>    	
	
	<div class="clear-both"></div>
	
</div><?php }} ?>