<?php

include_once '../core/parser/html.php';

$html = new \Parser\Html('<body id="vk" class="_hover _hfixed _lm" onresize="onBodyResize(true);">
<div id="vk_utils"></div>
<div id="vk_head" class="mhead">
<div class="hb_wrap"><div class="hb_btn">&nbsp;</div></div>
</div>
<div id="vk_wrap" class="_vpan qs_enabled">
<div id="l"><div class="mhead">
<div class="head_search"><form action="/search" class="qsearch" onsubmit="return lm_qsearch.go(event);">
<input type="hidden" name="act" value="global">
<table class="row_table"><tr>
<td class="row_table_main_column">
<div class="qs_field_wrap">
<div class="clear_btn" id="lm_search_clear" onclick="return lm_qsearch.clear(event, true);"></div><i class="i_search" onclick="elfocus(\'lm_search_field\');"></i>
<div class="iwrap"><input type="text" class="textfield qs_textfield" name="q" value="" autocomplete="off" id="lm_search_field" placeholder="Поиск"></div>
</div>
</td>
<td class="row_table_last_column"><input class="button" type="button" value="Отмена" onclick="menu.cancelSearch();" /></td>
</tr></table>
</form></div>
<a href="/feed" class="hb_wrap mhb_logo al_menu" onclick="return menu.headerAction(this, event);" data-header="Новости"><span class="bottom"></span><div class="lmh_logo_wrap"><div class="hb_btn mhi_logo mhi_index_logo">&nbsp;</div></div></a>
</div>
<div id="lm_search_items" class="m_search_items"></div>
<div id="lm_cont" class="m_search_cont">
<div class="pcont main fit_box">
<div id="lm_top_notify"></div>
<div id="lm_prof_panel"><div class="owner_panel index_panel al_u13872675" ontouchstart="thover.start.call(this, event);" data-href="/rayazik" data-name="Раяз Султанов" data-photo="http://cs629503.vk.me/v629503675/bfee/Agxcjs1gxI0.jpg" onclick="nav.go(this, event);">
<div class="ip_user_link">
<a class="al_u13872675" href="/rayazik" data-name="Раяз Султанов" data-photo="http://cs629503.vk.me/v629503675/bfee/Agxcjs1gxI0.jpg"><img src="http://cs629503.vk.me/v629503675/bfee/Agxcjs1gxI0.jpg" class="op_fimg _u13872675" /></a>
<i class="i_arr"></i>
<div class="op_fcont">
<h2 class="op_header"><a class="op_owner alal_u13872675 al_u13872675" href="/rayazik" data-name="Раяз Султанов" data-photo="http://cs629503.vk.me/v629503675/bfee/Agxcjs1gxI0.jpg">Раяз Султанов</a><b class="lvi"></b></h2>
<div class="pp_status"><a class="pp_status_link" href="/rayazik?act=edit_status&from=menu" onclick="return nav.go(this, event);">я вижу цель.</a></div>
</div>
</div>
</div></div>
<ul class="main_menu"><li class="mmi_feed"><a href="/feed" class="mm_item al_menu" data-header="Новости"><i class="i_icon"></i><span class="mmi_wrap"><span class="mm_label">Новости</span></span></a></li><li class="mmi_answers"><a href="/feed?section=notifications" class="mm_item al_menu" data-header="Ответы"><i class="i_icon"></i><span class="mmi_wrap"><span class="mm_label">Ответы</span></span></a></li><li class="mmi_mail"><a href="/mail" class="mm_item al_menu" data-header="Сообщения"><i class="i_icon"></i><span class="mmi_wrap"><span class="mm_label">Сообщения</span><em class="mm_counter">1</em></span></a></li><li class="mmi_friends"><a href="/friends" class="mm_item al_menu" data-header="Друзья"><i class="i_icon"></i><span class="mmi_wrap"><span class="mm_label">Друзья</span></span></a></li><li class="mmi_groups"><a href="/groups" class="mm_item al_menu" data-header="Сообщества"><i class="i_icon"></i><span class="mmi_wrap"><span class="mm_label">Группы</span></span></a></li><li class="mmi_photos"><a href="/feed?section=photos" class="mm_item al_menu" data-header="Фотографии друзей"><i class="i_icon"></i><span class="mmi_wrap"><span class="mm_label">Фотографии</span></span></a></li><li class="mmi_video"><a href="/video" class="mm_item al_menu" data-header="Видеозаписи"><i class="i_icon"></i><span class="mmi_wrap"><span class="mm_label">Видеозаписи</span></span></a></li><li class="mmi_audio"><a href="/audio" class="mm_item al_menu" data-header="Аудиозаписи"><i class="i_icon"></i><span class="mmi_wrap"><span class="mm_label">Аудиозаписи</span></span></a></li><li class="mmi_fave"><a href="/fave" class="mm_item al_menu" data-header="Закладки"><i class="i_icon"></i><span class="mmi_wrap"><span class="mm_label">Закладки</span></span></a></li><li class="mmi_search"><a href="/search" class="mm_item al_menu" data-header="Поиск"><i class="i_icon"></i><span class="mmi_wrap"><span class="mm_label">Поиск</span></span></a></li></ul>
<div id="lm_player" class="lm_player"><div id="lm_audio" class="audio_item al_player" data-href="#player" onclick="return audioplayer.openPlayer(this);">
<div class="ai_play" onclick="audioplayer.playPause(event);"><i class="i_play"></i></div>
<div class="ai_body">
<i class="i_arr"></i>
<div class="ai_label">
<div class="ai_artist"></div>
<div class="ai_title"></div>
</div>
</div>
</div></div>
<div id="lm_bottom_notify"></div>
</div>
<div class="mfoot">
<ul class="left_footer_menu"><li class="mmi_settings"><a href="/settings" class="lfm_item al_menu" data-header="Настройки"><i class="i_icon"></i><span class="mmi_wrap"><span class="mm_label">Настройки</span></span></a></li><li class="mmi_help"><a href="/support" class="lfm_item al_menu" data-header="Помощь"><i class="i_icon"></i><span class="mmi_wrap"><span class="mm_label">Помощь</span></span></a></li><li class="mmi_fv"><a href="http://vk.com/feed?_fm=feed" class="lfm_item"><i class="i_icon"></i><span class="mmi_wrap"><span class="mm_label">Полная версия</span></span></a></li><li class="mmi_logout"><a href="https://login.vk.com/?act=logout_mobile&hash=7b6fbb0913a8372ec5&_origin=http%3A%2F%2Fm.vk.com" class="lfm_item"><i class="i_icon"></i><span class="mmi_wrap"><span class="mm_label">Выход</span></span></a></li></ul>
</div>
</div></div>
<div id="m"><div id="mhead" class="mhead"><a href="/" accesskey="*" class="hb_wrap mhb_home" onclick="return menu.toggle(event);">
<div class="hb_btn mhi_home">&nbsp;</div>
</a>
<a id="header_msgs" href="/mail" class="hb_wrap mhb_notify" accesskey="#">
<div class="hb_btn mhi_notify">
<em class="mh_notify_counter">1</em>
</div>
</a>
<div class="hb_wrap mhb_back al_back"><h1 class="hb_btn mh_header">Новости</h1></div></div>
<div id="mcont" class="mcont"><div class="pcont">
<div class="head_panel">
<div class="hp_block tabs_block tabs_block_closed"><form action="/search" class="qsearch" onsubmit="return lm_qsearch.go(event);">
<input type="hidden" name="act" value="global">
<table class="row_table"><tr>
<td class="row_table_main_column">
<div class="qs_field_wrap">
<div class="clear_btn" id="lm_search_clear" onclick="return lm_qsearch.clear(event, true);"></div><i class="i_search" onclick="elfocus(\'lm_search_field\');"></i>
<div class="iwrap"><input type="text" class="textfield qs_textfield" name="q" value="" autocomplete="off" id="lm_search_field" placeholder="Поиск"></div>
</div>
</td>
<td class="row_table_last_column"><input class="button" type="button" value="Отмена" onclick="menu.cancelSearch();" /></td>
</tr></table>
</fo');

var_dump($html->getForms());

var_dump("form serch test");
var_dump($html->getFormByClass('qsearch'));
var_dump("Должна вернуться пустая строка");
var_dump($html->getFormByClass('123'));
