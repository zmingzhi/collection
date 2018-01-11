<?php
if ( ! function_exists('collect')) {
    /**
     * 集合
     *
     * @param $data
     *
     * @return mixed
     */
    function collect(array $data)
    {
        return (new \zongphp\collection\Collection())->make($data);
    }
}
