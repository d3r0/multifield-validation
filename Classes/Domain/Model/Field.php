<?php

namespace BoyensOnline\MultifieldValidation\Domain\Model;

/**
 * Class Field
 * @package BoyensOnline\MultifieldValidation\Domain\Model
 */
class Field extends \In2code\Powermail\Domain\Model\Field
{
    /**
     * Groupname used for multi-field validation
     *
     * @var string $multiGroupname
     */
    protected $multiGroupname;

    /**
     * @param string $groupname
     * @return void
     */
    public function setMultiGroupname($groupname)
    {
        $this->multiGroupname = $groupname;
    }

    /**
     * @return string
     */
    public function getMultiGroupname()
    {
        return $this->multiGroupname;
    }
}
