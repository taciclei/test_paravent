<?php

namespace App\Commands;

use App\Services\OuraganService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Command\LockableTrait;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class OuraganCommand extends Command
{
    use LockableTrait;

    protected static $defaultName = 'ouragan:abri:disponible';

    protected function configure()
    {
        $this
            ->setDescription('Retourne un unique entier qui est la surface d\'abri disponible.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $ouraganService = new OuraganService();

        $output->writeln([
            'Surfaces a l\'abri',
            '============',
            $ouraganService->getSurfaceDisponible(),
            '============',
        ]);
        return Command::SUCCESS;
    }
}