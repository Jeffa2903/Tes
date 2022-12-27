<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiket=DB::table('tiket')
        ->orderby('status')
        ->paginate(20);

        return view('index',['tes'=>$tiket]);

    }

    public function check($id_tiket){
        DB::table('tiket')
        ->where('id_tiket',$id_tiket)
        ->update(
            [
                'status'=>1
            ]
            );
        return back();
    }


    public function cari(Request $request){

        $cari=$request->search;
        $tiket=DB::table('tiket')
        ->where('id_tiket','LIKE','%'.$cari.'%')
        ->paginate(20);

        return view('index',['tes'=>$tiket]);
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


        $max=DB::table('tiket')
        ->max('id_tiket');

        $max1=(int)substr($max ,8,4);
        $date=(int)substr($max ,2,6);
        $datenow=date('ymd');


        if($date!=$datenow){
            $max1="AX".$datenow.sprintf("%03s",0);
        }else{
            $max1="AX".$datenow.sprintf("%03s",$max1+1);
        }

        $tiket=DB::table('tiket')
        ->insert(
            [
                'id_tiket'=>$max1,
                'nama'=>$request->nama,
                'email'=>$request->email,
                'no_telfon'=>$request->no,
                'status'=>1
            ]
            );

        $nama=$request->nama;
        $email=$request->email;
        $notel=$request->no;
        $t=$max1;
        return view('nomor',['t'=>$t,'nama'=>$nama,'email'=>$email,'no'=>$notel]);


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
    public function edit($id_tiket)
    {
        $tiket=DB::table('tiket')
        ->where('id_tiket',$id_tiket)
        ->first();

        return view('update',compact('tiket'));
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
    public function destroy($id_tiket)
    {
        DB::table('tiket')
        ->where('id_tiket',$id_tiket)
        ->delete();
        return redirect('/indextiket');
    }
}
