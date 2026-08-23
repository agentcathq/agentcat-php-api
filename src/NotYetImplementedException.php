<?php

declare(strict_types=1);

namespace AgentCat\Api;

use RuntimeException;

/**
 * Thrown by every entry point until the generated client ships.
 */
final class NotYetImplementedException extends RuntimeException
{
}
