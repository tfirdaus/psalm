<?php
namespace Psalm\Type\Atomic;

/**
 * Denotes the `empty` type, used to describe a type corresponding to no value whatsoever.
 * Empty arrays `[]` have the type `array<empty, empty>`.
 */
class TEmpty extends Scalar
{
    public function __toString(): string
    {
        return 'empty';
    }

    public function getKey(bool $include_extra = true): string
    {
        return 'empty';
    }

    /**
     * @param  array<string> $aliased_classes
     */
    public function toPhpString(
        ?string $namespace,
        array $aliased_classes,
        ?string $this_class,
        int $php_major_version,
        int $php_minor_version
    ): ?string {
        return null;
    }
}
