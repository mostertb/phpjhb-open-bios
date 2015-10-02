<?php

namespace bios;


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
        return 'Renegade that makes projects like this to mess with the status quo. I like long walks on the beach and '.
            'craft beer.';
    }

    /**
     * Should return a publicly accessible URL to an image of the person that the bio is about.
     *
     * @return null|string
     */
    public function getProfileImageURL()
    {
        return 'http://i.imgur.com/dv78K3h.jpg';
    }


}