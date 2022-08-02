@extends('layouts.master')

@section('content')
    <section class="card">

        <div class="card-body">

            <div class="baseheadbg">
                <div class="row">
                    {{-- <div class="col-md-12">
                        <i class="fas fa-school"></i>&nbsp;&nbsp;{{  }}<br />


                        &nbsp;&nbsp;<span class="second_head"
                            style="font-size: 100%"><strong>{{  }}</strong></span>

                    </div> --}}
                </div>
            </div>

            <br />

            <form action="{{ route('store.daftarbaruptm') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group row">
                    <label class="col-md-2 col-form-label">NAMA</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" data-trigger="change" data-required="" placeholder="Nama"
                            style="max-width:600px;display:inline-block;" name="nama" />
                    </div>
                    <label class="col-md-2 col-form-label">NO. K/P</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" data-trigger="change" data-required="true"
                            placeholder="No. Kad Pengenalan" style="max-width:300px;display:inline-block;" name="nokp" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label">NO. K/P LAIN</label>
                    <div class="col-md-4">

                        <input type="text" class="form-control" data-trigger="change" data-required="true"
                            placeholder="No. Kad Pengenalan lain (jika ada)" style="max-width:300px;display:inline-block;"
                            name="nokplama">

                    </div>

                    <label class="col-md-2 col-form-label" for="tarikh_lahir">TARIKH LAHIR</label>
                    <div class="col-md-4">

                        <input type="text" class="form-control" placeholder="KLIK UNTUK PAPAR KALENDAR"
                            style="max-width:300px;display:inline-block;" id="tarikh_lahir" data-toggle="datetimepicker"
                            name="tarikh_lahir" data-target="#tarikh_lahir" data-validation="[DATE]" autocomplete="off"
                            style="width: 200px;" />

                    </div>
                </div>



                {{-- value="{{ \Carbon\Carbon::parse($datamaklumat->tarikh_lahir)->format('d/m/Y') }}" /> --}}





                <div class="form-group row">
                    <label class="col-md-2 col-form-label">GELARAN</label>
                    <div class="col-md-4">
                        <select style="max-width:300px;display:inline-block;" class="form-control select2" id="gelaran"
                            name="gelaran">
                            <option value="">Sila Pilih</option>
                            @foreach ($gelaran as $gelarans)
                                <option value="{{ $gelarans->kod_gelaran }}"
                                    {{ (!empty($staf->kodgelaran) == null ? '' : $staf->kodgelaran->kod_gelaran == $gelarans->kod_gelaran) ? 'selected="yes"' : '' }}>
                                    {{ $gelarans->gelaran }}</option>
                            @endforeach
                        </select>

                    </div>
                    <label class="col-md-2 col-form-label">JANTINA</label>
                    <div class="col-md-4">

                        <select style="max-width:300px;display:inline-block;" class="form-control select2" id="jantina"
                            name="jantina">
                            <option value="">Sila Pilih</option>
                            @foreach ($jantina as $jantinas)
                                <option value="{{ $jantinas->kod_jantina }}"
                                    {{ (!empty($staf->kodjantina) == null ? '' : $staf->kodjantina->kod_jantina == $jantinas->kod_jantina) ? 'selected="yes"' : '' }}>
                                    {{ $jantinas->jantina }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label">NEGERI LAHIR</label>
                    <div class="col-md-4">

                        <select style="max-width:300px;display:inline-block;" class="form-control select2" id="negeri_lahir"
                            name="negeri_lahir">
                            <option value="">Sila Pilih</option>
                            @foreach ($negeri as $negeris)
                                <option value="{{ $negeris->kod_negeri }}"
                                    {{ (!empty($staf->kodnegeri) == null ? '' : $staf->kodnegeri->kod_negeri == $negeris->kod_negeri) ? 'selected="yes"' : '' }}>
                                    {{ $negeris->negeri }}</option>
                            @endforeach
                        </select>
                    </div>

                    <label class="col-md-2 col-form-label">AGAMA</label></label>
                    <div class="col-md-4">
                        <select style="max-width:300px;display:inline-block;" name="agama" class="form-control select2"
                            id="agama">
                            <option value="">Sila Pilih</option>
                            @foreach ($agama as $agamas)
                                <option value="{{ $agamas->kod_agama }}"
                                    {{ (!empty($staf->kodagama) == null ? '' : $staf->kodagama->kod_agama == $agamas->kod_agama) ? 'selected="yes"' : '' }}>
                                    {{ $agamas->agama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">

                    <label class="col-md-2 col-form-label">KETURUNAN</label>
                    <div class="col-md-4">

                        <select style="max-width:300px;display:inline-block;" class="form-control select2" id="keturunan"
                            name="keturunan">
                            <option value="">Sila Pilih</option>
                            @foreach ($keturunan as $keturunans)
                                <option value="{{ $keturunans->kod_keturunan }}"
                                    {{ (!empty($staf->kodketurunan) == null ? '' : $staf->kodketurunan->kod_keturunan == $keturunans->kod_keturunan) ? 'selected="yes"' : '' }}>
                                    {{ $keturunans->keturunan }}</option>
                            @endforeach
                        </select>

                    </div>

                    <label class="col-md-2 col-form-label">TARAF PERKAHWINAN</label>
                    <div class="col-md-4">

                        <select style="max-width:300px;display:inline-block;" class="form-control select2"
                            id="taraf_perkahwinan" name="taraf_perkahwinan">
                            <option value="">Sila Pilih</option>
                            @foreach ($tarafPerkahwinan as $tarafPerkahwinans)
                                <option value="{{ $tarafPerkahwinans->kod_taraf_perkahwinan }}"
                                    {{ (!empty($staf->kodtarafperkahwinan) == null ? '' : $staf->kodtarafperkahwinan->kod_taraf_perkahwinan == $tarafPerkahwinans->kod_taraf_perkahwinan) ? 'selected="yes"' : '' }}>
                                    {{ $tarafPerkahwinans->taraf_perkahwinan }}</option>
                            @endforeach
                        </select>

                    </div>
                </div>

                <div class="form-group row">

                    <label class="col-md-2 col-form-label">WARGANEGARA</label>
                    <div class="col-md-4">

                        <select style="max-width:300px;display:inline-block;" class="form-control select2"
                            id="warganegara" name="warganegara">
                            <option value="">Sila Pilih</option>
                            @foreach ($warganegara as $warganegaras)
                                <option value="{{ $warganegaras->kod_status_warganegara }}"
                                    {{ (!empty($staf->warganegara) == null ? '' : $staf->warganegara->kod_status_warganegara == $warganegaras->kod_status_warganegara) ? 'selected="yes"' : '' }}>
                                    {{ $warganegaras->keterangan2 }}</option>
                            @endforeach
                        </select>

                    </div>

                    <label class="col-md-2 col-form-label">STATUS WARGANEGARA</label>
                    <div class="col-md-4">

                        <select style="max-width:300px;display:inline-block;" class="form-control select2"
                            id="status_warganegara" name="status_warganegara">
                            <option value="">Sila Pilih</option>
                            @foreach ($statusWarganegara as $statusWarganegaras)
                                <option value="{{ $statusWarganegaras->kod_status_warganegara }}"
                                    {{ (!empty($staf->kodstatuswarganegara) == null ? '' : $staf->kodstatuswarganegara->kod_status_warganegara == $statusWarganegaras->kod_status_warganegara) ? 'selected="yes"' : '' }}>
                                    {{ $statusWarganegaras->status_warganegara }}</option>
                            @endforeach
                        </select>

                    </div>
                </div>

                <div class="form-group row">

                    <label class="col-md-2 col-form-label">KUMPULAN DARAH</label>
                    <div class="col-md-4">

                        <select style="max-width:300px;display:inline-block;" class="form-control select2"
                            id="kump_darah" name="kump_darah">
                            <option value="">Sila Pilih</option>
                            @foreach ($kumpDarah as $kumpDarahs)
                                <option value="{{ $kumpDarahs->kod_kump_darah }}"
                                    {{ (!empty($staf->kodkumpdarah) == null ? '' : $staf->kodkumpdarah->kod_kump_darah == $kumpDarahs->kod_kump_darah) ? 'selected="yes"' : '' }}>
                                    {{ $kumpDarahs->kump_darah }}</option>
                            @endforeach
                        </select>

                    </div>

                    <label class="col-md-2 col-form-label">INSTITUSI</label>
                    <div class="col-md-4">

                        <select style="max-width:300px;display:inline-block;" class="form-control select2"
                            id="IDinstitusi" name="IDinstitusi">
                            <option value="">Sila Pilih</option>
                            @foreach ($institusi as $institusis)
                                <option value="{{ $institusis->id_institusi }}">
                                    {{ (!empty($staf->idinstitusi) == null ? '' : $staf->idinstitusi->id_institusi == $institusis->id_institusi) ? 'selected="yes"' : '' }}>
                                    {{ $institusis->nama_institusi }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label">KATEGORI STAF</label>
                    <div class="col-md-4">

                        <select style="max-width:300px;display:inline-block;" class="form-control select2"
                            id="kategori_staf" name="kategori_staf">
                            <option value="">Sila Pilih</option>
                            @foreach ($kategoriStaf as $kategoriStafs)
                                <option value="{{ $kategoriStafs->kod_kategori_staf }}"
                                    {{ (!empty($staf->kodkategoristaf) == null ? '' : $staf->kodkategoristaf->kod_kategori_staf == $kategoriStafs->kod_kategori_staf) ? 'selected="yes"' : '' }}>
                                    {{ $kategoriStafs->kategori_staf }}</option>
                            @endforeach
                        </select>

                    </div>

                    <label class="col-md-2 col-form-label">JENIS GURU</label>
                    <div class="col-md-4">

                        <select style="max-width:300px;display:inline-block;" class="form-control select2"
                            id="jenis_guru" name="jenis_guru">
                            <option value="">Sila Pilih</option>
                            @foreach ($jenisGuru as $jenisGurus)
                                <option value="{{ $jenisGurus->kod_jenis_guru }}"
                                    {{ (!empty($staf->kodjenisguru) == null ? '' : $staf->kodjenisguru->kod_jenis_guru == $jenisGurus->kod_jenis_guru) ? 'selected="yes"' : '' }}>
                                    {{ $jenisGurus->jenis_guru }}</option>
                            @endforeach
                        </select>

                    </div>


                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label">NO DAFTAR OKU</label>
                    <div class="col-md-4">

                        <input type="text" class="form-control" data-trigger="change" data-required=""
                            data-type="url" placeholder="No Daftar OKU" style="max-width:300px;display:inline-block;"
                            name="no_daftar_oku" id="no_daftar_oku" />

                    </div>

                    <label class="col-md-2 col-form-label">NO FAIL PERIBADI</label>
                    <div class="col-md-4">

                        <input type="text" class="form-control" data-trigger="change" data-required=""
                            data-type="url" placeholder="NO FAIL PERIBADI" style="max-width:300px;display:inline-block;"
                            name="no_fail_peribadi" id="no_fail_peribadi" />

                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label">NO KWSP</label>
                    <div class="col-md-4">

                        <input type="text" class="form-control" data-trigger="change" data-required=""
                            data-type="url" placeholder="NO KWSP" style="max-width:300px;display:inline-block;"
                            name="no_kwsp" id="no_kwsp" />

                    </div>

                    <label class="col-md-2 col-form-label">NO CUKAI</label>
                    <div class="col-md-4">

                        <input type="text" class="form-control" data-trigger="change" data-required=""
                            data-type="url" placeholder="NO CUKAI" style="max-width:300px;display:inline-block;"
                            name="no_cukai" id="no_cukai" />

                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label">STATUS (AKTIF)</label>
                    <div class="col-md-4">

                        <select style="max-width:300px;display:inline-block;" class="form-control select2" id="status"
                            name="status">
                            <option value="">Sila Pilih</option>
                            @foreach ($status as $statuss)
                                <option value="{{ $statuss->kod_status }}"
                                    {{ (!empty($staf->kodstatus) == null ? '' : $staf->kodstatus->kod_status == $statuss->kod_status) ? 'selected="yes"' : '' }}>
                                    {{ $statuss->status }}</option>
                            @endforeach
                        </select>

                    </div>
                </div>

                <div class="form-actions" align="center">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <button type="button"
                                class="btn btn-primary btn-rounded btn-danger width-150 swal-btn-cancel"
                                data-dismiss="modal" onclick="window.history.back();">Batal</button>
                            <button type="reset" class="btn btn-default btn-rounded remove-error btn-info width-150">Set
                                Semula</button>
                            <button type="submit" data-target="#simpan"
                                class="btn btn-primary btn-rounded width-150">Simpan</button>

                        </div>
                    </div>
                </div>
            </form>
        @endsection

        @section('script')
            <script>
                $('#tarikh_lahir').datetimepicker({
                    timepicker: false,
                    // mask: true,
                    format: 'd/m/Y'
                });
            </script>

            <script>
                $(document).ready(function() {
                    $(".select2").select2();
                });
            </script>



            {{-- <script>
                        $(document).ready(function() {

                            //////////////////////////KEMASKINI
                            $('#kemaskini-profil').on('submit', function(e) {
                                e.preventDefault();

                                var form = $('#kemaskini-profil').serialize();
                                var url = $('#kemaskini-profil').attr('action');

                                swal({
                                        title: 'Adakah Anda Pasti?',
                                        text: 'Maklumat akan dikemaskini',
                                        type: 'info',
                                        showCancelButton: true,
                                        confirmButtonClass: 'btn-info',
                                        confirmButtonText: 'Ya, Kemaskini',
                                        cancelButtonText: 'Tidak',
                                        closeOnConfirm: false,
                                        closeOnCancel: false,
                                    },
                                    function(isConfirm) {
                                        if (isConfirm) {
                                            $.ajax({
                                                type: 'POST',
                                                url: url,
                                                data: form,
                                                dataType: 'html',
                                                success: function(data) {
                                                    //console.log(data);

                                                    swal({
                                                            title: 'Maklumat Dikemaskini!',
                                                            text: 'Maklumat telah dikemaskini!',
                                                            type: 'success',
                                                            confirmButtonClass: 'btn-success',
                                                            confirmButtonText: 'Berjaya',

                                                        },

                                                        function() {
                                                            location.href =
                                                                "{{ route('profil.am') }}"
                                                        }

                                                    );

                                                    $('#simpan').modal(
                                                        'hide'); //hide modal semasa
                                                }
                                            });

                                        } else {
                                            swal({
                                                    title: 'Batal Kemaskini Maklumat',
                                                    text: 'Data anda tidak dikemaskini :)',
                                                    type: 'warning',
                                                    confirmButtonClass: 'btn-warning',
                                                },

                                                function() {
                                                    location.href =
                                                        "{{ route('profil.am') }}"
                                                }
                                            );
                                        }
                                    },
                                );

                            });

                        });
                    </script> --}}
        @endsection
