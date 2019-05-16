<?php
/**
 * Copyright(c) 2019. All rights reserved.
 * Last modified 5/16/19 8:12 AM
 */

/**
 * LoginController.php
 * Created by @anonymoussc on 10/31/2018 12:28 PM.
 */

/**
 * AuthController.php
 * @renamed by @anonymoussc on 05/15/2019 7:55 AM.
 */

namespace App\Components\Passerby\Http\Controllers;

use App\Components\Passerby\Requests\AuthLoginRequest;
use App\Components\Passerby\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

/**
 * Class AuthController
 * @package App\Components\Passerby\Http\Controllers
 */
class AuthController extends Controller
{
    /**
     * @var \App\Components\Passerby\Services\AuthService
     */
    private $authService;

    /**
     * LoginController constructor.
     *
     * @param \App\Components\Passerby\Services\AuthService $AuthService
     */
    public function __construct(AuthService $AuthService)
    {
        $this->authService = $AuthService;
    }

    /**
     * @param \App\Components\Passerby\Requests\AuthLoginRequest $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(AuthLoginRequest $request): \Illuminate\Http\JsonResponse
    {
        $data   = [
            'form' => $request->all(),
        ];
        $option = $this->getOption($request);
        $param  = $this->getParam($request);

        try {
            $data = $this->authService->attemptLogin($data, $option, $param);
        } catch (\Exception $error) {
            $this->fireLog('error', $error->getMessage(), ['error' => $error]);

            return Response::error($error->getMessage(), $error->getCode())
                ->setStatusCode(500);
        }

        return $this->response($data);
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh(Request $request): \Illuminate\Http\JsonResponse
    {
        $data   = [
            'refresh_token' => $request->has('refreshToken') ? $request->refreshToken : [],
        ];
        $option = $this->getOption($request);
        $param  = $this->getParam($request);

        try {
            $data = $this->authService->attemptRefresh($data, $option, $param);
        } catch (\Exception $error) {
            $this->fireLog('error', $error->getMessage(), ['error' => $error]);

            return Response::error($error->getMessage(), $error->getCode())
                ->setStatusCode(500);
        }

        return $this->response($data);
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(Request $request): \Illuminate\Http\JsonResponse
    {
        $data   = [];
        $option = $this->getOption($request);
        $param  = $this->getParam($request);

        try {
            $this->authService->logout($data, $option, $param);
        } catch (\Exception $error) {
            $this->fireLog('error', $error->getMessage(), ['error' => $error]);

            return Response::error($error->getMessage(), $error->getCode())
                ->setStatusCode(500);
        }

        return $this->response(null, 204);
    }
}
