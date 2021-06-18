[Back to the Ling/Light_MailStats api](https://github.com/lingtalfi/Light_MailStats/blob/master/doc/api/Ling/Light_MailStats.md)



The LightMailStatsController class
================
2021-06-18 --> 2021-06-18






Introduction
============

The LightMailStatsController class.



Class synopsis
==============


class <span class="pl-k">LightMailStatsController</span> extends LightController implements LightAwareInterface, LightControllerInterface {

- Inherited properties
    - protected Ling\Light\Core\Light [LightController::$light](#property-light) ;

- Methods
    - public [redirect](https://github.com/lingtalfi/Light_MailStats/blob/master/doc/api/Ling/Light_MailStats/Controller/LightMailStatsController/redirect.md)(Ling\Light\Http\HttpRequestInterface $request) : Ling\Light\Http\HttpResponseInterface

- Inherited methods
    - public LightController::__construct() : void
    - public LightController::setLight(Ling\Light\Core\Light $light) : void
    - protected LightController::getLight() : Ling\Light\Core\Light
    - protected LightController::getContainer() : Ling\Light\ServiceContainer\LightServiceContainerInterface
    - protected LightController::getHttpRequest() : Ling\Light\Http\HttpRequestInterface
    - protected LightController::hasService(string $serviceName) : bool

}






Methods
==============

- [LightMailStatsController::redirect](https://github.com/lingtalfi/Light_MailStats/blob/master/doc/api/Ling/Light_MailStats/Controller/LightMailStatsController/redirect.md) &ndash; Collect stats and redirects the user to an url.
- LightController::__construct &ndash; Builds the LightController instance.
- LightController::setLight &ndash; Sets the light instance.
- LightController::getLight &ndash; Returns the light application.
- LightController::getContainer &ndash; Returns the service container.
- LightController::getHttpRequest &ndash; Returns the http request bound to the light instance.
- LightController::hasService &ndash; Returns whether the container contains the service which name is given.





Location
=============
Ling\Light_MailStats\Controller\LightMailStatsController<br>
See the source code of [Ling\Light_MailStats\Controller\LightMailStatsController](https://github.com/lingtalfi/Light_MailStats/blob/master/Controller/LightMailStatsController.php)



SeeAlso
==============
Previous class: [LightMailStatsApiFactory](https://github.com/lingtalfi/Light_MailStats/blob/master/doc/api/Ling/Light_MailStats/Api/Generated/LightMailStatsApiFactory.md)<br>Next class: [LightMailStatsException](https://github.com/lingtalfi/Light_MailStats/blob/master/doc/api/Ling/Light_MailStats/Exception/LightMailStatsException.md)<br>
