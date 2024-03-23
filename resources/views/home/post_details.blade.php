<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <base href="/public">
      @include('home.homeCss')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         @include('home.header')
         <!-- banner section start -->
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- services section start -->
      <!-- services section end -->
      <!-- about section start -->
      <!-- about section end -->
      <!-- blog section start -->
      <!-- blog section end -->
      <div style="text-align:center" class="col-md-12">
                     <div><img style="padding: 20px; height: 400px;  margin:auto;"  src="/post_image/{{ $post->image}}" class="services_img"></div>

                     <h2 style="font-size: 20px;"> <b>  {{$post->title}} </b></h2>
                     <h4> {{$post->description}}</h4>
                     <p> post by <b> {{$post->name}}</b></p>
                    
                  </div>


      <!-- client section start -->
      <!-- client section start -->
      <!-- choose section start -->
      <!-- choose section end -->
      <!-- footer section start -->
      @include('home.footer')
      <!-- footer section end -->
      <!-- copyright section start -->
      
    </body>
</html>
