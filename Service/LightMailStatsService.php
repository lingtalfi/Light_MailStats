<?php


namespace Ling\Light_MailStats\Service;


use Ling\Light\ServiceContainer\LightServiceContainerInterface;
use Ling\Light_Database\Service\LightDatabaseService;
use Ling\Light_MailStats\Api\Custom\CustomLightMailStatsApiFactory;
use Ling\Light_MailStats\Exception\LightMailStatsException;


/**
 * The LightMailStatsService class.
 */
class LightMailStatsService
{

    /**
     * This property holds the container for this instance.
     * @var LightServiceContainerInterface
     */
    protected LightServiceContainerInterface $container;

    /**
     * This property holds the options for this instance.
     *
     * Available options are:
     *
     *
     *
     * See the @page(Light_MailStats conception notes) for more details.
     *
     *
     * @var array
     */
    protected $options;

    /**
     * This property holds the factory for this instance.
     * @var CustomLightMailStatsApiFactory|null
     */
    protected ?CustomLightMailStatsApiFactory $factory;


    /**
     * Builds the LightMailStatsService instance.
     */
    public function __construct()
    {
        $this->options = [];
        $this->factory = null;
    }

    /**
     * Sets the container.
     *
     * @param LightServiceContainerInterface $container
     */
    public function setContainer(LightServiceContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * Sets the options.
     *
     * @param array $options
     */
    public function setOptions(array $options)
    {
        $this->options = $options;
    }


    /**
     * Throws an exception.
     *
     * @param string $msg
     * @throws \Exception
     */
    private function error(string $msg)
    {
        throw new LightMailStatsException($msg);
    }


    /**
     * Returns the factory for this plugin's api.
     *
     * @return CustomLightMailStatsApiFactory
     */
    public function getFactory(): CustomLightMailStatsApiFactory
    {
        if (null === $this->factory) {
            $this->factory = new CustomLightMailStatsApiFactory();
            $this->factory->setContainer($this->container);
            /**
             * @var $db LightDatabaseService
             */
            $db = $this->container->get("database");
            $this->factory->setPdoWrapper($db);
        }
        return $this->factory;
    }

}