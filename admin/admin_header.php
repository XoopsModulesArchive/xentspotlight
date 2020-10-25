<?php
/**
 * $Id: admin_header.php,v 1.4 2005/04/07 15:10:27 m4d3l Exp $
 * Module: Spotlight
 * Version: v2.0
 * Release Date: 12 March 2004
 * Author: Catzwolf
 * Licence: GNU
 */
include '../../../mainfile.php';
require dirname(__DIR__, 3) . '/include/cp_header.php';

require_once XOOPS_ROOT_PATH . '/class/xoopsmodule.php';
require_once XOOPS_ROOT_PATH . '/class/xoopsmodule.php';
require_once XOOPS_ROOT_PATH . '/modules/xentspotlight/include/functions.php';
require XOOPS_ROOT_PATH . '/class/xoopstree.php';
require XOOPS_ROOT_PATH . '/class/xoopslists.php';
require XOOPS_ROOT_PATH . '/class/xoopsformloader.php';

if (is_object($xoopsUser)) {
    $xoopsModule = XoopsModule::getByDirname('xentspotlight');

    if (!$xoopsUser->isAdmin($xoopsModule->mid())) {
        redirect_header(XOOPS_URL . '/', 3, _NOPERM);

        exit();
    }
} else {
    redirect_header(XOOPS_URL . '/', 1, _NOPERM);

    exit();
}

$myts = MyTextSanitizer::getInstance();

// Image defines from here
$editimg = '<img src=' . XOOPS_URL . '/modules/' . $xoopsModule->dirname() . '/images/icon/edit.gif ALT=' . _AM_EDIT . '>';
$deleteimg = '<img src=' . XOOPS_URL . '/modules/' . $xoopsModule->dirname() . '/images/icon/delete.gif ALT=' . _AM_DELETE . '>';
