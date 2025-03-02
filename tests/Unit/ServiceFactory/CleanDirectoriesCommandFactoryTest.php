<?php

declare(strict_types=1);

namespace Chubbyphp\Tests\CleanDirectories\Unit\ServiceFactory;

use Chubbyphp\CleanDirectories\Command\CleanDirectoriesCommand;
use Chubbyphp\CleanDirectories\ServiceFactory\CleanDirectoriesCommandFactory;
use Chubbyphp\Mock\MockMethod\WithReturn;
use Chubbyphp\Mock\MockObjectBuilder;
use PHPUnit\Framework\TestCase;
use Psr\Container\ContainerInterface;

/**
 * @covers \Chubbyphp\CleanDirectories\ServiceFactory\CleanDirectoriesCommandFactory
 *
 * @internal
 */
final class CleanDirectoriesCommandFactoryTest extends TestCase
{
    public function testInvoke(): void
    {
        $builder = new MockObjectBuilder();

        /** @var ContainerInterface $container */
        $container = $builder->create(ContainerInterface::class, [
            new WithReturn('get', ['config'], ['directories' => ['name' => 'path']]),
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
