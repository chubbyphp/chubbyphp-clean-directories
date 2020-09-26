<?php

declare(strict_types=1);

namespace Chubbyphp\CleanDirectories\ServiceFactory;

use Chubbyphp\CleanDirectories\Command\CleanDirectoriesCommand;
use Psr\Container\ContainerInterface;

final class CleanDirectoriesCommandFactory
{
    public function __invoke(ContainerInterface $container): CleanDirectoriesCommand
    {
        /** @var array<string, string> $directories */
        $directories = $container->get('config')['directories'];

        return new CleanDirectoriesCommand($directories);
    }
}
