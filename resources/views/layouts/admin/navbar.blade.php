@section('navbar')
    <nav class="col-md-3 col-lg-2 d-md-block sidebar">
        <h4 class="text-white text-center mb-4">Bank Sampah</h4>
        <a href="index.php" class="<?php echo !isset($_GET['page']) ? 'active' : ''; ?>">
            <i class="bi bi-speedometer2"></i> Dashboard
        </a>
        <a href="index.php?page=transaksi" class="<?php echo isset($_GET['page']) && $_GET['page'] == 'transaksi' ? 'active' : ''; ?>">
            <i class="bi bi-cash-coin"></i> Transaksi
        </a>
        <a href="index.php?page=data_transaksi" class="<?php echo isset($_GET['page']) && $_GET['page'] == 'data_transaksi' ? 'active' : ''; ?>">
            <i class="bi bi-cash-coin"></i> Data Transaksi
        </a>
        <a href="index.php?page=anggota" class="<?php echo isset($_GET['page']) && $_GET['page'] == 'anggota' ? 'active' : ''; ?>">
            <i class="bi bi-people"></i> Data Anggota
        </a>
        <a href="index.php?page=sampah" class="<?php echo isset($_GET['page']) && $_GET['page'] == 'sampah' ? 'active' : ''; ?>">
            <i class="bi bi-recycle"></i> Jenis Sampah
        </a>
        <a href="index.php?page=laporan" class="<?php echo isset($_GET['page']) && $_GET['page'] == 'laporan' ? 'active' : ''; ?>">
            <i class="bi bi-file-earmark-text"></i> Laporan
        </a>
        <a href="logout.php">
            <i class="bi bi-box-arrow-right"></i> Logout
        </a>
    </nav>
@endsection
