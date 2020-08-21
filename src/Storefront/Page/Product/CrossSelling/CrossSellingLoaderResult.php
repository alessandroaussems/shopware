<?php declare(strict_types=1);

namespace Shopware\Storefront\Page\Product\CrossSelling;

use Shopware\Core\Content\Product\SalesChannel\CrossSelling\CrossSellingElementCollection;

/**
 * @deprecated tag:v6.4.0 - Use `Shopware\Core\Content\Product\SalesChannel\CrossSelling\CrossSellingElementCollection` instead
 * @method void                     add(CrossSellingElement $entity)
 * @method void                     set(string $key, CrossSellingElement $entity)
 * @method CrossSellingElement[]    getIterator()
 * @method CrossSellingElement[]    getElements()
 * @method CrossSellingElement|null get(string $key)
 * @method CrossSellingElement|null first()
 * @method CrossSellingElement|null last()
 */
class CrossSellingLoaderResult extends CrossSellingElementCollection
{
    public function getExpectedClass(): ?string
    {
        return CrossSellingElement::class;
    }
}
