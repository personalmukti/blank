<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateWebsettingAPIRequest;
use App\Http\Requests\API\UpdateWebsettingAPIRequest;
use App\Models\Websetting;
use App\Repositories\WebsettingRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\WebsettingResource;
use Response;

/**
 * Class WebsettingController
 * @package App\Http\Controllers\API
 */

class WebsettingAPIController extends AppBaseController
{
    /** @var  WebsettingRepository */
    private $websettingRepository;

    public function __construct(WebsettingRepository $websettingRepo)
    {
        $this->websettingRepository = $websettingRepo;
    }

    /**
     * Display a listing of the Websetting.
     * GET|HEAD /websettings
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $websettings = $this->websettingRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(
            WebsettingResource::collection($websettings),
            __('messages.retrieved', ['model' => __('models/websettings.plural')])
        );
    }

    /**
     * Store a newly created Websetting in storage.
     * POST /websettings
     *
     * @param CreateWebsettingAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateWebsettingAPIRequest $request)
    {
        $input = $request->all();

        $websetting = $this->websettingRepository->create($input);

        return $this->sendResponse(
            new WebsettingResource($websetting),
            __('messages.saved', ['model' => __('models/websettings.singular')])
        );
    }

    /**
     * Display the specified Websetting.
     * GET|HEAD /websettings/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Websetting $websetting */
        $websetting = $this->websettingRepository->find($id);

        if (empty($websetting)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/websettings.singular')])
            );
        }

        return $this->sendResponse(
            new WebsettingResource($websetting),
            __('messages.retrieved', ['model' => __('models/websettings.singular')])
        );
    }

    /**
     * Update the specified Websetting in storage.
     * PUT/PATCH /websettings/{id}
     *
     * @param int $id
     * @param UpdateWebsettingAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWebsettingAPIRequest $request)
    {
        $input = $request->all();

        /** @var Websetting $websetting */
        $websetting = $this->websettingRepository->find($id);

        if (empty($websetting)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/websettings.singular')])
            );
        }

        $websetting = $this->websettingRepository->update($input, $id);

        return $this->sendResponse(
            new WebsettingResource($websetting),
            __('messages.updated', ['model' => __('models/websettings.singular')])
        );
    }

    /**
     * Remove the specified Websetting from storage.
     * DELETE /websettings/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Websetting $websetting */
        $websetting = $this->websettingRepository->find($id);

        if (empty($websetting)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/websettings.singular')])
            );
        }

        $websetting->delete();

        return $this->sendResponse(
            $id,
            __('messages.deleted', ['model' => __('models/websettings.singular')])
        );
    }
}
