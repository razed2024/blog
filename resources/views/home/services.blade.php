<div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital">Blog Posts </h1>
            <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
            <div class="services_section_2">
               <div class="row">

               @foreach($post as $post)

                  <div style="text-align:center;" class="col-md-4">
                     <div><img style="margin: bottom 20px;" height="200px" width="350px" src="/post_image/{{ $post->image}}" class="services_img"></div>

                     <h4> {{$post->title}}</h4>
                     <p> post by <b> {{$post->name}}</b></p>
                     <div class="btn_main"><a href="{{url('post_details',$post->id)}}">Read More</a></div>
                  </div>

                  @endforeach
                  
               </div>
            </div>
         </div>
      </div>