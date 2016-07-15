<?php
/**
 * Created by PhpStorm.
 * User: Эрлан
 * Date: 13.07.2016
 * Time: 16:01
 */
?>
<p class="page_title">Контакты</p>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2923.807010610273!2d74.56170908822764!3d42.876917376286336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x389ec86966724267%3A0x65140a328bd070f0!2zMjMwINC_0YDQvtGB0L_QtdC60YIg0KfRg9C5LCDQkdC40YjQutC10Lo!5e0!3m2!1sru!2skg!4v1468583409702" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe><br />
<br />
<p>Адрес: Кыргызстан, Бишкек, проспект Чуй 230, Б.Ц. "Берекет"</p>
<p>Тел: +996 779 906 126, +996 772 651 142 </p>
<br />
<p><span class="strong-text">Или оставьте нам письмо:</span></p>
<form role="form" method="post" id="contactform" action="/requests/getAjaxRequests.php?action=mailto">
    <div class="form-group">
        <label for="name">Ваше имя</label>
        <input name="name" type="text" class="form-control" id="name" placeholder="Например, Николай">
    </div>
    <div class="form-group">
        <label for="name">Ваш телефон</label>
        <input name="phone" type="phone" class="form-control" id="phone" placeholder="Например, +996 123 123 123">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input  name="email" type="email" class="form-control" id="email" placeholder="Например, example@tdmplus.com">
    </div>
    <div class="form-group">
        <label for="subject">Тема</label>
        <input  name="subject" type="text" class="form-control" id="subject" placeholder="Какой вопрос вас беспокоит?">
    </div>
    <div class="form-group">
        <label for="message">Ваше сообщение</label>
        <textarea  name="message" class="form-control" rows="3" id="message"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Отправить</button>
</form>
<div id="custom_message" class="alert fade in">
    <span id="responseMessage" style="display: none;"></span>
</div>
