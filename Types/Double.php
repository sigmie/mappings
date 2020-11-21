<?php

declare(strict_types=1);


namespace Sigmie\Mapping\Types;

use Sigmie\Mapping\Type;

/**
 * @Annotation
 */
class Double extends Type
{
    public function field(): string
    {
        return 'double';
    }
}
