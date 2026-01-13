<?php

declare(strict_types=1);

namespace Chubbyphp\CleanDirectories\ServiceFactory;

use Chubbyphp\CleanDirectories\Command\CleanDirectoriesCommand;
use Psr\Container\ContainerInterface;

final class CleanDirectoriesCommandFactory
{
    public function __invoke(ContainerInterface $container): CleanDirectoriesCommand
    {
        /** @var array{directories: array<string, string>} */
        $config = $container->get('config');

        /** @var array<string, string> */
        $directories = $config['directories'];

        return new CleanDirectoriesCommand($directories);
    }
}
