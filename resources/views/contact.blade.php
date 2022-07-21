@extends("index")
@section("title")
contact
@endsection

@section("contact")

<main class="" id="main-collapse">


    <div class="row">
      <div class="col-xs-12">
        <div class="section-container-spacer">
          <h1>Contact</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. <br>Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat.</p>
        </div>
        <div class="section-container-spacer">
















            {{-- @if (Session("success"))
            <div class="alert alert-success" >
                <span class="text-center" >
                    <b>{{session ("success")}}</b>
                </span>
            </div>
            @endif --}}





            <form action="" method="POST" class="reveal-content">
                @csrf
              <div class="row">
                <div class="col-md-6">



                    @if (Session("success"))
                    <div class="alert alert-success" >
                        <span class="text-center text-success" >
                          <center>  <b>{{session ("success")}}</b> </center>
                        </span>
                    </div>
                    @endif









                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="name">
                      </div>
                  <div class="form-group">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject">
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="3" placeholder="Enter your message"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary btn-lg">Send</button>
                </div>
                <div class="col-md-6">
                  <ul class="list-unstyled address-container">
                    <li>
                      <span class="fa-icon">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                      </span>
                      + 33 9 07 45 12 65
                    </li>
                    <li>
                      <span class="fa-icon">
                        <i class="fa fa-at" aria-hidden="true"></i>
                      </span>
                      e-mail@mail.io
                    </li>
                    <li>
                      <span class="fa-icon">
                        <i class="fa fa fa-map-marker" aria-hidden="true"></i>
                      </span>
                      42 rue Moulbert 75016 Paris
                    </li>
                  </ul>
                  <h3>Follow me on social networks</h3>
                  <a href="https://www.linkedin.com/" title="" class="fa-icon">
                    <i class="fa fa-linkedin"></i>
                  </a>
                  <a href="https://twitter.com/" title="" class="fa-icon">
                    <i class="fa fa-twitter"></i>
                  </a>
                  <a href="https://dribbble.com/" title="" class="fa-icon">
                    <i class="fa fa-dribbble"></i>
                  </a>
                </div>
              </div>
            </form>




















        </div>
      </div>
    </div>


    </main>

@endsection
