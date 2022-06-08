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

        <form action="{{ url('/uploadowners') }}" method="POST" enctype="multipart/form-data">

        @csrf

            <div>
                <label style="color: black;"> Name  </label>
                <input style="color: black" type="text" name="name" placeholder="Enter your name" required>
            </div>

            <div>
                <label style="color: black;"> Location  </label>
                <input style="color: black" type="text" name="location" placeholder="Enter your location" required>
            </div>

            <div>
                <input type="file" name="image" required>
            </div>

            <div>
                <input class="btn btn-primary" type="submit" value="Save" required>
            </div>

        </form>

        <div style="position: relative; top: 70px; right: -150px;">
            <table bgcolor="#EDB93D" border="1px">
                <tr align="center">
                    <th style="padding: 30px">    Owner Name    </th>
                    <th style="padding: 30px">     Location     </th>
                    <th style="padding: 30px">      Image       </th>
                    <th style="padding: 30px">      Action      </th>
                    <th style="padding: 30px">      Step     </th>
                </tr>

                @foreach($data as $data)
                <tr>
                    <td style="padding: 30px">    {{ $data->name }}         </td>
                    <td style="padding: 30px">    {{ $data->location }}     </td>
                    <td style="padding: 30px"><img height="100" width="100" src="/ownersimage/{{ $data->image }}">    </td>
                    <td style="padding: 30px"><a href="{{ url('/updateowners', $data->id) }}">   Update  </a></td>
                    <td style="padding: 30px"><a href="{{ url('/deleteowners', $data->id) }}">   Delete  </a></td>
                </tr>
                @endforeach
            </table>


        </div>
     </div>

        @include("admin.adminscript");

  </body>
</html>