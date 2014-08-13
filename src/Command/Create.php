<?php

namespace Migrations\Command;

use Migrations\ConfigurationTrait;
use Phinx\Console\Command\Create as CreateCommand;
use Symfony\Component\Console\Input\InputArgument;

class Create extends CreateCommand {

	use ConfigurationTrait;

/**
 * {@inheritdoc}
 */
	protected function configure() {
		$this->setName('create')
			->setDescription('Create a new migration')
			->addArgument('name', InputArgument::REQUIRED, 'What is the name of the migration?')
			->setHelp(sprintf(
				'%sCreates a new database migration file%s',
				PHP_EOL,
				PHP_EOL
			));
		$this->addOption('--plugin', '-p', InputArgument::OPTIONAL, 'The plugin the file should be created for')
			->addOption('--connection', '-c', InputArgument::OPTIONAL, 'The datasource connection to use');
	}

}
