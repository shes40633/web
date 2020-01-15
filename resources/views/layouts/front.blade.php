<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
  integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

<link rel="stylesheet" href="project.css">

<body>

  <div class="all">
    <nav>
      <div class="nav_container">
        <div class="logo">
          <img src="">
        </div>

        <div class="navbur">
          <ul class="nav-content">
            <li><a class="effect-underline" href="#movie">關於電影</a></li>
            <li><a class="effect-underline" href="#ticket">票價資訊</a></li>
            <li><a class="effect-underline" href="#about">關於親親</a></li>
            <li><a class="effect-underline" href="#map">交通資訊</a></li>
            <li><a class="effect-underline" href="#business_title">業務專區</a></li>
          </ul>
        </div>
        <div class="mobile_nav_toggle">
          <span class="top-bar"></span>
          <span class="middle-bar"></span>
          <span class="bottom-bar"></span>
        </div>
        <div class="mobile_nav">
          <ul>
            <li>
              <a href="">關於電影</a>
            </li>
            <li>
              <a href="">票價資訊</a>
            </li>
            <li>
              <a href="">關於親親</a>
            </li>
            <li>
              <a href="">交通資訊</a>
            </li>
            <li>
              <a href="">哈拉麵包</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!-- banner -->
  <section class=section1>
    <div class="banner">
      <div class="banner_picture">
        <div class="swiper-container banner_swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <a href="">
                <img src="./img//20190718063810-5d3013d2d82e5.jpg">
              </a>
            </div>
          </div>
          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>

        </div>
      </div>
    </div>
  </section>



  <section class=section2>

    <div class="container">




      <!-- 關於電影 -->
      <!-- 熱售中 -->
      <div class="row row_sale">
        <div class="col-12 col-lg-7 sale">
          <div class="about_movie">
            <ul class="movies">
              <button class="movies_title movie_a" href="">
                <li>
                  現正熱映
                </li>
              </button>
              <button class="movies_title " href="">
                <li>
                  即將上映
                </li>
              </button>
            </ul>

          </div>
        </div>
      </div>
      <!-- Swiper -->
      <div class="all_movie">




        <div class="swiper-container product_swiper movie_live show">
          <div class="swiper-wrapper slider-produtos-wrap">
            @foreach ($movies as $movie)

            <div class="swiper-slide">
                <div class="button_w">
                  <!-- modal -->
                  <a data-toggle="modal" data-target="#exampleModalLong{{$movie->id}}">
                    <div class="movie_img swiper_button_left">
                      <img src="{{asset('/storage/'.$movie->img)}}" alt="">
                    </div>
                    <div class="movie_name">
                      <p>
                        {{$movie->title}}
                      </p>
                    </div>
                  </a>
                </div>
              </div>


              @endforeach




              {{-- <div class="swiper-slide">
                <div class="button_w">
                  <!-- modal -->
                  <a data-toggle="modal" data-target="#exampleModalLong">
                    <div class="movie_img">
                      <img src="./img//怪物.jpg" alt="">
                    </div>
                    <div class="movie_name">
                      <p>
                        怪物
                      </p>
                    </div>
                  </a>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="button_w">
                  <!-- modal -->
                  <a data-toggle="modal" data-target="#exampleModalLong">
                    <div class="movie_img">
                      <img src="./img//阿凡達.jpg" alt="">
                    </div>
                    <div class="movie_name">
                      <p>
                        阿凡達
                      </p>
                    </div>
                  </a>
                </div>
              </div> --}}


          </div>
          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
        </div>

    <!-- product_Modal -->

    @foreach ($movies as $movie)

    <div class="modal fade" id="exampleModalLong{{$movie->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title text-center" id="exampleModalLongTitle">
                {{$movie->title}}
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">
                &times;
                </span>
            </button>
            </div>
            <div class="modal-body">
            <div class="row">
                <div class="col-md-4 text-center">
                <img src="{{asset('/storage/'.$movie->img)}}" alt="">


                </div>

                <div class="col-md-8 pro_text">
                <div class="movie_time">


                    <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            電影時間選擇影廳
                            </button>
                        </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            時刻尚未提供,敬請稍候
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            電影介紹
                            </button>
                        </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            {!!$movie->description!!}
                        </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            電影預告
                            </button>
                        </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <iframe width="400" height="315" src="{{$movie->vedio}}" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        </div>

                        </div>
                    </div>
                    </div>

                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

    @endforeach


        <div class="swiper-container comming_swiper movie_live ">
          <div class="swiper-wrapper slider-produtos-wrap">
              @foreach ($comings as $coming)


            <div class="swiper-slide">
              <div class="button_w">
                <!-- modal -->
                <a data-toggle="modal" data-target="#exampleModalcomming{{$coming->id}}">
                  <div class="movie_img swiper_button_left">
                    <img src="{{asset('/storage/'.$coming->img)}}" alt="">
                  </div>
                  <div class="movie_name">
                    <p>
                     {{$coming->title}}
                    </p>
                  </div>
                </a>
              </div>
            </div>
            @endforeach


            {{-- <div class="swiper-slide">
              <div class="button_w">
                <!-- modal -->
                <a data-toggle="modal" data-target="#exampleModalcomming">
                  <div class="movie_img">
                    <img src="./img//水行俠.jpg" alt="">
                  </div>
                  <div class="movie_name">
                    <p>
                      水行俠
                    </p>
                  </div>
                </a>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="button_w">
                <!-- modal -->
                <a data-toggle="modal" data-target="#exampleModalcomming">
                  <div class="movie_img">
                    <img src="./img//images.png" alt="">
                  </div>
                  <div class="movie_name">
                    <p>
                      野蠻遊戲
                    </p>
                  </div>
                </a>
              </div>
            </div> --}}


          </div>
          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
        </div>

      @foreach ($comings as $coming)


        <div class="modal fade" id="exampleModalcomming{{$coming->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-center" id="exampleModalLongTitle">
                {{$coming->title}}
              </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">
                  &times;
                </span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-4 text-center">
                  <img src="{{asset('/storage/'.$coming->img)}}" alt="">
                </div>

                <div class="col-md-8 pro_text">
                  <div class="movie_time">


                    <div class="accordion" id="accordionExample">
                      <div class="card">
                        <div class="card-header" id="headingOne">
                          <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                              aria-expanded="true" aria-controls="collapseOne">
                              電影時間選擇影廳
                            </button>
                          </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                          data-parent="#accordionExample">
                          <div class="card-body">
                            {{$coming->time}}
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingTwo">
                          <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                              data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              電影介紹
                            </button>
                          </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                          <div class="card-body">
                            {!!$coming->description!!}
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" id="headingThree">
                          <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                              data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              電影預告
                            </button>
                          </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                          data-parent="#accordionExample">
                          <div class="card-body">
                            <iframe width="400" height="315" src="{{$coming->vedio}}" frameborder="0"
                              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                              allowfullscreen></iframe>
                          </div>

                        </div>
                      </div>
                    </div>



                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      @endforeach

      </div>
    </div>
  </section>



  <!-- 票價資訊 -->
  <Section class="section3">
    <div class="container">


      <div class="row">
        <div class="col-12 col-xl-6 ">
          <div class="ticket">

            <h1 class="ml7">
                <div class="text-wrapper ticket_title">
                    <div  data-aos="example-anim1">票</div>
                    <div  data-aos="example-anim1">價</div>
                    <div  data-aos="example-anim1">資</div>
                    <div  data-aos="example-anim1">訊</div>
                  </div>
            </h1>



            <div class="ticket_all ">

              <table id="Table7" border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                  <tr>
                    <td height="600" nowrap="nowrap" align="center">
                      <table cellspacing="0" cellpadding="4" align="Center" rules="all" border="1"
                        id="ctl00_ContentPlaceHolder1_dgSong"
                        style="background-color:black;border-color:black;border-width:1px;border-style:solid;width:100%;border-collapse:collapse;">
                        <tbody>
                          <tr align="center" valign="middle" style="color:black;background-color:white;">
                    </td>
                    <td valign="middle" height="100" style="width:34%;"></td>
                    <td valign="middle">2D</td>
                    <td valign="middle">3D</td>
                  </tr>
                  <tr align="center" valign="middle" height="100" style="background-color:#939393;">
                    <td valign="middle">全票 </td>
                    <td valign="middle">210元 </td>
                    <td valign="middle">300元 </td>
                  </tr>
                  <tr align="center" valign="middle" height="100" style="background-color:white;">
                    <td valign="middle">半票 </td>
                    <td valign="middle">190元 </td>
                    <td valign="middle">280元 </td>
                  </tr>
                  <tr align="center" valign="middle" height="100" style="background-color:#939393;">
                    <td valign="middle">會員票 </td>
                    <td valign="middle">190元 </td>
                    <td valign="middle">280元 </td>
                  </tr>
                  <tr align="center" valign="middle" height="100" style="background-color:white;">
                    <td valign="middle">兒童票 </td>
                    <td valign="middle">150元 </td>
                    <td valign="middle">210元 </td>
                  </tr>
                  <tr align="center" valign="middle" height="100" style="background-color:#939393;">
                    <td valign="middle">愛心票 </td>
                    <td valign="middle">100元 </td>
                    <td valign="middle">210元 </td>
                  </tr>
                </tbody>
              </table>
              </td>
              </tr>
              </tbody>
              </table>


            </div>
          </div>
        </div>

        <div class="col-12 col-xl-6 ">
            <div class="search-movie">
              <div class="search-movie_title">
                <p>Search Movie</p>
              </div>
              <div action="" class=form>
                <select name="" id="search" class=search>
                  <option class="options"id="noshow" value="請選擇電影" selected  data-movieid="">請選擇電影</option>
                  <option class="options" value="野蠻遊戲">野蠻遊戲</option>
                </select>
              </div>

              <div class="search_button">
                <button type="button" class="btn btn-primary submit"  id="sowmodal"data-toggle="modal" data-target="#exampleModalLong">
                  <span>熱門電影查詢</span>
                </button>
              </div>

            </div>
          </div>

      </div>
    </div>
  </Section>



  <!-- 關於親親 -->

  <section class="section4">
    <div class="container">
      <div class="row">
        <div class="col-12  about_theater_bg">



          <div class="about_theater_title">
            <p>
              關於親親
            </p>
          </div>

          <div class="about_theater_content">

            <div class="media">
              <img src="./img/電影院裡圖.jpg" class="align-self-center mr-3 img_size" data-aos="fade-right"
                data-aos-offset="100" data-aos-easing="ease-in-sine" alt="...">
              <div class="media-body">
                <h5 class="mt-0">影城簡介</h5>
                <div>
                <p>親親影城成立於1986年,現設有7個國際標準的電影廳院,與全球同步播映首輪影片
                  。本影城自民國８１年營業之初即為北屯住宅圈帶來繁榮契機，率先採用舒適進口「ＰＵ麗池座椅」
                  ，影城廳內座位寬敞舒適．劇場式的階梯座椅設計，提供給觀賞者無障礙的視野空間；以及置杯架，提供一個舒適愉悅的官片環境。</p>
                <p class="mb-0 dis-no">其中二廳最新裝置的JBL新型「三音錄主喇叭」將音質效果大大提升</p>
                <p class="mb-0 dis-no">
                  安全的環境設計，客層大多以家庭成員位主；除了電影院之外，親親影城所在大樓逐漸發展成電影娛樂城，附設Ｂ１湯姆熊遊戲場ˋ１F哈拉麵包ˋ咖啡ˋ２F網咖，成為當地居民休閒娛樂的重心之一。
                </p>

              </div>
              </div>
            </div>

            <div class="media">
              <div class="media-body ">
                <h5 class="mt-0 mb-1">座椅</h5>
                <p>全館座椅如享受超豪華747艙座，視野無礙。讓您100%與劇情全程參與。</p>
              </div>
              <img src="./img/電影院裡圖-2.jpeg" class="ml-3 img_size_big" data-aos="fade-left" data-aos-offset="100"
                data-aos-easing="ease-in-sine" alt="...">
            </div>

            <div class="media  media_margin">
              <img src="./img//電影院裡圖-3.jpg" class="align-self-center mr-3 img_size_big" data-aos="zoom-in-right"
                alt="...">
              <div class="media-body">
                <h5 class="mt-0">螢幕</h5>
                <p>
                  超廣角大螢幕視野遼闊，色彩ˋ亮度ˋ立體感完美呈現，保證撼動您的視覺感官。
                </p>
              </div>
            </div>

            <div class="media media_margin">
              <div class="media-body">
                <h5 class="mt-0 mb-1">音質</h5>
                <P>採用杜比新型7.1環繞音響ˋSRDˋDTS電腦數位音效與JBL最頂級5674劇院級喇叭級CROW專業級擴大機總輸出值高達36000瓦。</P>
              </div>
              <img src="./img//電影院裡圖-4.jpeg" class="ml-3 img_size_big" data-aos="zoom-in-left" alt="...">
            </div>

          </div>







        </div>
      </div>
    </div>
  </section>


  <section class="section5">

    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="map_title">
            <p>
              交通資訊
            </p>
          </div>

           </div>
      </div>

          <div class="map_all">

            <div class="map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4593.067901506666!2d120.68987661543643!3d24.160287978909988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693d5f78f73f31%3A0xe3910bbd1de3dd92!2zQ2hpbiBDaGlu6Kaq6Kaq5oiy6ZmiIC0g5Y-w5Lit6Zu75b2x6Zmi!5e1!3m2!1szh-TW!2stw!4v1576898464231!5m2!1szh-TW!2stw"
                frameborder="0" style="border:0;" allowfullscreen="">
              </iframe>
            </div>
            <div class="map_content">
              <div class="map_phone">
                <h2>電話 :</h2>

                <p>(04)22319111</p>
              </div>
              <div class="map_address">
                <h2>地址 :</h2>
                <p>台中市北區北屯路14-2號</p>
              </div>

              <div class="map_news">

                <div class="map_news_title">
                  <h2>交通資訊 :</h2>

                  <p class="map_news_text">大眾運輸</p>

                  <p class="map_text">搭乘公車的朋友們，請在</p>

                  <p>「監理站」下車</p>

                </div>
                <div>
                  <b>搭乘的車號：</b>
                  <ul>
                    　<li>仁友客運：1、21、31、105</li>
                    　<li>台中客運：8、14、15、16、102、132、136</li>
                  </ul>
                </div>
                <div>
                  <b>汽/機車：</b>
                  <ul>
                    　<li>機車：10元/次</li>
                    　<li>汽車：30元/小時
                      <br>
                      (未滿30分鐘不予計費，超過30分鐘以1小時計費)
                    </li>
                  </ul>
                </div>

              </div>
            </div>

          </div>



        </div>
  </section>


  <section class="section6">
    <div class="container ">
      <div class="row">

        <div class="col-12">
          <div class="business_title">
            <p>
              業務專區
            </p>
          </div>
        </div>

          <div class="card-deck">


            @foreach ($jobs as $job)


            <div class="card animated card_text">
              <img src="{{asset('/storage/'.$job->img)}}" class="card-img-top " alt="...">
              <div class="card-body">
                <h5 class="card-title">
                  {{$job->title}}</h5>

                <div class="card-text"> {!!$job->description!!} </div>

              </div>
            </div>
            @endforeach

            {{-- <div class="card card_ma card_text">
              <img src="./img/親親衣服.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">主題潮T</h5>
                <p class="card-text ">情侶裝 潮T 班服 情侶t 純棉短t 短袖 貓狗親親 MIT快速出貨 加大尺碼</p>

              </div>
            </div>
            <div class="card card_ma card_text">
              <img src="./img/哈拉麵包.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">哈拉麵包</h5>
                <p class="card-text">親親戲院樓下的哈拉麵包重新裝潢亮麗開幕啦！內裝整個大改造～變身時尚歐洲風，周圍的牆面還加入現在最流行的貨櫃元素！</p>

              </div>
            </div> --}}

          </div>




      </div>
    </div>
  </section>





  <footer>
    <div class="footer">
      <div class="container footer_con">
        <div class="footerlogo">
          <div class="footer_logo">
            <img src="./img//親親logo.png" alt="">
          </div>
        </div>

          <div class="footer_text">
            <ul class="footer_ul">
              　<li class="footer_li">電話 : (04)22319111</li>
              　<li class="footer_li">地址 : 台中市北區北屯路14-2號</li>
              　<li class="footer_li">停車場 : 本電影院附設汽/機車停車場</li>
            </ul>
          </div>
