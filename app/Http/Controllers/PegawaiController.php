<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Mpdf\Mpdf;

class PegawaiController extends Controller
{
    public function index()
    {
        //mengambil data dari table admin 
        $karyawan = DB::table('karyawan')->get();
        $name =  "Web hallo pegawai";
        //mengirim data pegawai ke view index
        return view('pegawai', ['admin' => $karyawan, 'name_web' => $name]);
    }

    public function tambah()
    {
        $name = "Tambah Data Karyawan";
        return view('pegawai-tambah', ['name_web' => $name]);
    }

    public function store(Request $request)
    {
        // var_dump($request->nama);
        // var_dump($request->nik);
        // var_dump($request->telp);
        // var_dump($request->email);
        // var_dump($request->alamat);
        // var_dump($request->jabatan);
        // var_dump($request->pendidikan);
        DB::table('karyawan')->insert([
            'nik' => $request->nik,
            'nama_karyawan' => $request->nama,
            'no_telp' => $request->telp,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'jabatan' => $request->jabatan,
            'pendidikan_terakhir' => $request->pendidikan
        ]);

        return redirect('/pegawai');
    }

    public function edit($id)
    {
        $karyawan = DB::table('karyawan')->where('id', $id)->get();
        //var_dump($id);
        //var_dump($karyawan);
        //die;
        $name = "Ubah Data Karyawan";
        //return view('pegawai-edit',['karyawan' => $karyawan, 'name_web'=>$name]);

        return view('pegawai-ubah', ['karyawan' => $karyawan, 'name_web' => $name]);
    }
    
    public function hapus($id)
    {
        //var_dump($id);
        //die;
        DB::table('karyawan')->where('id', $id)->delete();
        return redirect('/pegawai');
    }
    public function update(Request $request)
    {
        DB::table('karyawan')->where('id', $request->id)->update([
            'nik' => $request->nik,
            'nama_karyawan' => $request->nama,
            'no_telp' => $request->telp,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'jabatan' => $request->jabatan,
            'pendidikan_terakhir' => $request->pendidikan

        ]);
        return redirect('/pegawai');
    }
    public function exportPDF()
    {       
        $query = DB::table('karyawan')->get();
        $table ='';
        $no=1;
        foreach ($query as $row)
        {           
            $table .='<tr>
                                <td>'.$no++.'</td>
                                <td>'.$row->nama_karyawan.'</td>
                                <td>'.$row->email.'</td>
                                <td>'.$row->jabatan.'</td>
                                <td>'.$row->alamat.'</td>                              
                            </tr>';
        }
        $mpdf = new Mpdf(['debug'=>FALSE,'mode' => 'utf-8', 'orientation' => 'L']);
        $mpdf->WriteHTML('<table border="1" id="datatable" class="table table-striped table-bordered" style="border-collapse: collapse;">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Pekerjaan</th>
                        <th>Alamat</th>
                    </tr>
                    </thead>
                    <tbody>
                    '.$table.'                       
                    </tbody>
                </table>');
        $mpdf->Output('Jogjatech_Laporan_data_pegawai.pdf','I');
        exit;
    }
}