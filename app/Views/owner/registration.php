<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register!</title>
    <link rel="shortcut icon" type="image/png" href="/project.png">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

  <style>
            
/* @extend display-flex; */
display-flex {
  display: flex;
  display: -webkit-flex; }

/* @extend list-type-ulli; */
list-type-ulli, ul {
  list-style-type: none;
  margin: 0;
  padding: 0; }

/* roboto-slab-300 - latin */
@font-face {
  font-family: "Karla", sans-serif;
  font-weight: 300;
  }
/* roboto-slab-regular - latin */
@font-face {
  font-family: "Karla", sans-serif;
  font-weight: 400;
  }
/* roboto-slab-700 - latin */
@font-face {
  font-family: "Karla", sans-serif;
  font-weight: 700;
  }
a:focus, a:active {
  text-decoration: none;
  outline: none;
  transition: all 300ms ease 0s;
  -moz-transition: all 300ms ease 0s;
  -webkit-transition: all 300ms ease 0s;
  -o-transition: all 300ms ease 0s;
  -ms-transition: all 300ms ease 0s; }

input, select, textarea {
  outline: none;
  appearance: unset !important;
  -moz-appearance: unset !important;
  -webkit-appearance: unset !important;
  -o-appearance: unset !important;
  -ms-appearance: unset !important; }

input::-webkit-outer-spin-button, input::-webkit-inner-spin-button {
  appearance: none !important;
  -moz-appearance: none !important;
  -webkit-appearance: none !important;
  -o-appearance: none !important;
  -ms-appearance: none !important;
  margin: 0; }

input:focus, select:focus, textarea:focus {
  outline: none;
  box-shadow: none !important;
  -moz-box-shadow: none !important;
  -webkit-box-shadow: none !important;
  -o-box-shadow: none !important;
  -ms-box-shadow: none !important; }

input[type=checkbox] {
  appearance: checkbox !important;
  -moz-appearance: checkbox !important;
  -webkit-appearance: checkbox !important;
  -o-appearance: checkbox !important;
  -ms-appearance: checkbox !important; }

input[type=radio] {
  appearance: radio !important;
  -moz-appearance: radio !important;
  -webkit-appearance: radio !important;
  -o-appearance: radio !important;
  -ms-appearance: radio !important; }

img {
  max-width: 100%;
  height: auto; }

figure {
  margin: 0; }

p {
  margin-bottom: 0px; }

input:-webkit-autofill {
  box-shadow: 0 0 0 30px white inset;
  -moz-box-shadow: 0 0 0 30px white inset;
  -webkit-box-shadow: 0 0 0 30px white inset;
  -o-box-shadow: 0 0 0 30px white inset;
  -ms-box-shadow: 0 0 0 30px white inset; }

h2 {
  line-height: 1.8;
  margin: 0;
  padding: 0;
  font-weight: bold;
  color: #222;
  font-family: "Karla", sans-serif;
  font-size: 30px;
  margin-bottom: 30px;
  text-transform: uppercase; }

h3 {
  font-weight: bold;
  color: #222;
  font-size: 20px;
  margin: 0px;
  margin-bottom: 35px; }

.clear {
  clear: both; }

