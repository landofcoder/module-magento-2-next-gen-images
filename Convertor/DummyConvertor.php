<?php declare(strict_types=1);

namespace Lof\NextGenImages\Convertor;

use Lof\NextGenImages\Image\SourceImage;
use Lof\NextGenImages\Image\SourceImageFactory;

class DummyConvertor implements ConvertorInterface
{
    /**
     * @var SourceImageFactory
     */
    private $sourceImageFactory;

    /**
     * DummyConvertor constructor.
     * @param SourceImageFactory $sourceImageFactory
     */
    public function __construct(
        SourceImageFactory $sourceImageFactory
    ) {
        $this->sourceImageFactory = $sourceImageFactory;
    }

    /**
     * @param string $imageUrl
     * @return SourceImage
     */
    public function getSourceImage(string $imageUrl): SourceImage
    {
        return $this->sourceImageFactory->create();
    }

    /**
     * @param string $sourceImageUrl
     * @param string|null $destinationImageUrl
     * @return bool
     */
    public function convert(string $sourceImageUrl, ?string $destinationImageUrl = null): bool
    {
        return false;
    }
}
