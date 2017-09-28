<?php
/**
 * Synchronizer Library
 * Copyright (C) 2015 IceFlame.net
 *
 * Permission to use, copy, modify, and/or distribute this software for
 * any purpose with or without fee is hereby granted, provided that the
 * above copyright notice and this permission notice appear in all copies.
 *
 * @package  FlameCore\Synchronizer
 * @version  0.1-dev
 * @link     http://www.flamecore.org
 * @license  ISC License <http://opensource.org/licenses/ISC>
 */

namespace FlameCore\Synchronizer\Database\Location;

use FlameCore\Synchronizer\SynchronizerSourceInterface;

/**
 * The DatabaseSource interface
 *
 * @author   Christian Neff <christian.neff@gmail.com>
 */
interface DatabaseSourceInterface extends SynchronizerSourceInterface, DatabaseLocationInterface
{
}