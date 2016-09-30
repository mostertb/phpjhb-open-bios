<?php

namespace mostertb\PhpJhbOpenBios\bios;


class LeePelserBio extends AbstractBio
{

    /**
     * Provides the full name of the person that the bio is about
     *
     * @return string
     */
    public function getName()
    {
        return 'Lee Pelser';
    }

    /**
     * Provides a paragraph of test about the person that the bio is about
     *
     * @return string
     */
    public function getDescription()
    {
        return 'As Johan will say, that guy...';
    }

    /**
     * Should return a publicly accessible URL to an image of the person that the bio is about.
     *
     * @return null|string
     */
    public function getProfileImageURL()
    {
        return 'http://www.bitfarm.co.za/zeroth/avatars/cardboard-box-open-lg.jpg';
    }


}