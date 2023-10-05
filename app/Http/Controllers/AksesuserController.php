<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Aksesuser;
use Illuminate\Http\Request;

class AksesuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aksesusers = Aksesuser::latest()->paginate(5);
    
        return view('aksesusers.index',compact('aksesusers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aksesusers.create');
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
            'id_nama_user' => 'required',
            'id_username' => 'required',
            'id_email' => 'required',
            'id_peran' => 'required',
        ]);

        DB::table('aksesusers')->insert([
            'id_nama_user' => $request->id_nama_user,
            'id_username' => $request->id_username,
            'id_email' => $request->id_email,
            'id_peran' => $request->id_peran,
        ]);
        
        return redirect('/aksesusers')->with('success', 'Created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Aksesuser $aksesuser)
    {
        return view('aksesusers.show',compact('aksesuser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Aksesuser $aksesuser)
    {
        return view('aksesusers.edit',compact('aksesuser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aksesuser $aksesuser)
    {
        $request->validate([
            'id_nama_user' => 'required',
            'id_username' => 'required',
            'id_email' => 'required',
            'id_peran' => 'required',
        ]);

        $aksesuser->update($request->all());

        return redirect()->route('aksesusers.index')
            ->with('success', 'Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aksesuser $aksesuser)
    {
        return redirect()->route('aksesusers.index')
                        ->with('success','Deleted successfully');
    }
}
