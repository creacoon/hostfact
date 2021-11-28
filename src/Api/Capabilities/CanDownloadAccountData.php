<?php declare(strict_types=1);

namespace Hyperized\Hostfact\Api\Capabilities;

trait CanDownloadAccountData
{
    /**
     * @param  array<string, mixed> $input
     * @return array<string, mixed>
     */
    public function downloadAccountData(array $input): array
    {
        return $this
            ->sendRequest(
                self::$name,
                'downloadaccountdata',
                $input
            );
    }
}
