<?php
$submodule = (isset($_GET['sm'])) ? $_GET['sm'] : 'view';
switch ($submodule){
    case 'view':
        include('siswa/view.php');
        break;

    case 'add':
        include('siswa/add.php');
        break;

    case 'save':
        include('siswa/save.php');
        break;

    case 'edit':
        include('siswa/edit.php');
        break;

    case 'update':
        include('siswa/update.php');
        break;

    case 'delete':
        include('siswa/delete.php');
        break;

    default:
        include('takada.php');
        break;       
}