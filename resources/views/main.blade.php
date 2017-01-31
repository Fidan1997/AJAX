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
	<form method="post" id="idOfForm">
	{{csrf_field()}}
		<input type="text" class="inputTop" name="name"><br>
        <input type="text" class="inputBottom" name="password"><br>
        <input type="text" name="user"><br>
        <input type="submit" class="submit" value="ADD">

	</form>

<table>
 <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
   <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
 
  
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>


</body>
</html>
<script>
    // $('.submit').on('click' , function () {
    //     var data = $('.inputTop').val();
    //     $('.inputBottom').val(data);
    // })
</script>



