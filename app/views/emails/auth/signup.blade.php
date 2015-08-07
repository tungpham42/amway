<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" charset="utf-8">
<head>
    <meta charset="UTF-8">
    <style>
        body {
            background: #f6f6f6;
        }

        tr {
            padding: 0;
            margin: 0;
        }

        td {
            padding: 0;
            margin: 0;
        }

        img {
            padding: 0;
            margin: 0;
        }
    </style>
</head>

<body>
<table style="border-collapse: collapse; width: 590px; margin: 0 auto; border: 0; background-color:#fff;">
    <tbody>
    <tr width="590" style="background-color:#f6f6f6;" height="46px">
        <td colspan="3" height="46px" align="center" color="#717171"><p
                    style="color:#717171; font-family: sans-serif, Arial, Gadget;">Не видите изображения? <a
                        style="color:#717171;" href="#">Нажмите сюда</a></p></td>
    </tr>

    <tr height="226" width="590">
        <td height="226">

            <table>
                <tbody>
                <tr height="216">
                    <td width="220">
                        <img src="{{ asset(Config::get('site.theme_path').'/img/email/logo.jpg') }}"></td>
                    <td width="280"></td>
                    <td width="">
                        <table>
                            <tbody>
                            <tr>
                                <td height="40">
                                    <a href="http://agen-project.ru/about"
                                       style="text-decoration: none; color: #19375f; font-size: 18px; margin-bottom: 20px; font-family: sans-serif, Arial, Gadget;">О
                                        проекте</a>
                                </td>
                            </tr>
                            <tr>
                                <td height="40">
                                    <a href="http://agen-project.ru/participants"
                                       style="text-decoration: none; color: #19375f; font-size: 18px; margin-bottom: 20px; font-family: sans-serif, Arial, Gadget;">Участники</a>
                                </td>
                            </tr>
                            <tr>
                                <td height="40">
                                    <a href="http://agen-project.ru/news"
                                       style="text-decoration: none; color: #19375f; font-size: 18px; margin-bottom: 20px; font-family: sans-serif, Arial, Gadget;">Новость</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>

        </td>
    </tr>

    <tr width="590" height="273">
        <td colspan="3" height="273" align="center"><img
                    src="{{ asset(Config::get('site.theme_path').'/img/email/humans.jpg') }}"></td>
    </tr>
    <tr width="590" height="60">
        <td colspan="3" height="25" align="center">&nbsp;</td>
    </tr>
    <tr>
        <td align="center" style="padding: 0 35px;"><p
                    style="color: #19375f; margin-bottom: 30px; margin-top: 0; font-size: 18px; font-family: sans-serif, Arial, Gadget;">
                Вы успешно прошли регистрацию<br>
                <strong>на сайте конкурса «A-GEN (ПОКОЛЕНИЕ А)».</strong></p></td>
    </tr>
    @if(!$verified_email)
    <tr>
        <td align="center" style="padding: 0 35px;"><p
                    style="color: #19375f; margin-bottom: 0px; margin-top: 0; font-size: 18px; font-family: sans-serif, Arial, Gadget;">
                Для завершения регистрации пройдите<br>по <a style="color: #e61926;" href="http://agen-project.ru/activation?u={{  $account->id }}'&c={{ $account->temporary_code }}">ссылке</a>.</p></td>
    </tr>
    @endif
    <tr>
        <td align="center" style="padding: 0 35px;">
            <p>
                Для входа используйте:<br>
                Логин: {{ $account->email }}<br>
                Пароль: {{ $password }}
            </p>
        </td>
    </tr>
    <tr width="590" height="60">
        <td colspan="3" height="60">&nbsp;</td>
    </tr>
    <tr width="590" height="257px">
        <td align="center" style="background-color: #1c4a83; vertical-align: top; padding: 0 49px;" colspan="3"
            height="257px">
            <p style="margin: 42px 0;"><img src="{{ asset(Config::get('site.theme_path').'/img/email/qr-code.png') }}">
            </p>

            <p><img src="{{ asset(Config::get('site.theme_path').'/img/email/logo-footer.png') }}"></p>

            <p>
                <a style="color: #fff; margin-bottom: 10px; margin-top: 0; font-size: 15px; font-family: sans-serif, Arial, Gadget;"
                   href="mailto:nfo@agen-project.ru">nfo@agen-project.ru</a>
            </p>

            <p style="color: #fff; font-size: 15px; font-family: sans-serif, Arial, Gadget; margin: 15px 0;">© 2015,
                Amway, A-GEN, 2015<br>Все права защищены.
            </p>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>