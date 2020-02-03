<?php

namespace Pdir\SocialFeedBundle\Dca;

use Contao\CoreBundle\Framework\ContaoFramework;

class tl_social_feed
{
    /**
     * On generate the label.
     *
     * @param array $row
     *
     * @return string
     */
    public function onGenerateLabel(array $row): string
    {
        if($row['pdir_sf_fb_account'] != "") {
            $account = $row['pdir_sf_fb_account'];
        } else if($row['instagram_account'] != "") {
            $account = $row['instagram_account'];
        } else if($row['twitter_account'] != "") {
            $account = $row['twitter_account'];
        } else if($row['search'] != "") {
            $account = $row['search'];
        } else {
            $account = "Kein Account/Suchbegriff angegeben";
        }

        if($row['socialFeedType'] != "") {
            $type = $row['socialFeedType'];
        } else {
            $type = "Kein Typ angegeben";
        }

        return sprintf(
            '%s &rarr; %s',
            $type,
            $account
        );
    }
}