<?php

declare(strict_types = 1);

namespace Amirhf\LaravelStatusCode\Exceptions;

use Error;

final class UndefinedCaseError extends Error
{
    /**
     * @param string $enum
     * @param string $case
     */
    public function __construct(string $enum, string $case)
    {
        parent::__construct(
            message: "Undefined constant $enum::$case.",
        );
    }
}