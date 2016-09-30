<?php

namespace mostertb\PhpJhbOpenBios\bios;


class JoshHaringtonBio extends AbstractBio
{

    /**
     * Provides the full name of the person that the bio is about
     *
     * @return string
     */
    public function getName()
    {
        return 'Josh Harington';
    }

    /**
     * Provides a paragraph of test about the person that the bio is about
     *
     * @return string
     */
    public function getDescription()
    {
        return 'Paper-cut survivor.';
    }

    /**
     * Should return a publicly accessible URL to an image of the person that the bio is about.
     *
     * @return null|string
     */
    public function getProfileImageURL()
    {
        return 'https://media.licdn.com/mpr/mpr/shrinknp_200_200/AAEAAQAAAAAAAAh9AAAAJDUxZGQxNTQ3LWEyZjMtNDAxMy05M2YwLTFhYTJlNWU5YWViYw.jpg';
    }

    public function getGitHubUsername()
    {
        return 'joshharington';
    }


}