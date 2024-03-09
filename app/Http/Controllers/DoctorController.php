<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Faker\Guesser\Name;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DoctorController extends Controller
{
    public function index(Request $request)
    {
        $dokters = DB::table('dokters')
        ->when($request->input('name'), function($query, $doctor_name)
        {
            return $query->where('name', 'like', '%'.$doctor_name.'%');
        })
        ->orderBy('id', 'desc')
        ->paginate(5);
        return view('pages.Doctors.index', compact('dokters'));
    }
    public function create()
    {
        return view('pages.Doctors.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Dokter::create($data);
        return redirect()->route('doctor.index');
    }

    public function edit($id)
    {
        $dokters = Dokter::find($id);
        return view('pages.Doctors.edit', compact('dokters'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $dokters = Dokter::find($id);
        $dokters->update($data);
        return redirect()->route('Doctors.index');
    }

    public function destroy($id)
    {
        $dokters = Dokter::find($id);
        $dokters->delete();
        return redirect()->route('doctor.index');
    }
}
