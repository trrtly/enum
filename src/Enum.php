<?php

declare(strict_types=1);
/**
 * This file is part of the qlantech/enum.
 *
 * (c) qlantech <guanfang@changdou.vip>
 * This source file is subject to the license under the project that is bundled.
 */
namespace Qltech\Enum;

use Hyperf\Di\Annotation\AbstractAnnotation;
use ReflectionClass;

/**
 * @Annotation
 * @Target("CLASS")
 */
class Enum extends AbstractAnnotation
{
    public function collectClass(string $className): void
    {
        $reader = new EnumReader();

        $ref = new ReflectionClass($className);
        $classConstants = $ref->getReflectionConstants();
        $data = $reader->getAnnotations($classConstants);

        EnumCollector::set($className, $data);
    }
}
