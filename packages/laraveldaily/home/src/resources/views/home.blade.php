@extends('home::layouts.app')

@section ('content')

  <div id="page-content" class="home-slider-content">
    <div class="container">
      <div class="home-with-slide">
        <div class="row">

          <div class="col-md-9 col-md-push-3">
            <div class="page-content">

              <div class="change-view">
                <div class="filter-input">
                  <input type="text" placeholder="Filter by Keywords">
                </div>
              </div> <!-- end .change-view -->


              <div class="product-details">
                <div class="tab-content">
                    <h3>Globo <span>Categories</span></h3>

                	@foreach($categories as $category)
	        			<div class="tab-pane" id="{{$category->category}}">
	            			<div class="row clearfix">
	                	@foreach($rows as $row)
	                		@if($row->category == $category->category)
		                      <div class="col-md-3 col-sm-4 col-xs-6">
		                        <div class="category-item">

		                          <a href="/feed/{{$row->id}}"><i class="fa fa-university"></i>{{$row->source}}</a>
		                        </div>
		                      </div>
		                    @endif
	                	@endforeach
		                      <div class="view-more">
		                        <a class="btn btn-default text-center" href="#"><i class="fa fa-plus-square-o"></i>View More</a>
		                      </div>
	            			</div> <!-- end .row -->
	        			</div> <!-- end .tabe-pane -->
                	
                	@endforeach
                  
                  <div class="tab-pane" id="advertisemnet">
                    <h3>Advertisement <span class="comments">59</span></h3>

                  </div> <!-- end .tabe-pane -->
                </div> <!-- end .tabe-content -->

              </div> <!-- end .product-details -->
            </div> <!-- end .page-content -->
          </div>

          <div class="col-md-3 col-md-pull-9 category-toggle">
            <button><i class="fa fa-briefcase"></i></button>

            <div class="page-sidebar">
              <div class="custom-search">

                <div class="location-details">
                  <form action="#">
                    <div class="select-country">
                      <label>Country</label>

                      <select class="" data-placeholder="-Select-">
                        <option value="option1">option 1</option>
                        <option value="option2">option 2</option>
                        <option value="option3">option 3</option>
                        <option value="option4">option 4</option>
                      </select>

                    </div> <!-- end .select-country -->

                    <div class="select-state">
                      <label>State</label>

                      <select class="" data-placeholder="-Select-">
                        <option value="option1">option 1</option>
                        <option value="option2">option 2</option>
                        <option value="option3">option 3</option>
                        <option value="option4">option 4</option>
                      </select>

                    </div> <!-- end .select-state -->

                    <div class="zip-code">
                      <label>ZIP Code</label>

                      <input type="text" placeholder="Enter">

                    </div> <!-- end .zip-code -->
                  </form>

                </div> <!-- end .location-details -->

                <div class="distance-range">
                  <p>
                    <label for="amount">Distance</label>
                    <input type="text" id="amount">
                  </p>

                  <div id="slider-range-min"></div>
                </div>  <!-- end #distance-range -->
              </div> <!-- end .custom-search -->

              <!-- Category accordion -->
              <div id="categories">
                <div class="accordion">
                  <ul class="nav nav-tabs home-tab" role="tablist">
                    <li class="active">
                      <a href="#all-categories"  role="tab" data-toggle="tab">All Categories
                        <span>Display all sub-categories</span>
                      </a>
                    </li>
                    @foreach($categories as $category)
	                    <li class="">
	                      <a href="#{{$category->category}}"  role="tab" data-toggle="tab">{{$category->category}}
	                        <span></span>
	                      </a>
	                    </li>                    	
                    @endforeach
                    <li>
                      <a href="#" role="tab" data-toggle="tab"><i class="fa fa-angle-right"></i>See More</a>
                    </li>

                  </ul>
                </div> <!-- end .accordion -->
              </div> <!-- end #categories -->

            </div> <!-- end .page-sidebar -->
          </div> <!-- end grid layout-->
        </div> <!-- end .row -->
      </div> <!-- end .home-with-slide -->
    </div> <!-- end .container -->
  </div>  <!-- end #page-content -->


  <div class="featured-listing" id= "featured-list">
    <div class="container">
      <div class="row clearfix">
        <h2><strong>Freatured</strong> Listing</h2>

        <div class="col-md-3 col-sm-4 col-xs-6">
          <div class="single-product">
            <figure>
              <img src="img/content/post-img-1.jpg" alt="">

              <div class="rating">
                <ul class="list-inline">
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                  <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                </ul>

                <p>Featured</p>

              </div> <!-- end .rating -->

              <figcaption>
                <div class="bookmark">
                  <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                </div>
                <div class="read-more">
                  <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                </div>

              </figcaption>
            </figure>
            <h4><a href="#">Old Bookman's</a></h4>

            <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

          </div> <!-- end .single-product -->

        </div>

      </div>  <!-- end .row -->

      <div class="discover-more">

        <a class="btn btn-default text-center" href="#"><i class="fa fa-plus-square-o"></i>Discover More</a>
      </div>
    </div>  <!-- end .container -->
  </div>  <!-- end .featured-listing -->


  <div class="classifieds-content">
    <div class="container">
      <div class="heading-section clearfix">
        <h1>Classifieds</h1>

        <a href="#" class="btn btn-default"><i class="fa fa-plus"></i> Post Your Ad</a>

        <form action="#">
          <input type="text" placeholder="Search by keywords">

          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div> <!-- END .heading-section -->

      <!-- CLSSIFIEDS-CATEGROY BEGIN -->
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <ul class="classifieds-category">
            <li><a href="#"><i class="fa fa-bullhorn"></i>Advartising <span>(1786)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
                <li><a href="#">Fashion <span>(45)</span></a></li>
                <li><a href="#">Fitness &amp; Sport <span>(78)</span></a></li>
              </ul>

            </li>

            <li><a href="#"><i class="fa fa-home"></i>Home &amp; Garden <span>(754)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
              </ul>

            </li>
          </ul> <!-- END MAIN UL -->
          <!-- END .CLASSIFIES-CATEGORY -->

        </div> <!-- End grid layout -->

        <div class="col-md-3 col-sm-6">
          <ul class="classifieds-category">
            <li><a href="#"><i class="fa fa-shopping-cart"></i>E-commerce <span>(1987)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
                <li><a href="#">Fashion <span>(45)</span></a></li>
                <li><a href="#">Fitness &amp; Sport <span>(78)</span></a></li>
                <li><a href="#">Furnishing <span>(13)</span></a></li>
                <li><a href="#">Health &amp; Beauty <span>(99)</span></a></li>
              </ul>

            </li>

            <li><a href="#"><i class="fa fa-cogs"></i>Industry <span>(1405)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
                <li><a href="#">Fashion <span>(45)</span></a></li>
                <li><a href="#">Fitness &amp; Sport <span>(78)</span></a></li>
                <li><a href="#">Furnishing <span>(13)</span></a></li>
              </ul>

            </li>
          </ul>
          <!-- END .CLASSIFIES-CATEGORY -->
        </div> <!-- End grid layout -->

        <div class="col-md-3 col-sm-6">
          <ul class="classifieds-category">
            <li><a href="#"><i class="fa fa-graduation-cap"></i>Education <span>(996)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
                <li><a href="#">Fashion <span>(45)</span></a></li>
              </ul>

            </li>

            <li><a href="#"><i class="fa fa-book"></i>Libraries &amp; Public <span>(1256)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
                <li><a href="#">Fashion <span>(45)</span></a></li>
                <li><a href="#">Fitness &amp; Sport <span>(78)</span></a></li>
                <li><a href="#">Furnishing <span>(13)</span></a></li>
              </ul>

            </li>
          </ul>
          <!-- END .CLASSIFIES-CATEGORY -->
        </div> <!-- End grid layout -->

        <div class="col-md-3 col-sm-6">
          <ul class="classifieds-category">
            <li><a href="#"><i class="fa fa-paper-plane-o"></i>Entertainment <span>(2726)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
              </ul>

            </li>

            <li><a href="#"><i class="fa fa-building-o"></i>Real Estate <span>(1131)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
                <li><a href="#">Fitness &amp; Sport <span>(78)</span></a></li>
                <li><a href="#">Furnishing <span>(13)</span></a></li>
                <li><a href="#">Health &amp; Beauty <span>(99)</span></a></li>
              </ul>

            </li>
          </ul>
          <!-- END .CLASSIFIES-CATEGORY -->

        </div> <!-- End grid layout -->
      </div> <!-- End .row -->
    </div> <!-- END .container-->
  </div> <!-- classifieds-content -->


  <div class="register-content">
    <div class="reg-heading">
      <h1><strong>Register</strong> now</h1>
    </div>

    <div class="registration-details">
      <div class="container">
        <div class="box regular-member">
          <h2><strong>Regular</strong> Member</h2>

          <p><i class="fa fa-check-circle-o"></i> Loren ipsum dolor sit amet</p>
          <p><i class="fa fa-check-circle-o"></i> Loren ipsum dolor sit amet</p>
          <p><i class="fa fa-check-circle-o"></i> Loren ipsum dolor sit amet</p>

          <a href="#" class="btn btn-default-inverse"><i class="fa fa-plus"></i> Register Now</a>
        </div>

        <div class="alternate">
          <h2>OR</h2>
        </div>

        <div class="box business-member">
          <h2><strong>Business</strong> Member</h2>

          <p><i class="fa fa-check-circle-o"></i> Loren ipsum dolor sit amet</p>
          <p><i class="fa fa-check-circle-o"></i> Loren ipsum dolor sit amet</p>
          <p><i class="fa fa-check-circle-o"></i> Loren ipsum dolor sit amet</p>

          <a href="#" class="btn btn-default-inverse"><i class="fa fa-plus"></i> Register Now</a>
        </div>

      </div>
      <!-- END .CONTAINER -->
    </div>
    <!-- END .REGISTRATION-DETAILS -->
  </div>
  <!-- END REGISTER-CONTENT -->

  <!-- OUR PARTNER SLIDER BEGIN -->
    <div class="our-partners">
      <div class="container">
        <h4>Our Partners</h4>

        <div id="partners-slider" class="owl-carousel owl-theme">
          <div class="item"><a href="#"><img src="img/content/partner1.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner2.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner3.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner4.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner5.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner6.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner1.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner2.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner3.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner4.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner5.png" alt=""></a></div>
          <div class="item"><a href="#"><img src="img/content/partner6.png" alt=""></a></div>
        </div>
      </div>
    </div>
    <!-- END OUR PARTNER SLIDER -->

@endsection
