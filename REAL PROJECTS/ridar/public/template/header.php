<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ridar</title>
    <!-- tailwind watch -->
    <link rel="stylesheet" href="../dist/output.css">
    <!-- custom css -->
    <link rel="stylesheet" href="../src/custom.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="../src/fontawesome/css/all.css">
</head>

<body>
    <!-- header -->
    <header class="w-full py-4 bg-[#1f2d5b] flex justify-between">
        <h1 class="text-white pl-5 text-2xl font-bold">RIDAR SHOES</h1>
        <div class="pr-5 text-white text-2xl cursor-pointer md:hidden" id="hamburger-menu">
            <i class="fas fa-regular fa-bars"></i>
        </div>
    </header>

    <div class="md:flex">
        <!-- navbar -->
        <nav class="bg-[#E2E8ED] pt-5 shadow-sm hidden md:w-1/6 md:h-screen md:block" id="side-bar">
            <ul class="">
                <li class="flex">
                    <a href="" class="side-bar">
                        <div class="mr-2">
                            <i class="fa-solid fa-gauge-high"></i>
                        </div>
                        <h2 class="">Dashboard</h2>
                    </a>
                </li>

                <li class="flex flex-col">
                    <div class="side-bar cursor-pointer">
                        <div class="mr-2 ">
                            <i class="fas fa-regular fa-money-bill"></i>
                        </div>
                        <h2 class="">Pembelian</h2>
                    </div>
                    <div class="flex flex-col text-xs">
                        <a href="" class="side-bar">
                            <div class="mr-2 ml-5">
                                <i class="fa-solid fa-cube"></i>
                            </div>
                            <h2>Data Barang pembelian</h2>
                        </a>
                        <a href="" class="side-bar">
                            <div class="mr-2 ml-5">
                                <i class="fa-solid fa-cube"></i>
                            </div>
                            <h2>Data pembelian</h2>
                        </a>
                        <a href="" class="side-bar">
                            <div class="mr-2 ml-5">
                                <i class="fa-solid fa-cube"></i>
                            </div>
                            <h2>Tambah Data</h2>
                        </a>
                    </div>
                </li>

                <li class="flex">
                    <a href="" class="side-bar">
                        <div class="mr-2 ">
                            <i class="fas fa-regular fa-money-bill"></i>
                        </div>
                        <h2 class="">Penjualan</h2>
                    </a>
                </li>

                <li class="flex">
                    <a href="" class="side-bar">
                        <div class="mr-2 ">
                            <i class="fa-solid fa-box"></i>
                        </div>
                        <h2 class="">Barang</h2>
                    </a>
                </li>

                <li class="flex">
                    <a href="" class="side-bar">
                        <div class="mr-2 ">
                            <i class="fa-solid fa-boxes-packing"></i>
                        </div>
                        <h2 class="">Supplier</h2>
                    </a>
                </li>

                <li class="flex">
                    <a href="" class="side-bar">
                        <div class="mr-2 ">
                            <i class="fa-solid fa-boxes-packing"></i>
                        </div>
                        <h2 class="">Customer</h2>
                    </a>
                </li>

                <li class="flex">
                    <a href="" class="side-bar">
                        <div class="mr-2 ">
                            <i class="fas fa-regular fa-book"></i>
                        </div>
                        <h2 class="">Laporan</h2>
                    </a>
                </li>

                <li class="flex">
                    <a href="" class="side-bar">
                        <div class="mr-2 ">
                            <i class="fas fa-regular fa-wrench"></i>
                        </div>
                        <h2 class="">Pengaturan</h2>
                    </a>
                </li>

            </ul>
        </nav>

        <section class="mt-5 w-full">