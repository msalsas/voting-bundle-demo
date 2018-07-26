<?php

/*
 * This file is part of the MsalsasVotingBundle package.
 *
 * (c) Manolo Salsas
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Msalsas\VotingBundle\Tests\Mock;


class ReferenceClicksMock
{
    protected $clicks = 2;

    public function getReference()
    {
        return 1;
    }

    public function getClicks()
    {
        return 2;
    }
}