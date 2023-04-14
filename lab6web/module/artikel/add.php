<?php

$database = new Database();
if (isset($_POST['submit'])) {
    $data = [
        'nim' => $_POST['nim'],
        'nama' => $_POST['nama'],
        'gender' => $_POST['gender'],
        'hobi' => $_POST['hobi']
    ];
    $database->insert("tb_nama", $data);
}

$form = new Form("", "submit");
$form->addField("nim", "Nim");
$form->addField("nama", "Nama");
$form->addField("gender", "Gender");
$form->addField("hobi", "Hobi");
$form->displayForm();
