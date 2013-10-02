<?php
/**
 * Kunena Component
 * @package Kunena.Template.Crypsis
 * @subpackage Pages.Search
 *
 * @copyright (C) 2008 - 2013 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/
defined ( '_JEXEC' ) or die ();

$content = $this->execute('Topic/List')->setLayout('new');

$this->addBreadcrumb('Topics Needing Attention', // TODO <-
	'index.php?option=com_kunena&view=topics&layout=unread');

echo $content;
