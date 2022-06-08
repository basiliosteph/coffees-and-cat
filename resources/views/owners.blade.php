    <section class="section" id="owners">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>The Owners</h6>
                        <h2>Get to know the individuals behind the wildly famous and acclaimed cafe.</h2>
                    </div>
                </div>
            </div>


            <div class="row">

            @foreach($data2 as $data2)

                <div class="col-lg-4">
                    <div class="owners-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <img height="340" width="340" src="ownersimage/{{ $data2->image }}" alt="Owners">
                        </div>
                        <div class="down-content">
                            <h4>{{ $data2->name }}</h4>
                            <span>{{ $data2->location }}</span>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </section>
