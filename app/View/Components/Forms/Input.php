<?php

namespace App\View\Components\Forms;

use App\View\Components\Forms\Traits\InitPlugin;

class Input extends BaseComponent
{
    use InitPlugin;

    /**
     * @var string
     */
    public $name;

    /**
     * Input type: text, email, password...
     *
     * @var string
     */
    public $type;

    /**
     * Default value
     *
     * @var string
     */
    public $value;

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
        $type = 'text',
        $value = null,
        $options = []
    ) {
        $this->name    = $name;
        $this->type    = $type;
        $this->value   = $value;
        $this->options = $options;
    }
}
