<?php

namespace Wame\IndexToggle;

use Laravel\Nova\Fields\Field;

class IndexToggle extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'index-toggle';


    /**
     * Enable inline editing on detail view.
     */
    public function inlineOnDetail()
    {
        return $this->withMeta(['inlineDetail' => true]);
    }

    /**
     * Enable inline editing on index view.
     */
    public function inlineOnIndex()
    {
        return $this->withMeta(['inlineIndex' => true]);
    }

    public function flash($value)
    {
        return $this->withMeta(['flash' => $value]);
    }

}
