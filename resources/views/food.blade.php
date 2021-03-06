    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>You cannot go wrong with our assortment of pastries and beverages.</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">

                @foreach($data as $data)
                <form action="{{ url('/addtocart', $data->id) }}" method="POST">
                    @csrf
                    <div class="item">
                        <div style="background-image: url('/foodimage/{{ $data->image }}');" class='card'>
                            <div class="price"><h6>{{$data->price}}</h6></div>
                            <div class='info'>
                              <h1 class='title'>{{$data->title}}</h1>
                              <p class='description'>{{$data->description}}</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#details">Order Now <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>

                        <input type="number" name="quantity" min="1" value="0" style="width: 80px;">
                        <input type="submit" value="Add to Cart" class="btn btn-outline-info">
                    </div>
                    </form>

                @endforeach

                    </div>
                
                </div>
            </div>
        </div>
    </section>
