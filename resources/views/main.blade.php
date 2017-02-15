<html>
	
<head>
<meta name="_token" content="{{ csrf_token() }}">
<script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
  <script src="{{url('js/main.js')}}"></script>
	<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>


</head>
<body>
	<form method="post" id="my_form">
	{{csrf_field()}}
		<input type="text" class="inputTop" name="name"><br>
        <input type="text" class="inputBottom" name="password"><br>
        <input type="text" name="user"><br>
        <input type="submit" class="submit" value="ADD">

	</form>

<table id='myTable'></table>


</body>
</html>
<script>
    $(document).ready(function(){
      $('#my_form').on('submit',function(e){
        e.preventDefault();

        name = $('[name=name]').val();
        password = $('[name=password]').val();
        user = $('[name=user]').val();

        tr = $('<tr>');
        tdName = $('<td>').append(name);
        tdPassword = $('<td>').append(password);
        tdUser = $('<td>').append(user);

        tr.append(tdName, [tdPassword, tdUser]);
        $('#myTable').append(tr);

        $.ajax({
            type: "POST",
            url: '/tema',
            data: {'name': name,
                   'password' : password,
                   'user' : user, 
                   "_token": "{{ csrf_token() }}",},

            success: function() {
                // $("#ajaxResponse").append("<div>"+msg+"</div>");
                console.log('tema alindi');
            }
        });
        // console.warn(tr);
        // tr.append(tdName);
        // tr.append(tdPassword);
        // tr.append(tdUser);
        // $('.myTable').append(td);



  // console.log(name, password, user);

/*        $.ajax({
            url: "http://data.e-gov.az/api/v1/IEGOVService.svc/GetPriceInfoByShortNumber/"+inp_name+"",
            crossDomain: true,
            dataType: 'json',
            type: "GET",
            data:{
                // name: $('.name').val(),
                // password: $('.inputBottom').val(),
                // user: $('.user').val(),
            },
            headers:{
                    'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content'),
                    'Access-Control-Allow-Origin': '*'
            },
            success: function test(data){

                console.log(data);

            }});*/
})


});
</script>



