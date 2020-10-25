<?php
// ------------------------------------------------------------------------- //
//                XOOPS - PHP Content Management System                      //
//                       <https://www.xoops.org>                             //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
// ------------------------------------------------------------------------- //
//                                                                           //
//                               "Spotlight"                                 //
//                                                                           //
//               http://linux.kuht.it  - http://www.kuht.it                  //
//                                                                           //
//                              spark@kuht.it                                //
//                                                                           //
//              Adapted for XOOPS-JP 2.0 by Herko and dAWiLbY                   //
//---------------------------------------------------------------------------//
$modversion['name'] = _MI_SPOTLIGHT_NAME . ' (clone)';
$modversion['version'] = 2.1;
$modversion['description'] = _MI_SPOTLIGHT_DESC;
$modversion['author'] = 'Spark [ kuht.it ]<br>Adapted for XOOPS-JP 2.0<br>by<br>Herko, dAWiLbY and Catzwolf';
$modversion['credits'] = 'http://linux.kuht.it';
$modversion['help'] = 'spark@kuht.it';
$modversion['license'] = 'GPL see LICENSE';
$modversion['official'] = 0;
$modversion['image'] = 'images/kuht_slogo.png';
$modversion['dirname'] = 'xentspotlight';

// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = 'admin/index.php?op=news';
$modversion['adminmenu'] = 'admin/menu.php';

// Blocks
$modversion['blocks'][1]['file'] = 'kuht_head_news.php';
$modversion['blocks'][1]['name'] = _MI_SPOTLIGHT_BNAME;
$modversion['blocks'][1]['description'] = 'Spotlight - Focus News';
$modversion['blocks'][1]['show_func'] = 'b_head_kuht_show_news';
$modversion['blocks'][1]['edit_func'] = 'b_head_kuht_edit_news';
$modversion['blocks'][1]['options'] = 'published';
$modversion['blocks'][1]['template'] = 'news_block_spotlight.html';
/*
$modversion['blocks'][2]['file'] = 'kuht_head_wfsection.php';
$modversion['blocks'][2]['name'] = _MI_SPOTLIGHT_BNAME1;
$modversion['blocks'][2]['description'] = 'Spotlight - Focus WF-Section';
$modversion['blocks'][2]['show_func'] = 'b_head_kuht_show_wfsection';
$modversion['blocks'][2]['edit_func'] = 'b_head_kuht_edit_wfsection';
$modversion['blocks'][2]['options'] = 'published';
$modversion['blocks'][2]['template'] = 'wfsections_block_spotlight.html';*/

// Database
$modversion['sqlfile']['mysql'] = 'sql/mysql.sql';
$modversion['tables'][0] = 'xentspotlight';

// Menu
$modversion['hasMain'] = 0;

//Module Configuration

$modversion['config'][1]['name'] = 'stopshouting';
$modversion['config'][1]['title'] = '_MI_SPOTLIGHT_STOPSHOUTING';
$modversion['config'][1]['description'] = '';
$modversion['config'][1]['formtype'] = 'yesno';
$modversion['config'][1]['valuetype'] = 'int';
$modversion['config'][1]['default'] = 0;

$modversion['config'][37]['name'] = 'uploaddir';
$modversion['config'][37]['title'] = '_MI_SPOTLIGHT_UPLOADDIR';
$modversion['config'][37]['description'] = '_MI_SPOTLIGHT_UPLOADDIRDSC';
$modversion['config'][37]['formtype'] = 'textbox';
$modversion['config'][37]['valuetype'] = 'text';
$modversion['config'][37]['default'] = 'modules/news/images';

$modversion['config'][2]['name'] = 'wfuploaddir';
$modversion['config'][2]['title'] = '_MI_SPOTLIGHT_WFUPLOADDIR';
$modversion['config'][2]['description'] = '_MI_SPOTLIGHT_WFUPLOADDIRDSC';
$modversion['config'][2]['formtype'] = 'textbox';
$modversion['config'][2]['valuetype'] = 'text';
$modversion['config'][2]['default'] = 'modules/wfsection/images/article';

