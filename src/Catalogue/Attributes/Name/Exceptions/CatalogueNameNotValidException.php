<?php

namespace Railken\LaraOre\Catalogue\Attributes\Name\Exceptions;

use Railken\LaraOre\Catalogue\Exceptions\CatalogueAttributeException;

class CatalogueNameNotValidException extends CatalogueAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'name';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'CATALOGUE_NAME_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}
