<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>

        @include("admin.admincss");

  </head>
  <body>
     <div class="container-scroller">

        @include("admin.navbar");

        <div class="container">

        <h1 style="color: black;"> Customer's Orders </h1>

        <form action="{{ url('/search') }}" method="GET">

        @csrf
            <input type="text" name="search" style="color: blue;">
            <input type="submit" value="Search" class="btn btn-success">


        </form>

        <table style="background-color: #EDB93D; ">
            <tr align="center">
                <td style="padding: 30px; ">  Name     </td>
                <td style="padding: 30px; ">  Phone    </td>
                <td style="padding: 30px; "> Address </td>
                <td style="padding: 30px; "> Food Name </td>
                <td style="padding: 30px; ">  Price   </td>
                <td style="padding: 30px; "> Quantity </td>
                <td style="padding: 30px; "> Total Price </td>
            </tr>

            @foreach($data as $data)
            <tr align="center" style="background-color: #EDB93D; ">
                <td style="padding: 30px; ">  {{ $data->name }}     </td>
                <td style="padding: 30px; ">  {{ $data->phone }}    </td>
                <td style="padding: 30px; "> {{ $data->address }} </td>
                <td style="padding: 30px; "> {{ $data->foodname }} </td>
                <td style="padding: 30px; ">  ₱{{ $data->price }}   </td>
                <td style="padding: 30px; "> {{ $data->quantity }} </td>
                <td style="padding: 30px; "> ₱{{ $data->price * $data->quantity }} </td> 
            <tr>
            @endforeach

        </table>
       </div>
     </div>

        @include("admin.adminscript");

  </body>
</html>