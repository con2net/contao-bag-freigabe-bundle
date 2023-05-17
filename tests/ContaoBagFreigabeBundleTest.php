<?php

declare(strict_types=1);

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace con2net\ContaoBagFreigabeBundle\Tests;

use con2net\ContaoBagFreigabeBundle\ContaoBagFreigabeBundle;
use PHPUnit\Framework\TestCase;

class ContaoBagFreigabeBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new ContaoBagFreigabeBundle();

        $this->assertInstanceOf('con2net\ContaoBagFreigabeBundle\ContaoBagFreigabeBundle', $bundle);
    }
}
