$(function(){
    $('.delete').click(function (){
        Swal.fire({
            title: confirmDelete,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Nie!',
            confirmButtonText: 'Tak, usun!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type:"DELETE",
                    method: "DELETE",
                    url: deleteUrl + $(this).data("id")

                })
                    .done(function(data) {
                        window.location.reload();
                    })
                    .fail(function (data){
                        console.log(data.responseJSON.message);
                        Swal.fire('Oopss...',data.responseJSON.message,data.responseJSON.status);
                });
            }
        })
    });
});
