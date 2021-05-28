<?php

declare(strict_types=1);
/**
 * This file is part of the qlantech/enum.
 *
 * (c) qlantech <guanfang@changdou.vip>
 * This source file is subject to the license under the project that is bundled.
 */
namespace Qltech\Enum;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
            ],
            'commands' => [
            ],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
        ];
    }
}
