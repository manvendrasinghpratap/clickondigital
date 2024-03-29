<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Testimonial;
use App\Banner;
use App\Sponsor;

class MainWebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $latestNews = News::wherestatus('1')->latest()->limit(4)->get();
        $collection = collect($latestNews);
        $mainNews =  $collection->shift();
        $smallNews = $collection->all();
        /*Testimonail Begin*/
        $testimonials   = Testimonial:: get();
        $banner         = Banner:: get();
        $sponsor         = Sponsor:: get();
        //$this->p($banner,0);
        /*Testimonail Begin*/
        return view('frontend.welcome')->with('mainNews',$mainNews)
                                        ->with('smallNews',$smallNews)
                                        ->with('banner',$banner)
                                        ->with('sponsor',$sponsor)
                                        ->with('testimonials',$testimonials);    
    }

    public function single($posttype,$newsId)
    {
      //echo $newsId;
        switch ($posttype) {
            case 'news':
                $singlePostDetails = News::find($newsId);
                break;
            case 'testimonial':
                $singlePostDetails = Testimonial::find($newsId);
                break;
            case 'banner':
                $singlePostDetails = Banner::find($newsId);
                break;    
            default:
                # code...
                break;
        }
      return view('frontend.newdetail')->with('singlePostDetails',$singlePostDetails)
                                        ->with('posttype',$posttype);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function alert()
    {
        
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
