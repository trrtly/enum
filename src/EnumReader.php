<?php

declare(strict_types=1);
/**
 * This file is part of the qlantech/enum.
 *
 * (c) qlantech <guanfang@changdou.vip>
 * This source file is subject to the license under the project that is bundled.
 */
namespace Qltech\Enum;

use ReflectionClassConstant;

class EnumReader
{
    public function getAnnotations(array $classConstants)
    {
        $result = [];
        /** @var ReflectionClassConstant $classConstant */
        foreach ($classConstants as $classConstant) {
            $code = $classConstant->getValue();
            $docComment = $classConstant->getDocComment();
            // Not support float and bool, because it will be convert to int.
            if ($docComment && (is_int($code) || is_string($code))) {
                $result[$code] = $this->parse($docComment);
            }
        }

        return [array_keys($result), $result];
    }

    protected function parse(string $doc)
    {
        if (preg_match('/\\@(Name)\\(\\"(.+)\\"\\)/U', $doc, $result)) {
            if (isset($result[2])) {
                return $result[2];
            }
        }

        return null;
    }
}
