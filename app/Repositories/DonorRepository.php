<?php

namespace App\Repositories;

use App\Models\Donor;
use App\Interfaces\DonorInterface;


class DonorRepository implements DonorInterface
{
    protected $model;

    public function __construct(Donor $model)
    {
        $this->model = $model;
    }


        /**
     * Date: 15/06/2019
     *
     * @param $request
     * @return json
     */
    public function getAll($request)
    {
        $columns = array(
            0 => 'name',
            1 => 'email',
            2 => 'document',
            3 => 'birth_date',
            4 => 'uuid'
        );

        $totalData = $this->model->count();

        $totalFiltered = $totalData;

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir   = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {

            $query = $this->model->offset($start)
                ->limit($limit)
                ->orderBy($order,$dir)
                ->get();

        } else {
            $search = $request->input('search.value');

            $query =  $this->model->where('name','LIKE',"%{$search}%")
                ->orWhere('email', 'LIKE',"%{$search}%")
                ->orWhere('document', 'LIKE',"%{$search}%")
                ->orWhere('birth_date', 'LIKE',"%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order,$dir)
                ->get();

            $totalFiltered = $this->model->where('name','LIKE',"%{$search}%")
            ->orWhere('email', 'LIKE',"%{$search}%")
            ->orWhere('document', 'LIKE',"%{$search}%")
            ->orWhere('birth_date', 'LIKE',"%{$search}%")
            ->count();
        }
        $data    = array();

        if(!empty($query))
        {
            foreach ($query as $post){
                $nData['name']        = $post->name;
                $nData['email']       = $post->email;
                $nData['document']    = $post->document;
                $nData['birth_date']  = $post->birth_date;
                $nData['uuid']        = $post->uuid;
                $data[] = $nData;
            }

        }

        $out = array(
            "draw" => intval($request->input('draw')),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data
        );

        return $out;

    }


    
}

