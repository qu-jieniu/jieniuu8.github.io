<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <title>Home | Tony Niu</title>
  <meta name="description" content="Tony Niu's Personal Website">
  <meta name="author" content="Tony Niu">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css_en/style.css">
  <link rel="stylesheet" href="./css_en/responsive.css">
  <link rel="stylesheet" type="text/css" href="./Computer_Modern/Serif/cmun-serif.css">
  <link rel="icon" href="./img/t-icon.png">

</head>

<body>
  <div id="aside-menu">
    <div class="profile-image">
      <a href="./album.php"></a>
    </div>
    <!--end profile image-->
    <p class="language_select"><a href="./">English</a> / <a href="./cn/">简体中文</a></p>
    <h4>Contact</h4>
    <ul>
      <li><a href="mailto:17jn1@queensu.ca">Email</a>: 17jn1 at queensu dot ca</li>
      <li><a href="./img/wechat-card.jpg">WeChat</a>: jieniuu</li>
      <li>Cell: 317-449-9109</li>
    </ul>
    <div id="menu-webicon">
      <h4>Links</h4>
      <p>Linkedin</p>
      <a id="linkedin" href="http://www.linkedin.com/in/jie-tony-niu/">
        <img class="web-icon" src="./img/linkedin.png" alt="Tony's Linkedin profile"></a>
      <p>Github</p>
      <a id="github" href="https://github.com/jieniuu8">
        <img class="web-icon" src="./img/github.png" alt="Tony's github repository"></a>
      <p>StackExchange</p>
      <a id="stackexchange" href="https://stackexchange.com/users/12016588/tooooony">
        <img class="web-icon" src="./img/stackexchange.png" alt="Tony's stackexchange site"></a>
    </div>
  </div>
  <!--end aside-->

  <div id="main-content">

    <section id="intro-profile">
      <div class="profile-image">
        <a href="./album.php"></a>
      </div>
      <!--end profile image-->

      <p id="name">Tony Niu<br><img id="chinese_name" src="./img/chinese_name.png" alt="Tony's Chinese name with KaiTi font"></p>
      <p class="highlight">Tony Niu is a 2nd year undergraduate Computer Science student in Queen's University at Kingston, Ontario.</p>
    </section>

    <section id="aside-section">
      <div class="profile-image">
        <a href="./album.php"></a>
      </div>
      <!--end profile image-->
      <p class="language_select"><a href="./">English</a> / <a href="./cn">简体中文</a></p>
      <h4>Contact</h4>
      <ul>
        <li><a href="mailto:17jn1@queensu.ca">Email</a>: 17jn1 at queensu dot ca</li>
        <li><a href="./img/wechat-card.jpg">WeChat</a>: jieniuu</li>
        <li>Cell: 317-449-9109</li>
      </ul>

      <h4>Links</h4>
      <div id="section-webicon">
        <a id="linkedin" href="http://www.linkedin.com/in/jie-tony-niu/">
          <img class="web-icon" src="./img/linkedin.png" alt="Tony's Linkedin profile"></a>
        <a id="github" href="https://github.com/jieniuu8">
          <img class="web-icon" src="./img/github.png" alt="Tony's github repository"></a>
        <a id="stackexchange" href="https://stackexchange.com/users/12016588/tooooony">
          <img class="web-icon" src="./img/stackexchange.png" alt="Tony's stackexchange site"></a>
      </div>
    </section>
    <!--end aside-->

    <section id="CV">
      <h3>About Me</h3>
    </p><em>Under construction</em>.</p>
    </section>

    <section id="interest">
      <h3>Interests</h3>
      </p><em>Under construction</em>.</p>
    </section>


    <section id="languages">
      <h3>Known Programming Languages</h3>
      <p>Tony has experiences with the following pogramming & scripting languages: </p>
      <img class="language-icon" src="./img/php.png" alt="PHP (The best language)">
      <a href="http://www.java.com"><img class="language-icon" src="./img/java.png" alt="Java"></a>
      <img class="language-icon" src="./img/language_c.png" alt="C Language">
      <img class="language-icon" src="./img/html-css-js.png" alt="HTML/CSS/JavaScript">
      <img class="language-icon" src="./img/tex.png" alt="Tex">
      <a href="http://www.python.org"><img class="language-icon" src="./img/python.png" alt="Python"></a>
    </section>

    <section id="blog">
      <h3>Blogging</h3>
      <p>Tony also blogs his thought on <em>Google Blogspot</em>.<br>
        You can access his blog from <a href="http://blog.jtonyniu.com">here</a>.</p>
    </section>
    <section id="courses">
      <h3>Taken Undergraduate Courses</h3>
      <p>Please refer to this <a href="./course.php">page</a>.</p>
    </section>
    <section id="organization">
      <h3>Associated Organizations</h3>
      <a href="http://www.queensu.ca">
        <img class="org-icon" src="./img/queen's-logo.png" alt="Queen's University at Kingston"></a>
      <a href="http://cs.queensu.ca">
        <img class="org-icon" id="computing_pic" src="./img/queen's-computing.gif" alt="Queen's School of Computing"></a>
    </section>

    <p>
      <em>Last Modified</em>: <?php
      if (file_exists($file)) {
        echo date ("F d, Y.", filemtime($file));
      }?>
  </div>

  <!--end main-content-->

</body>

</html>
