<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = [
    'kode_barang',
    'nama_barang',
    'kategori_id',
    'stok',
    'satuan',
    'harga_beli',
    'harga_jual'
];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function barangMasuks()
    {
        return $this->hasMany(BarangMasuk::class);
    }

    public function barangKeluars()
    {
        return $this->hasMany(BarangKeluar::class);
    }

    public function getHargaBeliRupiahAttribute()
{
    return 'Rp ' . number_format(
        $this->harga_beli,
        0,
        ',',
        '.'
    );
}

public function getHargaJualRupiahAttribute()
{
    return 'Rp ' . number_format(
        $this->harga_jual,
        0,
        ',',
        '.'
    );
}
}