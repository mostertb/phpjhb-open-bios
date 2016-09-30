<?php

namespace mostertb\PhpJhbOpenBios\bios;


class ColinODellBio extends AbstractBio
{

    /**
     * Provides the full name of the person that the bio is about
     *
     * @return string
     */
    public function getName()
    {
        return 'Colin O\'Dell';
    }

    /**
     * Provides a paragraph of test about the person that the bio is about
     *
     * @return string
     */
    public function getDescription()
    {
        return 'Lead Web Developer at @UnleashTech. Author of league/commonmark. Conference speaker. Arduino enthusiast.';
    }

    /**
     * Should return a publicly accessible URL to an image of the person that the bio is about.
     *
     * @return null|string
     */
    public function getProfileImageURL()
    {
        return 'https://s.gravatar.com/avatar/c5df860733e98237967916ca7eed2ae1?s=300';
    }

    public function getGitHubUsername()
    {
        return 'colinodell';
    }

    public function getMaintainedProjects()
    {
        return array(
          'league/commonmark' => 'https://github.com/thephpleague/commonmark',
          'league/html-to-markdown' => 'https://github.com/thephpleague/html-to-markdown',
          'Omnipay Bundle' => 'https://github.com/colinodell/omnipay-bundle',
          'gulp-eol-enforce' => 'https://github.com/colinodell/gulp-eol-enforce',
          'adafruit-serial-rgb-lcd' => 'https://github.com/colinodell/adafruit-serial-rgb-lcd',
        );
    }

}
