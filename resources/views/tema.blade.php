<html>
	
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
  <script src="{{url('js/main.js')}}"></script>
	<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 50%;
}

td, th {
    border: 1px solid ;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>


</head>
<body>
	<form method="post" id="form">
	 {{csrf_field()}}
		<input type="text" class="inputTop name" name="name"><br>
    <input type="submit" class="submit" value="ADD">
  </form>

</body>
</html>
<script>
    $(document).ready(function(){

$('#form').on('submit',function(e){
  inp_name = $('.name').val();
  console.log(inp_name);
  e.preventDefault();
        $.ajax({
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

            }});
})

});
</script>




