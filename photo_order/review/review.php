<?php
  include('../config/database.php');
  $query="SELECT * FROM categories";
  $res= $conn->query($query);
  $menus=mysqli_fetch_all($res);
  $sql1="SELECT * FROM website_setting ORDER BY id DESC LIMIT 0,1";
  $res1= $conn->query($sql1);
  $data=$res1->fetch_assoc();
   $id=!empty($data['id'])?$data['id']:'';
  $websiteTitle=!empty($data['website_title'])?$data['website_title']:'';
  $websiteName=!empty($data['website_name'])?$data['website_name']:'';
  $websiteLogo=!empty($data['website_logo'])?$data['website_logo']:'';
  $websiteFavicon=!empty($data['website_favicon'])?$data['website_favicon']:'';
  $metaKeyword=!empty($data['meta_keyword'])?$data['meta_keyword']:'';
  
  $metaDescription=!empty($data['meta_description'])?$data['meta_description']:'';
  $googleVarificationCode=!empty($data['google_varification_code'])?$data['google_varification_code']:'';
  $googleAnalyticsCode=!empty($data['google_analytics_code'])?$data['google_varification_code']:'';
                
?>
<?php include '../assets/navi.php' ?>
<br><br>
<title>Отзывы</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" crossorigin="anonymous" />
		<script src="https://code.jquery.com/jquery-1.12.4.js" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous"></script>
