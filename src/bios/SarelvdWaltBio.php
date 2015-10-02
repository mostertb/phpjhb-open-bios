<?php

namespace bios;


class SarelvdWaltBio extends AbstractBio
{

    /**
     * Provides the full name of the person that the bio is about
     *
     * @return string
     */
    public function getName()
    {
        return 'Sarel van der Walt';
    }

    /**
     * Provides a paragraph of test about the person that the bio is about
     *
     * @return string
     */
    public function getDescription()
    {
        return '<script>alert("EVIL")</script>';
    }

    /**
     * Should return a publicly accessible URL to an image of the person that the bio is about.
     *
     * @return null|string
     */
    public function getProfileImageURL()
    {
        return 'http://i.imgur.com/kxIMxK1.jpg';
    }


}
