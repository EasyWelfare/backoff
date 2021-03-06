<?php
namespace STS\Backoff\Strategies;

/**
 * Class ConstantStrategy
 * @package STS\Backoff\Strategies
 */
class ConstantStrategy extends AbstractStrategy
{
    /**
     * @param $attempt
     *
     * @return int
     */
    public function getWaitTime($attempt)
    {
        return $this->base;
    }
}
