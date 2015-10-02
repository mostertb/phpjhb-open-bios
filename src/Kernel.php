<?php


use bios\AbstractBio;

class Kernel
{

    /**
     * @var AbstractBio[]
     */
    private $bios;

    /**
     * Kernel constructor.
     */
    public function __construct()
    {
        $this->bios = array(
            new \bios\BradMostertBio(),
            new \bios\SarelvdWaltBio()
        );
    }

    /**
     * @return \bios\AbstractBio[]
     */
    public function getBios()
    {
        return $this->bios;
    }
}
