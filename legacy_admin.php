<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>admin</title>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/4653e649a2.js" crossorigin="anonymous"></script>
  <script src="main.js" defer></script>
  <link rel="stylesheet" href="common.css" />
  <style>
    .query {
      width: 70%;
    }

    fieldset legend {
      font-size: 40px;
      font-weight: 600;
      text-align: start;
    }

    .section {
      height: 650px;
    }

    table {
      width: 100%;
    }

    th,
    td {
      text-align: center;
      padding: 10px;
      border-bottom: 1px solid #dadada;
      font-family: Consolas, monospace;
      font-family: 12px;
    }

    .section a {
      color: black;
      border: 1px solid black;
      padding: 10px;
      font-weight: bold;
      background-color: orange;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav id="navbar" class="sub">
    <a href="/" class="navbar__logo">
      <img src="images/logo.png" alt="logo" />
    </a>
    <ul class="navbar__menu">
      <li><a href="#">교육과정</a></li>
      <li><a href="#">모집요강</a></li>
      <li><a href="#">Communication</a></li>
    </ul>
    <ul class="navbar__util">
      <li>
        <button class="util__login" onclick="memberboxActive()" title="로그인"></button>
      </li>
      <li><button class="util__register" title="회원가입"></button></li>
      <li>
        <button class="util__admin" title="관리자" onclick="location.href='admin.html'"></button>
      </li>
    </ul>

    <button class="navbar__toogle" onclick="navbarActive()">
      <i class="fas fa-bars"></i>
    </button>
  </nav>

  <!-- Memberbox -->
  <aside id="memberbox">
    <form class="login" action="login.php" method="POST">
      <input name="id" autocomplete="off" placeholder="아이디 입력" class="user__id" disabled="disabled" />
      <input type="password" name="pw" placeholder="비밀번호 입력" class="user__pw" disabled="disabled" />
      <input type="submit" value="로그인" class="login__submit" disabled="disabled" />
    </form>
  </aside>


  <div class="section">
    <?php
    include "./db.php";
    ?>
    <a href="admin.html">Ajax</a>
    <fieldset>
      <legend>Basic</legend>
      <form action="legacy_admin.php" method="POST">
        <label for="query">query</label>
        <input type="text" name="query" id="query" class="query" />
        <input type="submit" value="전송" />
      </form>
      <?php
      $query = $_POST["query"];
      echo $query;
      ?>
      <table>
        <thead>
          <tr>
            <th>id</th>
            <th>userid</th>
            <th>email</th>
            <th>password</th>
            <th>name</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $jb_result = mq($query);
          while ($jb_row = mysqli_fetch_array($jb_result)) {
            echo '<tr><td>' . $jb_row['id'] . '</td><td>' . $jb_row['userid'] . '</td><td>'
              . $jb_row['email'] . '</td><td>' . $jb_row['password'] . '</td><td>' . $jb_row['name'] . '</td></tr>';
          }
          ?>
        </tbody>
      </table>
    </fieldset>

    <fieldset>
      <legend>OnClick</legend>
      <form>
        <label for="query2">query</label>
        <input type="text" name="query2" id="query2" class="query" />
        <input type="button" value="전송" onclick="doAction(this.form)" />
      </form>
      <script>
        function doAction(f) {
          f.action = "legacy_admin.php";
          f.method = "POST";
          f.submit();
        }
      </script>

      <?php
      $query = $_POST["query2"];
      echo $query;
      ?>
      <table>
        <thead>
          <tr>
            <th>id</th>
            <th>userid</th>
            <th>email</th>
            <th>password</th>
            <th>name</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $jb_result = mq($query);
          while ($jb_row = mysqli_fetch_array($jb_result)) {
            echo '<tr><td>' . $jb_row['id'] . '</td><td>' . $jb_row['userid'] . '</td><td>'
              . $jb_row['email'] . '</td><td>' . $jb_row['password'] . '</td><td>' . $jb_row['name'] . '</td></tr>';
          }
          ?>
        </tbody>
      </table>
    </fieldset>
  </div>

  <!-- Contact -->
  <footer id="contact">
    <a href="/"><img class="contact__logo" src="images/logo-hrpool-footer.png" alt="logo" /></a>
    <div class="contact__info">
      <h3 class="contact__title">정보보호 관리진단 과정</h3>
      <div class="info__list">
        <dl>
          <dt class="sr-only">조직</dt>
          <dd>(주)한국정보보호교육센터</dd>
        </dl>
        <dl>
          <dt class="sr-only">운영 :</dt>
          <dd>정보보호 관리진단 운영사무국</dd>
        </dl>
      </div>
      <div class="info__list">
        <dl>
          <dt>전화번호 :</dt>
          <dd>02)921-1466</dd>
        </dl>
        <dl>
          <dt>이메일 :</dt>
          <dd><a href="mailto:edu@kisec.com">edu@kisec.com</a></dd>
        </dl>
      </div>
    </div>
    <div class="contact__info">
      <h3 class="contact__title">보안사고 분석대응 과정</h3>
      <div class="info__list">
        <dl>
          <dt class="sr-only">조직</dt>
          <dd>(주)컬처메이커스</dd>
        </dl>
        <dl>
          <dt class="sr-only">운영 :</dt>
          <dd>보안사고 분석대응 운영사무국</dd>
        </dl>
      </div>
      <div class="info__list">
        <dl>
          <dt>전화번호 :</dt>
          <dd>070)4849-5228</dd>
        </dl>
        <dl>
          <dt>이메일 :</dt>
          <dd>
            <a href="mailto:kshieldjr@cmcom.kr">kshieldjr@cmcom.kr</a>
          </dd>
        </dl>
      </div>
    </div>
  </footer>
</body>

</html>