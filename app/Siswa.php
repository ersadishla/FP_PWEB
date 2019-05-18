<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
	protected $table = 'siswas';

	public $primaryKey = 'id';

	protected $fillable = [
            'nik',
            'nama',
            'agama',
            'tempat_lahir',
            'tanggal_lahir',
            'jeniskelamin',
            'alamat',
            'provinsi',
            'kota',
            'kecamatan',
            'kelurahan',
            'telepon',

            'ayah',
            'ibu',
            'wali',

            'sekolah_asal',
            'sekolah1',
            'sekolah2',
            'sekolah3',
            
  	];
    public function user(){
        return $this->belongsTo('App\User');
    }
    //
}
