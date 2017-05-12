<?php

/**
 * Part of the Antares Project package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Antares Core
 * @version    0.9.0
 * @author     Original Orchestral https://github.com/orchestral
 * @author     Antares Team
 * @license    BSD License (3-clause)
 * @copyright  (c) 2017, Antares Project
 * @link       http://antaresproject.io
 */


namespace Antares\Foundation\Processor;

use Antares\Contracts\Presenter;

abstract class Processor
{

    /**
     * Presenter instance.
     *
     * @var object
     */
    protected $presenter;

    /**
     * Validator instance.
     *
     * @var object
     */
    protected $validator;
    
    /**
     * 
     * @param Presenter $presenter
     * @return \Antares\Foundation\Processor\Processor
     */
    public function setPresenter(Presenter $presenter) {
        $this->presenter = $presenter;
        
        return $this;
    }
    
    /**
     * 
     * @return Presenter;
     */
    public function getPresenter() {
        return $this->presenter;
    }

}