<div class="jumbotron">
	<br><br>
	<div class="container">
		<h2 style="text-align:center;">Отзывы из <a href="https://www.instagram.com/"> <img src="images/instalogo.png" style="width:200px; height:100px; border-radius:20%;"></a></h2>
			<div class="row">
				<div class="col-lg-12">
					<div id="news-slider" class="owl-carousel">
						<!-- 1 -->
						<div class="news-grid">
							<div class="news-grid-image"><img src="images/1.jpg" alt="">
								</div>
							</div>
							<!-- 2 -->
							<div class="news-grid">
								<div class="news-grid-image"><img src="images/2.jpg" alt="">
									</div>
								</div>
								<!-- 3 -->
								<div class="news-grid">
									<div class="news-grid-image"><img src="images/3.jpg" alt="">
										</div>
									</div>
									<!-- 4 -->
									<div class="news-grid">
										<div class="news-grid-image"><img src="images/4.jpg" alt="">
											</div>
										</div>
										<!-- 5 -->
										<div class="news-grid">
											<div class="news-grid-image"><img src="images/5.jpg" alt="">
												</div>
											</div>
											<!-- 6 -->
											<div class="news-grid">
												<div class="news-grid-image"><img src="images/6.jpg" alt="">
													</div>
												</div>
												<!-- 7 -->
												<div class="news-grid">
													<div class="news-grid-image"><img src="images/7.jpg" alt="">
														</div>
													</div>
													<!-- 8 -->
													<div class="news-grid">
														<div class="news-grid-image"><img src="images/8.jpg" alt="">
															</div>
														</div>
														<!-- 9 -->
														<div class="news-grid">
															<div class="news-grid-image"><img src="images/9.jpg" alt="">
																</div>
															</div>
															<!-- 10 -->
															<div class="news-grid">
																<div class="news-grid-image"><img src="images/10.jpg" alt="">
																	</div>
																</div>
															<!-- 11 -->
															<div class="news-grid">
																<div class="news-grid-image"><img src="images/11.jpg" alt="">
																	</div>
																</div>
															<!-- 12 -->
															<div class="news-grid">
																<div class="news-grid-image"><img src="images/12.jpg" alt="">
																	</div>
																</div>
																<!-- 13 -->
															<div class="news-grid">
																<div class="news-grid-image"><img src="images/13.jpg" alt="">
																	</div>
																</div>
																															<!-- 10 -->
															<div class="news-grid">
																<div class="news-grid-image"><img src="images/14.jpg" alt="">
																	</div>
																</div>
																															<!-- 10 -->
															<div class="news-grid">
																<div class="news-grid-image"><img src="images/15.jpg" alt="">
																	</div>
																</div>
																															<!-- 10 -->
															<div class="news-grid">
																<div class="news-grid-image"><img src="images/16.jpg" alt="">
																	</div>
																</div>
																															<!-- 10 -->
															<div class="news-grid">
																<div class="news-grid-image"><img src="images/17.jpg" alt="">
																	</div>
																</div>
																															<!-- 10 -->
															<div class="news-grid">
																<div class="news-grid-image"><img src="images/18.jpg" alt="">
																	</div>
																</div>
																															<!-- 10 -->
															<div class="news-grid">
																<div class="news-grid-image"><img src="images/19.jpg" alt="">
																	</div>
																</div>
																															<!-- 10 -->
															<div class="news-grid">
																<div class="news-grid-image"><img src="images/20.jpg" alt="">
																	</div>
																</div>
																															<!-- 10 -->
															<div class="news-grid">
																<div class="news-grid-image"><img src="images/21.jpg" alt="">
																	</div>
																</div>
																															<!-- 10 -->
															<div class="news-grid">
																<div class="news-grid-image"><img src="images/22.jpg" alt="">
																	</div>
																</div>
																															<!-- 10 -->
															<div class="news-grid">
																<div class="news-grid-image"><img src="images/23.jpg" alt="">
																	</div>
																</div>
																															<!-- 10 -->
															<div class="news-grid">
																<div class="news-grid-image"><img src="images/24.jpg" alt="">
																	</div>
																</div>
																															<!-- 10 -->
															<div class="news-grid">
																<div class="news-grid-image"><img src="images/25.jpg" alt="">
																	</div>
																</div>
																															<!-- 10 -->
															<div class="news-grid">
																<div class="news-grid-image"><img src="images/26.jpg" alt="">
																	</div>
																</div>
																															<!-- 10 -->
															<div class="news-grid">
																<div class="news-grid-image"><img src="images/27.jpg" alt="">
																	</div>
																</div>															<!-- 10 -->
															<div class="news-grid">
																<div class="news-grid-image"><img src="images/28.jpg" alt="">
																	</div>
																</div>															<!-- 10 -->
															<div class="news-grid">
																<div class="news-grid-image"><img src="images/29.jpg" alt="">
																	</div>
																</div>															<!-- 10 -->
															<div class="news-grid">
																<div class="news-grid-image"><img src="images/30.jpg" alt="">
																	</div>
																</div>
																															<!-- 10 -->
															<div class="news-grid">
																<div class="news-grid-image"><img src="images/31.jpg" alt="">
																	</div>
																</div>															<!-- 10 -->
															<div class="news-grid">
																<div class="news-grid-image"><img src="images/32.jpg" alt="">
																	</div>
																</div>															<!-- 10 -->
															<div class="news-grid">
																<div class="news-grid-image"><img src="images/33.jpg" alt="">
																	</div>
																</div>															<!-- 10 -->
															<div class="news-grid">
																<div class="news-grid-image"><img src="images/34.jpg" alt="">
																	</div>
																</div>															<!-- 10 -->
															<div class="news-grid">
																<div class="news-grid-image"><img src="images/35.jpg" alt="">
																	</div>
																</div>															<!-- 10 -->
															<div class="news-grid">
																<div class="news-grid-image"><img src="images/36.jpg" alt="">
																	</div>
																</div>															<!-- 10 -->
															<div class="news-grid">
																<div class="news-grid-image"><img src="images/38.jpg" alt="">
																	</div>
																</div>	
															</div>
														</div>
													</div>
												</div>
												<!-- Script-Section -->
												<script type="text/javascript">
													$(document).ready(function(){
														$("#news-slider").owlCarousel({
															items:3,
															navigation:true,
															navigationText:["",""],
															autoPlay:false
														});
													});
												</script>
                        <style>
.news-wrap {
	width: 100%;
	padding: 30px 0;
}

.news-grid {
	width: auto;
	position: relative;
	overflow: hidden;
	margin: 10px;
}

.news-grid-image {
            border-radius:7.5%;
	width: 100%;
	height: 580px;
	overflow: hidden;
}

.news-grid-image img {
	width: 100%;
	height: 100%;
	object-fit: cover;
	transition: 100000s;
}

