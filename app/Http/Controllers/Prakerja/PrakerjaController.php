<?php

namespace App\Http\Controllers\Prakerja;

use App\Models\Prakerja;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Prakerja\PrakerjaRequest;
use App\Http\Requests\Prakerja\PrakerjaUpdateRequest;

class PrakerjaController extends Controller
{
    public function index(){
        $data['prakerja'] = Prakerja::get();
        return view ('prakerja/prakerja',$data);
    }

    public function tambah(){
        return view ('prakerja/tambah');
    }

    public function tambahPrakerja(PrakerjaRequest $p){
        if($p->validated()){
            $foto_user = $p->foto_user->getClientOriginalName();
            $p->foto_user->move('foto_user/',$foto_user); 

            Prakerja::create([
                'nama' => $p->nama,
                'email' => $p->email,
                'telpon' => $p->telpon,
                'alamat' => $p->alamat,
                'pendidikan_terakhir' => $p->pendidikan_terakhir,
                'foto_user' => $foto_user
            ]);
            return redirect('prakerja')->with('pesan', 'Prakerja berhasil ditambahkan');
        }
    }

    public function editPrakerja($id){
        $data['prakerja'] = Prakerja::where('id',$id)->first();
        return view ('prakerja/edit',$data);
    }

    public function updatePrakerja(PrakerjaUpdateRequest $p, $id){
        if($p->validated()){
            if($p->foto_user){
                $cek = Prakerja::where('id',$id)->first();
                if(File::exists(public_path('foto_user/'.$cek->foto_user))){
                    File::delete(public_path('foto_user/'.$cek->foto_user));
                }
                $foto_user = $p->foto_user->getClientOriginalName();
                $p->foto_user->move('foto_user/',$foto_user);

                $data['foto_user'] = $foto_user;
            }
            $data['nama'] = $p->nama;
            $data['email'] = $p->email;
            $data['telpon'] = $p->telpon;
            $data['alamat'] = $p->alamat;
            $data['pendidikan_terakhir'] = $p->pendidikan_terakhir;

            Prakerja::where('id',$id)->update($data);
            return redirect('prakerja')->with('pesan','Data prakerja berhasil di update');
        }
    }

    public function hapusPrakerja($id){
        Prakerja::where('id',$id)->delete();
        return back()->with('pesan','Prakerja berhasil di hapus');
    }
}
