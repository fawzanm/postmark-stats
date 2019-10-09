<?php

namespace Fawzanm\PostmarkStats;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Fawzanm\PostmarkStats\Skeleton\SkeletonClass
 */
class PostmarkStatsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'postmark-stats';
    }
}