.news-grid-box {
	display: block;
	position: absolute;
	text-align: center;
	background: #26ccca;
	left: -80px;
	top: 15px;
	padding: 10px;
	transition: 100000s;
}

.news-grid-box h1 {
	color: #fff;
	font-size: 30px;
	font-weight: 400;
	letter-spacing: 2px;
	padding-bottom: 5px;
	border-bottom: 1px solid rgba(255, 255, 255, .3);
	margin-bottom: 5px;
}

.news-grid-box p {
	color: #fff;
	font-size: 14px;
	font-weight: 400;
	margin-bottom: 0px;
}

.news-grid-txt {
	padding: 25px;
}

.news-grid-txt span {
	color: #26ccca;
	font-size: 13px;
	font-weight: 500;
	letter-spacing: 4px;
	text-transform: uppercase;
}

.news-grid-txt h2 {
	color: #111;
	font-size: 20px;
	font-weight: 500;
	letter-spacing: 1px;
	margin: 10px 0px 5px 0px;
}

.news-grid-txt ul {
	padding: 0;
	margin: 0;
}

.news-grid-txt ul li {
	list-style: none;
	display: inline-block;
	color: #999;
	font-size: 14px;
	font-weight: 300;
	margin: 8px 10px 8px 0px;
	letter-spacing: 1px;
}

.news-grid-txt ul li i {
	color: #26ccca;
	font-size: 14px;
	font-weight: 500;
	margin-right: 5px;
}

.news-grid-txt p {
	color: #222;
	font-size: 14px;
	font-weight: 300;
	line-height: 170%;
	letter-spacing: 1.5px;
	border-bottom: 1px solid #ececec;
	padding-bottom: 15px;
	margin-bottom: 25px;
}

.news-grid-txt a {
	color: #fff;
	background: #26ccca;
	padding: 8px 20px;
	border-radius: 50px;
	font-size: 14px;
	font-weight: 300;
	line-height: 30px;
	letter-spacing: 1px;
	text-decoration-line: none;
	transition: 100000s;
}

/*Hover-Section*/
.news-grid:hover .news-grid-box {
	left: 15px;
	transition: 100000s;
}

.news-grid:hover .news-grid-image img {
	filter: grayscale(1);
	transform: scale(1.1);
	transition: 100000s;
}

.news-grid:hover .news-grid-txt a {
	text-decoration-line: none;
	color: #fff;
	letter-spacing: 2px;
	transition: 100000s;
}

/*OWL*/
.owl-controls .owl-buttons {
	position: relative;
}

.owl-controls .owl-prev {
	position: absolute;
	left: -40px;
	bottom: 230px;
	padding: 8px 17px;
	background: #26ccca;
	border-radius: 50px;
	transition: 100000s;
}

.owl-controls .owl-next {
	position: absolute;
	right: -40px;
	bottom: 230px;
	padding: 8px 17px;
	background: #26ccca;
	border-radius: 50px;
	transition: 100000s;
}

.owl-controls .owl-prev:after, .owl-controls .owl-next:after {
	content: '\f104';
	font-family: FontAwesome;
	color: #fff;
	font-size: 16px;
}

.owl-controls .owl-next:after {
	content: '\f105';
}

.owl-controls .owl-prev:hover, .owl-controls .owl-next:hover {
	background: #000;
}

                        </style>
</div>

  

    <div class="container">
    	<div class="card" style="border:0;">

    		<div class="card-body">
    			<div class="row">
    				<div class="col-sm-12 text-center">
	      		<h4 class="text-center mt-2 mb-4">
	        		<i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
	        	</h4>
                <div class="form-group">
	        		<input type="text" name="user_email" id="user_email" class="form-control" placeholder="Введите ваш email" />
	        	</div>
	        	<div class="form-group">
	        		<input type="text" name="user_name" id="user_name" class="form-control" placeholder="Введите ваше Имя" />
	        	</div>
	        	<div class="form-group">
	        		<textarea name="user_review" id="user_review" class="form-control" placeholder="Напишите ваш отзыв"></textarea>
	        	</div>
	        	<div class="form-group text-center mt-4">
	        		<button type="button" class="btn btn-primary" id="save_review">Отправить</button>
	        	</div>


    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="mt-5" id="review_content"></div>
    </div>



