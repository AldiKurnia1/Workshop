<aside class="flex flex-col w-[250px] h-[100vh] order-r-4 border-slate-600 pl-6 pr-8 py-10 sticky top-0">
        <!-- Profile -->
        <div class="flex flex-col items-center gap-3">
            <img src="../../assets/images/admin.jpeg" alt="" width="50px" class="rounded-full">
            <h1 class="text-lg text-black">Admin</h1>
        </div>
        <!-- Profile End -->

        <!-- Menu -->
        <div class="flex flex-col gap-5 mt-10">
            <a href="dashboard_admin.php"
                class="flex items-center gap-3 pr-5 pl-2 py-1 rounded-lg hover:bg-[white] hover:translate-x-4 transition-all duration-300">
                <img src="../../assets/icons/dashboard-icon.svg" alt="" class="p-2 bg-[black] rounded-lg">
                <h1 class="text-black font-medium">Dashboard</h1>
            </a>

            <a href="kelola_dokter.php"
                class="flex items-center gap-3 pr-5 pl-2 py-1 rounded-lg hover:bg-[white] hover:translate-x-4 transition-all duration-300">
                <img src="../../assets/icons/stethoscope-icon.svg" alt="" class="p-2 bg-[black] rounded-lg">
                <h1 class="text-black font-medium">Dokter</h1>
            </a>

            <a href="kelola_pasien.php"
                class="flex items-center gap-3 pr-5 pl-2 py-1 rounded-lg hover:bg-[white] hover:translate-x-4 transition-all duration-300">
                <img src="../../assets/icons/pasien-icon.svg" alt="" class="p-2 bg-[black] rounded-lg">
                <h1 class="text-black font-medium">Pasien</h1>
            </a>

            <a href="kelola_poli.php"
                class="flex items-center gap-3 pr-5 pl-2 py-1 rounded-lg hover:bg-[white] hover:translate-x-4 transition-all duration-300">
                <img src="../../assets/icons/building-icon.svg" alt="" class="p-2 bg-[black] rounded-lg">
                <h1 class="text-black font-medium">Poli</h1>
            </a>

            <a href="kelola_obat.php"
                class="flex items-center gap-3 pr-5 pl-2 py-1 rounded-lg hover:bg-[white] hover:translate-x-4 transition-all duration-300">
                <img src="../../assets/icons/pill-icon.svg" alt="" class="p-2 bg-[black] rounded-lg">
                <h1 class="text-black font-medium">Obat</h1>
            </a>

            <a href="../../auth/logout.php"
                class="absolute bottom-7 flex items-center gap-3 pr-5 pl-2 py-1 rounded-lg hover:bg-red-500 hover:translate-x-4 transition-all duration-300">
                <img src="../../assets/icons/log-out.svg" alt="" class="p-2 rounded-lg">
                <h1 class="text-white font-medium">Log Out</h1>
            </a>

        </div>
        <!-- Menu End -->
    </aside>