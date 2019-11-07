<?php

namespace Exia\Standards\PhpCsFixer;

use PhpCsFixer\Finder as BaseFinder;

class Finder extends BaseFinder
{
    /**
     * Finder Constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->name('*.inc');
    }
}
