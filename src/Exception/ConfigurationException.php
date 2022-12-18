<?php

namespace Aesislabs\Component\XmlRpc\Exception;

class ConfigurationException extends \LogicException implements ExceptionInterface
{
    public static function missingPhpXmlRpcExtension(): self
    {
        return new self('The PHP extension "php-xmlrpc" must be enabled');
    }
}
