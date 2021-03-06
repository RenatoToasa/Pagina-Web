<?php
/**
* @author    Roland Soos
* @copyright (C) 2015 Nextendweb.com
* @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
**/
defined('_JEXEC') or die('Restricted access');
?><?php
N2Loader::import('libraries.form.element.skin');

class N2ElementFontPreset extends N2ElementSkin
{

    function generateOptions(&$xml) {
        $html = '';
        if (!$this->fixedMode) {
            $html .= '<option value="0" selected="selected">' . n2_('Choose') . '</option>';
        }
        $this->skins  = array();
        $fontSettings = N2Fonts::loadSettings();
        $families     = explode("\n", $fontSettings['preset-families']);
        foreach ($families as $family) {
            $family = trim($family, "\t\n\r\0\x0B'\"");
            if (!empty($family)) {
                $html .= '<option value="' . $family . '">' . $family . '</option>';
                $this->skins[$family]           = array();
                $this->skins[$family]['family'] = $family;
            }

        }
        return $html;
    }
}