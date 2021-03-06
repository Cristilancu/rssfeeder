@extends('home::layouts.app')

@section ('content')
	<header id="header">
	  <div class="header-top-bar">
	    <div class="container">
	      <!-- HEADER-LOGIN -->
	      <div class="header-login">

	        <a href="#" class=""><i class="fa fa-power-off"></i> Login</a>

	        <div>
	          <form action="#">
	            <input type="text" class="form-control" placeholder="Username">
	            <input type="password" class="form-control" placeholder="Password">
	            <input type="submit" class="btn btn-default" value="Login">
	            <a href="#" class="btn btn-link">Forgot Password?</a>
	          </form>
	        </div>

	      </div> <!-- END .HEADER-LOGIN -->

	      <!-- HEADER REGISTER -->
	      <div class="header-register">
	        <a href="#" class=""><i class="fa fa-plus-square"></i> Register</a>

	        <div>
	          <form action="#">
	            <input type="text" class="form-control" placeholder="Username">
	            <input type="email" class="form-control" placeholder="Email">
	            <input type="password" class="form-control" placeholder="Password">
	            <input type="submit" class="btn btn-default" value="Register">
	          </form>
	        </div>

	      </div> <!-- END .HEADER-REGISTER -->

	      <!-- HEADER-LOG0 -->
	      <div class="header-logo text-center">
	        <h2><a href="index.html">GL<i class="fa fa-globe"></i>BO</a></h2>
	      </div>
	      <!-- END HEADER LOGO -->

	      <!-- HEADER-SOCIAL -->
	      <div class="header-social">
	        <a href="#">
	          <span><i class="fa fa-share-alt"></i></span>
	          <i class="fa fa-chevron-down social-arrow"></i>
	        </a>

	        <ul class="list-inline">
	          <li class="active"><a href="#"><i class="fa fa-facebook-square"></i></a></li>
	          <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
	          <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
	          <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
	        </ul>
	      </div>
	      <!-- END HEADER-SOCIAL -->

	      <!-- HEADER-LANGUAGE -->
	      <div class="header-language">
	        <a href="#">
	          <span>EN</span>
	          <i class="fa fa-chevron-down"></i>
	        </a>

	        <ul class="list-unstyled">
	          <li class="active"><a href="#">EN</a></li>
	          <li><a href="#">FR</a></li>
	          <li><a href="#">PT</a></li>
	          <li><a href="#">IT</a></li>
	        </ul>
	      </div> <!-- END HEADER-LANGUAGE -->

	      <!-- CALL TO ACTION -->
	      <div class="header-call-to-action">
	        <a href="#" class="btn btn-default"><i class="fa fa-plus"></i> Add Listing</a>
	      </div><!-- END .HEADER-CALL-TO-ACTION -->

	    </div><!-- END .CONTAINER -->
	  </div>
	  <!-- END .HEADER-TOP-BAR -->

	  <!-- HEADER SEARCH SECTION -->
	  <div class="header-search slider-home">
	    <div class="header-search-bar">
	      <form action="#">

	        <div class="search-toggle">
	          <div class="container">
	            <div class="distance-range">
	              <p>
	                <label for="amount-search">Distance:</label>
	                <input type="text" id="amount-search">
	              </p>

	              <div id="slider-range-search"></div>
	            </div>  <!-- end #distance-range -->

	            <div class="distance-range">
	              <p>
	                <label for="amount-search">Days published:</label>
	                <input type="text" id="amount-search-day">
	              </p>

	              <div id="slider-range-search-day"></div>
	            </div>  <!-- end #distance-range -->

	            <p>Location:</p>
	            <div class="select-country">
	              <select class="" data-placeholder="-Select Country-">
	                <option value="option">-Select Country-</option>
	                <option value="option1">option 1</option>
	                <option value="option2">option 2</option>
	                <option value="option3">option 3</option>
	              </select>
	            </div>

	            <div class="region">
	              <input type="text" placeholder="-Region-">
	            </div>

	            <div class="address">
	              <input type="text" placeholder="-Address-">
	            </div>

	   
	            <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>

	          </div>
	        </div>  <!-- END .search-toggle -->

	        <div class="container">
	          <button class="toggle-btn" type="submit"><i class="fa fa-bars"></i></button>

	          <div class="search-value">
	            <div class="keywords">
	              <input type="text" class="form-control" placeholder="Company name">
	            </div>

	            <div class="select-location">
	              <select class="" data-placeholder="-Select location-">
	                <option value="option">Location</option>
	                <option value="option1">option 1</option>
	                <option value="option2">option 2</option>
	                <option value="option3">option 3</option>
	                <option value="option4">option 4</option>
	              </select>
	            </div>

	         
	            <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
	          </div>
	        </div> <!-- END .CONTAINER -->
	      </form>
	    </div> <!-- END .header-search-bar -->

	    <div class="slider-content">

	      <div id="home-slider" class="owl-carousel owl-theme">

	        <div class="item"><img src="img/content/home-slide-img.jpg" alt="">
	          <div class="slide-content">
	            <a href="#"><img src="img/slider-logo.png" alt=""></a>
	            <h1>The <span>Right</span> Place</h1>
	            <h2>For Business</h2>

	          </div>


	        </div>

	        <div class="item"><img src="img/content/home-slider-img-two.jpg" alt="">
	          <div class="slide-content">
	            <a href="#"><img src="img/slider-logo.png" alt=""></a>

	            <h1>The <span>Right</span> Place</h1>
	            <h2>For Business</h2>

	          </div>

	        </div>

	        <div class="item"><img src="img/content/home-slide-img.jpg" alt="">
	          <div class="slide-content">
	            <a href="#"><img src="img/slider-logo.png" alt=""></a>

	            <h1>The <span>Right</span> Place</h1>
	            <h2>For Business</h2>

	          </div>
	        </div>
	      </div>

	      <div class="customNavigation">
	        <a class="btn prev"><i class="fa fa-angle-left"></i></a>
	        <a class="btn next"><i class="fa fa-angle-right"></i></a>
	      </div>

	    </div> <!-- END .slider-content -->
	  </div> <!-- END .SEARCH and slide-section -->

	  <div class="container">
	    <div class="header-nav-bar home-slide">
	      <nav>

	        <button><i class="fa fa-bars"></i></button>

	        <ul class="primary-nav list-unstyled">
	          <li class="bg-color"><a href="#">Home<i class="fa fa-angle-down"></i></a>
	            <ul>
	              <li><a href="home-map-grid.html">Home-map(grid)</a></li>
	              <li><a href="home-map-list.html">Home-map(list)</a></li>
	              <li><a href="index.html">Home slider(view-1)</a></li>
	              <li><a href="home-category.html">Home slider(view-2)</a></li>
	            </ul>

	          </li>

	          <li class=""><a href="#">Company<i class="fa fa-angle-down"></i></a>

	            <ul>
	              <li><a href="company-profile.html">Company(Profile)</a></li>
	              <li><a href="company-product.html">Company(Product)</a></li>
	              <li><a href="company-portfolio.html">Company(Portfolio)</a></li>
	              <li><a href="company-events.html">Company(Events)</a></li>
	              <li><a href="company-blog.html">Company(Blog)</a></li>
	              <li><a href="company-contact.html">Company(contact)</a></li>
	            </ul>

	          </li>

	          <li><a href="sample-page.html">Sample Page</a></li>
	          <li><a href="shortcodes.html">Shortcodes</a></li>

	          <li class="">
	            <a href="#">Blog<i class="fa fa-angle-down"></i></a>

	            <ul>
	              <li><a href="blog-list.html">Blog list</a></li>
	              <li><a href="blog-post.html">Blog-post</a></li>
	            </ul>

	          </li>

	          <li><a href="price-listing.html">Price Listing</a></li>
	          <li><a href="about-us.html">About Us</a></li>
	          <li><a href="contact-us.html">Contact Us</a></li>
	        </ul>
	      </nav>
	    </div> <!-- end .header-nav-bar -->
	  </div> <!-- end .container -->

	</header>

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
              <div class="newfeed">
                  <form class="form" action="{{ url('feeder') }}" method="post"
                      enctype="multipart/form-data">
                  	<div class="row">
					  <div class="col-md-12">
					    <div class="form-group">
					        <label for="source">dsfasdfs</label>
					        <input type="text" name="source" class="form-control" value="" required>
					    </div>
					  </div>
					</div>

                  	<div class="row">
					  <div class="col-md-12">
					    <div class="form-group">
					        <label for="url">dsfasdfs</label>
					        <input type="text" name="url" class="form-control" value="" required>
					    </div>
					  </div>
					</div>

                  	<div class="row">
					  <div class="col-md-12">
	                    <div class="select-country">
	                      <label>Category</label>

	                      <select name="category" class="form-control" data-placeholder="-Select-">
		                    @foreach($categories as $category)
		                        <option value="{{$category->category}}">{{$category->category}}</option>
		                    @endforeach
	                      </select>

	                    </div> <!-- end .select-country -->
					  </div>
					</div>

					<div class="form-group">
					    <input type="submit" class="btn btn-primary" value="ghj">
					</div>

                  </form>
              </div>
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
