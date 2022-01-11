$(function () {
    $('a#filter-button').click(function (){
        const form = $('form.sidebar-filter').serialize();

        $.ajax({
            type:"GET",
            method: "GET",
            url: "/",
            data: form

        })
        .done(function(data) {
            //alert('XD')
            Swal.fire('SUCCESS');
        })
        .fail(function (data){
            Swal.fire('Oopss...');
        });
    })
});
