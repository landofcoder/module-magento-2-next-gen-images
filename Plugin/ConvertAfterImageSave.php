<?php declare(strict_types=1);

namespace Lof\NextGenImages\Plugin;

use Magento\Framework\Image;
use Lof\NextGenImages\Config\Config;
use Lof\NextGenImages\Convertor\ConvertorListing;
use Lof\NextGenImages\Exception\ConvertorException;
use Lof\NextGenImages\Logger\Debugger;

/**
 * Class ConvertAfterImageSave
 * @package Lof\NextGenImages\Plugin
 */
class ConvertAfterImageSave
{
    /**
     * @var ConvertorListing
     */
    private $convertorListing;
    /**
     * @var Debugger
     */
    private $debugger;
    /**
     * @var Config
     */
    private $config;

    /**
     * ConvertAfterImageSave constructor.
     * @param ConvertorListing $convertorListing
     * @param Debugger $debugger
     * @param Config $config
     */
    public function __construct(
        ConvertorListing $convertorListing,
        Debugger $debugger,
        Config $config
    ) {
        $this->convertorListing = $convertorListing;
        $this->debugger = $debugger;
        $this->config = $config;
    }

    /**
     * @param Image $subject
     * @param $return
     * @param null $destination
     * @param null $newFileName
     * @return void
     */
    public function afterSave(Image $subject, $return, $destination = null, $newFileName = null)
    {
        if (!$this->config->convertImagesOnSave()) {
            return;
        }

        foreach ($this->convertorListing->getConvertors() as $convertor) {
            try {
                $convertor->convert((string)$destination);
            } catch (ConvertorException $e) {
                $this->debugger->debug($e->getMessage());
            }
        }
    }
}
