<?php
// Псевдо-API

if (preg_match('/^-?\d+$/', $_GET['n'])) {
	require_once '/classes/TranslateNumber.php';
	switch($_GET['len']) {
		case 'ru':
			require_once '/classes/TranslateNumberRU.php';
			echo TranslateNumberRU::translate($_GET['n']);
			break;
		case 'en':
			echo TranslateNumber::translate($_GET['n']);
			break;
		default:
			require_once '/classes/TranslateNumberUA.php';
			echo TranslateNumberUA::translate($_GET['n']);
	}
}