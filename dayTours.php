
<link rel="stylesheet" href="custom/css/section.css">

        <style>
            body{margin: 0; padding: 0px;}


            /* MENU */
/*html, body{margin: 0; padding: 0; font-family: 'Montserrat', sans-serif; width: 100%; height: 100%; background: #1f1f1f; }*/
.headerdive{text-align: center; position: relative}
.headerdive .headerdive2{margin: 0 auto; display: inline-table; margin-top: 25px; z-index: 2}

/***************ul{;padding: 0px; display: flex; margin: 0 auto; z-index:99}*/
/*ul{; left: 0%; top: 0%; transform: translateX(90%); padding: 0; margin-top: 30px; display: flex;
   ;z-index:99}            *//**********************
a:link{text-decoration: none;}
ul li{ list-style: none; color: black}
ul li a{position: relative; display: block;  padding: 10px 15px; text-align: center; text-transform: uppercase; text-decoration: none;
        transition: .5s; color: black;  }
ul li a:hover{color: black}
ul li a:before{content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 2px; background: white; z-index: -1;
               transform: scaleX(0); transform-origin: left; transition: transform 1s; color: black}
ul li a:hover:before{transform: scaleX(1); transform-origin: right; color: black}
ul li a:after{content: ''; position: absolute; bottom: 0; left: 0; width: 100%; height: 2px; background: white; z-index: -1;
              transform: scaleX(0); transform-origin: right; transition: transform 1s; color: black}
ul li a:hover:after{ transform: scaleX(1); transform-origin: left; color: black}*/
/* MENU */
/* FOOTER BOX*/

/*.contain{position: relative; width: 100%; height: 600px; margin: 0px auto 0; padding: 0 }*/
.contain .box{position: relative; width: 100%; height: 270px; background:#000; float: left; margin: 15px; overflow: hidden;
                box-sizing: border-box; box-shadow: 0 5px 10px rgba(0, 0, 0, .8)}
.contain .box:before{content: ''; position: absolute; top: 10px; left: 10px; right: 10px; bottom: 10px; border-top: 1px solid #fff;
                       border-bottom: 1px solid #fff; box-sizing: border-box; transition: .5s; transform: translateX(0); transform: scaleX(0);
                       opacity: 0; z-index: 1}
.contain .box:hover:before{ transform: scaleX(1); opacity: 1;}
.contain .box:after{content: ''; position: absolute; top: 10px; left: 10px; right: 10px; bottom: 10px; border-left: 1px solid #fff;
                      border-right: 1px solid #fff; box-sizing: border-box; transition: .5s; transform: translateY(0);opacity: 0;
                      transform: scaley(0);z-index: 1 }
.contain .box:hover:after{ transform: scaleY(1); opacity: 1; }
.contain .box .imgBox{position: relative; }
.contain .box .imgBox img{width: 100%; transition: .5s; overflow: hidden; }
.contain .box:hover .imgBox img{opacity: .2; transform: scale(1.2)}
.contain .box .content{position: absolute; width: 100%; top: 50%;transform: translateY(-50%); z-index: 2; padding: 20px;
                         box-sizing: border-box; text-align: center}
.contain .box .content h2{margin: 0 0 10px 0; padding: 0; color: #fff; transition: .5s; transform: translateY(-50px); opacity: 0;
                            visibility: hidden}
.contain .box .content .pe{margin: 0 ; padding: 0; color: #fff; transition: .5s; transform: translateY(50px); opacity: 0;
                             visibility: hidden}
.contain .box:hover .content h2{opacity: 1; visibility: visible; transform: translateY(0px)}
.contain .box:hover .content .pe{opacity: 1; visibility: visible; transform: translateY(0px)}
.contain .box .content .pepe{color: white; font-size: 70px; opacity: 1; visibility: visible; transform: translateY(75%)}
.contain .box:hover .content .pepe{color: white; font-size: 70px; opacity:0; visibility: hidden; position: absolute; }
/* FOOTER BOX*/

