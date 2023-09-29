<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Repository\Admin\TestimoniRepository;

class TestimoniController extends Controller
{
    protected $repo;

    public function __construct()
    {
        $this->repo = new TestimoniRepository;
    }

    public function view()
    {
        $data['datas'] = $this->repo->getData(10);
        $content = view('admin.testimoni.view');
        return view('admin.common.main', compact('content'));
    }

    public function addView()
    {
        $content = view('admin.testimoni.add');
        return view('admin.common.main', ['content' => $content]);
    }

    public function editView($id)
    {
        $data['data'] = $this->repo->getSingleData($id);
        $content = view('admin.testimoni.edit', $data);
        return view('admin.common.main', ['content' => $content]);
    }

    function data(Request $request)
    {
        $data['datas'] = $this->repo->getData(10);
        return view('admin.testimoni.data', $data);
    }

    function addPost(Request $request) {
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