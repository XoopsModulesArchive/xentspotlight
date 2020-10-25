<?php
/**
 * $Id: kuht_head_news.php,v 1.4 2005/04/07 15:10:27 m4d3l Exp $
 * Module: Spotlight
 * Version: v2.0
 * Release Date: 12 March 2004
 * Author: Catzwolf
 * Orginal Author: Herko (me at herkocoomans dot net) and
 * 				   Dawilby (willemsen1 at chello dot nl)
 * Licence: GNU
 */
require_once XOOPS_ROOT_PATH . '/modules/xentspotlight/include/functions.php';
require_once XOOPS_ROOT_PATH . '/modules/news/class/class.newsstory.php';

/**
 * b_head_kuht_show_news()
 *
 * @param  $options
 * @return array
 */
function b_head_kuht_show_news($options)
{
    $block = [];

    $i = 0;

    $exit = 0;

    global $xoopsDB, $xoopsConfig, $myts, $xoopsModuleConfig, $xoopsModule, $xoopsUser;

    $myts = MyTextSanitizer::getInstance();

    $moduleHandler = xoops_getHandler('module');

    $xoopsModule = $moduleHandler->getByDirname('xentspotlight');

    $configHandler = xoops_getHandler('config');

    $xoopsModuleConfig = &$configHandler->getConfigsByCat(0, $xoopsModule->getVar('mid'));

    $gpermHandler = xoops_getHandler('groupperm');

    if (is_object($xoopsUser)) {
        $groups = $xoopsUser->getGroups();
    } else {
        $groups = XOOPS_GROUP_ANONYMOUS;
    }

    $fhometext = '';

    $image_align = '';

    $block['title_news'] = _MB_SPOTLIGHT_TITLE_SPOTLIGHT_NEWS;

    $block['lang_by'] = _MB_SPOTLIGHT_BY;

    $block['lang_read'] = _MB_SPOTLIGHT_READ;

    $block['lang_comments'] = _MB_SPOTLIGHT_COMMENTS;

    $block['lang_write'] = _MB_SPOTLIGHT_WRITE;

    /**
     * Main spotlight database information
     */

    $sql = 'SELECT * FROM ' . $xoopsDB->prefix('xentspotlight') . ' WHERE sid = 1';

    $spot_arr = $xoopsDB->fetchArray($xoopsDB->query($sql));

    if (isset($spot_arr['auto']) && 0 == $spot_arr['auto']) {
        // Selects user choosen news

        $article = new NewsStory($spot_arr['item']);
    }  

    if (isset($spot_arr['auto']) && 1 == $spot_arr['auto']) {
        // selects the last addition to news

        $hModule = xoops_getHandler('module');

        $smartModule = $hModule->getByDirname('news');

        $module_id = $smartModule->getVar('mid');

        $story_ids = $gpermHandler->getItemIds('news_view', $groups, $module_id);

        //echo $story_ids[0];

        //  $result2 = $xoopsDB->query("SELECT storyid, title FROM " . $xoopsDB->prefix("stories") . " WHERE storyid IN (".implode(',', $story_ids)." AND published > 0 AND published < " . time() . " AND (expired > " . time() . " OR expired = 0) ORDER BY published DESC", 0, 0);

        //  list($fsid, $ftitle) = $xoopsDB->fetchRow($result2);

        $sql = 'SELECT storyid, title, published FROM ' . $xoopsDB->prefix('stories') . ' WHERE topicid IN (' . implode(',', $story_ids) . ') AND published > 0 AND published < ' . time() . ' AND (expired > ' . time() . ' OR expired = 0) ORDER BY published DESC';

        //  echo $sql;

        //echo "<br>Voici la requete : " . $sql . "<br>";

        $result2 = $xoopsDB->query($sql, 0, 0);

        [$fsid, $ftitle] = $xoopsDB->fetchRow($result2);

        if (isset($fsid) and $fsid > 0) {
            $article = new NewsStory($fsid);
        }
    }

    if (!isset($article->storyid) && $article->storyid > 0) {
        $block['storyid'] = 0;

        $block['newstitle'] = _MB_SPOTLIGHT_NOTSELECT;
    } else {
        // images

        if ($spot_arr['auto_image']) {
            $xt = new XoopsTopic($xoopsDB->prefix('topics'), $article->topicid());

            $block['image'] = $xt->topic_imgurl('S');

            $block['imgpath'] = '/modules/news/images/topics/';
        } else {
            $block['image'] = htmlspecialchars(trim($spot_arr['image']), ENT_QUOTES | ENT_HTML5);

            $block['imgpath'] = htmlspecialchars(trim($xoopsModuleConfig['uploaddir']), ENT_QUOTES | ENT_HTML5);
        }

        if (!empty($block['image'])) {
            $block['imgwidth'] = $xoopsModuleConfig['dmaximgwidth'];

            $block['imgheight'] = $xoopsModuleConfig['dmaximgheight'];

            if ($xoopsModuleConfig['retainimgsize']) {
                $dimention = getimagesize(XOOPS_ROOT_PATH . "/{$block['imgpath']}/{$block['image']}");

                $block['imgwidth'] = $dimention[0];

                $block['imgheight'] = $dimention[1];
            }

            if ($xoopsModuleConfig['newsthumbs']) {
                $block['image'] = spot_createthumb($block['image'], XOOPS_ROOT_PATH, '/' . $block['imgpath'] . '/', 'thumbs/', $xoopsModuleConfig['dmaximgwidth'], $xoopsModuleConfig['dmaximgheight'], $xoopsModuleConfig['imagequality'], $xoopsModuleConfig['updatethumbs']);

                $block['image'] = 'thumbs/' . basename($block['image']);
            }
        }

        $block['imagealign'] = $spot_arr['imagealign'];

        // news title

        $ftitle = $article->title();

        if (mb_strlen($ftitle) >= $xoopsModuleConfig['titlelenght']) {
            $ftitle = xoops_substr($ftitle, 0, $xoopsModuleConfig['titlelenght'], $trimmarker = '...');
        }

        $block['newstitle'] = spot_removeShouting($ftitle);

        // end

        $fhometext = $article->hometext();

        if ($xoopsModuleConfig['remimgmain']) {
            $fhometext = preg_replace("/(\<img)(.*?)(\>)/si", '', $fhometext);
        }

        $block['hometext_news'] = trim($fhometext);

        $block['author'] = XoopsUserUtility::getUnameFromId((int)$article->uid());

        $block['storyid'] = $article->storyid();

        $block['comments'] = $article->comments();
    }

    if ($xoopsModuleConfig['showmoreart']) {
        $block['lang_other_news'] = _MB_SPOTLIGHT_OTHER_NEWSTEXT;

        $news = [];

        $sarray = NewsStory::getAllPublished($xoopsModuleConfig['perpage'], 0, 1);

        $news = '';

        foreach ($sarray as $article) {
            if ($article->storyid() != $block['storyid']) {
                $news['id'] = $article->storyid();

                $title = $article->title();

                if (mb_strlen($title) > $xoopsModuleConfig['textchars']) {
                    $title = xoops_substr($title, 0, $xoopsModuleConfig['titlelenght'], $trimmarker = '...');
                }

                $news['title'] = spot_removeShouting($title);

                $news['hitsordate'] = ('published' == $options[0]) ? formatTimestamp($article->published(), 's') : $article->counter();

                if ($xoopsModuleConfig['showteaser']) {
                    $fhometext = $article->hometext();

                    if ($xoopsModuleConfig['textchars'] > 0) {
                        if (mb_strlen($fhometext) > $xoopsModuleConfig['textchars']) {
                            $fhometext = xoops_substr($fhometext, 0, $xoopsModuleConfig['textchars'], $trimmarker = '...');
                        }
                    }

                    if ($xoopsModuleConfig['remimgmain']) {
                        $fhometext = preg_replace("/(\<img)(.*?)(\>)/si", '', $fhometext);
                    }

                    $news['hometext'] = trim($fhometext);
                } else {
                    $news['hometext'] = '';
                }

                $block['stories'][] = $news;
            }
        }
    }

    if ($xoopsModuleConfig['showtopicbox']) {
        // rb topic select form for news direct topic access

        require_once XOOPS_ROOT_PATH . '/class/xoopstopic.php';

        $xt = new XoopsTopic($xoopsDB->prefix('topics'));

        $jump = XOOPS_URL . '/modules/news/index.php?storytopic=';

        $storytopic = !empty($storytopic) ? (int)$storytopic : 0;

        ob_start();

        $xt->makeTopicSelBox(1, $storytopic, 'storytopic', 'location="' . $jump . '"+this.options[this.selectedIndex].value');

        $block['topicsel'] = ob_get_contents();

        ob_end_clean();
    }

    if ($xoopsModuleConfig['ministats']) {
        $block['lang_ministats'] = '<span style="text-transform: uppercase">' . _MB_SPOTLIGHT_MINISTATS . ':</span>';

        $result = $xoopsDB->query('select sum(counter) FROM ' . $xoopsDB->prefix('stories') . '');

        [$storiesviews] = $xoopsDB->fetchRow($result);

        $result = $xoopsDB->query('SELECT sum(comments) FROM ' . $xoopsDB->prefix('stories') . '');

        [$comment] = $xoopsDB->fetchRow($result);

        $block['ministats'] = _MB_SPOTLIGHT_PUBLISHED . ': <b>' . $article->countPublishedByTopic() . ' :</b> ' . "\n";

        $block['ministats'] .= _MB_SPOTLIGHT_READS . ': <b>' . $storiesviews . '</b> : ' . "\n";

        $block['ministats'] .= _MB_SPOTLIGHT_NEWSCOMMENTS . ': <b>' . $comment . '</b>' . "\n";
    }

    if ($xoopsModuleConfig['templatetype']) {
        $block['select_template'] = 1;
    }

    return $block;
}

function b_head_kuht_edit_news($options)
{
    $form .= _MB_SPOTLIGHT_ORDER . ' <select name="options[0]">' . "\n";

    $form .= '<option value="published"';

    if ('published' == $options[0]) {
        $form .= ' selected="selected"';
    }

    $form .= '>&nbsp;' . _MB_SPOTLIGHT_DATE . '</option>' . "\n";

    $form .= '<option value="counter"';

    if ('counter' == $options[0]) {
        $form .= ' selected="selected"';
    }

    $form .= '>&nbsp;' . _MB_SPOTLIGHT_HITS . '</option>' . "\n";

    $form .= '</select><br>' . "\n";

    return $form;
}
