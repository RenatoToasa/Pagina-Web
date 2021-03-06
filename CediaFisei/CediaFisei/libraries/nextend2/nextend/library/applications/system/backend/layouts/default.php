<?php
/**
* @author    Roland Soos
* @copyright (C) 2015 Nextendweb.com
* @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
**/
defined('_JEXEC') or die('Restricted access');
?><?php
/* @var $this N2Layout */
?>

    <div id="n2-admin" class="n2 n2-border-radius">

        <?php
        /**
         * @var $widget Nav
         */
        $logoUrl = N2Base::getApplication('system')->getLogo();
        $cmd     = N2Request::getVar("nextendcontroller", "dashboard");
        echo $this->widget->init('nav', array(
            'logoUrl'      => $this->appType->router->createUrl("dashboard/index"),
            'logoImageUrl' => $logoUrl,
            'views'        => array(
                N2Html::tag('a', array(
                    'href'  => $this->appType->router->createUrl("dashboard/index"),
                    'class' => 'n2-h4 n2-uc ' . ($cmd == "dashboard" ? "n2-active" : "")
                ), n2_('Dashboard')),
                N2Html::tag('a', array(
                    'href'  => $this->appType->router->createUrl("settings/index"),
                    'class' => 'n2-h4 n2-uc ' . ($cmd == "settings" ? "n2-active" : "")
                ), n2_('Settings')),
                N2Html::tag('a', array(
                    'href'  => $this->appType->router->createUrl("help/index"),
                    'class' => 'n2-h4 n2-uc ' . ($cmd == "help" ? "n2-active" : "")
                ), n2_('Help'))
            ),
            'actions'      => $this->getFragmentValue('actions')
        ));
        ?>

        <div class="n2-table n2-table-fixed n2-content">
            <div class="n2-tr">
                <div class="n2-td n2-sidebar n2-sidebar-base-bg">
                    <?php
                    $this->renderFragmentBlock('nextend_sidebar');
                    ?>
                </div>

                <div class="n2-td n2-content-base-bg">
                    <!-- Begin Content -->
                    <div class="n2-content-area n2-border-radius-br">
                        <?php
                        $this->renderFragmentBlock('nextend_content');
                        ?>
                    </div>
                    <!-- End Content -->
                </div>
            </div>
        </div>

    </div>
<?php

N2Message::show();

N2JS::addInline("new NextendExpertMode('nextend', 1);");