<?php
namespace mostertb\PhpJhbOpenBios;

use mostertb\PhpJhbOpenBios\bios\AbstractBio;
use mostertb\PhpJhbOpenBios\bios\BradMostertBio;
use mostertb\PhpJhbOpenBios\bios\JohnathanDellBio;
use mostertb\PhpJhbOpenBios\bios\LeePelserBio;
use mostertb\PhpJhbOpenBios\bios\RoscoevanWykBio;
use mostertb\PhpJhbOpenBios\bios\SacheenDhanjieBio;
use mostertb\PhpJhbOpenBios\bios\SarelvdWaltBio;

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
            new BradMostertBio(),
            new JohnathanDellBio(),
            new SarelvdWaltBio(),
            new SacheenDhanjieBio(),
            new RoscoevanWykBio(),
            new LeePelserBio(),
        );
    }

    /**
     * @return AbstractBio[]
     */
    public function getBios()
    {
        return $this->bios;
    }
}
