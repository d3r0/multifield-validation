<?php
namespace BoyensOnline\MultifieldValidation\Domain\Model;

/**
* Class Field
* @package BoyensOnline\MultifieldValidation\Domain\Model
*/
class Field extends \In2code\Powermail\Domain\Model\Field
{

    /**
     * New property text
     *
     * @var string $txMultifieldValidationPowermailText
     */
    protected $txMultifieldValidationPowermailText;

    /**
     * @param string $txMultifieldValidationPowermailText
     * @return void
     */
    public function setTxMultifieldValidationPowermailText($txMultifieldValidationPowermailText)
    {
        $this->txMultifieldValidationPowermailText = $txMultifieldValidationPowermailText;
    }

    /**
     * @return string
     */
    public function getTxMultifieldValidationPowermailText()
    {
        return $this->txMultifieldValidationPowermailText;
    }
}

