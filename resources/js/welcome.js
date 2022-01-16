import Swal from "sweetalert2";


$(function () {
     $('div.products-count a').click(function (event){
         event.preventDefault();
        $('a.products-current-count').text($(this).text());
         getProducts($(this).text());
    });


    $('a#filter-button').click(function (event){
        event.preventDefault();
        getProducts($('a.products-current-count').text());
    })

    //$('button.add-cart-button').click(function(event)
    $(document).on('click','#add-cart-button',function(){
        event.preventDefault();
        $.ajax({
            method: "POST",
            url: WELCOME_DATA.addToCart + $(this).data('id')
        })
            .done(function () {
                Swal.fire({
                    title: 'Brawo!',
                    text: 'Produkt dodany do koszyka!',
                    icon: 'success',
                    showCancelButton: true,
                    confirmButtonText: '<i class="fas fa-cart-plus"></i> Przejdź do koszyka',
                    cancelButtonText: '<i class="fas fa-shopping-bag"></i> Kontynuuj zakupy'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = WELCOME_DATA.listCart;
                    }
                })
            })
            .fail(function () {
                Swal.fire('Oops...', 'Wystąpił błąd', 'error');
            });
    });

    function getProducts(paginate){
        const form = $('form.sidebar-filter').serialize();

        $.ajax({
            type:"GET",
            method: "GET",
            url: "/",
            data: form + "&" + $.param({paginate: paginate})

        })
            .done(function(response) {
                $('div#products-wrapper').empty()
                $.each(response.data, function (index,product){
                    const html = '<div class="col-6 col-md-6 col-lg-4 mb-3">\n' +
                        '                                    <div class="card h-100 border-0">\n' +
                        '                                        <div class="card-img-top">\n' +
                        '\n' +
                        '                                                <img src="' + getImage(product) +'" class="img-fluid img-thumbnail mx-auto d-block" alt="Product image">\n' +
                        '                                        </div>\n' +
                        '                                        <div class="card-body text-center">\n' +
                        '                                            <h4 class="card-title">\n' +
                        '                                                <a href="{{route(\'products.show\', $product->id)}}" class=" font-weight-bold text-dark text-uppercase small">\n' +
                                                                            product.name +
                        '                                                    </a>\n' +
                        '                                            </h4>\n' +
                        '                                            <h5 class="card-price small">\n' +
                        '                                                <i>PLN ' + product.price + '</i>\n' +
                        '                                            </h5>\n' +
                        '                                        </div>\n'+
                        '<button id="add-cart-button" class="btn btn-success add-cart-button"'+getDisabled()+' data-id="'+product.id+'">'+
                        '                   Dodaj do koszyka' +
                        '                </button>' +
                        '                                    </div>\n' +
                        '                                </div>' +
                        ''
                    $('div#products-wrapper').append(html)



                })

            })
            .fail(function (response){
                Swal.fire('Oopss...');
            });

    }

    function getImage(product){
        if(!!product.image_path){
            return WELCOME_DATA.storagePath + product.image_path;
        }
        return WELCOME_DATA.defaultImage;
    }

    function getDisabled() {
        if (WELCOME_DATA.isGuest) {
            return ' disabled';
        }
        return '';
    }



});
