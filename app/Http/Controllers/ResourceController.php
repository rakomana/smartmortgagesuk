<?php

namespace App\Http\Controllers;

use App\Resource;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;

class ResourceController extends Controller
{
    private $resource;

    
    /**
    *
    * Inject models into the constructor
    * @param Resource $resource
    */
    public function __construct(Resource $resource)
    {
        $this->resource = $resource;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resource = $this->resource->all();

        return view('resources', compact('resource'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexCategory(string $url)
    {
        $category = $this->resource->where('url', $url)->firstOrFail();

        SEOMeta::setTitle($category->meta_title);
        SEOMeta::setDescription($category->description);
        
        return view('category', compact('category'));
    }
}
