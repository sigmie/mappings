<?php

declare(strict_types=1);


namespace Sigmie\Mapping\Types;

use Sigmie\Mapping\Type;

/**
 * @Annotation
 */
class Join extends Type
{
    /**
     * Native field name
     *
     * @return string
     */
    public function field(): string
    {
        return 'join';
    }
}
