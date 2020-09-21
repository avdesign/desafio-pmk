<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Interfaces\DonorInterface;
use App\Http\Controllers\Controller;

class DonorController extends Controller
{
    private $view = 'donors';
    private $repository;

    public function __construct(DonorInterface $repository)
    {
        $this->repository = $repository;
    }
    /**
     * Obter a página index.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("{$this->view}.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data(Request $request)
    {
        $data = $this->repository->getAll($request);

        return response()->json($data);
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
