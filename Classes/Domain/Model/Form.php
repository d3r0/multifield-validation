<?php
namespace BoyensOnline\MultifieldValidation\Domain\Model;

/**
* Class Form
* @package BoyensOnline\MultifieldValidation\Domain\Model
*/
class Form extends \In2code\Powermail\Domain\Model\Form
{

    /**
     * pages
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BoyensOnline\MultifieldValidation\Domain\Model\Page>
     */
    protected $pages;

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $pages
     * @return void
     */
    public function setPages($pages)
    {
        $this->pages = $pages;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getPages()
    {
        return $this->pages;
    }
}
