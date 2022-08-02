<?php

namespace App\Imports;

use App\Models\TB_STAF;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

HeadingRowFormatter::default('none');

class TB_STAF_Import implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new TB_STAF([
            //
            'kategori_staf' => $row['KATEGORI_STAF'],
            'nokp' => $row['NOKP'],
            'nokp_lain' => $row['NOKP_LAIN'],
            'nama' => $row['NAMA'],
            'gelaran' => $row['GELARAN'],
            'jantina' => $row['JANTINA'],
            'tarikh_lahir' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['TARIKH_LAHIR']),
            'negeri_lahir' => $row['NEGERI_LAHIR'],
            'agama' => $row['AGAMA'],
            'keturunan' => $row['KETURUNAN'],
            'taraf_perkahwinan' => $row['TARAF_PERKAHWINAN'],
            'status_warganegara' => $row['STATUS_WARGANEGARA'],
            'kump_darah' => $row['KUMP_DARAH'],
            'no_fail_peribadi' => $row['NO_FAIL_PERIBADI'],
            'no_kwsp' => $row['NO_KWSP'],
            'no_cukai' => $row['NO_CUKAI'],
            'jenis_guru' => $row['JENIS_GURU'],
            'status' => $row['STATUS'],
            'warganegara' => $row['WARGANEGARA'],
            'id_institusi' => $row['ID_INSTITUSI'],
            'no_daftar_oku' => $row['NO_DAFTAR_OKU'],

        ]);
    }
}