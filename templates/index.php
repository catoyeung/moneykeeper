{% extends 'base.php' %}
{% block main %}
<div id="main">
    <div id="brief">
        Money Keeper 幫助你記錄日常生活衣、食、住、行的開支。在月底時，它會自動產生一個
        月結報表，讓你評估自己的支出狀況。
    </div>
    <div id="signin">
        <form action="signin">
        <fieldset>
            <table id="signin-table">
                <tr>
                    <th>電子郵件:</th>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <th>密碼:</th>
                    <td><input type="text" name="password"></td>
                </tr>
                <tr>
                    <th></th>
                    <td><button id="signin-btn" type="submit">登入</button></td>
                </tr>
            </table>

            <div id="signup-btn" type="submit"><a href="signup">免費登記</a></div>
        </fieldset>
        </form>
    </div>
</div>
{% endblock %}