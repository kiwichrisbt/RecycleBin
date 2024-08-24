<?php
if (!isset($gCms)) exit;

class RecycleBin extends CMSModule
{
    function GetName()
    {
        return 'RecycleBin';
    }

    function GetFriendlyName()
    {
        return 'Recycle Bin';
    }

    function GetVersion()
    {
        return '1.0';
    }

    function GetHelp()
    {
        return 'This module backups page content each time new content is saved. All backups are stored as json files in "/recycle-bin-backups". Restoring content is a manual operation, for now. Future versions may include options to restore content.';
    }

    function GetAuthor()
    {
        return 'Mateusz Klimentowicz';
    }

    function GetAuthorEmail()
    {
        return 'mateusz@directware.de';
    }

    function IsPluginModule()
    {
        return true;
    }

    function HasAdmin()
    {
        return false;
    }

    function InitializeFrontend()
    {
        $this->RegisterModulePlugin();
    }

    function InitializeAdmin()
    {
    }

    function HandlesEvents()
    {
        return true;
    }
}
?>
