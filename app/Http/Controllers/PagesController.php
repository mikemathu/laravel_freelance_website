<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('home');
    }
    
    /**
     * Display the loginReg page.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginReg()
    {
        return view('loginReg');
    }
    

      /**
     * Display the artisan profile page.
     *
     * @return \Illuminate\Http\Response
     */
    public function artisanProfile()
    {
        return view('artisanProfile');
    } 

       /**
     * Display all posted Jobs.
     *
     * @return \Illuminate\Http\Response
     */
    public function allJobs()
    {
        return view('allJobs');
    } 

      /**
     * Display the all artisan.
     *
     * @return \Illuminate\Http\Response
     */
    public function allArtisan()
    {
        return view('allArtisan');
    } 

      /**
     * Display the all edit artisan.
     *
     * @return \Illuminate\Http\Response
     */
    public function editArtisan()
    {
        return view('editArtisan');
    } 

       /**
     * Display messages.
     *
     * @return \Illuminate\Http\Response
     */
    public function messages()
    {
        return view('messages');
    } 

         /**
     * Display Job Details.
     *
     * @return \Illuminate\Http\Response
     */
    public function jobDetails()
    {
        return view('jobDetails');
    }

         /**
     * View Artisan.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewArtisan()
    {
        return view('viewArtisan');
    }

        /**
     * Send Message page.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendMessage()
    {
        return view('sendMessage');
    }

       /**
     * Send Message page.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewClient()
    {
        return view('viewClient');
    }

     /**
     * Display the adminlogin page.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminlogin()
    {
        return view('admin.adminlogin');
    } 

     /**
     * Display the all Artisan for the admin.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminsAllArtisan()
    {
        return view('admin.allArtisan');
    } 

     /**
     * Display specified Artisan profile for the admin.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminsViewArtisan()
    {
        return view('admin.viewArtisan');
    } 

     /**
     * Display all posted jobs to the admin
     *
     * @return \Illuminate\Http\Response
     */
    public function adminsallJobs()
    {
        return view('admin.allJobs');
    } 

     /**
     * Display job details to admin
     *
     * @return \Illuminate\Http\Response
     */
    public function adminsJobDetails()
    {
        return view('admin.jobDetails');
    } 

    /**
     * Display All clients to admin
     *
     * @return \Illuminate\Http\Response
     */
    public function adminsAllClients()
    {
        return view('admin.allClients');
    } 

    /**
     * Display clients profile to the admin
     *
     * @return \Illuminate\Http\Response
     */
    public function adminsViewClient()
    {
        return view('admin.viewClient');
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
