<?php

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ApiController extends AbstractController
{
    /**
     * return a JSON response with a status code 200
     *
     * @param mixed $data
     * @param array $groups
     * 
     * @return JsonResponse
     */
    public function json200($data, array $groups = []): JsonResponse
    {
        return $this->json(
            $data,
            Response::HTTP_OK,
            [],
            [
                "groups" => $groups
            ]
        );
    }

    /**
     * return a JSON response with a status 404
     *
     * @param mixed $data
     * 
     * @return JsonResponse
     */
    public function json404($data): JsonResponse
    {
        return $this->json(
            $data,
            Response::HTTP_NOT_FOUND
        );
    }
}