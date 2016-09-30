<?php

namespace mostertb\PhpJhbOpenBios\bios;


class JohnathanDellBio extends AbstractBio
{

    /**
     * Provides the full name of the person that the bio is about
     *
     * @return string
     */
    public function getName()
    {
        return 'Johnathan Dell';
    }

    /**
     * Provides a paragraph of test about the person that the bio is about
     *
     * @return string
     */
    public function getDescription()
    {
        return 'Proponent of design philosophies and good development practises.';
    }

    /**
     * @return string
     */
    public function getProfileImageURL()
    {
        return 'https://cdn.afrihost.com/images/meet_the_team_new/dev_johnathan_d.jpg';
    }

    /**
     * @return string
     */
    public function getGitHubUsername()
    {
        return 'johnathanmdell';
    }

    /**
     * @return array
     */
    public function getMaintainedProjects()
    {
        return array(
            'JohnathanMDell\Identity' => 'https://github.com/johnathanmdell/identity/'
        );
    }
}
