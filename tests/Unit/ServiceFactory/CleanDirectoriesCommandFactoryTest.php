<?php

declare(strict_types=1);

namespace Chubbyphp\Tests\CleanDirectories\Unit\ServiceFactory;

use Chubbyphp\CleanDirectories\Command\CleanDirectoriesCommand;
use Chubbyphp\CleanDirectories\ServiceFactory\CleanDirectoriesCommandFactory;
use Chubbyphp\Mock\Call;
use Chubbyphp\Mock\MockByCallsTrait;
use PHPUnit\Framework\TestCase;
use Psr\Container\ContainerInterface;

/**
 * @covers \Chubbyphp\CleanDirectories\ServiceFactory\CleanDirectoriesCommandFactory
 *
 * @internal
 */
final class CleanDirectoriesCommandFactoryTest extends TestCase
{
    use MockByCallsTrait;

    public function testInvoke(): void
    {
        /** @var ContainerInterface $containe */
        $container = $this->getMockByCalls(ContainerInterface::class, [
            Call::create('get')->with('config')->willReturn(['directories' => ['name' => 'path']]),
        ]);

        $factory = new CleanDirectoriesCommandFactory([]);

        /** @var CleanDirectoriesCommand $service */
        $service = $factory($container);

        self::assertInstanceOf(CleanDirectoriesCommand::class, $service);

        $directoriesReflectionProperty = new \ReflectionProperty($service, 'directories');
        $directoriesReflectionProperty->setAccessible(true);

        self::assertSame(['name' => 'path'], $directoriesReflectionProperty->getValue($service));
    }
}
