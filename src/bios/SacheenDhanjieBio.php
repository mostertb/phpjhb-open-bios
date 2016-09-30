<?php

namespace bios;


class SacheenDhanjieBio extends AbstractBio
{

    /**
     * Provides the full name of the person that the bio is about
     *
     * @return string
     */
    public function getName()
    {
        return 'Sacheen Dhanjie';
    }

    /**
     * Provides a paragraph of test about the person that the bio is about
     *
     * @return string
     */
    public function getDescription()
    {
        return 'The Brown Ninja';
    }

    /**
     * Should return a publicly accessible URL to an image of the person that the bio is about.
     *
     * @return null|string
     */
    public function getProfileImageURL()
    {
        return 'https://cdn.afrihost.com/images/meet_the_team_new/dev_Sacheen_D.jpg';
    }


}
