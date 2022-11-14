<?php

namespace App\Http\Livewire\Sdm;

use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Sdm;
use App\Models\Village;
use Illuminate\Support\Facades\File;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class SdmEdit extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public $data;
    public $nama;
    public $nik;
    public $tempat_lahir;
    public $tanggal_lahir;
    public $jenis_kelamin;
    public $status;
    public $pendidikan_terakhir;
    public $no_hp;
    public $tanggal_masuk;
    public $province_id;
    public $regency_id;
    public $district_id;
    public $village_id;
    public $alamat;
    public $avatar;

    protected $rules = [
        'nama' => 'required|min:3',
        'nik' => 'digits:16|numeric',
        'tanggal_lahir' => 'date',
        'jenis_kelamin' => 'required',
        'status' => 'required',
        'tanggal_masuk' => 'date',
    ];

    public function mount()
    {
        $this->nama = $this->data->nama;
        $this->nik = $this->data->nik;
        $this->tempat_lahir = $this->data->tempat_lahir;
        $this->tanggal_lahir = $this->data->tanggal_lahir;
        $this->jenis_kelamin = $this->data->jenis_kelamin;
        $this->status = $this->data->status;
        $this->pendidikan_terakhir = $this->data->pendidikan_terakhir;
        $this->no_hp = $this->data->no_hp;
        $this->tanggal_masuk = $this->data->tanggal_masuk;
        $this->province_id = $this->data->province_id;
        $this->regency_id = $this->data->regency_id;
        $this->district_id = $this->data->district_id;
        $this->village_id = $this->data->village_id;
        $this->alamat = $this->data->alamat;
        $this->avatar = $this->data->avatar;
    }

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

        return view('livewire.sdm.sdm-edit', [
            'provinces' => $province,
            'regencies'    => $regency,
            'districts' => $district,
            'villages' => $village,
        ]);
    }

    public function update()
    {

        $this->validate();

        $sdm = Sdm::Where('id', $this->data->id)->first();
        if ($sdm->avatar == $this->avatar) {
            $avatarName = $sdm->avatar;
        } else {
            File::delete(public_path('storage/' . $sdm->avatar));
            $avatarName = $this->avatar->store('sdm', 'public');
        }

        $sdm->update([
            'nama' => $this->nama,
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
        $this->alert('success', 'Data berhasil dirubah', ['position' => 'center']);
        return redirect('/sdm/' . $this->data->unik_id);
    }
}
