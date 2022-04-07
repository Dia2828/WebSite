<!DOCTYPE html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Система налоговая инспекция</title>
                                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='' rel='stylesheet'>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
								<link href="css/styles.css" rel="stylesheet">
                                </head>
                                <body oncontextmenu='return false' class='snippet-body'>
                                <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"></span><span class="text-black-50"></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Настройки профиля</h4>
                </div>
				<form action="zak.php" method="post" name="B1">
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Имя</label><input name="first-name" type="text" class="form-control" placeholder="" value=""></div>
                    <div class="col-md-6"><label class="labels">Фамилия</label><input name="lastname" type="text" class="form-control" value="" placeholder=""></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Номер Мобильного телефона</label><input name="phonenumber" type="text" class="form-control" placeholder="" value=""></div>
                    <div class="col-md-12"><label class="labels">Почтовый индекс</label><input name="postalcode" type="text" class="form-control" placeholder="" value=""></div>
                    <div class="col-md-12"><label class="labels">Государство</label><input name="state" type="text" class="form-control" placeholder="" value=""></div>
                    <div class="col-md-12"><label class="labels">Область</label><input name="area" type="text" class="form-control" placeholder="" value=""></div>
                    <div class="col-md-12"><label class="labels">Идентификатор электронной почты</label><input name="emailid" type="text" class="form-control" placeholder="" value=""></div>
                    <div class="col-md-12"><label class="labels">Образование</label><input name="education" type="text" class="form-control" placeholder="" value=""></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Страна</label><input name="country" type="text" class="form-control" placeholder="" value=""></div>
                    <div class="col-md-6"><label class="labels">Штат/Регион</label><input name="region" type="text" class="form-control" value="" placeholder=""></div>
                </div>
                <div class="mt-5 text-center">
				<button name="B1" class="btn btn-primary profile-button" type="submit">Сохранить профиля</button>
				</div>
				</form>
            </div>
        </div>
        <div class="col-md-4 border-right ads">
          <div class="slider">
            <div class="item">
                <img src="img/crop-22.jpg" alt="Первый слайд">
                <div class="slideText"></div>
            </div>

            <div class="item">
                <img src="img/crop-22.jpg" alt="Второй слайд">
                <div class="slideText"></div>
            </div>

            <div class="item">
                <img src="img/crop-22.jpg" alt="Третий слайд">
                <div class="slideText"></div>
            </div>

            <a class="prev" onclick="minusSlide()">&#10094;</a>
            <a class="next" onclick="plusSlide()">&#10095;</a>
          </div>

          <div class="slider-dots">
              <span class="slider-dots_item" onclick="currentSlide(1)"></span>
              <span class="slider-dots_item" onclick="currentSlide(2)"></span>
              <span class="slider-dots_item" onclick="currentSlide(3)"></span>
          </div>
        </div>
    </div>
</div>
</div>
</div>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
                                <script type="text/javascript" src='func.js'>

                                </script>
                                </body>
                            </html>