</div>
    </div>
</footer>








  <!-- nav js -->
  <script>
    var mobile_nav_toggle = document.querySelector(".mobile_nav_toggle");
    var mobile_nav = document.querySelector(".mobile_nav")
    mobile_nav_toggle.onclick = function () {

      mobile_nav.classList.toggle('active');
    }
  </script>
  <!-- bootstrap js -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
    integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
    integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
    crossorigin="anonymous"></script>
  <!-- Swiper JS -->

  <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
  <!-- aos js -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- 動畫 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

  <script>
    AOS.init();
  </script>



<script>
    var movies_title = document.querySelectorAll(".movies_title");
    var movie_live = document.querySelectorAll(".movie_live");
    // var noshow = document.getElementById("noshow").value;
//     var sowmodal = document.getElementById("sowmodal");
//     var  value = document.querySelectorAll(".options");
// console.log(value[0]);

    $( "#search").change(function() {
      console.log($("#search").val());

      if($("#search").val() == "請選擇電影"){

      // $('#sowmodal').css('display','none');
      $('#sowmodal').hide();
      }
      else{
        $('#sowmodal').show();
      }

 }
);


    function clear() {
      for (let i = 0; i < movies_title.length; i++) {
        const movies_title_clear = movies_title[i];
        movies_title[i].classList.remove("movie_a");
        movie_live[i].classList.remove("show");
      }
    }
    for (let i = 0; i < movies_title.length; i++) {
      const movies_add = movies_title[i];
      movies_add.onclick = function () {
        clear();
        movies_title[i].classList.add("movie_a");
        movie_live[i].classList.add("show");
      }
    }



  </script>

  <!-- Initialize Swiper -->
  <script>
    //
    var swiper = new Swiper('.banner_swiper', {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },

    });
    // product_swiper
    var swiper = new Swiper('.product_swiper', {
      slidesPerView: 1,
      spaceBetween: 28,
      loop: true,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {


        768: {
          slidesPerView: 2,
          spaceBetween: 28,
        },

        1280: {
          slidesPerView: 3,
          spaceBetween: 28,
        },


      }

    });
    var swiper = new Swiper('.comming_swiper', {
      slidesPerView: 1,
      spaceBetween: 28,
      loop: true,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {

        490: {
          slidesPerView: 1,
          spaceBetween: 28,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 28,
        },

        1280: {
          slidesPerView: 3,
          spaceBetween: 28,
        },


      }

    });
  </script>
<script>
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
</script>

</body>

</html>
