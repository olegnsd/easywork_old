<?php
// �������� - ����������� ������������
function no_auth_fill()
{
	global $site_db;
	
	$no_auth_tpl = file_get_contents('templates/no_auth.tpl');
	
	return fetch_tpl($PARS, $no_auth_tpl);
}
?>