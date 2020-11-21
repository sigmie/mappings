<?php

declare(strict_types=1);


namespace Sigmie\Mapping;

use Doctrine\Common\Annotations\Annotation;
use Sigmie\Contract\Type as TypeInterface;


abstract class Type implements TypeInterface
{
    /**
     * Default parameters for all types
     *
     * @return array
     */
    public function parameters(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    abstract public function field(): string;
}
