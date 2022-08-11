<?php

namespace App\View\Components\Forms;

use App\View\Components\Forms\Traits\Enumable;
use App\View\Components\Forms\Traits\InitPlugin;
use Illuminate\Support\HtmlString;

class Select extends BaseComponent
{
    use InitPlugin;
    use Enumable;

    /**
     * @var string
     */
    public $name;

    /**
     * Need validate
     *
     * @var boolean
     */
    public $required;

    /**
     * List options of select. Format: key => text
     *
     * @var array[]
     */
    public $options;

    /**
     * @var string
     */
    public $selected;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $name,
        $options = [],
        $selected = null,
        $prepend = null
    ) {
        $this->name     = $name;
        $this->options  = $this->prepend($this->formatList($options), $prepend);
        $this->selected = $selected;
    }

    /**
     * @return string
     */
    public function placeholder()
    {
        $attributeName = 'placeholder';
        if (!$this->attributes->has($attributeName)) {
            return '';
        }

        if ($this->attributes->has('select2')) {
            $attributeName = 'data-' . $attributeName;
        }

        $value = $this->attributes->get('placeholder');

        return new HtmlString($attributeName . '="' . str_replace('"', '\\"', trim($value)) . '"');
    }

    /**
     * @return string
     */
    public function multiple()
    {
        return $this->attributes->has('multiple') ? 'multiple="true"' : '';
    }

    /**
     * Determine if the given option is the currently selected option.
     *
     * @param string $optionValue
     *
     * @return string
     */
    public function isSelected($optionValue)
    {
        if (
            (is_array($this->selected) && in_array($optionValue, $this->selected))
            || $this->selected == $optionValue
        ) {
            return 'selected="selected"';
        }

        return '';
    }

    /**
     * @return \Illuminate\View\ComponentAttributeBag
     */
    public function dataAttributes()
    {
        return $this->attributes->whereStartsWith('data-');
    }

    /**
     * @param $list
     * @param $prepended
     *
     * @return array
     */
    protected function prepend($list, $prepended)
    {
        if (empty($prepended)) {
            return $list;
        }

        if (is_array($list)) {
            return $prepended + $list;
        }

        if ($list instanceof Arrayable) {
            return $prepended + $list->toArray();
        }

        return $list;
    }
}
