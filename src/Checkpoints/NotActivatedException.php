<?php

/*
 * Part of the Sentinel package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Sentinel
 * @version    3.0.0
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011-2019, Cartalyst LLC
 * @link       https://cartalyst.com
 */

namespace Cartalyst\Sentinel\Checkpoints;

use RuntimeException;
use Cartalyst\Sentinel\Users\UserInterface;

class NotActivatedException extends RuntimeException
{
    /**
     * The user which caused the exception.
     *
     * @var \Cartalyst\Sentinel\Users\UserInterface
     */
    protected $user;

    /**
     * Returns the user.
     *
     * @return \Cartalyst\Sentinel\Users\UserInterface
     */
    public function getUser(): UserInterface
    {
        return $this->user;
    }

    /**
     * Sets the user associated with Sentinel (does not log in).
     *
     * @param  \Cartalyst\Sentinel\Users\UserInterface
     *
     * @return void
     */
    public function setUser(UserInterface $user): void
    {
        $this->user = $user;
    }
}
