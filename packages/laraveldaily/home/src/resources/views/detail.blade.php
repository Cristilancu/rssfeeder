@extends('home::layouts.app')

@section ('content')
  <style type="text/css">
    .article-feed {
      height: 900px;
      overflow-y: scroll;
    }
  </style>
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
    <div class="header-search map">
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

              <div class="category-search">
                <select class="" data-placeholder="-Select category-">
                  <option value="option">-Select category-</option>
                  <option value="option1">option 1</option>
                  <option value="option2">option 2</option>
                  <option value="option3">option 3</option>
                </select>
              </div>

              <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>

            </div>
          </div>  <!-- END .search-toggle -->

          <div class="container">
            <button class="toggle-btn" type="submit"><i class="fa fa-bars"></i></button>

            <div class="search-value">
              <div class="keywords">
                <input type="text" class="form-control" placeholder="Keywords">
              </div>

              <div class="select-location">
                <select class="" data-placeholder="-Select location-">
                  <option value="option">-Select location-</option>
                  <option value="option1">option 1</option>
                  <option value="option2">option 2</option>
                  <option value="option3">option 3</option>
                  <option value="option4">option 4</option>
                </select>
              </div>

              <div class="category-search">
                <select class="" data-placeholder="-Select category-">
                  <option value="option">-Select category-</option>
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

      <div class="map-section">

        <div id="map_canvas"></div>

      </div>
    </div> <!-- END .SEARCH-MAP -->

    <div class="header-nav-bar">
      <div class="container">
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
      </div> <!-- end .container -->
    </div> <!-- end .header-nav-bar -->
  </header> <!-- end #header -->

  <div id="page-content">
    <div class="container">
      <div class="row">

        <div class="col-md-9 col-md-push-3">
          <div class="page-content">

            <div class="product-details-list view-switch">
              <div class="tab-content">

                <div class="tab-pane" id="antique-all">
                  <h2>Result for "Antique"<span class="comments">69</span></h2>

                  <div class="change-view">

                    <div class="filter-input">
                      <input type="text" placeholder="Filter by Keywords">
                    </div>
                    <button class="grid-view"><i class="fa fa-th"></i></button>
                    <button class="list-view active"><i class="fa fa-bars"></i></button>

                    <div class="sort-by">

                      <select class="" data-placeholder="-sort by-">
                        <option value="option1">Name</option>
                        <option value="option2">Tupe</option>
                        <option value="option3">Name</option>
                        <option value="option4">Type</option>
                      </select>

                     </div>

                  </div> <!-- end .change-view -->

                  <div class="row clearfix">
                    <div class="col-sm-4 col-xs-6">

                      <div class="single-product">
                        <figure>
                          <img src="{{asset('img/content/post-img-10.jpg')}}" alt="">

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

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                          scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                        <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                      </div> <!-- end .single-product -->
                    </div> <!-- end .col-sm-4 grid layout -->

                  </div> <!-- end .row -->
                </div> <!-- end .tabe-pane -->

                <div class="tab-pane active" id="category-book">
                  <h2>Result for "Book"<span class="comments">99</span></h2>

                  <div class="change-view">

                    <div class="filter-input">
                      <input type="text" placeholder="Filter by Keywords">
                    </div>
                    <button class="grid-view"><i class="fa fa-th"></i></button>
                    <button class="list-view active"><i class="fa fa-bars"></i></button>

                    <div class="sort-by">

                      <select class="" data-placeholder="-sort by-">
                        <option value="option1">Name</option>
                        <option value="option2">Tupe</option>
                        <option value="option3">Name</option>
                        <option value="option4">Type</option>
                      </select>

                     </div>

                  </div> <!-- end .change-view -->

                  <div class="row clearfix">
                    <div class="col-sm-4 col-xs-6 article-feed">
                    @foreach($feed as $item)
                    <article class="post">
                        <div class="single-product">
                          <figure>
                            <img src="{{asset('img/content/post-img-1.jpg')}}" alt="">

                            <figcaption>
                              <div class="bookmark">
                                <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                              </div>

                              <div class="read-more">
                                <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                              </div>

                            </figcaption>
                          </figure>

                          <h4><a href="{{$item['link']}}">{{$item['title']}}</a></h4>

                          <h5><em>Posted on {{$item['date']}}</em></h5>

                          <p>{{$item['desc']}}</p>

                          <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                        </div> <!-- end .single-product -->
                    </article>
                    @endforeach
                    </div>
                  </div> <!-- end .row -->
                </div> <!-- end .tabe-pane -->

              </div> <!-- end .tabe-content -->

              <div class="advertisement">
                <p>Advertisement</p>
                <img src="{{asset('img/add.jpg')}}" alt="">
              </div>

            </div> <!-- end .product-details -->
          </div> <!-- end .page-content -->
        </div>

        <div class="col-md-3 col-md-pull-9 category-toggle">
          <button><i class="fa fa-briefcase"></i></button>

          <div class="page-sidebar">

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

            <div id="distance-range">
              <p>
                <label for="amount">Distance</label>
                <input type="text" id="amount">
              </p>

              <div id="slider-range-min"></div>
            </div>  <!-- end #distance-range -->

            <!-- Category accordion -->
            <div id="categories">
              <div class="accordion">
                <ul class="nav nav-tabs accordion-tab" role="tablist">
                  <li>
                    <a href="#"><i class="fa fa-star-o"></i>All Categories</a>

                    <div>
                      <a href="#antique-all"  role="tab" data-toggle="tab">Antique</a>
                    </div>
                  </li>

                  <li>
                    <a href="#"><i class="fa fa-bullhorn"></i>advertisement</a>

                    <div>
                      <a  href="#jewelry" role="tab" data-toggle="tab">Jewelry</a>
                    </div>
                  </li>

                  <li class="active">
                    <a href="#" role="tab" data-toggle="tab"><i class="fa fa-shopping-cart"></i>E-commerce</a>

                    <div>
                      <a href="#antique" role="tab" data-toggle="tab">Antique</a>
                      <a class="active" href="#category-book" role="tab" data-toggle="tab">Books</a>
                      <a href="#cars-motorcycles" role="tab" data-toggle="tab">Cars &amp; Motorcycles</a>
                      <a href="#">Computer &amp; Tablets</a>
                      <a href="#">Creative &amp; Digitals</a>
                      <a href="#">Fashion</a>
                      <a href="#">Fitness &amp; Sport</a>
                      <a href="#">Furnishing</a>
                      <a href="#">Health &amp; Beauty</a>
                      <a href="#">Hobbies</a>
                      <a href="#">Jewelry</a>
                      <a href="#">Kitchen</a>
                      <a href="#">Leisure</a>
                      <a href="#">Music</a>
                      <a href="#">Ticket</a>
                      <a href="#">Video Game &amp; Console</a>
                    </div>
                  </li>

                  <li>
                    <a href="#"><i class="fa fa-graduation-cap"></i>Education</a>

                    <div>
                      <a href="#">Antique</a>
                      <a href="#">Computer &amp; Tablets</a>
                      <a href="#">Creative &amp; Digitals</a>
                      <a href="#">Fashion</a>
                      <a href="#">Fitness &amp; Sport</a>
                    </div>
                  </li>

                  <li>
                    <a href="#"><i class="fa fa-paper-plane-o"></i>Entertainment</a>

                    <div>
                      <a href="#">Fashion</a>

                    </div>
                  </li>

                  <li>
                    <a href="#"><i class="fa fa-home"></i>Home &amp; Garden</a>

                    <div>
                      <a href="#">Furnishing</a>
                    </div>
                  </li>

                  <li>
                    <a href="#"><i class="fa fa-cogs"></i>Industry</a>

                    <div>
                      <a href="#">Antique</a>
                    </div>
                  </li>

                  <li>
                    <a href="#"><i class="fa fa-book"></i>Libraries &amp; Public</a>

                    <div>
                      <a href="#">Antique</a>
                    </div>
                  </li>

                  <li>
                    <a href="#"><i class="fa fa-building-o"></i>Real Estate</a>

                    <div>
                      <a href="#">Antique</a>
                    </div>
                  </li>

                  <li>
                    <a href="#"><i class="fa fa-cutlery"></i>Resturants &amp; Pubs</a>

                    <div>
                      <a href="#">Antique</a>
                    </div>
                  </li>

                  <li>
                    <a href="#"><i class="fa fa-angle-right"></i>See More</a>

                    <div class="hide">
                      <a href="#">Antique</a>
                    </div>
                  </li>

                </ul>
              </div> <!-- end .accordion -->
            </div> <!-- end #categories -->


          </div> <!-- end .page-sidebar -->
        </div> <!-- end grid layout-->
      </div> <!-- end .row -->
    </div> <!-- end .container -->
  </div>  <!-- end #page-content -->
  <script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <script type="text/javascript">
    var limit = 10;
    document.querySelector('.article-feed').addEventListener("scroll",function(event) {
      var load_url = 'feed_load/' + <?php echo $id; ?> + '/' + limit;
      var section = $('.article-feed > article').height();
      var offsetHeight = this.offsetHeight;
      var scrollHeight = this.scrollHeight;
      var scrollTop = this.scrollTop;

      if((scrollHeight - offsetHeight - scrollTop) == 0) {
        $.ajax({
            type: 'POST',
            url: load_url,
            success: function(result){
              limit += 5;
              var items = JSON.parse(result);
              if (items.length > 0) {
                for(var i in items) {
                  var html = "<article class=\"post\"><div class=\"single-product\"><figure><img src=\"{{asset('img/content/post-img-1.jpg')}}\" alt=\"\"><figcaption><div class=\"bookmark\"><a href=\"#\"><i class=\"fa fa-bookmark-o\"></i> Bookmark</a></div><div class=\"read-more\"><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Read More</a></div></figcaption></figure><h4><a href=\""+items[i].link+"\">"+items[i].title+"</a></h4><h5><em>Posted on "+items[i].date+"</em></h5><p>"+items[i].desc+"</p><a class=\"read-more\" href=\"#\"><i class=\"fa fa-angle-right\"></i>Read More</a></div></article>";
                  $(".article-feed").append(html);
                }
              }
            }
        });
      }
    });
  </script>

@endsection
