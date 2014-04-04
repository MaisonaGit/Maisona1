<?php
define('__DIR__', dirname(__FILE__));
require_once str_replace('modules'.DIRECTORY_SEPARATOR.'bskthemeoptions', 'config'.DIRECTORY_SEPARATOR.'config.inc.php', __DIR__);

$targetDir = 'img'. DIRECTORY_SEPARATOR .'theme'. DIRECTORY_SEPARATOR .'bkg';
if (is_dir($targetDir) && ($dir = opendir($targetDir))) {
    while (($file = readdir($dir)) !== false) {
            $tmpfilePath = $targetDir . DIRECTORY_SEPARATOR . $file;
            @unlink($tmpfilePath);
    }
    closedir($dir);
}

$bskg_bkg = unserialize( Configuration::get('bskg_bkg') );
$bskg_bkg['image'] = 'no_img.png';
Configuration::updateValue('bskg_bkg', serialize($bskg_bkg));
?>
