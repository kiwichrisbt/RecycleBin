<?php
if (!defined('CMS_VERSION')) exit;
if (!isset($gCms)) exit;
if (!class_exists('CMSModule')) return false;

try {    
    $this->AddEventHandler('Core', 'ContentEditPre');
    $this->AddEventHandler('Core', 'ContentDeletePre');
    
    // Gebe true zurück, um zu signalisieren, dass die Installation erfolgreich war
    return true;
}
catch(Exception $e) {
    // return $e->getMessage();
    return false;
}
