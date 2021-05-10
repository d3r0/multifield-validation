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
     * New property text
     *
     * @var string $txMultifieldValidationPowermailText
     */
    protected $groupname;


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

    /**
     * @param string $groupname
     * @return void
     */
    public function setGroupname($groupname)
    {
        $this->groupname = $groupname;
    }

    /**
     * @return string
     */
    public function getGroupname()
    {
        return $this->groupname;
    }
}

