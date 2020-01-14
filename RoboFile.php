<?php

require_once __DIR__ . '/vendor/autoload.php';

define('TEMPLATES_DIR', __DIR__ . '/templates');
define('OUTPUT_DIR', __DIR__ . '/output');

/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */
class RoboFile extends \Robo\Tasks
{
    public function compile(): void
    {
        foreach (glob(TEMPLATES_DIR . "/*.twig") as $filename1) {
            $loader = new \Twig\Loader\FilesystemLoader(TEMPLATES_DIR);
            $twig = new \Twig\Environment($loader);

            $basename = basename($filename1);
            $nameParts = explode('.twig', $basename);
            $name = $nameParts[0];

            $filename2 = OUTPUT_DIR . '/' . $name . '.html';
            $content = $twig->render($basename);

            file_put_contents($filename2, $content);

            echo "{$filename1} => {$filename2}" . PHP_EOL;
        }
    }

    public function watch(): void
    {
        $this->taskWatch()
             ->monitor(
                 TEMPLATES_DIR,
                 function () {
                     $this->compile();
                 }
             )
        ->run();
    }
}