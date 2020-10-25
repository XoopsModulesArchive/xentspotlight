<?php
/**
* $Id: modinfo.php,v 1.4 2005/04/07 15:10:28 m4d3l Exp $
* Module: Spotlight
* Version: v2.0
* Release Date: 12 March 2004
* Author: Catzwolf
* Orginal Author: Herko (me at herkocoomans dot net) and
*                                    Dawilby (willemsen1 at chello dot nl)
* modified by m0nty to use XFSection aswell as WFSection
* Licence: GNU
*/

// The name of this module
define('_MI_SPOTLIGHT_NAME', ' A la Une');

// A brief description of this module
define('_MI_SPOTLIGHT_DESC', ' Place un Article dans le Block Central de la Une.');

// Names of blocks for this module (Not all module has blocks)
define('_MI_SPOTLIGHT_BNAME', 'A la Une - Actualit&eacute;s');
//define('_MI_SPOTLIGHT_BNAME1','A la Une - XF-Sections');
define('_MI_SPOTLIGHT_BNAME2', 'A la Une - WF-Sections');
//define('_MI_SPOTLIGHT_BNAME3','A la Une - T&eacute;l&eacute;chargements');
//define('_MI_SPOTLIGHT_BNAME4','A la Une - Liens');
//define('_MI_SPOTLIGHT_BNAME5','A la Une - Forum');

// Names of admin menu items
define('_MI_SPOTLIGHT_ADMENU1', 'Configuration G&eacute;n&eacute;rale');
define('_MI_SPOTLIGHT_ADMENU2', 'Bloc Actualit&eacute;s');
//define('_MI_SPOTLIGHT_ADMENU3','Bloc XF-Section');
define('_MI_SPOTLIGHT_ADMENU4', 'Bloc WF-Section');

define('_MI_SPOTLIGHT_UPLOADDIR', 'R&eacute;pertoire de T&eacute;l&eacute;chargement d\'Images (sans slash)');
define('_MI_SPOTLIGHT_WFUPLOADDIR', 'R&eacute;pertoire de t&eacute;l&eacute;chargement image WF-Section (sans anti slash)');
define('_MI_SPOTLIGHT_LINKIMAGES', 'R&eacute;pertoire de T&eacute;l&eacute;chargement d\'Image de la Une (sans slash)');
define('_MI_SPOTLIGHT_MAXFILESIZE', 'Taille Max de T&eacute;l&eacute;chargement');
define('_MI_SPOTLIGHT_IMGWIDTH', 'Largeur Maximale de l\'Image T&eacute;l&eacute;charg&eacute;e');
define('_MI_SPOTLIGHT_IMGHEIGHT', 'Hauteur Maximale de l\'Image T&eacute;l&eacute;charg&eacute;e ');
define('_MI_SPOTLIGHT_UPDATETHUMBS', 'Toujours Mettre &agrave; Jour les thumbs?');

define('_MI_SPOTLIGHT_NEWSSHOWTHUMBS', 'Utiliser Thumbnail pour l\'Image des Actualit&eacute;s ?');
define('_MI_SPOTLIGHT_DIMGWIDTH', 'Largeur de l\'Image des Actualit&eacute;s visualis&eacute;e');
define('_MI_SPOTLIGHT_DIMGHEIGHT', 'Hauteur de l\'Image des Actualit&eacute;s visualis&eacute;e');
define('_MI_SPOTLIGHT_RETAINIMGSIZE', 'Utiliser la Taille actuelle de l\'Image de L\'Actualit&eacute; ?');
define('_MI_SPOTLIGHT_PERPAGE', 'Nombre Maximum d\'Actualit&eacute;s &agrave; Afficher ?');
define('_MI_SPOTLIGHT_MORE_LINKS', 'Montrer la Liste des Autres Actualit&eacute;s ?');
define('_MI_SPOTLIGHT_TITLECHARS', 'Longueur du Titre de l\'Actualit&eacute; Mise &agrave; la Une');
define('_MI_SPOTLIGHT_DISP', 'Nombre d\Articles d\'Actualit&eacute;s &agrave; Afficher');
define('_MI_SPOTLIGHT_TOPICS', 'Montrer la Boite de S&eacute;lection des Cat&eacute;gories d\'Actualit&eacute;s ?'); // By Romu R&B.
define('_MI_SPOTLIGHT_TEXTVIEW', 'Montrer le Corp de Texte des Actualit&eacute;s ?');
define('_MI_SPOTLIGHT_INCSTATS', 'Inclure la Ligne de Ministats des Actualit&eacute;s ?');
define('_MI_SPOTLIGHT_HOMETEXTCHARS', 'Longueur des Corps de Texte des Actualit&eacute;s &agrave; la Une');
define('_MI_SPOTLIGHT_HOMETEXTDSC', 'En nombre de lettres. 0 = Texte complet. (Valable que pour les articles Non-Html)');
define('_MI_SPOTLIGHT_CHOOSETEMPLATE', 'Choisir le Gabarit &agrave; Deux Colonnes ?');
define('_MI_SPOTLIGHT_CHOOSETEMPLATEDESC', 'Un Gabarit de forme empil&eacute;e sera utilis&eacute; si NON est s&eacute;lectionn&eacute;');
define('_MI_SPOTLIGHT_ORDER', 'Ordre de Visualisation des Articles des Actualit&eacute;s');
define('_MI_SPOTLIGHT_QUALITY', 'Qualit&eacute; d\'Image des Actualit&eacute;s');
define('_MI_SPOTLIGHT_STOPSHOUTING', 'Sans Tronquage de Titres');
define('_MI_SPOTLIGHT_REMIMGMAIN', 'D&eacute;placer les images des principaux nouveaux articles Spotlight?');
define('_MI_SPOTLIGHT_REMIMGTEAS', 'D&eacute;placer les images du News Teasers?');

