<?php

/*
 * This file is part of the Fast Diff library.
 *
 * (c) Webstronauts <contact@webstronauts.co>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Draft;

use PhpSpec\ObjectBehavior;

/**
 * @author Robin van der Vleuten <robin@webstronauts.co>
 */
class DraftSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Draft\Draft');
    }
}
