<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">

        @include("admin.admincss");

  </head>
  <body>
     <div class="container-scroller">

        @include("admin.navbar");

        <form action="{{ url('/updatecafeowners', $data->id) }}" method="POST" enctype="multipart/form-data">

        @csrf
            <div>
                <label style="color: black"> Owner Name </label>
                <input style="color:black" type="text" name="name" value="{{ $data->name }}">
            </div>

            <div>
                <label style="color: black"> Location </label>
                <input style="color:black" type="text" name="location" value="{{ $data->location }}">
            </div>

            <div>
                <label style="color: black"> Current Image </label>
                <img height="200" width="200" src="/ownersimage/{{ $data->image }}">
            </div>

            <div>
                <label style="color: black"> New Image </label>
                <input type="file" name="image">
            </div>

            <div>
                <input type="submit" value="Update Owner">
            </div>

        </form>


     </div>

        @include("admin.adminscript");

  </body>
</html>