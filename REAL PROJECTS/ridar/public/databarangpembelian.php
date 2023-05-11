<?php include('template/header.php') ?>
<div class="border border-slate-300 shadow-lg mx-5 rounded-md">
    <h2 class="bg-[#DEE4EF] px-3 py-2">Data Barang Pembelian</h2>
    <div class="flex justify-between bg-slate-200 px-3 py-3">
        <select name="" id="" class="border border-slate-300">
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="35">35</option>
        </select>
        <div>
            <label for="search">search</label>
            <input type="text" id="search" class="outline-none border border-slate-300 rounded-sm focus:shadow-[0_0_3px_2px_] focus:shadow-blue-300" />
        </div>
    </div>
    <div class="table w-full pl-3 pr-3">
        <div class="table-header-group">
            <div class="table-row">
                <div class="table-cell py-3 text-left">No</div>
                <div class="... table-cell text-left">Nama Barang</div>
                <div class="... table-cell text-left">Satuan</div>
                <div class="... table-cell text-left">Harga Beli</div>
                <div class="... table-cell text-left">Item</div>
                <div class="... table-cell text-left">Aksi</div>
            </div>
        </div>
        <div class="table-row-group">
            <div class="table-row">
                <div class="table-cell py-2">1</div>
                <div class="... table-cell">Adidas</div>
                <div class="... table-cell">pcs</div>
                <div class="... table-cell">500000</div>
                <div class="... table-cell">Sepatu</div>
                <div class=" table-cell">
                    <button class="bg-slate-200 rounded-md px-2">edit</button>
                    <button class="bg-red-600 rounded-md px-2 text-white">hapus</button>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 flex justify-between px-3 pb-7">
        Showing 0 to 0 of entires
        <div class="flex">
            <a href="" class="border border-slate-300 py-1 px-2 rounded-l-sm">Previous</a>
            <a href="" class="border border-slate-300 py-1 px-2 rounded-r-sm">Next</a>
        </div>
    </div>
</div>


<?php include('template/footer.php') ?>