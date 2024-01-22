<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#searchInput').on('input', function () {
                var searchText = $(this).val().toLowerCase();
                var notFound = true;

                $('.card').each(function () {
                    var cardTitle = $(this).find('.card-title').text().toLowerCase();
                    if (cardTitle.includes(searchText)) {
                        $(this).show();
                        notFound = false;
                    } else {
                        $(this).hide();
                    }
                });

                if (notFound && searchText.length > 0) {
                    $('.not-found').show();
                } else {
                    $('.not-found').hide();
                }
            });
        });
    </script>

    <script>
        function goToTransaction(idMakanan) {
            window.location.href = "Transaksi.php?kode=" + idMakanan;
        }

        function handleFavoriteIconClick(event) {
            event.stopPropagation();
        }
    </script>