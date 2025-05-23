<?php

namespace RA7\Framework\Structure\Singleton;

/**
 * Трейт сінглтону - реалізує функціонал Singleton для класу, що використовує цей трейт.
 * Додає методи для створення та отримання єдиного екземпляру об'єкта відповідного класу в межах всього виконання програми.
 *
 * @author Ruslan_A7 (RA7) <https://ra7.iuid.cc>
 * Код може містити деякі частини, що були створені за допомогою ChatGPT.
 * @license RA7 Open Free License
 * @github <https://github.com/Ruslan-A7>
 */
trait SingletonTrait {

    /** Екземпляр цього класу */
    private static ?self $instance = null;

    /** Отримати екземпляр (Singleton) цього класу (створивши його за відсутності). */
    public static function instance(... $args): self {
        if (self::$instance === null) {
            self::$instance = new self(... $args);
        }
        return self::$instance;
    }

    /**
     * Створити єдиний екземпляр (Singleton) цього класу.
     *
     * @throws SingletonErrorException при спробі повторного створення
     */
    public static function setInstance(... $args): void {
        if (self::$instance === null) {
            self::$instance = new self(... $args);
        } else {
            $message = self::class;
            throw new SingletonErrorException("The class {$message} is defined as Singleton and has already been instantiated. Re-creation is not allowed!");
        }
    }

    /**
     * Отримати вже існуючий екземпляр цього класу.
     *
     * @template Type
     * @param class-string<Type> $returnType
     * це не обов'язковий параметр, що призначений **ВИКЛЮЧНО** для надання підказок від IDE там де це потрібно
     * і жодним чином не впливає на щось інше
     * @return Type
     */
    public static function getInstance(string $returnType = ''): self {
        return self::$instance;
    }

}