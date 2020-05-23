<?php

namespace Quiss\ActionField;

use Laravel\Nova\Fields\Field;

class ActionField extends Field
{
    public function __construct()
    {
        parent::__construct(null, null, null);

        $this->onlyOnIndex();
    }


    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'action-field';

    public function actions($actions, $resource) {
        return $this->withMeta([
            'actions' => $actions(),
            'resource' => $resource,
        ]);
    }
}
