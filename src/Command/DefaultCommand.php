<?php
namespace MyApplication\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;

/**
 * Default Command.
 */
class DefaultCommand extends Command
{
  public function configure()
  {
    $this->setName("app:default")
      ->setDescription("Example command")
      ->setDefinition(array(
        new InputOption("first", "f", InputOption::VALUE_OPTIONAL, "Primer parametro"),
        new InputOption("second", "s", InputOption::VALUE_OPTIONAL, "Segundo parametro"),
      ))
      ->setHelp(<<<EOT
Ayuda del primer parametro
<info>anotacion adicional del comando.</info>
Puede ejecutar este comando de la siguiente format_size
<info> php bin/console app:default [--param=value]</info>
EOT
);
  }
  public function execute(InputInterface $input, OutputInterface $output)
  {
    $style = new OutputFormatterStyle("white", "green", array("bold"));
    $output->getFormatter()->setStyle("header", $style);
    $primerParametro = $input->getOption("first");
    $segundoParametro = $input->getOption("second");

    $output->writeln("<header>Salida estandar de la aplicacion.</header>");
    $output->writeln("Primer parametro: " . $primerParametro);
    $output->writeln("Segundo parametro: " . $segundoParametro);
    $output->writeln("<header>Fin de la ejecucion del commando</header>");
  }
}
