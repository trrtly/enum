<?php

declare(strict_types=1);
/**
 * This file is part of the qlantech/enum.
 *
 * (c) qlantech <guanfang@changdou.vip>
 * This source file is subject to the license under the project that is bundled.
 */
namespace Qltech\Enum;

abstract class AbstractEnum
{
    /**
     * 获取 keys.
     * @return array
     */
    public static function keys()
    {
        return EnumCollector::keys(static::class);
    }

    /**
     * 获取 values.
     * @return array
     */
    public static function values()
    {
        return EnumCollector::values(static::class);
    }

    public static function valueOf($key)
    {
        return EnumCollector::valueOf(static::class, $key);
    }
}