.windowClass{width: 100vw; margin-right: 10px;}

        </style>

        <div class="contain dayTours windowClass">
          <div class="container">

            <div class="row text-center">
              <div class="col-md-4">
                <div class="box wow fadeInLeft" data-wow-offset="0" data-duration="2s" data-wow-delay="0.6s">
                    <div class="imgBox">
                        <img src="images/test2.png" alt="">
                    </div>
                    <div class="content">
                        <p class="pepe" style="">Colombo</p>
                        <h2>Colombo Day Excursion</h2>
                        <p class="pe">Colombo is the largest city in Sri Lanka, and is known as a financial and commercial capital of the country.</p>

                    </div>
                </div>
                <button type="button" class="btn btn-info " data-toggle="modal" data-target="#exampleModalCenter" name="button1">more</button>
              </div>

              <div class="col-md-4">
                <div class="box wow fadeInDown" data-wow-offset="0" data-duration="2s" data-wow-delay="0.6s">
                    <div class="imgBox">
                        <img src="images/test.jpg" alt="">
                    </div>
                    <div class="content">
                        <p class="pepe" style="">Kandy</p>
                        <h2>  Kandy Day Excursion</h2>
                        <p class="pe">Colombo is the largest city in Sri Lanka, and is known as a financial and commercial capital of the country.</p>
                        <button type="button" class="btn btn-info pe" name="button">more</button>
                    </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box wow fadeInRight" data-wow-offset="0" data-duration="2s" data-wow-delay="0.6s">
                    <div class="imgBox">
                        <img src="images/test2.png" alt="">
                    </div>
                    <div class="content">
                        <p class="pepe" style="">Colombo</p>
                        <h2>Colombo Day Excursion</h2>
                        <p class="pe">Colombo is the largest city in Sri Lanka, and is known as a financial and commercial capital of the country.</p>
                        <button type="button" class="btn btn-info pe" name="button">more</button>
                    </div>
                </div>
              </div>
            </div>

            <div class="row text-center">
              <div class="col-md-4">
                <div class="box wow fadeInLeft" data-wow-offset="0" data-duration="2s" data-wow-delay="0.6s">
                    <div class="imgBox">
                        <img src="images/test2.png" alt="">
                    </div>
                    <div class="content">
                        <p class="pepe" style="">Colombo</p>
                        <h2>Colombo Day Excursion</h2>
                        <p class="pe">Colombo is the largest city in Sri Lanka, and is known as a financial and commercial capital of the country.</p>
                        <button type="button" class="btn btn-info pe" name="button">more</button>
                    </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box wow fadeInUp" data-wow-offset="0" data-duration="2s" data-wow-delay="0.6s">
                    <div class="imgBox">
                        <img src="images/test.jpg" alt="">
                    </div>
                    <div class="content">
                        <p class="pepe" style="">Kandy</p>
                        <h2>  Kandy Day Excursion</h2>
                        <p class="pe">Colombo is the largest city in Sri Lanka, and is known as a financial and commercial capital of the country.</p>
                        <button type="button" class="btn btn-info pe" name="button">more</button>
                    </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box wow fadeInRight" data-wow-offset="0" data-duration="2s" data-wow-delay="0.6s">
                    <div class="imgBox">
                        <img src="images/test2.png" alt="">
                    </div>
                    <div class="content">
                        <p class="pepe" style="">Colombo</p>
                        <h2>Colombo Day Excursion</h2>
                        <p class="pe">Colombo is the largest city in Sri Lanka, and is known as a financial and commercial capital of the country.</p>
                        <button type="button" class="btn btn-info pe" name="button">more</button>
                    </div>
                </div>
              </div>
            </div>

            <div class="row text-center">
              <div class="col-md-4">
                <div class="box wow fadeInLeft" data-wow-offset="0" data-duration="2s" data-wow-delay="0.6s">
                    <div class="imgBox">
                        <img src="images/test2.png" alt="">
                    </div>
                    <div class="content">
                        <p class="pepe" style="">Colombo</p>
                        <h2>Colombo Day Excursion</h2>
                        <p class="pe">Colombo is the largest city in Sri Lanka, and is known as a financial and commercial capital of the country.</p>
                        <button type="button" class="btn btn-info pe" name="button">more</button>
                    </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box wow fadeInUp" data-wow-offset="0" data-duration="2s" data-wow-delay="0.6s">
                    <div class="imgBox">
                        <img src="images/test.jpg" alt="">
                    </div>
                    <div class="content">
                        <p class="pepe" style="">Kandy</p>
                        <h2>  Kandy Day Excursion</h2>
                        <p class="pe">Colombo is the largest city in Sri Lanka, and is known as a financial and commercial capital of the country.</p>
                        <button type="button" class="btn btn-info pe" name="button">more</button>
                    </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box wow fadeInRight" data-wow-offset="0" data-duration="2s" data-wow-delay="0.6s">
                    <div class="imgBox">
                        <img src="images/test2.png" alt="">
                    </div>
                    <div class="content">
                        <p class="pepe" style="">Colombo</p>
                        <h2>Colombo Day Excursion</h2>
                        <p class="pe">Colombo is the largest city in Sri Lanka, and is known as a financial and commercial capital of the country.</p>
                        <button type="button" class="btn btn-info pe" name="button">more</button>
                    </div>
                </div>
              </div>
            </div>

          </div>

        </div>
