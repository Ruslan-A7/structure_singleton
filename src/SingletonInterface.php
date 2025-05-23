<?php

namespace RA7\Framework\Structure\Singleton;

/**
 * Інтерфейс сінглтону - визначає функціонал Singleton для класу.
 * Додає методи для створення та отримання єдиного екземпляру об'єкта відповідного класу в межах всього виконання програми.
 *
 * @author Ruslan_A7 (RA7) <https://ra7.iuid.cc>
 * Код може містити деякі частини, що були створені за допомогою ChatGPT.
 * @license RA7 Open Free License
 * @github <https://github.com/Ruslan-A7>
 */
interface SingletonInterface {

    /** Отримати екземпляр (Singleton) цього класу (створивши його за відсутності). */
    public static function instance(... $args): object;

    /**
     * Створити єдиний екземпляр (Singleton) цього класу.
     *
     * @throws SingletonErrorException при спробі повторного створення
     */
    public static function setInstance(... $args): void;

    /**
     * Отримати вже існуючий екземпляр цього класу.
     *
     * @template Type
     * @param class-string<Type> $returnType
     * це не обов'язковий параметр, що призначений **ВИКЛЮЧНО** для надання підказок від IDE там де це потрібно
     * і жодним чином не впливає на щось інше
     * @return Type
     */
    public static function getInstance(string $returnType = ''): object;

}