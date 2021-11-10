<html>
<head>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script>
    function functBefore(){
      $("#information").text("Ожидание данных...");
    }
    function funcSuccenss(data){
      $("#information").text("");
    if (data==0){
      alert("Введите другие данные");}
    else {location.href='lab30.html';}
    }

    $(document).ready(function(){
      $("reg").bind("click",function(){
        $.ajax({
          url:"registration.php",
          type: "POST",
          data:({login:$("login").val() ,passwor:$("#passw").val() }),
          dataType: "html",
          beforeSend: functBefore,
          success: funcSuccenss
        });
      });
    });
    </script>
    </head>
    <body>
      <form>
        <p> Введите логин</p>
        <input type="text" id="login"/>
        <p> Введите пароль</p>
        <input type="password" id="passw"/>
        <input type="button" value="Регистрация" id="reg"/>
        <input type="button" value="Вход" id="vxodd"/>
        <div id="information"></div>
      </form>
    </body>
  </html>
