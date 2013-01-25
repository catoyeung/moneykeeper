<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>
            {% if title == false %}
                Money Keeper
            {% else %}
                Money Keeper - {{ title }}
            {% endif %}
        </title>
    </head>
    <body>
        <div id="header">
            <h1>
                {% if title == false %}
                    Money Keeper
                {% else %}
                    Money Keeper - {{ title }}
                {% endif %}
            </h1>
        </div>
        <hr id="dotted-hr">
        {% block main %}
        {% endblock %}
        <div id="footer">
            <div id="copyright">
                © 2013, <a href="mailto:cato.yeung@gmail.com">Cato Yeung<a/>
            </div>
        </div>
    </body>
</html>