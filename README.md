# Qlantech Enum

## About

[qlantech/enum](https://github.com/qlantech/enum) 组件实现了 [Hyperf](https://github.com/hyperf/hyperf) 框架内的 PHP 枚举类型。

## Installation

```
composer require qlantech/enum
```

## Usage

Usage:
```php
use Qltech\AbstractEnum;
use Qltech\Enum;

/**
 * @Enum
 */
class OrderStatus extends AbstractEnum
{
    /**
     * @Name("未知")
     */
    const UNKNOWN = 0;

    /**
     * @Name("申请中")
     */
    const APPLY = 1;

    /**
     * @Name("已到账")
     */
    const ARRIVED = 2;

    /**
     * @Name("已兑换")
     */
    const EXCHANGED = 3;
}
```
