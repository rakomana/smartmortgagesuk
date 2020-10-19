<?php

namespace App\Http\Controllers;

use App\Subscribe;
use Illuminate\Http\Request;
use App\Http\Requests\SubscribeStoreRequest;
use Illuminate\Database\ConnectionInterface as DB;

class SubscribeController extends Controller
{
    private $subscribe;
    private $db;

    /**
     * inject models into the constructor
     */
    public function __construct(Subscribe $subscribe, DB $db)
    {
        $this->subscribe = $subscribe;
        $this->db = $db;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubscribeStoreRequest $request)
    {
        $this->db->beginTransaction();

        $subscribe = new $this->subscribe();
        $subscribe->email = $request->email;
        $subscribe->save();

        $this->db->commit();

        return redirect()->back();
    }
}