body {
  font-size: 13px;
  font-family: "Karla", sans-serif;
  line-height: 1.8;
  color: #000;
   background-color: #0d546a; 
  background-image: url('./reg.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  -moz-background-size: cover;
  -webkit-background-size: cover;
  -o-background-size: cover;
  -ms-background-size: cover;
  background-position: center center;
  font-weight: 400;
  font-family: "Karla", sans-serif;
  margin: 0px; }

.main {
  padding: 60px 0;
  position: relative; }

.container {
  width: 600px;
  background: #fff;
  margin-left: 450px;
  border-radius: 10px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
  -o-border-radius: 10px;
  -ms-border-radius: 10px; }

  .card-1 .card-heading { 
  size: 50px ;
}

.appointment-form {
  padding: 50px 60px 70px 60px; }

input, select {
  width: 100%;
  display: block;
  border: none;
  border-bottom: 2px solid #ebebeb;
  padding: 5px 0;
  color: #222;
  margin-bottom: 31px;
  font-family: "Karla", sans-serif; }
  input:focus, select:focus {
    color: #222;
    border-bottom: 2px solid #4966b1; }

input[type=checkbox]:not(old) {
  width: 2em;
  margin: 0;
  padding: 0;
  font-size: 1em;
  display: none; }

input[type=checkbox]:not(old) + label {
  display: inline-block;
  margin-top: 7px;
  margin-bottom: 25px; }

input[type=checkbox]:not(old) + label > span {
  display: inline-block;
  width: 13px;
  height: 13px;
  margin-right: 15px;
  margin-bottom: 3px;
  border: 1px solid #ebebeb;
  background: white;
  background-image: -moz-linear-gradient(white, white);
  background-image: -ms-linear-gradient(white, white);
  background-image: -o-linear-gradient(white, white);
  background-image: -webkit-linear-gradient(white, white);
  background-image: linear-gradient(white, white);
  vertical-align: bottom; }

input[type=checkbox]:not(old):checked + label > span {
  background-image: -moz-linear-gradient(white, white);
  background-image: -ms-linear-gradient(white, white);
  background-image: -o-linear-gradient(white, white);
  background-image: -webkit-linear-gradient(white, white);
  background-image: linear-gradient(white, white); }

input[type=checkbox]:not(old):checked + label > span:before {
  content: '\f26b';
  display: block;
  color: #222;
  font-size: 11px;
  line-height: 1.2;
  text-align: center;
  font-family: 'Material-Design-Iconic-Font';
  font-weight: bold; }

.label-agree-term {
  color: #999; }

.term-service {
  color: #222; }

.submit {
  width: auto;
  background: #0d546a;
  color: #fff;
  padding: 16px 17px;
  font-size: 13px;
  border: none;
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  -o-border-radius: 5px;
  -ms-border-radius: 5px;
  cursor: pointer;
  box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
  -moz-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
  -webkit-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
  -o-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
  -ms-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7); }
  .submit:hover {
    background: #000; }

ul {
  background: 0 0;
  z-index: 9; }

ul li {
  padding: 3px 0px;
  z-index: 2;
  color: #999; }
  ul li:last-child {
    border-bottom: 1px solid #ebebeb; }

ul li:not(.init) {
  display: none;
  background: #fff;
  color: #222;
  padding: 5px 10px;
  border-left: 1px solid #ebebeb;
  border-right: 1px solid #ebebeb;
  border-top: 1px solid #ebebeb; }

ul li:not(.init):hover, ul li.selected:not(.init) {
  background: #4966b1;
  color: #fff; }

li.init {
  cursor: pointer;
  position: relative;
  border-bottom: 2px solid #ebebeb; }
  li.init:after {
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    font-size: 20px;
    color: #999;
    font-family: 'Material-Design-Iconic-Font';
    content: '\f2f9'; }

#confirm_type {
  margin-bottom: 30px; }

.form-group-2 {
  margin-top: 15px;
  margin-bottom: 30px; }

.form-check {
  margin-bottom: 20px; }

.select-list {
  position: relative;
  display: inline-block;
  width: 100%;
  margin-bottom: 55px; }

.list-item {
  position: absolute;
  width: 100%; }

#confirm_type {
  z-index: 99; }

#hour_appointment {
  z-index: 9; }

@media screen and (max-width: 1024px) {
  .container {
    margin: 0 auto; } }
@media screen and (max-width: 768px) {
  .container {
    width: calc( 100% - 30px);
    max-width: 100%; } }
@media screen and (max-width: 480px) {
  .appointment-form {
    padding: 50px 30px 70px 30px; } }

/*# sourceMappingURL=style.css.map */  
          </style>
      </head>
      <body>

      <div class="main">

<div class="container">
    <form method="post" action="<?=base_url('oregister')?>" class="appointment-form" id="appointment-form">
        <h2>Register for WeRoomies</h2>
        <div class="form-group-1">
            <input type="email" name="Email" id="Email" placeholder="Email" required />
            <input type="password" name="Password" id="Password" placeholder="Password" required />
            <input type="password" name="CPassword" id="CPassword" placeholder="Confirm Password" required />
        </div>
        <div class="form-submit">
            <input type="submit" name="submit" id="submit" class="submit" value="Sign Up!" />
        </div>
    </form>
</div>
</div>
<script>
  (function ($) {
    // USE STRICT
    "use strict";

    $(".form-radio .radio-item").click(function(){
        //Spot switcher:
        $(this).parent().find(".radio-item").removeClass("active");
        $(this).addClass("active");
    });
  
    $('#course_type').parent().append('<ul class="list-item" id="newcourse_type" name="course_type"></ul>');
    $('#course_type option').each(function(){
        $('#newcourse_type').append('<li value="' + $(this).val() + '">'+$(this).text()+'</li>');
    });
    $('#course_type').remove();
    $('#newcourse_type').attr('id', 'course_type');
    $('#course_type li').first().addClass('init');
    $("#course_type").on("click", ".init", function() {
        $(this).closest("#course_type").children('li:not(.init)').toggle('slow');
    });

    $('#confirm_type').parent().append('<ul class="list-item" id="newconfirm_type" name="confirm_type"></ul>');
    $('#confirm_type option').each(function(){
        $('#newconfirm_type').append('<li value="' + $(this).val() + '">'+$(this).text()+'</li>');
    });
    $('#confirm_type').remove();
    $('#newconfirm_type').attr('id', 'confirm_type');
    $('#confirm_type li').first().addClass('init');
    $("#confirm_type").on("click", ".init", function() {
        $(this).closest("#confirm_type").children('li:not(.init)').toggle('slow');
    });
    
    $('#hour_appointment').parent().append('<ul class="list-item" id="newhour_appointment" name="hour_appointment"></ul>');
    $('#hour_appointment option').each(function(){
        $('#newhour_appointment').append('<li value="' + $(this).val() + '">'+$(this).text()+'</li>');
    });
    $('#hour_appointment').remove();
    $('#newhour_appointment').attr('id', 'hour_appointment');
    $('#hour_appointment li').first().addClass('init');
    $("#hour_appointment").on("click", ".init", function() {
        $(this).closest("#hour_appointment").children('li:not(.init)').toggle('slow');
    });

    var allOptions = $("#course_type").children('li:not(.init)');
    $("#course_type").on("click", "li:not(.init)", function() {
        allOptions.removeClass('selected');
        $(this).addClass('selected');
        $("#course_type").children('.init').html($(this).html());
        allOptions.toggle('slow');
    });

    var FoodOptions = $("#confirm_type").children('li:not(.init)');
    $("#confirm_type").on("click", "li:not(.init)", function() {
        FoodOptions.removeClass('selected');
        $(this).addClass('selected');
        $("#confirm_type").children('.init').html($(this).html());
        FoodOptions.toggle('slow');
    });

    var AppointmentOptions = $("#hour_appointment").children('li:not(.init)');
    $("#hour_appointment").on("click", "li:not(.init)", function() {
        AppointmentOptions.removeClass('selected');
        $(this).addClass('selected');
        $("#hour_appointment").children('.init').html($(this).html());
        AppointmentOptions.toggle('slow');
    });
})(jQuery);
</script>
</body>
</html>