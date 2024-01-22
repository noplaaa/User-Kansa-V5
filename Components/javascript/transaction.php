<script>
        function hitungTotalBayar() {
            var harga = <?php echo $Harga ?>;
            var jumlah = document.getElementById("jumlahInput").value;
            var totalBayar = harga * jumlah;
            document.getElementById("totalBayarInput").value = totalBayar;
        }

        function hitungKembalian() {
            var totalBayar = document.getElementById("totalBayarInput").value;
            var nominal = document.getElementById("nominal").value;
            var kembalian = nominal - totalBayar;
            document.getElementById("kembalian").value = kembalian;
        }
    </script>