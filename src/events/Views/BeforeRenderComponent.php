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
 * @package    Antares Core
 * @version    0.9.2
 * @author     Antares Team
 * @license    BSD License (3-clause)
 * @copyright  (c) 2017, Antares
 * @link       http://antaresproject.io
 */

namespace Antares\Events\Views;

use Antares\Html\Form\FormBuilder;
use Antares\Foundation\Events\AbstractEvent;

class BeforeRenderComponent extends AbstractEvent
{

    /** @var string */
    protected static $name = 'View: Before render component';

    /** @var string */
    protected static $description = 'Runs before component is rendered';

    /** @var string */
    public $template;

    /** @var string */
    public $componentName;

    /**
     * BeforeRenderComponent constructor
     *
     * @param mixed $template
     * @param mixed $componentName
     */
    public function __construct($template, $componentName)
    {
        $this->template      = $template;
        $this->componentName = $componentName;

        parent::__construct();
    }

}
