<?php
include_once '../core/parser/form.php';

$form = new \Parser\Form('<form action="/search" class="qsearch" onsubmit="return lm_qsearch.go(event);">
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
</form>');

var_dump($form->getInputs());

var_dump($form->getAction('<form action="/search" class="qsearch"'));

var_dump($form->getAction('<form action="" class="qsearch"'));


var_dump($form->getMethod('<form method="get" class="qsearch"'));

var_dump($form->getMethod('<form method="GET" class="qsearch"'));

var_dump($form->getMethod('<form method="post" class="qsearch"'));

var_dump($form->getMethod('<form method="POST" class="qsearch"'));

var_dump($form->getMethod('<form method="" class="qsearch"'));

var_dump($form->getMethod('<form class="qsearch"'));