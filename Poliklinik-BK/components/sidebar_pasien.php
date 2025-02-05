<aside class="flex flex-col w-[250px] h-[100vh] order-r-4 border-slate-600 pl-6 pr-8 py-10 sticky top-0">
        <!-- Profile -->
        <div class="flex flex-col items-center gap-3">
            <img src="../../assets/images/pasien.HEIC" alt="" width="50px" class="rounded-full">
            <h1 class="text-lg text-white">Pasien</h1>
        </div>
        <!-- Profile End -->

        <!-- Menu -->
        <div class="flex flex-col gap-5 mt-10">
            <a href="dashboard_pasien.php"
                class="flex items-center gap-3 pr-5 pl-2 py-1 rounded-lg hover:bg-[white] hover:translate-x-4 transition-all duration-300">
                <img src="../../assets/icons/dashboard-icon.svg" alt="" class="p-2 bg-[black] rounded-lg">
                <h1 class="text-black font-medium">Dashboard</h1>
            </a>
            
            <a href="daftar_poli.php"
                class="flex items-center gap-3 pr-5 pl-2 py-1 rounded-lg hover:bg-[white] hover:translate-x-4 transition-all duration-300">
                <img src="../../assets/icons/cross.svg" alt="" class="p-2 bg-[black] rounded-lg">
                <h1 class="text-black font-medium">Daftar Poli</h1>
            </a>

            <a href="riwayat_daftar.php"
                class="flex items-center gap-3 pr-5 pl-2 py-1 rounded-lg hover:bg-[white] hover:translate-x-4 transition-all duration-300">
                <img src="../../assets/icons/notebook-pen.svg" alt="" class="p-2 bg-[black] rounded-lg">
                <h1 class="text-black font-medium">Riwayat Daftar Poli</h1>
            </a>

            <a href="../../auth/logout.php"
                class="absolute bottom-7 flex items-center gap-3 pr-5 pl-2 py-1 rounded-lg hover:bg-red-500 hover:translate-x-4 transition-all duration-300">
                <img src="../../assets/icons/log-out.svg" alt="" class="p-2 rounded-lg">
                <h1 class="text-white font-medium">Log Out</h1>
            </a>

        </div>
        <!-- Menu End -->
    </aside>