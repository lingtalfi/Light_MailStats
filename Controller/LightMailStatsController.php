<?php


namespace Ling\Light_MailStats\Controller;


use Ling\Light\Controller\LightController;
use Ling\Light\Http\HttpRedirectResponse;
use Ling\Light\Http\HttpRequestInterface;
use Ling\Light\Http\HttpResponse;
use Ling\Light\Http\HttpResponseInterface;
use Ling\Light_MailStats\Service\LightMailStatsService;


/**
 * The LightMailStatsController class.
 */
class LightMailStatsController extends LightController
{


    /**
     *
     * Collect stats and redirects the user to an url.
     *
     * See the @page(Light_MailStats conception notes) for more details.
     *
     *
     * @param HttpRequestInterface $request
     * @return HttpResponseInterface
     */
    public function redirect(HttpRequestInterface $request): HttpResponseInterface
    {

        $trackerId = $request->getPostValue("tid", false);

        $error = null;


        if (null !== $trackerId) {
            /**
             * @var $_ms LightMailStatsService
             */
            $_ms = $this->getContainer()->get("mail_stats");
            $factory = $_ms->getFactory();


            $trackerApi = $factory->getTrackerApi();


            $trackerRow = $trackerApi->getTrackerById($trackerId);
            if (null !== $trackerRow) {


                // collect stats
                $statsApi = $factory->getStatsApi();
                $statsApi->insertStats([
                    "group" => $trackerRow['group'],
                    "name" => $trackerRow['name'],
                    "url" => $trackerRow['url'],
                    "date" => date('Y-m-d H:i:s'),
                    "host" => $_SERVER['HTTP_HOST'] ?? 'unknown',
                    "user_agent" => $_SERVER['HTTP_USER_AGENT'] ?? 'unknown',
                    "accept_language" => $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? 'unknown',
                    "remote_address" => $_SERVER['REMOTE_ADDR'] ?? 'unknown',
                ]);
                $response = new HttpRedirectResponse();
                $response->setUrl($trackerRow['url']);


            } else {
                $error = "invalid tracker.";
            }
        } else {
            $error = "tracker id missing.";
        }

        if (null !== $error) {
            $response = new HttpResponse($error, 404);
        }


        return $response;
    }


}