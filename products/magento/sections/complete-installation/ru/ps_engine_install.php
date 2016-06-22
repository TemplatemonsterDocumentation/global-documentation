<h3>Установка Magento</h3>
<p>После окончания загрузки файлов можно приступать к установке Magento. Откройте ваш браузер и в адресной строке браузера напишите<strong>'доменное имя/путь к вашей папке Magento'</strong>. Вы должны увидеть экран приветствия. Следуйте инструкциям ниже для установки Magento. </p>
<div class="alert alert-warning">Внимание: файл <strong>dump.sql.gz</strong> должен быть импортирован в чистую базу данных ПЕРЕД установкой Magento.</span></div>

<h4>Шаг 1: Installation Assistant</h4>
<p>Прочтите, пожалуйста, лицензионное соглашение и поставьте галочку, подтверждающую ваше с ним согласие. </p>
<figure class="img-polaroid"><img src="<?php echo $this->getImgPath('magento/how-to-install-1.jpg') ?>" alt="" /></figure>

<h4>Шаг 2: Installation Assistant (Локализация)</h4>
<p>Выберите локаль, временную зону и валюту по умолчанию. Выбор локали определит язык панели управления вашим магазином. Если вы хотите изменить язык страниц магазина Magento, вам потребуется загрузить и установить соответствующие локали дополнительно. Все настройки могут быть изменены позже через панель управления Magento. </p>
<figure class="img-polaroid"><img src="<?php echo $this->getImgPath('magento/how-to-install-2.jpg') ?>" alt="" /></figure>

<h4>Шаг 3: Настройка</h4>
<p>Здесь вам необходимо указать данные для доступа к базе данных и некоторые базовые настройки.
<strong>Database Connection</strong> – укажите адрес сервера, название базы, имя пользователя и пароль. Свяжитесь с вашим хостером, если у вас нет необходимых данных. </p>
<p>Убедитесь, что вы создали базу данных для установки Magento. Также убедитесь, что она пустая и в ней нет никаких таблиц.
<strong>Web access options</strong> и <strong>Session Storage Options</strong> – оставьте эти разделы без изменений, если не уверены в том, что делаете. Настройки по умолчанию подходят в большинстве случаев.</p>
<figure class="img-polaroid"><img src="<?php echo $this->getImgPath('magento/how-to-install-3.jpg') ?>" alt="" /></figure>
<p>Если все правильно, нажмите кнопку '<strong>Continue</strong>'.</p>

<h4>Шаг 4: Create Admin Account</h4>
<p>Здесь вам нужно указать личные данные владельца магазина или администратора. </p>
<figure class="img-polaroid"><img src="<?php echo $this->getImgPath('magento/how-to-install-4.jpg') ?>" alt="" /></figure>
<p>Когда данные будут введены, нажмите кнопку <strong>'Continue'</strong>.</p>

<h4>Шаг 5: You are All Set</h4>
<p>Это завершающий этап установки. Скопируйте зашифрованный ключ и сохраните его в надежном месте. Вы можете использовать кнопки в правом нижнем углу для перехода в панель управления магазином или на страницы самого магазина. </p>
<figure class="img-polaroid"><img src="<?php echo $this->getImgPath('magento/how-to-install-5.jpg') ?>" alt="" /></figure>