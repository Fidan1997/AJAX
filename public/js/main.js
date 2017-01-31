$(document).ready(function(){

$('#idOfForm').on('submit',function(){
        $.ajax({
            url: "/main",
            // dataType: 'json',
            type: "POST", 
            data:{
                name: $('.inputTop').val(),
                password: $('.inputBottom').val(),
                user: $('.user').val(),
            },
            headers:{
                    'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
            },
            success: function test(data){

                console.log(data);

            }});
})

});