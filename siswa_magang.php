<?php

$data_siswa=[];

while(true)
{
    // data siswa

    $siswa=&$data_siswa;

    // baner Aplikasi

    tampil("Data Siswa Magang TOP");
    tampil("=====================");

    // menu aplikasi


    // User memilih input menu

    $input_siswa=readline("Masukan data Siswa ?");

    // validasi
    if(!preg_match("/^[a-zA-Z]*$/",$input_siswa))
    {
        echo "Warning...!! input hanya bisa huruf..!!\n";
        continue;
    }

    // simpan data siswa

    $siswa[]=$input_siswa;

    // munculkan data siswa magang
    
    $nomor=1;

    foreach($siswa as $key)
    {
        tampil("$nomor.$key");
        $nomor++;
    }

    // Tanya user untuk memasukan data lagi


    $tanya=readline("Tambah data ?");

    if($tanya=="no")
    {
        tampil("Terima kasih");
        break;
    }
}


function tampil($pesan)
{
    echo $pesan.PHP_EOL;
}

function tanyaUser()
{
    $tanya =readline("tambah data ?");

    if($tanya=="no")
    {
        tampil("Terima kasih");
        exit;
    }
}

function menuAplikasi()
{
    $data=["input data","update data","delete data","Lihat data"];

}

// CRUD ( Crate Read Update Delete )

function inputData(&$data)
{

}

function tampilData(&$data)
{

}

function updateData(&$data)
{

}

function deleteData(&$data)
{

}
