<?php
/* Smarty version 4.3.2, created on 2023-09-07 18:03:55
  from 'C:\laragon\www\coop-emplois\COOP-V1\public\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64fa108bca5d96_52158354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c3b076fc7ba86b14b6191e882d395d24139ae13' => 
    array (
      0 => 'C:\\laragon\\www\\coop-emplois\\COOP-V1\\public\\header.tpl',
      1 => 1694109834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64fa108bca5d96_52158354 (Smarty_Internal_Template $_smarty_tpl) {
?>       <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>


                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="public/images/admin.jpg" alt="User Avatar">
                        </a>

                    </div>
                        <div class="user-area">
                        Bienvenue Mr.XX
                        </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
<?php }
}
