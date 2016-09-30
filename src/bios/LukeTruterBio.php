<?php

namespace mostertb\PhpJhbOpenBios\bios;


class LukeTruterBio extends AbstractBio
{

    /**
     * Provides the full name of the person that the bio is about
     *
     * @return string
     */
    public function getName()
    {
        return 'Luke Truter';
    }

    /**
     * Provides a paragraph of test about the person that the bio is about
     *
     * @return string
     */
    public function getDescription()
    {
        return "Speed, weed, nicotine, alcohol & birth control. Life's a bitch and then you die, so f**k the world and let's get high.";
    }

    /**
     * Should return a publicly accessible URL to an image of the person that the bio is about.
     *
     * @return null|string
     */
    public function getProfileImageURL()
    {
        return 'goo.gl/8klzIi';
    }

}