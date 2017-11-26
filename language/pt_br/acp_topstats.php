<?php
/**
*
* @package phpBB Extension - Top Stats
* @copyright (c) 2017 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.0.1] (https://github.com/phpBBTraducoes)
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'TOPSTATS_SAVED'						=> 'Ajustes de Estatísticas Principais salvos',
	'TS_VERSION'							=> 'Versão',
	'TS_RECENT_SETTINGS'					=> 'Ajustes de Tópicos recentes ativos',
	'TS_RECENT_ENABLE'						=> 'Habilitar Tópico recentes ativos',
	'TS_RECENT_ENABLE_EXPLAIN'				=> 'Habilitar o desabilitar la visualización de la parte de Tópicos recentes ativos.',
	'TSRAT_NUMBER'							=> 'Tópicos recentes ativos',
	'TSRAT_NUMBER_EXPLAIN'					=> 'Número de Tópicos ativos recentes a mostrar.',
	'TS_JSSCROLL'							=> 'deslizamento de JQuery',
	'TS_JSSCROLL_EXPLAIN'					=> 'Habilitar o desabilitar el uso de deslizamento JQuery en Tópicos recentes ativos.<br />Tenga en cuenta que esta característica debe estar deshabilitada si utiliza JQuery Ticker.',
	'TS_JSSCROLL_SPEED'						=> 'Velocidade de deslizamento do JQuery',
	'TS_JSSCROLL_SPEED_EXPLAIN'				=> 'La velocidad de deslizamento en milisegundos.',
	'TS_JSSCROLL_INTERVAL'					=> 'Intervalo de deslizamento JQuery',
	'TS_JSSCROLL_INTERVAL_EXPLAIN'			=> 'Tempo entre o deslizamento em milisegundos.',
	'TS_JSSCROLL_DIRECTION'					=> 'Direção de deslizamento JQuery',
	'TS_JSSCROLL_DIRECTION_EXPLAIN'			=> 'Direção de deslizamento JQuery.',
	'TS_JSSCROLL_DIRECTION_DOWN'			=> 'Para baixo',
	'TS_JSSCROLL_DIRECTION_UP'				=> 'Para cima',
	'TS_JSSCROLL_PAUSE'						=> 'Pausa de deslizamento JQuery',
	'TS_JSSCROLL_PAUSE_EXPLAIN'				=> 'Quando habilitado, o deslizamento pausa parar colocar os tópicos recentes ativos.',
	'TS_JSSCROLL_NAVIGATION'				=> 'Navegação de deslizamento JQuery',
	'TS_JSSCROLL_NAVIGATION_EXPLAIN'		=> 'Habilitar ou desabilitar a Navegação do deslizamento JQuery para Tópicos recentes ativos.',
	'TS_TICKER_ENABLE'						=> 'JQuery Ticker',
	'TS_TICKER_ENABLE_EXPLAIN'				=> 'Habilitar ou desabilitar Navegação do deslizamento JQuery para Tópicos recentes ativos<br />Tenha em mente que esta característica deve estar desabilitada se estiver utilizando o deslizamento JQuery.',
	'TS_MOSTVIEWED_SETTINGS'				=> 'Ajustes de Tópicos mais vistos',
	'TS_MOSTVIEWED_ENABLE'					=> 'Habilitar Tópicos mais vistos',
	'TS_MOSTVIEWED_ENABLE_EXPLAIN'			=> 'Habilitar ou desabilitar a visualização da parte de Tópicos mais vistos',
	'TS_MOSTVIEWED_NUMBER'					=> 'Tópicos mais vistos',
	'TS_MOSTVIEWED_NUMBER_EXPLAIN'			=> 'Número de Tópicos mais vistos a mostrar.',
	'TS_MOSTREPLIED_SETTINGS'				=> 'Ajustes de Tópicos mais respondidos',
	'TS_MOSTREPLIED_ENABLE'					=> 'Habilitar Tópicos mais respondidos',
	'TS_MOSTREPLIED_ENABLE_EXPLAIN'			=> 'Habilitar o desabilitar a visualização da parte de Tópicos mais respondidos.',
	'TS_MOSTREPLIED_NUMBER'					=> 'Tópicos mais respondidos',
	'TS_MOSTREPLIED_NUMBER_EXPLAIN'			=> 'Número de Tópicos mais respondidos a mostrar.',
	'TS_MOSTACTIVEUSER_SETTINGS'			=> 'Ajustes de usuários mais ativos',
	'TS_MOSTACTIVEUSER_ENABLE'				=> 'Habilitar usuários mais ativos',
	'TS_MOSTACTIVEUSER_ENABLE_EXPLAIN'		=> 'Habilitar ou desabilitar a visualização da parte de usuários mais ativos.',
	'TS_MOSTACTIVEUSER_NUMBER'				=> 'usuários mais ativos',
	'TS_MOSTACTIVEUSER_NUMBER_EXPLAIN'		=> 'Número de usuários mais ativos a mostrar.',
	'TS_MOSTACTIVEFORUM_SETTINGS'			=> 'Ajustes de Foros mais ativos',
	'TS_MOSTACTIVEFORUM_ENABLE'				=> 'Habilitar Foros mais ativos.',
	'TS_MOSTACTIVEFORUM_ENABLE_EXPLAIN'		=> 'Habilitar o desabilitar a visualização da parte de Foros mais ativos.',
	'TS_MOSTACTIVEFORUM_NUMBER'				=> 'Foros mais ativos',
	'TS_MOSTACTIVEFORUM_NUMBER_EXPLAIN'		=> 'Número de Foros mais ativos a mostrar.',
	'TS_LASTVISITEDBOT_SETTINGS'			=> 'Ajustes de Últimas visitas de bots',
	'TS_LASTVISITEDBOT_ENABLE'				=> 'Habilitar Últimas visitas de bots',
	'TS_LASTVISITEDBOT_ENABLE_EXPLAIN'		=> 'Habilitar ou desabilitar a visualização da parte de Últimas visitas de bots.',
	'TS_LASTVISITEDBOT_NUMBER'				=> 'Últimas visitas de bots',
	'TS_LASTVISITEDBOT_NUMBER_EXPLAIN'		=> 'Número de Últimas visitas de bots a mostrar.',
	'TS_LASTREGISTEREDUSER_SETTINGS'		=> 'Ajustes dos Últimos usuários registrados',
	'TS_LASTREGISTEREDUSER_ENABLE'			=> 'Habilitar Últimos usuários registrados',
	'TS_LASTREGISTEREDUSER_ENABLE_EXPLAIN'	=> 'Habilitar ou desabilitar a visualização da parte de Últimos usuários registrados.',
	'TS_LASTREGISTEREDUSER_NUMBER'			=> 'Últimos usuários registrados',
	'TS_LASTREGISTEREDUSER_NUMBER_EXPLAIN'	=> 'Número de Últimos usuários registrados a mostrar.',
));
