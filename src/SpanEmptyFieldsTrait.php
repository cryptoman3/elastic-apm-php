<?php

namespace Anik\ElasticApm;

trait SpanEmptyFieldsTrait
{
    public function getAction () : string {
        return '';
    }

    public function getLabelKey () : string {
        return '';
    }

    /**
     * @return string|bool|int|float
     */
    public function getLabelValue () {
        return '';
    }
}