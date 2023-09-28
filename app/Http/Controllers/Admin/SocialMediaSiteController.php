<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\SocialMediaSiteRequest;
use App\Repository\Admin\SocialMediaSiteRepository;

class SocialMediaSiteController extends Controller
{
    protected $repo;

    public function __construct()
    {
        $this->repo = new SocialMediaSiteRepository;
    }

    public function view()
    {
        $content = view('admin.social_media_site.view');
        return view('admin.common.main', compact('content'));
    }

    public function addView()
    {
        $data['social_media_site_type'] = $this->repo->getSocialMediaSiteType();
        $content = view('admin.social_media_site.add', $data);
        return view('admin.common.main', ['content' => $content]);
    }

    public function editView($id)
    {
        $data['social_media_site_type'] = $this->repo->getSocialMediaSiteType();
        $data['data'] = $this->repo->getSingleData($id);
        $content = view('admin.social_media_site.edit', $data);
        return view('admin.common.main', ['content' => $content]);
    }

    function data(Request $request)
    {
        $data['datas'] = $this->repo->getData(10);
        return view('admin.social_media_site.data', $data);
    }

    function addPost(SocialMediaSiteRequest $request) {
        DB::beginTransaction();
        try {
            $data = $this->repo->add();
            DB::commit();
            $message = [
                'status' => true,
                'success' => 'Data has been added'
            ];
        } catch (\Exception $exception) {
            DB::rollback();
            $message = [
                'status' => false,
                'error' => $exception->getMessage()
            ];
        }
        return response()->json($message);
    }

    function update(Request $request, $id){
        DB::beginTransaction();
        try {
            $data = $this->repo->update($id);
            DB::commit();
            $message = [
                'status' => true,
                'success' => 'Data has been updated'
            ];
        } catch (\Exception $exception) {
            DB::rollback();
            $message = [
                'status' => false,
                'error' => $exception->getMessage()
            ];
        }
        return response()->json($message);
    }

    function delete($id)
    {
        DB::beginTransaction();
        try {
            $this->repo->delete($id);
            DB::commit();
            $message = [
                'status' => true,
                'success' => 'Data has been deleted'
            ];
        } catch (\Exception $exception) {
            DB::rollback();
            $message = [
                'status' => false,
                'error' => "Something Wrong"
            ];
        }
        return response()->json($message);
    }
}
