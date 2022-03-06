# chubbyphp-clean-directories

[![CI](https://github.com/chubbyphp/chubbyphp-clean-directories/workflows/CI/badge.svg?branch=master)](https://github.com/chubbyphp/chubbyphp-clean-directories/actions?query=workflow%3ACI)
[![Coverage Status](https://coveralls.io/repos/github/chubbyphp/chubbyphp-clean-directories/badge.svg?branch=master)](https://coveralls.io/github/chubbyphp/chubbyphp-clean-directories?branch=master)
[![Infection MSI](https://badge.stryker-mutator.io/github.com/chubbyphp/chubbyphp-clean-directories/master)](https://dashboard.stryker-mutator.io/reports/github.com/chubbyphp/chubbyphp-clean-directories/master)
[![Latest Stable Version](https://poser.pugx.org/chubbyphp/chubbyphp-clean-directories/v/stable.png)](https://packagist.org/packages/chubbyphp/chubbyphp-clean-directories)
[![Total Downloads](https://poser.pugx.org/chubbyphp/chubbyphp-clean-directories/downloads.png)](https://packagist.org/packages/chubbyphp/chubbyphp-clean-directories)
[![Monthly Downloads](https://poser.pugx.org/chubbyphp/chubbyphp-clean-directories/d/monthly)](https://packagist.org/packages/chubbyphp/chubbyphp-clean-directories)

[![bugs](https://sonarcloud.io/api/project_badges/measure?project=chubbyphp_chubbyphp-clean-directories&metric=bugs)](https://sonarcloud.io/dashboard?id=chubbyphp_chubbyphp-clean-directories)
[![code_smells](https://sonarcloud.io/api/project_badges/measure?project=chubbyphp_chubbyphp-clean-directories&metric=code_smells)](https://sonarcloud.io/dashboard?id=chubbyphp_chubbyphp-clean-directories)
[![coverage](https://sonarcloud.io/api/project_badges/measure?project=chubbyphp_chubbyphp-clean-directories&metric=coverage)](https://sonarcloud.io/dashboard?id=chubbyphp_chubbyphp-clean-directories)
[![duplicated_lines_density](https://sonarcloud.io/api/project_badges/measure?project=chubbyphp_chubbyphp-clean-directories&metric=duplicated_lines_density)](https://sonarcloud.io/dashboard?id=chubbyphp_chubbyphp-clean-directories)
[![ncloc](https://sonarcloud.io/api/project_badges/measure?project=chubbyphp_chubbyphp-clean-directories&metric=ncloc)](https://sonarcloud.io/dashboard?id=chubbyphp_chubbyphp-clean-directories)
[![sqale_rating](https://sonarcloud.io/api/project_badges/measure?project=chubbyphp_chubbyphp-clean-directories&metric=sqale_rating)](https://sonarcloud.io/dashboard?id=chubbyphp_chubbyphp-clean-directories)
[![alert_status](https://sonarcloud.io/api/project_badges/measure?project=chubbyphp_chubbyphp-clean-directories&metric=alert_status)](https://sonarcloud.io/dashboard?id=chubbyphp_chubbyphp-clean-directories)
[![reliability_rating](https://sonarcloud.io/api/project_badges/measure?project=chubbyphp_chubbyphp-clean-directories&metric=reliability_rating)](https://sonarcloud.io/dashboard?id=chubbyphp_chubbyphp-clean-directories)
[![security_rating](https://sonarcloud.io/api/project_badges/measure?project=chubbyphp_chubbyphp-clean-directories&metric=security_rating)](https://sonarcloud.io/dashboard?id=chubbyphp_chubbyphp-clean-directories)
[![sqale_index](https://sonarcloud.io/api/project_badges/measure?project=chubbyphp_chubbyphp-clean-directories&metric=sqale_index)](https://sonarcloud.io/dashboard?id=chubbyphp_chubbyphp-clean-directories)
[![vulnerabilities](https://sonarcloud.io/api/project_badges/measure?project=chubbyphp_chubbyphp-clean-directories&metric=vulnerabilities)](https://sonarcloud.io/dashboard?id=chubbyphp_chubbyphp-clean-directories)

## Description

A command to clean directories based on directoryName => directoryPath mapping.

## Requirements

 * php: ^8.0
 * [symfony/console][2]: ^4.4.38|^5.4.5|^6.0

## Installation

Through [Composer](http://getcomposer.org) as [chubbyphp/chubbyphp-clean-directories][1].

```sh
composer require chubbyphp/chubbyphp-clean-directories "^1.2"
```

## Usage

```php
#!/usr/bin/env php
<?php

declare(strict_types=1);

namespace App;

use Chubbyphp\CleanDirectories\Command\CleanDirectoriesCommand;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArgvInput;
use Symfony\Component\Console\Input\InputOption;

require __DIR__.'/../vendor/autoload.php';

$input = new ArgvInput();

$console = new Application();
$console->addCommand(new CleanDirectoriesCommand(['directoryName' => 'directoryPath']));
$console->run($input);
```

```sh
console clean-directories directoryName
```

## Copyright

Dominik Zogg 2022

[1]: https://packagist.org/packages/chubbyphp/chubbyphp-clean-directories
[2]: https://packagist.org/packages/symfony/console
