<?php

namespace App\Http\Controllers;
use App\Minhchung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class MinhchungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $query = DB::table("minhchungs");
        $query = $query->orderby("id");
        $query = $query->select("*");
        $data = $query->paginate(50); 
    //    $tieuchuans = DB::table('tieuchuans')->get();
        return view('/minhchung/minhchung',$data)->with('message','Dữ liệu được cập nhật thành công');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->isMethod('post')){
            $tenminhchung = $request->input("tenminhchung");
            $noibanhanh = $request->input("noibanhanh");
            $ngaybanhanh = $request->input("ngaybanhanh");
            $sohieu = $request->input("sohieu");
            $tieuchi_id = $request->input("tieuchi_id");
            $tieuchuan_id = $request->input("tieuchuan_id");
            $cap_id = $request->input("cap_id");
            $noidung = $request->input("noidung");
            $file = $request->input("file");
            

            $minhchung = new Minhchung();
            $minhchung->tenminhchung=$tenminhchung;
            $minhchung->noibanhanh=$noibanhanh;
            $minhchung->ngaybanhanh=$ngaybanhanh;
            $minhchung->sohieu=$sohieu;
            $minhchung->tieuchi_id=$tieuchi_id;
            $minhchung->tieuchuan_id=$tieuchuan_id;
            $minhchung->cap_id=$cap_id;
            $minhchung->noidung=$noidung;
            $minhchung->file=$file;     
            $minhchung->save(); 

            return Redirect::to("/minhchung");
        }
        return view('/minhchung/themminhchung');
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
    public function edit($id,Request $request)
    {
        $data_view = array();
        $minhchung = Minhchung::find($id);
        $data_view["minhchung"] = $minhchung;
        if($request->isMethod('post')){
            $tenminhchung = $request->input("tenminhchung");
            $noibanhanh = $request->input("noibanhanh");
            $ngaybanhanh = $request->input("ngaybanhanh");
            $sohieu = $request->input("sohieu");
            $tieuchi_id = $request->input("tieuchi_id");
            $tieuchuan_id = $request->input("tieuchuan_id");
            $cap_id = $request->input("cap_id");
            $noidung = $request->input("noidung");
            $file = $request->input("file");
            

            $minhchung->tenminhchung=$tenminhchung;
            $minhchung->noibanhanh=$noibanhanh;
            $minhchung->ngaybanhanh=$ngaybanhanh;
            $minhchung->sohieu=$sohieu;
            $minhchung->tieuchi_id=$tieuchi_id;
            $minhchung->tieuchuan_id=$tieuchuan_id;
            $minhchung->cap_id=$cap_id;
            $minhchung->noidung=$noidung;
            $minhchung->file=$file;     
            $minhchung->save(); 

            return Redirect::to("/minhchung");
        }
        return view('minhchung.suaminhchung',$data_view); 
        
    }
    public function delete($id)
    {
        $minhchungDelete = Minhchung::find($id);
        $minhchungDelete->delete();

        return redirect('/minhchung');
        alert('Đã xóa thành công minh chứng');
    }
    public function search()
    {
        
        return view('/minhchung/timminhchung');
        
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
