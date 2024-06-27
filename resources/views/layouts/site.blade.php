<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/css2.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybU5rKkD5on6m9ZI7SxxQ5H8f6+ZP5hLgWAI7T0z76ofe2IO5" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyJgD0b5f1Mr6TZflDHT7TX60Ga6IQEQpZLK5HA46Zyy5tF4h6S5pEx" crossorigin="anonymous"></script>
    

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('js/js.js') }}"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poetsen+One&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poetsen+One&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poetsen+One&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Teachers:ital,wght@0,400..800;1,400..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/path/to/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poetsen+One&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&family=Teachers:ital,wght@0,400..800;1,400..800&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poetsen+One&family=Raleway:ital,wght@0,100..900;1,100..900&family=Reddit+Mono:wght@200..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&family=Teachers:ital,wght@0,400..800;1,400..800&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <script src="jquery-3.7.1.min.js"></script>

</head>

<body>

    <header>
        <div>
            <div>

                <x-mainmenu />
            </div>
        </div>
    </header>



    <main>
        @yield('content')
    </main>



    <footer>
        <div>
            <x-footermenu />
        </div>
    </footer>
    @yield('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
   


        $(document).ready(function() {
            $('#list-view').click(function() {
                $('.btn-view').removeClass('active');
                $(this).addClass('active');
                $('#product-list').removeClass('grid-view').addClass('list-view');
            });

            $('#grid-view').click(function() {
                $('.btn-view').removeClass('active');
                $(this).addClass('active');
                $('#product-list').removeClass('list-view').addClass('grid-view');
            });
        });
    </script>

    {{-- <script src="{{ asset('js/script.js') }}"></script> --}}
    <script>
        $(document).ready(function() {
            $('#search-input').on('keyup', function() {
                var query = $(this).val();
                console.log('Query: ', query);

                if (query.length > 2) {
                    $.ajax({
                        url: "{{ route('site.autocomplete') }}",
                        type: "GET",
                        data: {
                            'query': query
                        },
                        success: function(data) {
                            console.log('Data: ', data);
                            var suggestions = '';

                            if (data.length > 0) {
                                data.forEach(function(item) {
                                    suggestions += '<a href="' + item.detail_url +
                                        '" class="suggestion-item-link">';
                                    suggestions += '<div class="suggestion-item">';
                                    suggestions += '<img src="' + item.image_url +
                                        '" alt="' + item.name +
                                        '" class="suggestion-image" style="width: 50px; height: 50px; margin-right: 10px;">';
                                    suggestions += item.name + '</div>';
                                    suggestions += '</a>';
                                });
                            } else {
                                suggestions +=
                                    '<div class="suggestion-item">No results found</div>';
                            }

                            $('#suggestions-box').html(suggestions).show();
                        },
                        error: function(xhr, status, error) {
                            console.log('Error: ', error);
                        }
                    });
                } else {
                    $('#suggestions-box').hide();
                }
            });

            $(document).on('click', '.suggestion-item', function() {
                var text = $(this).text();
                $('#search-input').val(text);
                $('#suggestions-box').hide();
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.navbar-toggler').click(function() {
                $('.menu-content-mobile').slideToggle();
            });
        });
    </script>
    
</body>

</html>
