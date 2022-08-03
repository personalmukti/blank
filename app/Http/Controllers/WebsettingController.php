<?php

namespace App\Http\Controllers;

use App\DataTables\WebsettingDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateWebsettingRequest;
use App\Http\Requests\UpdateWebsettingRequest;
use App\Repositories\WebsettingRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class WebsettingController extends AppBaseController
{
    /** @var WebsettingRepository $websettingRepository*/
    private $websettingRepository;

    public function __construct(WebsettingRepository $websettingRepo)
    {
        $this->websettingRepository = $websettingRepo;
    }

    /**
     * Display a listing of the Websetting.
     *
     * @param WebsettingDataTable $websettingDataTable
     *
     * @return Response
     */
    public function index(WebsettingDataTable $websettingDataTable)
    {
        return $websettingDataTable->render('websettings.index');
    }

    /**
     * Show the form for creating a new Websetting.
     *
     * @return Response
     */
    public function create()
    {
        return view('websettings.create');
    }

    /**
     * Store a newly created Websetting in storage.
     *
     * @param CreateWebsettingRequest $request
     *
     * @return Response
     */
    public function store(CreateWebsettingRequest $request)
    {
        $input = $request->all();

        if ($request->hasFile('website_logo')){

            //Validate the uploaded file
            $Validation = $request->validate([

                'website_logo' => 'required|file|mimes:jpeg,jpg,JPG,JPEG,PNG,png|max:30000'
            ]);

            // cache the file
            $file = $Validation['website_logo'];

            // generate a new filename. getClientOriginalExtension() for the file extension
            $filename = 'img-' . time() . '.' . $file->getClientOriginalExtension();

            // save to storage/app/infrastructure as the new $filename
            $file-> move(public_path('storage/images'), $filename);
            $path = "storage/images/".$filename;
        }

        $input['website_logo'] = $path;

        $websetting = $this->websettingRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/websettings.singular')]));

        return redirect(route('websettings.index'));
    }

    /**
     * Display the specified Websetting.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $websetting = $this->websettingRepository->find($id);

        if (empty($websetting)) {
            Flash::error(__('messages.not_found', ['model' => __('models/websettings.singular')]));

            return redirect(route('websettings.index'));
        }

        return view('websettings.show')->with('websetting', $websetting);
    }

    /**
     * Show the form for editing the specified Websetting.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $websetting = $this->websettingRepository->find($id);

        if (empty($websetting)) {
            Flash::error(__('messages.not_found', ['model' => __('models/websettings.singular')]));

            return redirect(route('websettings.index'));
        }

        return view('websettings.edit')->with('websetting', $websetting);
    }

    /**
     * Update the specified Websetting in storage.
     *
     * @param int $id
     * @param UpdateWebsettingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWebsettingRequest $request)
    {
        $websetting = $this->websettingRepository->find($id);

        if (empty($websetting)) {
            Flash::error(__('messages.not_found', ['model' => __('models/websettings.singular')]));

            return redirect(route('websettings.index'));
        }

        $websetting = $this->websettingRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/websettings.singular')]));

        return redirect(route('websettings.index'));
    }

    /**
     * Remove the specified Websetting from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $websetting = $this->websettingRepository->find($id);

        if (empty($websetting)) {
            Flash::error(__('messages.not_found', ['model' => __('models/websettings.singular')]));

            return redirect(route('websettings.index'));
        }

        $this->websettingRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/websettings.singular')]));

        return redirect(route('websettings.index'));
    }
}
