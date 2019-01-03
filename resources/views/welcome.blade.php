
<!doctype html>
<html  class="bg-color" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
       
       
    </head>
    <body>
<section class="wrapper">
	<ul class="tabs">
		<li class="active"><button class="button button5">1</button></li>
		<li><button class="button button5">2</button></li>
		<li><button class="button button5">3</button></li>
		<li><button class="button button5">4</button></li>
		<li ><a href="http://fridayfx.net"><button class="button button5" style="background: red!important">X</button></a></li>
	</ul>
	<ul class="tab__content">
		<li class="active">
			<div class="content__wrapper">
				<div class="wrap-login100">
					<div class="login100-pic js-tilt" data-tilt>
						<img src="images/logo.png" alt="IMG">
					</div>

					<form class="login100-form validate-form" action="/insert" method="post" >
					@csrf
						<span class="login100-form-title">
							VPS Regiser
						</span>
						
						<div class="wrap-input100 validate-input" data-validate = "id xm">
						<input class="input100" type="text" name="username1" placeholder="Username xm">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
									<i class="fa fa-lock" aria-hidden="true"></i>
							</span>
						</div>

						<div class="wrap-input100 validate-input" data-validate = "Password is required">
							<input class="input100" type="password" name="pass1" placeholder="Password xm">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock" aria-hidden="true"></i>
							</span>
						</div>

						<div class="container-login100-form-btn">
						<span class="txt1">
					This step will not bring ID and Pass. You save in the system.</span>
							<button class="login100-form-btn" >
								Regiser
							</button>
						</div>

						<div class="text-center p-t-12">
							<span class="txt1">
							ติดต่อ
							</span>
							<a class="txt2" href="https://fb.me/fridayfxbot">
								facebook
							</a>
						</div>

						<div class="text-center p-t-136">
							<a class="txt2" href="https://m.me/fridayfxbot">
								ติดต่อ Friday facebook
								<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
							</a>
						</div>
					</form>
				</div>
			</div>
		</li>
		<li>
			<div class="content__wrapper">
				<div class="wrap-login100">
					<div class="login100-pic js-tilt" data-tilt>
						<img src="images/logo.png" alt="IMG">
					</div>
					
					<form class="login100-form validate-form" action="/insert2" method="post" >
					@csrf
						<span class="login100-form-title">
							VPS Regiser
						</span>
						
						<div class="wrap-input100 validate-input" data-validate = "id xm">
							<input class="input100" type="text" name="username2" placeholder="Username xm">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
									<i class="fa fa-lock" aria-hidden="true"></i>
							</span>
						</div>

						<div class="wrap-input100 validate-input" data-validate = "Password is required">
							<input class="input100" type="password" name="pass23" placeholder="Password xm">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock" aria-hidden="true"></i>
							</span>
						</div>

						<div class="container-login100-form-btn">
						<span class="txt1">
					This step will not bring ID and Pass. You save in the system.</span>
							<button class="login100-form-btn" >
								Regiser
							</button>
						</div>

						<div class="text-center p-t-12">
							<span class="txt1">
							ติดต่อ
							</span>
							<a class="txt2" href="https://fb.me/fridayfxbot">
								facebook
							</a>
						</div>

						<div class="text-center p-t-136">
							<a class="txt2" href="https://m.me/fridayfxbot">
								ติดต่อ Friday facebook
								<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
							</a>
						</div>
					</form>
				</div>
			</div>
		</li>
		<li>
			<div class="content__wrapper">
				<div class="wrap-login100">
					<div class="login100-pic js-tilt" data-tilt>
						<img src="images/logo.png" alt="IMG">
					</div>

					<form class="login100-form validate-form" action="/insert3" method="post" >
					@csrf
						<span class="login100-form-title">
							VPS Regiser
						</span>

						<div class="wrap-input100 validate-input" data-validate = "id xm">
							<input class="input100" type="text" name="username3" placeholder="Username xm">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
									<i class="fa fa-lock" aria-hidden="true"></i>
							</span>
						</div>

						<div class="wrap-input100 validate-input" data-validate = "Password is required">
							<input class="input100" type="password" name="pass23" placeholder="Password xm">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock" aria-hidden="true"></i>
							</span>
						</div>

						<div class="container-login100-form-btn">
						<span class="txt1">
					This step will not bring ID and Pass. You save in the system.</span>
							<button class="login100-form-btn" >
								Regiser
							</button>
						</div>

						<div class="text-center p-t-12">
							<span class="txt1">
							ติดต่อ
							</span>
							<a class="txt2" href="https://fb.me/fridayfxbot">
								facebook
							</a>
						</div>

						<div class="text-center p-t-136">
							<a class="txt2" href="https://m.me/fridayfxbot">
								ติดต่อ Friday facebook
								<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
							</a>
						</div>
					</form>
				</div>
			</div>
		</li>
		<li>
			<div class="content__wrapper">
				<div class="wrap-login100">
					<div class="login100-pic js-tilt" data-tilt>
						<img src="images/logo.png" alt="IMG">
					</div>

					<form class="login100-form validate-form" action="/insert4" method="post">
					@csrf
						<span class="login100-form-title">
							VPS Regiser
						</span>

						<div class="wrap-input100 validate-input" data-validate = "id xm">
							<input class="input100" type="text" name="username4" placeholder="Username xm">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
									<i class="fa fa-lock" aria-hidden="true"></i>
							</span>
						</div>

						<div class="wrap-input100 validate-input" data-validate = "Password is required">
							<input class="input100" type="password" name="pass23" placeholder="Password xm">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock" aria-hidden="true"></i>
							</span>
						</div>

						<div class="container-login100-form-btn">
						<span class="txt1">
					This step will not bring ID and Pass. You save in the system.</span>
							<button class="login100-form-btn" >
								Regiser
							</button>
						</div>

						<div class="text-center p-t-12">
							<span class="txt1">
							ติดต่อ
							</span>
							<a class="txt2" href="https://fb.me/fridayfxbot">
								facebook
							</a>
						</div>

						<div class="text-center p-t-136">
							<a class="txt2" href="https://m.me/fridayfxbot">
								ติดต่อ Friday facebook
								<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
							</a>
						</div>
					</form>
				</div>
			</div>
		</li>

		<li>
      <div class="content__wrapper">
        <div class="wrap-login100">
          <div class="login100-pic js-tilt" data-tilt>
            <img src="images/logo.png" alt="IMG">
          </div>

          <form class="login100-form validate-form" action="/insert5" method="post" >
            <span class="login100-form-title">
              VPS Unregister
            </span>

            <div class="wrap-input100 validate-input" data-validate = "id xm">
              <input class="input100" type="text" name="username5" placeholder="Username xm">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                  <i class="fa fa-lock" aria-hidden="true"></i>
              </span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Password is required">
              <input class="input100" type="password" name="pass23" placeholder="Password xm">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-lock" aria-hidden="true"></i>
              </span>
            </div>

            <div class="container-login100-form-btn">
            <span class="txt1">
          This step will not bring ID and Pass. You save in the system.</span>
              <button class="login100-form-btn" >
                Regiser
              </button>
            </div>

            <div class="text-center p-t-12">
              <span class="txt1">
              ติดต่อ
              </span>
              <a class="txt2" href="https://fb.me/fridayfxbot">
                facebook
              </a>
            </div>

            <div class="text-center p-t-136">
              <a class="txt2" href="https://m.me/fridayfxbot">
                ติดต่อ Friday facebook
                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

		</li>
	</ul>
</section>

    </body>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  
 <script src="js/index.js"></script>
</html>
