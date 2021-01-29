<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <title>Courses | Tony Niu</title>
  <meta name="description" content="Tony Niu's Personal Website">
  <meta name="author" content="Tony Niu">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css_en/style.css">
  <link rel="stylesheet" href="./css_en/responsive.css">
  <link rel="stylesheet" type="text/css" href="./Computer_Modern/Serif/cmun-serif.css">
  <script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/latest.js?config=TeX-MML-AM_CHTML' async></script>
  <link rel="icon" href="./img/t-icon.png">

</head>

<body>
<h1>Courses</h1>
<p>The detailed description of a course can be found on <a href="http://www.cs.queensu.ca/students/undergraduate/courses/">Queen's SoC</a>.</p>
<ul>
  <li>Basic Programming Introduction</li>
  <ul>
    <li>CISC 101: Element of CS; Language: Python3</li>
    <li>CISC 121: Introduction to CS I; Language: Python3</li>
    <li>CISC 124: Introduction to CS II; Language: Java</li>
    <li>CISC 220: System Level Programming; Language: Bash & C</li>
    <li>CISC 282: Fundamentals of Web Applications; Language: HTML, CSS, JS, PHP</li>
  </ul>
  <li>General Mathematics <span id="euler_equ">\(e^{i\pi}+1=0\)</span></li>
  <ul>
    <li>MATH 111: Applied Linear Algebra</li>
    <li>MATH 120: Differential and Integral Calculus</li>
  </ul>
  <li>Mathematics for Computer Science</li>
  <ul>
    <li>CISC 102: Introduction to Discrete Mathematics</li>
    <li>CISC 203: Discrete Mathematics for Computing Science</li>
    <li>CISC 204: Logic for Computing Science</li>
  </ul>
  <li>Miscellaneous / Electives</li>
  <ul>
    <li>FREN 106: Communication et culture I (French)</li>
    <li>CISC P81: Computers: Application and Implications (Aspects of computer)</li>
  </ul>
</ul>

<hr>
<p>
  <em>Last Modified</em>: <?php
  $file = "course.php";
  if (file_exists($file)) {
    echo date("F, Y.", filemtime($file));
  }?></p>
</body>
</html>
