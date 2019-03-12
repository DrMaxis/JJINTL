<?php

namespace App\VoyagerWidgets;

use Arrilot\Widgets\AbstractWidget;

abstract class BaseDimmer extends AbstractWidget
{
    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return true;
    }
}