$modversion['config'][3]['name'] = 'maxfilesize';
$modversion['config'][3]['title'] = '_MI_SPOTLIGHT_MAXFILESIZE';
$modversion['config'][3]['description'] = '_MI_SPOTLIGHT_MAXFILESIZEDSC';
$modversion['config'][3]['formtype'] = 'textbox';
$modversion['config'][3]['valuetype'] = 'int';
$modversion['config'][3]['default'] = 50000;

$modversion['config'][4]['name'] = 'maximgwidth';
$modversion['config'][4]['title'] = '_MI_SPOTLIGHT_IMGWIDTH';
$modversion['config'][4]['description'] = '_MI_SPOTLIGHT_IMGWIDTHDSC';
$modversion['config'][4]['formtype'] = 'textbox';
$modversion['config'][4]['valuetype'] = 'int';
$modversion['config'][4]['default'] = 600;

$modversion['config'][5]['name'] = 'maximgheight';
$modversion['config'][5]['title'] = '_MI_SPOTLIGHT_IMGHEIGHT';
$modversion['config'][5]['description'] = '_MI_SPOTLIGHT_IMGHEIGHTDSC';
$modversion['config'][5]['formtype'] = 'textbox';
$modversion['config'][5]['valuetype'] = 'int';
$modversion['config'][5]['default'] = 600;

$modversion['config'][6]['name'] = 'updatethumbs';
$modversion['config'][6]['title'] = '_MI_SPOTLIGHT_UPDATETHUMBS';
$modversion['config'][6]['description'] = '';
$modversion['config'][6]['formtype'] = 'yesno';
$modversion['config'][6]['valuetype'] = 'int';
$modversion['config'][6]['default'] = 0;

//news block config
$modversion['config'][7]['name'] = 'newsthumbs';
$modversion['config'][7]['title'] = '_MI_SPOTLIGHT_NEWSSHOWTHUMBS';
$modversion['config'][7]['description'] = '_MI_SPOTLIGHT_NEWSSHOWTHUMBSDSC';
$modversion['config'][7]['formtype'] = 'yesno';
$modversion['config'][7]['valuetype'] = 'int';
$modversion['config'][7]['default'] = 0;

$modversion['config'][8]['name'] = 'retainimgsize';
$modversion['config'][8]['title'] = '_MI_SPOTLIGHT_RETAINIMGSIZE';
$modversion['config'][8]['description'] = '_MI_SPOTLIGHT_RETAINIMGSIZEDSC';
$modversion['config'][8]['formtype'] = 'yesno';
$modversion['config'][8]['valuetype'] = 'int';
$modversion['config'][8]['default'] = 1;

$modversion['config'][9]['name'] = 'dmaximgwidth';
$modversion['config'][9]['title'] = '_MI_SPOTLIGHT_DIMGWIDTH';
$modversion['config'][9]['description'] = '_MI_SPOTLIGHT_DIMGWIDTHDSC';
$modversion['config'][9]['formtype'] = 'textbox';
$modversion['config'][9]['valuetype'] = 'int';
$modversion['config'][9]['default'] = 300;

$modversion['config'][10]['name'] = 'dmaximgheight';
$modversion['config'][10]['title'] = '_MI_SPOTLIGHT_DIMGHEIGHT';
$modversion['config'][10]['description'] = '_MI_SPOTLIGHT_DIMGHEIGHTDSC';
$modversion['config'][10]['formtype'] = 'textbox';
$modversion['config'][10]['valuetype'] = 'int';
$modversion['config'][10]['default'] = 150;

$modversion['config'][11]['name'] = 'imagequality';
$modversion['config'][11]['title'] = '_MI_SPOTLIGHT_QUALITY';
$modversion['config'][11]['description'] = '_MI_SPOTLIGHT_RETAINIMGSIZEDSC';
$modversion['config'][11]['formtype'] = 'textbox';
$modversion['config'][11]['valuetype'] = 'int';
$modversion['config'][11]['default'] = 100;

