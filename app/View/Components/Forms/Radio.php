<?php

namespace App\View\Components\Forms;

use App\View\Components\Forms\Traits\Enumable;

class Radio extends BaseComponent
{
    use Enumable;

    /**
     * Name of radio input
     *
     * @var string
     */
    public $name;

    /**
     * List checkbox
     *
     * @var string['value' => 'label']
     */
    public $list;

    /**
     * Default checked value
     *
     * @var mixed
     */
    public $checked;

    /**
     * Need validate
     *
     * @var boolean
     */
    public $required;

    /**
     * @var array[]
     */
    public $options;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $name,
        $list = [],
        $checked = null,
    ) {
        $this->name = $name;
        $this->list     = $this->formatList($list);
        $this->checked  = $this->getValue($checked);
    }

    /**
     * @return bool
     */
    public function isInline()
    {
        return $this->attributes->has('inline') && $this->attributes->get('inline', false);
    }
}
