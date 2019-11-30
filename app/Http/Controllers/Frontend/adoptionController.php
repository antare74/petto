<?php

namespace App\Http\Controllers\Frontend;

use App\Adoption;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class adoptionController extends Controller
{

    public function choose()
    {
        return view('pages.adoption.choose');
    }

    public function home()
    {
        $data = Adoption::all();
        return view('home', compact('data'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data =Adoption::latest()->paginate(5);
        $data = Adoption::all();
        // dd($data);
        // return view('pages.adoption.index', compact('data'))->with('i', (request()->input('page',1 )-1) * 5);

        return view('pages.landing', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.adoption.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'         =>  'required',
            'image'         =>  'required',
            'description'   =>  'required',
        ]);

            $image = $request->file('image');

            $new_name = rand() . '.' .$image->getClientOriginalExtension();
            $image->move(public_path('images'), $new_name);
            $form_data = array(
                'title'         =>  $request->title,
                'description'   =>  $request->description,
                'image'         =>  $new_name,
            );

            Adoption::create($form_data);
            // dd($form_data);
            return redirect('/adoption/create')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Adoption  $adoption
     * @return \Illuminate\Http\Response
     */
    public function show(Adoption $adoption)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Adoption  $adoption
     * @return \Illuminate\Http\Response
     */
    public function edit(Adoption $adoption)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Adoption  $adoption
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adoption $adoption)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Adoption  $adoption
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adoption $adoption)
    {
        //
    }
}
