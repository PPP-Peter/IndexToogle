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
     * Allow inline select to auto-update field value on change on detail view.
     */
    public function enableOneStepOnDetail()
    {
        return $this->withMeta(['detailTwoStepDisabled' => true]);
    }

    /**
     * Allow inline select to auto-update field value on change on detail view.
     */
    public function disableTwoStepOnDetail()
    {
        return $this->enableOneStepOnDetail();
    }

    /**
     * Allow inline select to auto-update field value on change on index view.
     */
    public function enableOneStepOnIndex()
    {
        return $this->withMeta(['indexTwoStepDisabled' => true]);
    }

    /**
     * Allow inline select to auto-update field value on change on index view.
     */
    public function disableTwoStepOnIndex()
    {
        return $this->enableOneStepOnIndex();
    }

    /**
     * Allow inline select to auto-update field value on change on index view.
     */
    public function enableOneStepOnLens()
    {
        return $this->enableOneStepOnIndex();
    }

    /**
     * Allow inline select to auto-update field value on change on index view.
     */
    public function disableTwoStepOnLens()
    {
        return $this->enableOneStepOnIndex();
    }

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

    /**
     * Enable inline editing on index view.
     */
    public function inlineOnLens()
    {
        return $this->inlineOnIndex();
    }
}
