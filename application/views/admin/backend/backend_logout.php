<?php

// file yang dipanggil ketika tombol logout diklik

// membuka session untuk mengolah data akun yang login
session_start();

// menghapus semua data session untuk mengolah data akun yang login
session_destroy();

// mengalihkan ke halaman index
?>
    <script type="text/javascript">
        window.location = "../login.php";
    </script>

<?php

?>
