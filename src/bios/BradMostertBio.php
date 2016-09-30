<?php

namespace mostertb\PhpJhbOpenBios\bios;


class BradMostertBio extends AbstractBio
{

    /**
     * Provides the full name of the person that the bio is about
     *
     * @return string
     */
    public function getName()
    {
        return 'Brad Mostert';
    }

    /**
     * Provides a paragraph of test about the person that the bio is about
     *
     * @return string
     */
    public function getDescription()
    {
        return 'Developer at Afrihost. Design Patterns acolyte. Dangerous sysadmin using \'DevOps\' as an excuse. I like '.
            'long walks on the beach and craft beer.';
    }

    /**
     * Should return a publicly accessible URL to an image of the person that the bio is about.
     *
     * @return null|string
     */
    public function getProfileImageURL()
    {
        return 'https://s.gravatar.com/avatar/9ff2a97e7faf3529f1b78f1f737ebca0?s=80';
    }

    public function getGitHubUsername()
    {
        return 'mostertb';
    }

    public function getMaintainedProjects()
    {
        return array(
          'Afrihost/BaseCommandBundle' => 'https://github.com/afrihost/BaseCommandBundle'
        );
    }

}