<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('/favicon.png') }}" type="image/png">
    <title>{{ $title == config('app.name') ? $title : $title }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <link rel="stylesheet" type="text/css" href="css/xzoom.css" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.11.3/viewer.css" integrity="sha512-0IJ01kDH6fR7Oo1QEcyF+PgSLpefYXuGICVfNNoOseW6+HmsoaHzSZ7BAnwuu6BoK+nSn9WOeh0kiNjPNtGpuw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#main_category').on('change', function() {
                var subCategory = $(this).val();
                $.ajax({
                    url: '/autocomplete',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: subCategory
                    },
                    success: function(data) {
                        $('#sub_category').empty();
                        if (data.length != null) {
                            $.each(data, function(key, value) {
                                $('#sub_category').append('<option value="' + value.id_master_category + '">' + value.nama_kategori + '</option>');
                            });
                        }
                    }
                });
            });
        });
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('sweetalert::alert')
        @include('layouts.navigation')
        @if (isset($header))
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif
        <main>
            {{ $slot }}
        </main>
        <x-footer />
    </div>
</body>
<script type="text/javascript" src="https://unpkg.com/xzoom/dist/xzoom.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.11.3/viewer.js" integrity="sha512-s42K+c79ocIz9pmPOKe2FHtlrpqKLiLi+kMsd56kNszNvHLiUyDTMue+nXK9ARDOVHCujp++xeEp1/3DObtbrA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
    $('.show_confirmDelete').click(function(event) {
        var form = $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
                title: `Ooops!`,
                text: "Apakah kamu yakin ingin menghapus data?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
    });
    $('.show_confirmEdit').click(function(event) {
        var form = $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
                title: `Peringatan!`,
                text: `Apakah kamu yakin ingin mengubah data?`,
                icon: `info`,
                buttons: true,
            })
            .then((willEdit) => {
                if (willEdit) {
                    form.submit();
                }
            });
    });
</script>

</html>