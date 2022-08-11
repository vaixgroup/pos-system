<?php

namespace App\View\Components\Forms\Traits;

trait Enumable
{
    /**
     * @param $list
     *
     * @return array|mixed
     */
    protected function formatList($list)
    {
        if (is_array($list)) {
            return $list;
        }

        if (enum_exists($list)) {
            $result = [];
            foreach ($list::cases() as $item) {
                $result[$item->value] = $item->label();
            }

            return $result;
        }

        return $list;
    }

    /**
     * @param $var
     *
     * @return mixed
     */
    protected function getValue($var)
    {
        if ($var instanceof \UnitEnum) {
            return $var->value;
        }

        return $var;
    }
}
