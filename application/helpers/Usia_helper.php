<?php
if (! function_exists('hitung_umur')) {
    function hitung_umur($tgl)
    {
        $tanggal = new DateTime($tgl);
        $today = new DateTime('umur_bayi');
        
        $years = $today->diff($tanggal)->y;
        $month = $today->diff($tanggal)->m;
        $days = $today->diff($tanggal)->d;
        return  $years . " Tahun, " . $month . " Bulan, " . $days . " Hari";
    }
}