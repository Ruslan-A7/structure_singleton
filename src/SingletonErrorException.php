<?php

namespace RA7\Framework\Structure\Singleton;

use RA7\Framework\System\Exception\Exception;
use Throwable;
use RA7\Framework\System\Exception\ExceptionMessage;
use RA7\Framework\System\Exception\ExceptionDetails;
use RA7\Framework\System\Enums\InitiatorsEnum;
use RA7\Framework\System\Exception\ExceptionTypesEnum;

/**
 * Помилка сінглтону.
 * Призначено для помилок пов'язаних з сінглтоном.
 *
 * @author Ruslan_A7 (RA7) <https://ra7.iuid.cc>
 * Код може містити деякі частини, що були створені за допомогою ChatGPT.
 * @license RA7 Open Free License
 * @github <https://github.com/Ruslan-A7>
 */
class SingletonErrorException extends Exception {

    /**
     * Створити помилку сінглтону.
     *
     * @param string $message опис помилки сінглтону
     * @param int $code код винятку
     * @param null|Throwable $previous попередній виняток (використовується для відстеження ланцюжків винятків)
     */
    public function __construct(string $message, int $code = 0, ?Throwable $previous = null) {
        $this->fullMessage = new ExceptionMessage('Singleton Error', $message);
        $this->details = new ExceptionDetails(InitiatorsEnum::Framework, ExceptionTypesEnum::Error);

        parent::__construct($this->fullMessage, $this->details, $code, $previous);
    }

}