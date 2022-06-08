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

        <div class="col-xl-7" align="center">
                    <div class="homepage">
                        <a href=""><img style="padding-left: 350px; " src="assets/images/adminpage.png" alt=""></a>
                    </div>


     </div>

        @include("admin.adminscript");

  </body>
</html>