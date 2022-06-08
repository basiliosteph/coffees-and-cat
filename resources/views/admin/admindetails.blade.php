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

        <h1 style="color: black;"> Customer Details </h1>

        <div style="position: relative; top: 70px; right: -100px;">
            <table bgcolor="#EDB93D" border="1px">
                <tr>
                    <th style="padding: 30px">   Name   </th>
                    <th style="padding: 30px">   Email  </th>
                    <th style="padding: 30px">   Phone  </th>
                    <th style="padding: 30px">   People </th>
                    <th style="padding: 30px">   Date   </th>
                    <th style="padding: 30px">   Time   </th>
                    <th style="padding: 30px">  Address </th>
                </tr>

                @foreach($data as $data)
                <tr align="center">
                    <td>   {{ $data->name }}   </td>
                    <td>   {{ $data->email }}   </td>
                    <td>   {{ $data->phone }}   </td>
                    <td>   {{ $data->people }}   </td>
                    <td>   {{ $data->date }}   </td>
                    <td>   {{ $data->time }}   </td>
                    <td>   {{ $data->address }}   </td>
                </tr>

                @endforeach

            </table>




        </div>


     </div>

        @include("admin.adminscript");

  </body>
</html>