<?php

/*
 * @copyright   2019 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace MauticPlugin\MauticGrapeJsBundle\Controller;

use MauticPlugin\MauticGrapeJsBundle\Uploader\GrapeJsUploader;
use Symfony\Component\HttpFoundation\JsonResponse;
use Mautic\CoreBundle\Controller\AjaxController as CommonAjaxController;


class AjaxController extends CommonAjaxController
{
    /**
     * @return JsonResponse
     */
    public function uploadAction()
    {
        /** @var GrapeJsUploader $grapesJsUploader */
        $grapesJsUploader = $this->get('mautic.grape.js.uploader');

        return $this->sendJsonResponse(['data'=> $grapesJsUploader->uploadFiles($this->request)]);
    }
}