/*define('_MI_SPOTLIGHT_XFSSHOWTHUMBS','Utiliser Thumbnail pour l\'Image des XF-Section ?');
define('_MI_SPOTLIGHT_XFDIMGWIDTH','Largeur de l\'Image de la XF-Section visualis&eacute;e');
define('_MI_SPOTLIGHT_XFDIMGHEIGHT','Hauteur de l\'Image de la XF-Section visualis&eacute;e');
define('_MI_SPOTLIGHT_XFRETAINIMGSIZE','Utiliser la Taille actuelle de l\'Image de la XF-Section ?');
define('_MI_SPOTLIGHT_XFPERPAGE', 'Nombre Maximum d\'Articles de XF-Section &agrave; Afficher ?');
define('_MI_SPOTLIGHT_XFMORE_LINKS','Montrer la Liste des Autres XF-Section ?');
define('_MI_SPOTLIGHT_XFTITLECHARS','Longueur du Titre de l\'Article de la XF-Section Mise &agrave; la Une');
define('_MI_SPOTLIGHT_XFDISP','Nombre d\'Articles de XF-Section &agrave; Afficher');
define('_MI_SPOTLIGHT_XFTOPICS','Montrer la Boite de S&eacute;lection des Cat&eacute;gories des XF-Section ?'); // By Romu R&B.
define('_MI_SPOTLIGHT_XFTEXTVIEW', 'Montrer le Corp de Texte des Articles XF-Section ?');
define('_MI_SPOTLIGHT_XFINCSTATS','Inclure la Ligne de Ministats des XF-Section ?');
define('_MI_SPOTLIGHT_XFHOMETEXTCHARS', 'Longueur des Corps de Texte des XF-Section Mis &agrave; la Une');
define('_MI_SPOTLIGHT_XFCHOOSETEMPLATE','Choisir le Gabarit XF-Section &agrave; Deux Colonnes ?');
define('_MI_SPOTLIGHT_XFCHOOSETEMPLATEDESC','Un Gabarit de forme empil&eacute;e sera utilis&eacute; si NON est s&eacute;lectionn&eacute;');
define('_MI_SPOTLIGHT_XFORDER','Ordre de Visualisation des Articles des XF-Section');
define('_MI_SPOTLIGHT_XFQUALITY','Qualit&eacute; d\'Image des XF-Section');*/

define('_MI_SPOTLIGHT_WFSSHOWTHUMBS', 'Utiliser Thumbnail pour l\'Image des WF-Section?');
define('_MI_SPOTLIGHT_WFDIMGWIDTH', 'Largeur de l\'Image de la WF-Section visualis&eacute;e');
define('_MI_SPOTLIGHT_WFDIMGHEIGHT', 'Hauteur de l\'Image de la WF-Section visualis&eacute;e');
define('_MI_SPOTLIGHT_WFRETAINIMGSIZE', 'Utiliser la Taille actuelle de l\'Image de la WF-Section?');
define('_MI_SPOTLIGHT_WFPERPAGE', 'Nombre Maximum d\'Articles de WF-Section &agrave; Afficher ?');
define('_MI_SPOTLIGHT_WFMORE_LINKS', 'Montrer la Liste des Autres WF-Section ?');
define('_MI_SPOTLIGHT_WFTITLECHARS', 'Longueur du Titre de l\'Article de la WF-Section Mise &agrave; la Une');
define('_MI_SPOTLIGHT_WFDISP', 'Nombre d\'Articles de WF-Section &agrave; Afficher');
define('_MI_SPOTLIGHT_WFTOPICS', 'Montrer la Boite de S&eacute;lection des Cat&eacute;gories des WF-Section ?'); // By Romu R&B.
define('_MI_SPOTLIGHT_WFTEXTVIEW', 'Montrer le Corp de Texte des Articles WF-Section ?');
define('_MI_SPOTLIGHT_WFINCSTATS', 'Inclure la Ligne de Ministats des WF-Section ?');
define('_MI_SPOTLIGHT_WFHOMETEXTCHARS', 'Longueur des Corps de Texte des WF-Section Mis &agrave; la Une');
define('_MI_SPOTLIGHT_WFHOMETEXTDSC', 'En nombre de lettres. 0 = Texte complet. (Valable que pour les articles Non-Html)');
define('_MI_SPOTLIGHT_WFCHOOSETEMPLATE', 'Choisir le Gabarit WF-Section &agrave; Deux Colonnes?');
define('_MI_SPOTLIGHT_WFCHOOSETEMPLATEDESC', 'Un Gabarit de forme empil&eacute;e sera utilis&eacute; si NON est s&eacute;lectionn&eacute;');
define('_MI_SPOTLIGHT_WFORDER', 'Ordre de Visualisation des Articles des WF-Section');
define('_MI_SPOTLIGHT_WFQUALITY', 'Qualit&eacute; d\'Image des WF-Section');
define('_MI_SPOTLIGHT_WFREMIMGMAIN', 'D&eacute;placer les images du principale article WF-Section?');
define('_MI_SPOTLIGHT_WFREMIMGTEAS', 'D&eacute;placer les images du WF-Section Article Teasers?');
