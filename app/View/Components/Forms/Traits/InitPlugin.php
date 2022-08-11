<?php

namespace App\View\Components\Forms\Traits;

trait InitPlugin
{
    /**
     * Init plugins from attribute setting
     *
     * @return string
     */
    public function plugins()
    {
        $acceptedPlugins = ['select2', 'datepicker'];

        $result = [];

        foreach ($acceptedPlugins as $plugin) {
            if ($this->attributes->has($plugin)) {
                $result[] = 'data-init-plugin=' . $plugin;
            }
        }

        if (empty($result)) {
            return null;
        }

        return implode(' ', $result);
    }
}
