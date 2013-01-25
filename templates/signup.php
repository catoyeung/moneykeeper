
{% extends 'base.php' %}
{% block main %}
{% if rest == 'get' %}
<div id="main">
    <div id="signup">
        <form id="signup-form" action="signup" method="post">
        <fieldset>
            <table id="signup-table">
                <tr>
                    <th>電子郵件:</th>
                    <td><input class="required email" type="text" name="email"></td>
                </tr>
                <tr>
                    <th>密碼:</th>
                    <td><input class="required" type="text" name="password"></td>
                </tr>
                <tr>
                    <th>重覆密碼:</th>
                    <td><input class="required" type="text" name="confirm-password"></td>
                </tr>
                <tr>
                    <th></th>
                    <td><div id="signup-error"></div></td>
                </tr>
                <tr>
                    <th></th>
                    <td><button class="submit-btn" type="submit">Sign up</button></td>
                </tr>
            </table>
            <div id="got-account">
                <a href="./">已有帳號？</a>
            </div>
        </fieldset>
        </form>
    </div>
</div>
{% elseif rest == 'post' %}
<div id="main">
    <div id="signup">
        <div id="signup-result">
            cato.yeung@gmail.com, you can start to use our service now.
        </div>
        <button class="submit-btn center" type="submit"><a href="">Sign in</a></button>
    </div>
</div>
{% endif %}
{% endblock %}