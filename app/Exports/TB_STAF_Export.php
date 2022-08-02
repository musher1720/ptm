<?php

namespace App\Exports;

use App\Models\TB_STAF;
use Maatwebsite\Excel\Concerns\FromCollection;

class TB_STAF_Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TB_STAF::all();
    }

    public function headings(): array
    {
        return [

            'ID STAF',
            'KATEGORI STAF',
            'nokp',
            'nokp_lain',
            'nama',
            'gelaran',
            'jantina',
            'tarikh_lahir',
            'negeri_lahir',
            'agama',
            'keturunan',
            'taraf_perkahwinan',
            'status_warganegara',
            'kump_darah',
            'no_fail_peribadi',
            'no_kwsp',
            'no_cukai',
            'status',
            'warganegara',
            'id_institusi',
            'no_daftar_oku',

        ];
    }

    public function map($staf): array
    {
        return [

            $staf->id_staf,
            $staf->kategori_staf,
            $staf->nokp,
            $staf->nokp_lain,
            $staf->nama,
            $staf->gelaran,
            $staf->jantina,
            $staf->tarikh_lahir,
            $staf->negeri_lahir,
            $staf->agama,
            $staf->keturunan,
            $staf->taraf_perkahwinan,
            $staf->status_warganegara,
            $staf->kump_darah,
            $staf->no_fail_peribadi,
            $staf->no_kwsp,
            $staf->no_cukai,
            $staf->status,
            $staf->warganegara,
            $staf->id_institusi,
            $staf->no_daftar_oku,
        ];
    }
}
