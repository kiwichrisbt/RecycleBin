<?php

require_once(dirname(__FILE__).'/lib/class.recyclebin.php');

$content = $params['content'];
$contentId = $content->Id();

RecycleBinHelper::backupContent($contentId);
