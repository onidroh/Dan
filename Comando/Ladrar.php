<?php
// src/Command/CreateUserCommand.php
namespace Comando;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\Filesystem\Filesystem;

class Ladrar extends Command
{
    // the name of the command (the part after "bin/console")
    //protected static $defaultName = 'dan:ladra';

    protected function configure()
    {
        // ...
        $this
        ->setName('oye:Ladra')
        ->setDescription('Dan te obedece y ladra.')
        ->setHelp('Dan demuestra su obediencia...')
    ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $filesystem = new Filesystem();

        //variable de directorio
        $directorio = __DIR__. './web';

        try {

            //Crea las carpetas principales para Oscar
            $filesystem->mkdir($directorio . '/config', 0755);
            $filesystem->mkdir($directorio . '/inc', 0755);
            $filesystem->mkdir($directorio . '/inc/css', 0755);
            $filesystem->mkdir($directorio . '/inc/js', 0755);
            $filesystem->mkdir($directorio . '/model', 0755);
            $filesystem->mkdir($directorio . '/controller', 0755);
            $filesystem->mkdir($directorio . '/vista', 0755);

            //Sistema de archivos basicos
            $filesystem->dumpFile($directorio . '/index.php', 'Hello World');

            //Copiar CSS & JS
            $filesystem->copy( __DIR__ . '/Assets/css/bootstrap.min.css', $directorio . '/inc/css/bootstrap.min.css');
            $filesystem->copy( __DIR__ . '/Assets/js/bootstrap.min.js', $directorio . '/inc/js/bootstrap.min.js');

        } catch (IOExceptionInterface $exception) {

            echo "Se produjo un error al crear su directorio en ".$exception->getPath();
        }

        $output->writeln(' Dan = Guau! Guau!');
    }
}
?>