<?php

namespace mostertb\PhpJhbOpenBios\bios;

abstract class AbstractBio
{

    /**
     * Provides the full name of the person that the bio is about
     *
     * @return string
     */
    abstract public function getName();

    /**
     * Provides a paragraph of test about the person that the bio is about
     *
     * @return string
     */
    abstract public function getDescription();

    /**
     * Should return a publicly accessible URL to an image of the person that the bio is about.
     *
     * @return null|string
     */
    public function getProfileImageURL(){
        return null;
    }

    /**
     * Should return the GitHub username of the person the bio is about. This is used to generate links to the person's
     * OpenSource projects
     *
     * @return string
     */
    public function getGitHubUsername()
    {
        return '';
    }

    /**
     * Optional function that should return an array of OpenSource projects maintained by this person. The index should
     * contain the name of the project and the value should be a url to the project's homepage (typically a GitHub page)
     *
     * @return array
     */
    public function getMaintainedProjects()
    {
        return array();
    }

    /**
     * @return string
     */
    public function getSlug()
    {
         return str_replace(' ','', strtolower($this->getName()));
    }
}