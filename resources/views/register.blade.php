<!DOCTYPE html>
<html>
<head>
  <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
  <meta content="utf-8" http-equiv="encoding">
  <title></title>
  <link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.css">
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/css/register-style.css">
  <link rel="stylesheet" type="text/css" href="/css/jquery.fullPage.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <script src="/js/jquery.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/js/jquery.fullPage.min.js"></script>
  <script type="text/javascript" src="/js/script.js"></script>
  <script src="/js/validator.js"></script>
</head>
<body>
    @include('layouts.header')

    <div class="navigator">
        <a href="#" id="navigateUp"><span class="glyphicon glyphicon-circle-arrow-up"></span></a>
        <a href="#" id="navigateDown"><span class="glyphicon glyphicon-circle-arrow-down"></span></a>
    </div>

    <div id="main">

    <div class="section content">
      <div class="wrapper">

      {!! Form::open(array('class'=>'form-signup', 'method'=>'POST', 'url'=>'pia/register', 'data-toggle'=>'validator')) !!}
      <div class="form-group has-feedback">
        {!! Form::text('student_number', null, array('placeholder'=>'Enter your student number...', 'class'=>'form-control txt text-signup', 'required')) !!}
      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
      {{-- <span class="help-block with-errors"></span> --}}
      </div>
      <div class="form-group has-feedback">
      {!! Form::text('first_name', null, array('placeholder'=>'Enter your first name...', 'class'=>'txt text-signup form-control', 'required')) !!}
      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
      {{-- <span class="help-block with-errors"></span> --}}
      </div>
      <div class="form-group has-feedback">
      {!! Form::text('last_name', null, array('placeholder'=>'Enter your last name...', 'class'=>'txt text-signup form-control', 'required')) !!}
      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
      <span class="notif">Your password is the combination of your last name and the last 3 digit of your student number.</span>
      </div>

      {!! Form::submit('Sign me up!', array('class'=>'txt btn-signup')) !!}
      {!! Form::close() !!}

      <div class="message">
        <h1>Personal Instructing Agent</h1>
        <h2>An intelligent tutoring system built for students learning linear equations. Register now and be a part of the group!</h2>
      </div>
      </div>
    </div>

    <div class="section main-content">
    <div class="main-content-wrapper">
        <div class="module-type">
            <h1>
            <strong>P I A</strong>
            <br>
            An intelligent tutoring system built for students learning linear equation.
          </h1>
          <h2>Please login in order to use PIA.</h2>
          <form data-toggle="validator" method="post" action="/pia/login">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group has-feedback">
            <input type="text" name="student_number" class="login-form form-control" required placeholder="Enter student number">
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="login-form form-control" placeholder="Enter password" required>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
          </div>
          <input type="submit" class="login-btn">
          </form>
        </div>
        <div class="module-message">
        </div>
    </div>
    </div>

    <div class="section modules light-bg">
        <div class="module-wrapper">
          <h3>Three modules to rule them all.</h3>
          <ul id="module-types">
            <li style="float:left">
              <span class="glyphicon glyphicon-random"></span>
              <h4>Computer Generated</h4>
              <p>Lets PIA generate unique linear equations for you to solve.
              PIA will then assist you in answering the equation giving hints when needed.</p>
            </li>
            <li>
              <span class="glyphicon glyphicon-repeat"></span>
              <h4>Automatic Solving</h4>
              <p>Allows the user to input his own linear equation, PIA then solves
              the problem immediately showing you how she's done it step by step.</p>
            </li>
            <li style="float:right;">
              <span class="glyphicon glyphicon-pencil"></span>
              <h4>Step by Step</h4>
              <p>Allows the user to input his own linear equation. PIA then instructs you
              on what to do, giving you hints until you get the final answer.</p>
            </li>
          </ul>
        </div>
    </div>
    <div class="section makers">
      <div class="maker-wrapper">
            <h3>Meet the Makers</h3>
            <ul id="maker-container">
              <li style="float:left">
              <img src="/images/ian2.jpg">
              <h4>Ian Fosgate</h4>
              <p>Ian Fosgate is the project manager of the team. He is in charge of
              the documentation and external communications</p>
            </li>
              <li>
              <img src="/images/neil2.jpg">
              <h4>Neil Garcia</h4>
              <p>Neil Garcia is the programmer of the team. He is in charge of the
              main logic of system and some of its designs.</p>
            </li>
              <li style="float:right">
              <img src="/images/josf2.jpg">
              <h4>Josf Yorobe</h4>
              <p>Josf Yorobe is the head animator and designer of the team. He is the one responsible
              for the main design of the system.</p>
            </li>
            </ul>
        </div>
    </div>
    <div class="section contactus">
    <div class="contactus-wrapper">
        <div class="contactus-message">
            <h1>
            <strong>CONTACT US</strong>
            Do you have any comments and/or suggestions?
            Contact us through email using the form on the right.
          </h1>
          <h2>You can also reach us using our social networking sites.</h2>
          <a href="#"><i class="fa fa-facebook-square icon-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter-square icon-twitter"></i></a>
          <a href="#"><i class="fa fa-google-plus-square icon-google"></i></a>
        </div>
        <div class="contactus-form">
            <form>
              <label for="full_name">Full Name: </label>
              <input name="full_name" type="text" class="login-form">
              <label for="">Subject:</label>
              <input type="text" class="login-form">
              <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea class="form-control" rows="5" id="comment" style="height: 230px;resize:none;"></textarea>
              </div>
              <input type="submit" class="login-btn green">
            </form>
        </div>
    </div>
    </div>
    </div>

    <footer>
      <div class="copyright">Copyright © 2016</div>
      <span class="glyphicon glyphicon-education"></span>
      <div class="contact">Copyright © 2016</div>
    </footer>
</body>
</html>