$modversion['config'][12]['name'] = 'titlelenght';
$modversion['config'][12]['title'] = '_MI_SPOTLIGHT_TITLECHARS';
$modversion['config'][12]['formtype'] = 'textbox';
$modversion['config'][12]['valuetype'] = 'int';
$modversion['config'][12]['default'] = 45;

$modversion['config'][13]['name'] = 'showmoreart';
$modversion['config'][13]['title'] = '_MI_SPOTLIGHT_MORE_LINKS';
$modversion['config'][13]['description'] = '_';
$modversion['config'][13]['formtype'] = 'yesno';
$modversion['config'][13]['valuetype'] = 'int';
$modversion['config'][13]['default'] = 1;

$modversion['config'][14]['name'] = 'perpage';
$modversion['config'][14]['title'] = '_MI_SPOTLIGHT_DISP';
$modversion['config'][14]['description'] = '';
$modversion['config'][14]['formtype'] = 'select';
$modversion['config'][14]['valuetype'] = 'int';
$modversion['config'][14]['default'] = 5;
$modversion['config'][14]['options'] = [ '1' => 1, '2' => 2, '3' => 3, '4' => 4, '5' => 5, '6' => 6, '7' => 7, '8' => 8, '9' => 9, '10' => 10, '15' => 15, '20' => 20 ];

$modversion['config'][15]['name'] = 'showtopicbox';
$modversion['config'][15]['title'] = '_MI_SPOTLIGHT_TOPICS';
$modversion['config'][15]['description'] = '_';
$modversion['config'][15]['formtype'] = 'yesno';
$modversion['config'][15]['valuetype'] = 'int';
$modversion['config'][15]['default'] = 0;

$modversion['config'][16]['name'] = 'showteaser';
$modversion['config'][16]['title'] = '_MI_SPOTLIGHT_TEXTVIEW';
$modversion['config'][16]['description'] = '';
$modversion['config'][16]['formtype'] = 'yesno';
$modversion['config'][16]['valuetype'] = 'int';
$modversion['config'][16]['default'] = 0;

$modversion['config'][17]['name'] = 'textchars';
$modversion['config'][17]['title'] = '_MI_SPOTLIGHT_HOMETEXTCHARS';
$modversion['config'][17]['description'] = '_MI_SPOTLIGHT_HOMETEXTDSC';
$modversion['config'][17]['formtype'] = 'textbox';
$modversion['config'][17]['valuetype'] = 'int';
$modversion['config'][17]['default'] = 100;

$modversion['config'][18]['name'] = 'ministats';
$modversion['config'][18]['title'] = '_MI_SPOTLIGHT_INCSTATS';
$modversion['config'][18]['description'] = '';
$modversion['config'][18]['formtype'] = 'yesno';
$modversion['config'][18]['valuetype'] = 'int';
$modversion['config'][18]['default'] = 1;

$modversion['config'][19]['name'] = 'remimgmain';
$modversion['config'][19]['title'] = '_MI_SPOTLIGHT_REMIMGMAIN';
$modversion['config'][19]['description'] = '';
$modversion['config'][19]['formtype'] = 'yesno';
$modversion['config'][19]['valuetype'] = 'int';
$modversion['config'][19]['default'] = 0;

$modversion['config'][20]['name'] = 'remimgteas';
$modversion['config'][20]['title'] = '_MI_SPOTLIGHT_REMIMGTEAS';
$modversion['config'][20]['description'] = '';
$modversion['config'][20]['formtype'] = 'yesno';
$modversion['config'][20]['valuetype'] = 'int';
$modversion['config'][20]['default'] = 1;

$modversion['config'][21]['name'] = 'templatetype';
$modversion['config'][21]['title'] = '_MI_SPOTLIGHT_CHOOSETEMPLATE';
$modversion['config'][21]['description'] = '_MI_SPOTLIGHT_CHOOSETEMPLATEDESC';
$modversion['config'][21]['formtype'] = 'yesno';
$modversion['config'][21]['valuetype'] = 'int';
$modversion['config'][21]['default'] = 1;
