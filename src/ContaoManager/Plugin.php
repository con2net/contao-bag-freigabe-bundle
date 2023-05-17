<?php

declare(strict_types=1);
/*
 * This file is part of the Contao BAG Freigabe Bundle.
 *
 * (c) 2023, connect2Net webServices
 * stefan.meise@connect2net.de
 *
 * @license LGPL-3.0-or-later
 */

namespace con2net\ContaoBagFreigabeBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use con2net\ContaoBagFreigabeBundle\ContaoBagFreigabeBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ContaoBagFreigabeBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
