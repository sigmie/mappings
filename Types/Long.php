<?php

declare(strict_types=1);


namespace Sigmie\Mapping\Types;

use Sigmie\Mapping\Type;

/**
 * @Annotation
 */
class Long extends Type
{
    /**
     * Native field name
     *
     * @return string
     */
    public function field(): string
    {
        return 'long';
    }
}
