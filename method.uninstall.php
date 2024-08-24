<?php
if (!defined('CMS_VERSION')) exit;
if (!isset($gCms)) exit;
if (!class_exists('CMSModule')) return false;

$this->RemoveEvent('ContentEditPre');
$this->RemoveEvent('ContentDeletePre');

?>
