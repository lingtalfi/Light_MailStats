<?php


namespace Ling\Light_MailStats\Light_PlanetInstaller;


use Ling\CliTools\Output\OutputInterface;
use Ling\Light_Database\Light_PlanetInstaller\LightDatabaseBasePlanetInstaller;
use Ling\Light_EasyRoute\Helper\LightEasyRouteHelper;
use Ling\Light_PlanetInstaller\PlanetInstaller\LightPlanetInstallerInit2HookInterface;

/**
 * The LightMailStatsPlanetInstaller class.
 */
class LightMailStatsPlanetInstaller extends LightDatabaseBasePlanetInstaller implements LightPlanetInstallerInit2HookInterface
{


    /**
     * @implementation
     */
    public function init2(string $appDir, OutputInterface $output, array $options = []): void
    {

        $planetDotName = "Ling.Light_MailStats";

        //--------------------------------------------
        // routes
        //--------------------------------------------
        $output->write("$planetDotName: copying Ling.Light_EasyRoute routes to master...");
        LightEasyRouteHelper::copyRoutesFromPluginToMaster($appDir, $planetDotName);
        $output->write("<success>ok.</success>" . PHP_EOL);


    }


    /**
     * @implementation
     */
    public function undoInit2(string $appDir, OutputInterface $output, array $options = []): void
    {

        $planetDotName = "Ling.Light_MailStats";

        //--------------------------------------------
        // routes
        //--------------------------------------------
        $output->write("$planetDotName: removing Ling.Light_EasyRoute routes from master...");
        LightEasyRouteHelper::removeRoutesFromMaster($appDir, $planetDotName);
        $output->write("<success>ok.</success>" . PHP_EOL);


    }
}