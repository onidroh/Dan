<?php
// src/Command/CreateUserCommand.php
namespace Comando;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Ladrar extends Command
{
    // the name of the command (the part after "bin/console")
    //protected static $defaultName = 'dan:ladra';

    protected function configure()
    {
        // ...
        $this
        ->setName('app:Ladra')
        ->setDescription('Dan te obedece y ladra.')
        ->setHelp('Dan demuestra su obediencia...')
    ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // ...
        $output->writeln('Guau Guau');
    }
}
?>