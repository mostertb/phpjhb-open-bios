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
     * @return string
     */
    public function getSlug()
    {
         return str_replace(' ','', strtolower($this->getName()));
    }
}