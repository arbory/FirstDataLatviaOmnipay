<?php

/**
 * @see https://wiki.php.net/rfc/scalar_type_hints_v5
 */
declare(strict_types=1);

namespace Omnipay\FirstDataLatvia\Responses;

/**
 * Class CompleteResponse
 * @package Omnipay\FirstDataLatvia\Responses
 */
class CompleteResponse extends AbstractResponse
{
    /**
     * @return string|null
     */
    public function getTransactionReference(): ?string
    {
        return $this->request->getTransactionReference();
    }
}
