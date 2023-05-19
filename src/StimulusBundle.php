<?php

/*
 * This file is part of the Symfony StimulusBundle package.
 * (c) Fabien Potencier <fabien@symfony.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\UX\StimulusBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\UX\StimulusBundle\DependencyInjection\Compiler\RemoveAssetMapperServicesCompiler;

/**
 * @experimental
 *
 * @author Ryan Weaver <ryan@symfonycasts.com>
 */
final class StimulusBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }

    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new RemoveAssetMapperServicesCompiler());
    }
}
