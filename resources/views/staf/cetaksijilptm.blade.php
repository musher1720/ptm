@extends('layouts.master')

@section('content')
    <section class="scrollable wrapper" style="top:120px;">

        <div class="tab-content">
            <div class="panel">
                <div class="step-content">

                    <div class="form-group">
                        <div class="col-sm-4">
                            <label>No Kad Pengenalan</label>
                            <form method="POST" action="{{ route('staf.semaksijilptm') }}" enctype="multipart/form-data">
                                @csrf

                                <input type="text" placeholder="eg: 870621235363" class="bg-focus form-control"
                                    data-required="true" id="nokp" name="nokp">

                        </div>
                        <div style="padding-top:23px;padding-left:15px;"><input type="submit" value="Papar"
                                class="btn btn-primary spinner-up" name='papar'></div>

                        </form>
                    </div>
                </div>
            </div>
            <?php
                if(isset($nokp)){
             ?>
            <div class="panel">
                <div class="step-content">
                    <div>

                        <table>
                            @foreach ($user as $users)
                                <tr>
                                    <td valign='top'><b>Nama</b></td>
                                    <td valign='top'>:</td>
                                    <td style='padding-left:4px;'>{{ $users->nama ?? null }}</td>
                                </tr>
                                <tr>
                                    <td><b>No. K/P</b> </td>
                                    <td>:</td>
                                    <td style='padding-left:4px;'>{{ $users->no_kp ?? null }}</td>
                                </tr>
                                <tr>
                                    <td valign='top'><b>Pengelola</b> </td>
                                    <td valign='top'>:</td>
                                    <td style='padding-left:4px;'>
                                        {{ $users->nama_institusi ?? null }}</td>
                                </tr>
                                <tr>
                                    <td><b>No. Siri PTM</b> </td>
                                    <td>:</td>
                                    <td style='padding-left:4px;'>{{ $users->no_siri ?? null }}</td>
                                </tr>
                                <tr>
                                    <td valign='top'><b>Tarikh</b></td>
                                    <td valign='top'>:</td>
                                    <td style='padding-left:4px;'>{{ $users->tarikh_mula ?? null }} -
                                        {{ $users->tarikh_tamat ?? null }}</td>
                                </tr>
                                <tr>
                                    <td><b>Keputusan</b></td>
                                    <td>:</td>
                                    <td style='padding-left:4px;'>{{ $users->keputusan ?? null }}</td>
                                </tr>
                            @endforeach
                        </table>


                        <?php
           if($keputusan =="LULUS"){
           ?>
                        <div style="padding-left:33.5%;"><a href="./05/printSijil/<?php echo $noKP; ?>" target="_blank"
                                class="btn btn-white" style="width:100px;" />
                            <i class="icon-print text"></i> <span class="text">Cetak</span></a>
                        </div>
                    </div>
                    <?php
            }
            ?>


                </div>
            </div>
        </div>

        <?php
         }elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
         ?>

        <div class="panel">
            <div class="step-content">
                <div style="color:red;font-weight:bold;">
                    Maaf, tiada rekod dijumpai dalam pangkalan data.

                </div>
            </div>
        </div>

        <?php
         }else{

         }
         ?>

    </section>
@endsection
