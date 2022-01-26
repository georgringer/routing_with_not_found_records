<?php
declare(strict_types=1);

namespace GeorgRinger\RoutingWithNotFoundRecords\Routing\Aspect;

use TYPO3\CMS\Core\Routing\Aspect\PersistedAliasMapper;

class PersistedAliasMapperWithNotFoundRecords extends PersistedAliasMapper
{

    /**
     * {@inheritdoc}
     */
    public function resolve(string $value): ?string
    {
        $value = parent::resolve($value);

        return is_string($value) ? $value : '0';
    }
}
