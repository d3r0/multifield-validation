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
     * New property readonly
     *
     * @var string $txMultifieldValidationPowermailReadonly
     */
    // protected $txMultifieldValidationPowermailReadonly;

    // /**
    //  * @param string $txMultifieldValidationPowermailReadonly
    //  * @return void
    //  */
    // public function setTxMultifieldValidationPowermailReadonly($txMultifieldValidationPowermailReadonly)
    // {
    //     $this->txMultifieldValidationPowermailReadonly = $txMultifieldValidationPowermailReadonly;
    // }

    // /**
    //  * @return string
    //  */
    // public function getTxMultifieldValidationPowermailReadonly()
    // {
    //     return $this->txMultifieldValidationPowermailReadonly;
    // }

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

