<?php

namespace Koma136\MyTarget\Mapper\Exception;

use Koma136\MyTarget\Exception\MyTargetException;

class ContextAwareException extends \LogicException
    implements MyTargetException
{
    public function __construct($inClass, $inField, \Exception $previous)
    {
        $message = sprintf("%s::%s - %s", $inClass, $inField, $previous->getMessage());

        parent::__construct($message, 0, $previous);
    }
}
