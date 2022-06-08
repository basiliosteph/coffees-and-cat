<!DOCTYPE html>
<html>
<body>

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

        <div style="position: relative; top: 60px; right: -150px;">
            <form action="{{ url('/uploadfood') }}" method="POST" enctype="multipart/form-data">

            @csrf
                <div>
                <label style="color: black"> Title </label>
                <input style="color:black" type="text" name="title" placeholder="Name of the Food" required>
                </div>

                <div>
                <label style="color: black"> Price </label>
                <input style="color:black" type="num" name="price" placeholder="Price of the Food" required>
                </div>

                <div>
                <label style="color: black"> Image </label>
                <input type="file" name="image" required>
                </div>

                <div>
                <label style="color: black"> Description </label>
                <input style="color:black" type="text" name="description" placeholder="Description of the Food"  required>
                </div>

                <div>
                <input class="btn btn-primary" type="submit" value="Save">
                </div>

            </form>
              <div>
                <table bgcolor="#EDB93D"> 
                  <tr>
                    <th style="padding: 30px">  Food Name   </th>
                    <th style="padding: 30px">   Price      </th>
                    <th style="padding: 30px"> Description  </th>
                    <th style="padding: 30px">   Image      </th>
                    <th style="padding: 30px">   Action     </th>
                    <th style="padding: 30px">   Step     </th>
                  </tr>

                  @foreach($data as $data)
                  <tr align="center">
                    <td> {{ $data->title }}       </td>
                    <td> {{ $data->price }}       </td>
                    <td> {{ $data->description }} </td>
                    <td><img height="200" width="200" src="/foodimage/{{ $data->image }}">  </td>

                    <td><a href="{{ url('/deletefood', $data->id) }}"> Delete </a></td>
                    <td><a href="{{ url('/updatefood', $data->id) }}"> Update </a></td>
                  </tr>

                  @endforeach



                    </table>
              </div>
        </div>
     </div>

        @include("admin.adminscript");

  </body>
</html>

</body>
</html>