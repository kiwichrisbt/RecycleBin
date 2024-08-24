<?php
class RecycleBinHelper
{
    private static $backupDir = '../recycle-bin-backups';
	//    private static $backupDir = '../../recycle-bin-backups';

    public static function backupContent($contentId)
    {
        // Stelle sicher, dass das Backup-Verzeichnis existiert
        if (!file_exists(self::$backupDir)) {
            mkdir(self::$backupDir, 0777, true);
        }

        // Hole den aktuellen Inhalt der Seite
        $content = self::getPageContent($contentId);

        // Generiere einen Dateinamen basierend auf der Content-ID und dem aktuellen Zeitstempel
        $fileName = "backup_{$contentId}_" . date('Y-m-d_H-i-s') . '.json';

        // Konvertiere den Inhalt in JSON (oder ein anderes gewünschtes Format)
        $contentJson = json_encode($content);

        // Speichere den Inhalt in einer Datei
        file_put_contents(self::$backupDir . '/' . $fileName, $contentJson);
    }

    private static function getPageContent($contentId)
    {
        $db = cmsms()->GetDb();
        $query = "SELECT * FROM ".CMS_DB_PREFIX."content AS c INNER JOIN ".CMS_DB_PREFIX."content_props AS p ON c.content_id = p.content_id WHERE c.content_id = ?";
        $result = $db->GetArray($query, array($contentId));
    
        if (empty($result)) {
            return "0 results";
        }
        
        return $result;
    }
}
?>
