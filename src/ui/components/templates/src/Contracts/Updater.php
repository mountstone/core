<?php

/**
 * Part of the Antares package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    UI\UIComponents
 * @version    0.9.2
 * @author     Antares Team
 * @license    BSD License (3-clause)
 * @copyright  (c) 2017, Antares
 * @link       http://antaresproject.io
 */

namespace Antares\UI\UIComponents\Contracts;

interface Updater
{

    /**
     * Exectues when user trying to view of widget form builder
     * 
     * @param numeric $id
     */
    public function edit($id);

    /**
     * Applying widget update 
     * 
     * @param numeric $id
     */
    public function update($id);
}
