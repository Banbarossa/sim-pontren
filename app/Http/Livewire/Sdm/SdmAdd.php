<?php

namespace App\Http\Livewire\Sdm;

use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Sdm;
use App\Models\Village;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class SdmAdd extends Component
{
    public $nama, $nik, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $status, $pendidikan_terakhir, $no_hp,  $alamat,  $avatar;

    public $province_id;
    public $regency_id;
    public $district_id;
    public $village_id;


    public $tanggal_masuk;

    use WithFileUploads;
    use LivewireAlert;

    protected $rules = [
        'nama' => 'required|min:3',
        'nik' => 'digits:16|numeric',
        'tanggal_lahir' => 'date',
        'jenis_kelamin' => 'required',
        'status' => 'required',
        'tanggal_masuk' => 'date',
    ];

    public function render()
    {
        $province = Province::orderBy('name', 'asc')->get();

        //tampilkan kabupaten
        if ($this->province_id) {
            $regency = Regency::where('province_id', $this->province_id)->orderBy('name', 'asc')->get();
        } else {
            $regency = [];
        }

        // tampilkan kecamatan
        if ($this->regency_id) {
            $district = District::where('regency_id', $this->regency_id)->orderBy('name', 'asc')->get();
        } else {
            $district = [];
        }

        // tampilkan desa
        if ($this->district_id) {
            $village = Village::where('district_id', $this->district_id)->orderBy('name', 'asc')->get();
        } else {
            $village = [];
        }


        return view('livewire.sdm.sdm-add', [
            'provinces' => $province,
            'regencies'    => $regency,
            'districts' => $district,
            'villages' => $village,
        ]);
    }

    public function store()
    {
        $this->validate();

        if ($this->avatar) {
            $avatarName = $this->avatar->store('sdm', 'public');
        } else {
            $avatarName = "";
        }
        $unik_id = Str::random(40);


        Sdm::Create([
            'nama' => $this->nama,
            'unik_id' => $unik_id,
            'nik' => $this->nik,
            'tempat_lahir' => $this->tempat_lahir,
            'tanggal_lahir' => $this->tanggal_lahir,
            'jenis_kelamin' => $this->jenis_kelamin,
            'status' => $this->status,
            'pendidikan_terakhir' => $this->pendidikan_terakhir,
            'no_hp' => $this->no_hp,
            'tanggal_masuk' => $this->tanggal_masuk,
            'province_id' => $this->province_id,
            'regency_id' => $this->regency_id,
            'district_id' => $this->district_id,
            'village_id' => $this->village_id,
            'alamat' => $this->alamat,
            'avatar' => $avatarName,
        ]);
        $this->resetForm();
        $this->alert('success', 'Data berhasil ditambahkan', [
            'position' => 'center'
        ]);
        return redirect('/sdm');
    }


    public function resetForm()
    {
        $this->nama = "";
        $this->tempat_lahir = "";
        $this->tanggal_lahir = "";
        $this->nik = "";
        $this->jenis_kelamin = "";
        $this->status = "";
        $this->pendidikan_terakhir = "";
        $this->no_hp = "";
        $this->tanggal_masuk = "";
        $this->province_id = "";
        $this->regency_id = "";
        $this->district_id = "";
        $this->village_id = "";
        $this->alamat = "";
        $this->avatar = "";
    }
}
