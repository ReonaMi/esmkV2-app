<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use App\Models\Pengelola;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SuperadminController extends Controller
{
    public function index(){
        $title = 'Dashboard Superadmin';
        $jumlahSiswaQuery = Siswa::count();
        $jumlahGuru = Guru::count();
        $jumlahPengelolaQuery = Pengelola::join('model_has_roles',
            'pengelola.id_pengelola',
            'model_has_roles.model_id')
            ->join('roles', 'model_has_roles.role_id', 'roles.id')
            ->where('guard_name', '=', 'pengelola')
            ->where('name', '!=', 'superadmin')
            ->count();

        return view('superadmin.dashboardSuperadmin', [
            'title' => $title,
            'jumlahSiswa' => $jumlahSiswaQuery,
            'jumlahGuru' => $jumlahGuru,
            'jumlahPengelola' => $jumlahPengelolaQuery
        ]);
    }
}