<style>
.progress-label-left
{
    float: left;
    margin-right: 0.5em;
    line-height: 1em;
}
.progress-label-right
{
    float: right;
    margin-left: 0.3em;
    line-height: 1em;
}
.star-light
{
	color:#e9ecef;
}
</style>

<script>

$(document).ready(function(){

	var rating_data = 0;

    $('#add_review').click(function(){

        $('#review_modal').modal('show');

    });

    $(document).on('mouseenter', '.submit_star', function(){

        var rating = $(this).data('rating');

        reset_background();

        for(var count = 1; count <= rating; count++)
        {

            $('#submit_star_'+count).addClass('text-warning');

        }

    });

    function reset_background()
    {
        for(var count = 1; count <= 5; count++)
        {

            $('#submit_star_'+count).addClass('star-light');

            $('#submit_star_'+count).removeClass('text-warning');

        }
    }

    $(document).on('mouseleave', '.submit_star', function(){

        reset_background();

        for(var count = 1; count <= rating_data; count++)
        {

            $('#submit_star_'+count).removeClass('star-light');

            $('#submit_star_'+count).addClass('text-warning');
        }

    });

    $(document).on('click', '.submit_star', function(){

        rating_data = $(this).data('rating');

    });

    $('#save_review').click(function(){

        var user_email = $('#user_email').val();

        var user_name = $('#user_name').val();

        var user_review = $('#user_review').val();

        if(user_name == '' || user_review == '' || user_email == '')
        {
            alert("Заполните все поля");
            return false;
        }
        else
        {
            $.ajax({
                url:"submit_rating.php",
                method:"POST",
                data:{rating_data:rating_data, user_email:user_email, user_name:user_name, user_review:user_review},
                success:function(data)
                {
                    $('#review_modal').modal('hide');

                    load_rating_data();

                    alert(data);
                }
            })
        }

    });

    load_rating_data();

    function load_rating_data()
    {
        $.ajax({
            url:"submit_rating.php",
            method:"POST",
            data:{action:'load_data'},
            dataType:"JSON",
            success:function(data)
            {
                $('#average_rating').text(data.average_rating);
                $('#total_review').text(data.total_review);

                var count_star = 0;

                $('.main_star').each(function(){
                    count_star++;
                    if(Math.ceil(data.average_rating) >= count_star)
                    {
                        $(this).addClass('text-warning');
                        $(this).addClass('star-light');
                    }
                });

                $('#total_five_star_review').text(data.five_star_review);

                $('#total_four_star_review').text(data.four_star_review);

                $('#total_three_star_review').text(data.three_star_review);

                $('#total_two_star_review').text(data.two_star_review);

                $('#total_one_star_review').text(data.one_star_review);

                $('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');

                $('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');

                $('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');

                $('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');

                $('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');

                if(data.review_data.length > 0)
                {
                    var html = '';

                    for(var count = 0; count < data.review_data.length; count++)
                    {
                        html += '<div class="row mb-3">';

                        html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">'+data.review_data[count].user_name.charAt(0)+'</h3></div></div>';

                        html += '<div class="col-sm-11">';

                        html += '<div class="card">';

                        html += '<div class="card-header"><b>'+data.review_data[count].user_name+'</b></div>';

                        html += '<div class="card-body">';

                        for(var star = 1; star <= 5; star++)
                        {
                            var class_name = '';

                            if(data.review_data[count].rating >= star)
                            {
                                class_name = 'text-warning';
                            }
                            else
                            {
                                class_name = 'star-light';
                            }

                            html += '<i class="fas fa-star '+class_name+' mr-1"></i>';
                        }

                        html += '<br />';

                        html += data.review_data[count].user_review;

                        html += '</div>';

                        html += '<div class="card-footer text-right">On '+data.review_data[count].datetime+'</div>';

                        html += '</div>';

                        html += '</div>';

                        html += '</div>';
                    }

                    $('#review_content').html(html);
                }
            }
        })
    }

});

</script>
<?php include '../assets/footer.php' ?>
</body>
</html>