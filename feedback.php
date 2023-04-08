<?php
session_start();
include 'db_connect.php';
include 'uheader.php';
 if(isset($_SESSION['l_id']))
{
    $l_id=$_SESSION['l_id'];
    
}
if(isset($_POST['submit']))
{
  $feedback=$_POST['feedback'];
  // $name=$_POST['name'];

  
  
  $q="INSERT INTO `feedback`( `fl_id`,`f_feedback`)VALUES('$l_id','$feedback')";
  //var_dump($b);
if(mysqli_query($con,$q))

    {
    	echo "<script>
alert('Successfully Added');
window.location.href='viewfeedback.php';
</script>";
      
    // $_SESSION['msg']="Successfully Register";
    }
  
}
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Form-v10 by Colorlib</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
            <link rel="shortcut icon" href="">
                        <script>document.documentElement.className = document.documentElement.className + ' yes-js js_active js'</script>
            <title>Service Appointment – Hyundai</title>

        <!-- <link rel="stylesheet" type="text/css" href="./style.css"> -->
    <style type="text/css">
    element.style {
}

/*main item*/
.ibid-contact-form.row.register label {
    margin-bottom: 10px !important;
}
.ibid-contact-form label {
    width: 100%;
    margin-bottom: 30px !important;
}
label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: bold;
}
* {
    word-wrap: break-word;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
label {
    cursor: default;
}
body, html, #page {
    height: 100%;
    -webkit-font-smoothing: antialiased;
}
body {
    font-family: Muli;
}
body {
    font-family: Montserrat;
}
body {
    font-family: "Montserrat",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #242424;
    background-color: #fff;
}
html {
    font-family: sans-serif;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}
html {
    font-size: 10px;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
}
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
::selection {
    color: #FFFFFF;
    background: #035DAB;
}
::selection {
    color: #ffffff;
    background: #2695ff;
}
::selection {
    color: #ffffff;
    background: #f02222;
}
.ibid-contact-form.row.register select {
    width: 100%;
    border: 1px solid #ddd;
    padding: 15px;
    height: 50px;
    border-radius: 8px;
    margin-bottom: 20px;
}
#content .wpb_alert p:last-child, #content .wpb_text_column :last-child, #content .wpb_text_column p:last-child, .wpb_alert p:last-child, .wpb_text_column :last-child, .wpb_text_column p:last-child {
    margin-bottom: 0;
}
button, select {
    text-transform: none;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
input, button, select, textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}
button, select {
    text-transform: none;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
* {
    word-wrap: break-word;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
select:not(:-internal-list-box) {
    overflow: visible !important;
}
user agent stylesheet
select {
    -webkit-writing-mode: horizontal-tb !important;
    font-style: ;
    font-variant-ligatures: ;
    font-variant-caps: ;
    font-variant-numeric: ;
    font-variant-east-asian: ;
    font-weight: ;
    font-stretch: ;
    font-size: ;
    font-family: ;
    text-rendering: auto;
    color: -internal-light-dark(black, white);
    letter-spacing: normal;
    word-spacing: normal;
    line-height: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: start;
    appearance: auto;
    box-sizing: border-box;
    align-items: center;
    white-space: pre;
    -webkit-rtl-ordering: logical;
    background-color: -internal-light-dark(rgb(255, 255, 255), rgb(59, 59, 59));
    cursor: default;
    margin: 0em;
    border-width: 1px;
    border-style: solid;
    border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
    border-image: initial;
    border-radius: 0px;
}
body, html, #page {
    height: 100%;
    -webkit-font-smoothing: antialiased;
}
body {
    font-family: Muli;
}
body {
    font-family: Montserrat;
}
body {
    font-family: "Montserrat",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #242424;
    background-color: #fff;
}
html {
    font-family: sans-serif;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}
html {
    font-size: 10px;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
}
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
::selection {
    color: #FFFFFF;
    background: #035DAB;
}
::selection {
    color: #ffffff;
    background: #2695ff;
}
::selection {
    color: #ffffff;
    background: #f02222;
}
.ibid-contact-form.row.register input[type="text"], .ibid-contact-form.row.register input[type="date"], .ibid-contact-form.row.register input[type="email"], .ibid-contact-form.row.register input[type="file"], .ibid-contact-form.row.register input[type="tel"], .ibid-contact-form.row.register span.wpcf7-list-item {
    margin-bottom: 20px;
}
.ibid-contact-form input.wpcf7-form-control, .ibid-contact-form textarea.wpcf7-form-control {
    /* background: #EFEFEF; */
    border-radius: 2px;
    border: 1px solid #eeee;
    padding: 20px;
    width: 100%;
    outline: none;
    height: 50px;
    font-family: proxima-nova, sans-serif;
}
#content .wpb_alert p:last-child, #content .wpb_text_column :last-child, #content .wpb_text_column p:last-child, .wpb_alert p:last-child, .wpb_text_column :last-child, .wpb_text_column p:last-child {
    margin-bottom: 0;
}
.wpcf7-form input, .wpcf7-form textarea {
    border: 1px solid rgba(36, 36, 36, .3);
    padding: 8px;
}
textarea, input[type="text"], input[type="button"], input[type="search"], input[type="submit"] {
    -webkit-appearance: none;
}
input, textarea {
    font-family: Montserrat;
}
input {
    line-height: normal;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
input, textarea {
    font-family: Montserrat;
}
input, button, select, textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}
input {
    line-height: normal;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
* {
    word-wrap: break-word;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
input[type="text" i] {
    padding: 1px 2px;
}
user agent stylesheet
input {
    -webkit-writing-mode: horizontal-tb !important;
    font-style: ;
    font-variant-ligatures: ;
    font-variant-caps: ;
    font-variant-numeric: ;
    font-variant-east-asian: ;
    font-weight: ;
    font-stretch: ;
    font-size: ;
    font-family: ;
    text-rendering: auto;
    color: -internal-light-dark(black, white);
    letter-spacing: normal;
    word-spacing: normal;
    line-height: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: start;
    appearance: auto;
    -webkit-rtl-ordering: logical;
    cursor: text;
    background-color: -internal-light-dark(rgb(255, 255, 255), rgb(59, 59, 59));
    margin: 0em;
    padding: 1px 2px;
    border-width: 2px;
    border-style: inset;
    border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
    border-image: initial;
}
body, html, #page {
    height: 100%;
    -webkit-font-smoothing: antialiased;
}
body {
    font-family: Muli;
}
body {
    font-family: Montserrat;
}
body {
    font-family: "Montserrat",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #242424;
    background-color: #fff;
}
html {
    font-family: sans-serif;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}
html {
    font-size: 10px;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
}
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
::selection {
    color: #FFFFFF;
    background: #035DAB;
}
::selection {
    color: #ffffff;
    background: #2695ff;
}
::selection {
    color: #ffffff;
    background: #f02222;
}
.ibid-contact-form.row h4 {
    margin-bottom: 20px;
    font-size: 35px;
    font-weight: bold;
}
@media only screen and (min-width: 768px) and (max-width: 1024px)
body h4 {
    font-size: 22px !important;
    line-height: 26px !important;
}
h4 {
    font-family: Muli;
    line-height: 18px;
    color: #242424;
    font-size: 18px;
}
h4 {
    font-family: Montserrat;
    line-height: 18px;
    color: #242424;
    font-size: 18px;
}
h4, .h4 {
    font-size: 18px;
}
h4, .h4, h5, .h5, h6, .h6 {
    margin-top: 10px;
    margin-bottom: 10px;
}
h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: inherit;
    font-weight: 500;
    line-height: 1.1;
    color: inherit;
}
* {
    word-wrap: break-word;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
h4 {
    display: block;
    margin-block-start: 1.33em;
    margin-block-end: 1.33em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}
body, html, #page {
    height: 100%;
    -webkit-font-smoothing: antialiased;
}
body {
    font-family: Muli;
}
body {
    font-family: Montserrat;
}
body {
    font-family: "Montserrat",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #242424;
    background-color: #fff;
}
html {
    font-family: sans-serif;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}
html {
    font-size: 10px;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
}
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
::selection {
    color: #FFFFFF;
    background: #035DAB;
}
::selection {
    color: #ffffff;
    background: #2695ff;
}
::selection {
    color: #ffffff;
    background: #f02222;
}
.ibid-contact-form.row.register select {
    width: 100%;
    border: 1px solid #ddd;
    padding: 15px;
    height: 50px;
    border-radius: 8px;
    margin-bottom: 20px;
}
#content .wpb_alert p:last-child, #content .wpb_text_column :last-child, #content .wpb_text_column p:last-child, .wpb_alert p:last-child, .wpb_text_column :last-child, .wpb_text_column p:last-child {
    margin-bottom: 0;
}
button, select {
    text-transform: none;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
input, button, select, textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}
button, select {
    text-transform: none;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
* {
    word-wrap: break-word;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
select:not(:-internal-list-box) {
    overflow: visible !important;
}
user agent stylesheet
select {
    -webkit-writing-mode: horizontal-tb !important;
    font-style: ;
    font-variant-ligatures: ;
    font-variant-caps: ;
    font-variant-numeric: ;
    font-variant-east-asian: ;
    font-weight: ;
    font-stretch: ;
    font-size: ;
    font-family: ;
    text-rendering: auto;
    color: -internal-light-dark(black, white);
    letter-spacing: normal;
    word-spacing: normal;
    line-height: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: start;
    appearance: auto;
    box-sizing: border-box;
    align-items: center;
    white-space: pre;
    -webkit-rtl-ordering: logical;
    background-color: -internal-light-dark(rgb(255, 255, 255), rgb(59, 59, 59));
    cursor: default;
    margin: 0em;
    border-width: 1px;
    border-style: solid;
    border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
    border-image: initial;
    border-radius: 0px;
}
body, html, #page {
    height: 100%;
    -webkit-font-smoothing: antialiased;
}
body {
    font-family: Muli;
}
body {
    font-family: Montserrat;
}
body {
    font-family: "Montserrat",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #242424;
    background-color: #fff;
}
html {
    font-family: sans-serif;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}
html {
    font-size: 10px;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
}
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
::selection {
    color: #FFFFFF;
    background: #035DAB;
}
::selection {
    color: #ffffff;
    background: #2695ff;
}
::selection {
    color: #ffffff;
    background: #f02222;
}
.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
    position: relative;
    min-height: 1px;
    padding-left: 15px;
    padding-right: 15px;
}
* {
    word-wrap: break-word;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
body, html, #page {
    height: 100%;
    -webkit-font-smoothing: antialiased;
}
body {
    font-family: Muli;
}
body {
    font-family: Montserrat;
}
body {
    font-family: "Montserrat",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #242424;
    background-color: #fff;
}
html {
    font-family: sans-serif;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}
html {
    font-size: 10px;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
}
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
::selection {
    color: #FFFFFF;
    background: #035DAB;
}
::selection {
    color: #ffffff;
    background: #2695ff;
}
::selection {
    color: #ffffff;
    background: #f02222;
}
.ibid-contact-form.row.register {
    margin-bottom: 20px;
}
.row {
    margin-left: -15px;
    margin-right: -15px;
}
* {
    word-wrap: break-word;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
body, html, #page {
    height: 100%;
    -webkit-font-smoothing: antialiased;
}
body {
    font-family: Muli;
}
body {
    font-family: Montserrat;
}
body {
    font-family: "Montserrat",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #242424;
    background-color: #fff;
}
html {
    font-family: sans-serif;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}
html {
    font-size: 10px;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
}
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
.clearfix:before, .clearfix:after, .dl-horizontal dd:before, .dl-horizontal dd:after, .container:before, .container:after, .container-fluid:before, .container-fluid:after, .row:before, .row:after, .form-horizontal .form-group:before, .form-horizontal .form-group:after, .btn-toolbar:before, .btn-toolbar:after, .btn-group-vertical>.btn-group:before, .btn-group-vertical>.btn-group:after, .nav:before, .nav:after, .navbar:before, .navbar:after, .navbar-header:before, .navbar-header:after, .navbar-collapse:before, .navbar-collapse:after, .pager:before, .pager:after, .panel-body:before, .panel-body:after, .modal-footer:before, .modal-footer:after {
    content: " ";
    display: table;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.clearfix:after, .dl-horizontal dd:after, .container:after, .container-fluid:after, .row:after, .form-horizontal .form-group:after, .btn-toolbar:after, .btn-group-vertical>.btn-group:after, .nav:after, .navbar:after, .navbar-header:after, .navbar-collapse:after, .pager:after, .panel-body:after, .modal-footer:after {
    clear: both;
}
.clearfix:before, .clearfix:after, .dl-horizontal dd:before, .dl-horizontal dd:after, .container:before, .container:after, .container-fluid:before, .container-fluid:after, .row:before, .row:after, .form-horizontal .form-group:before, .form-horizontal .form-group:after, .btn-toolbar:before, .btn-toolbar:after, .btn-group-vertical>.btn-group:before, .btn-group-vertical>.btn-group:after, .nav:before, .nav:after, .navbar:before, .navbar:after, .navbar-header:before, .navbar-header:after, .navbar-collapse:before, .navbar-collapse:after, .pager:before, .pager:after, .panel-body:before, .panel-body:after, .modal-footer:before, .modal-footer:after {
    content: " ";
    display: table;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
::selection {
    color: #FFFFFF;
    background: #035DAB;
}
::selection {
    color: #ffffff;
    background: #2695ff;
}
::selection {
    color: #ffffff;
    background: #f02222;
}
.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
    position: relative;
    min-height: 1px;
    padding-left: 15px;
    padding-right: 15px;
}
* {
    word-wrap: break-word;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
body, html, #page {
    height: 100%;
    -webkit-font-smoothing: antialiased;
}
body {
    font-family: Muli;
}
body {
    font-family: Montserrat;
}
body {
    font-family: "Montserrat",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #242424;
    background-color: #fff;
}
html {
    font-family: sans-serif;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}
html {
    font-size: 10px;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
}
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
::selection {
    color: #FFFFFF;
    background: #035DAB;
}
::selection {
    color: #ffffff;
    background: #2695ff;
}
::selection {
    color: #ffffff;
    background: #f02222;
}
.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
    position: relative;
    min-height: 1px;
    padding-left: 15px;
    padding-right: 15px;
}
* {
    word-wrap: break-word;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
body, html, #page {
    height: 100%;
    -webkit-font-smoothing: antialiased;
}
body {
    font-family: Muli;
}
body {
    font-family: Montserrat;
}
body {
    font-family: "Montserrat",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #242424;
    background-color: #fff;
}
html {
    font-family: sans-serif;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}
html {
    font-size: 10px;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
}
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
::selection {
    color: #FFFFFF;
    background: #035DAB;
}
::selection {
    color: #ffffff;
    background: #2695ff;
}
::selection {
    color: #ffffff;
    background: #f02222;
}
.ibid-contact-form.row.register {
    margin-bottom: 20px;
}
.row {
    margin-left: -15px;
    margin-right: -15px;
}
* {
    word-wrap: break-word;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
body, html, #page {
    height: 100%;
    -webkit-font-smoothing: antialiased;
}
body {
    font-family: Muli;
}
body {
    font-family: Montserrat;
}
body {
    font-family: "Montserrat",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #242424;
    background-color: #fff;
}
html {
    font-family: sans-serif;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}
html {
    font-size: 10px;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
}
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
.clearfix:before, .clearfix:after, .dl-horizontal dd:before, .dl-horizontal dd:after, .container:before, .container:after, .container-fluid:before, .container-fluid:after, .row:before, .row:after, .form-horizontal .form-group:before, .form-horizontal .form-group:after, .btn-toolbar:before, .btn-toolbar:after, .btn-group-vertical>.btn-group:before, .btn-group-vertical>.btn-group:after, .nav:before, .nav:after, .navbar:before, .navbar:after, .navbar-header:before, .navbar-header:after, .navbar-collapse:before, .navbar-collapse:after, .pager:before, .pager:after, .panel-body:before, .panel-body:after, .modal-footer:before, .modal-footer:after {
    content: " ";
    display: table;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.clearfix:after, .dl-horizontal dd:after, .container:after, .container-fluid:after, .row:after, .form-horizontal .form-group:after, .btn-toolbar:after, .btn-group-vertical>.btn-group:after, .nav:after, .navbar:after, .navbar-header:after, .navbar-collapse:after, .pager:after, .panel-body:after, .modal-footer:after {
    clear: both;
}
.clearfix:before, .clearfix:after, .dl-horizontal dd:before, .dl-horizontal dd:after, .container:before, .container:after, .container-fluid:before, .container-fluid:after, .row:before, .row:after, .form-horizontal .form-group:before, .form-horizontal .form-group:after, .btn-toolbar:before, .btn-toolbar:after, .btn-group-vertical>.btn-group:before, .btn-group-vertical>.btn-group:after, .nav:before, .nav:after, .navbar:before, .navbar:after, .navbar-header:before, .navbar-header:after, .navbar-collapse:before, .navbar-collapse:after, .pager:before, .pager:after, .panel-body:before, .panel-body:after, .modal-footer:before, .modal-footer:after {
    content: " ";
    display: table;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
::selection {
    color: #FFFFFF;
    background: #035DAB;
}
::selection {
    color: #ffffff;
    background: #2695ff;
}
::selection {
    color: #ffffff;
    background: #f02222;
}
#content .wpb_alert p:last-child, #content .wpb_text_column :last-child, #content .wpb_text_column p:last-child, .wpb_alert p:last-child, .wpb_text_column :last-child, .wpb_text_column p:last-child {
    margin-bottom: 0;
}
.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
    position: relative;
    min-height: 1px;
    padding-left: 15px;
    padding-right: 15px;
}
* {
    word-wrap: break-word;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
body, html, #page {
    height: 100%;
    -webkit-font-smoothing: antialiased;
}
body {
    font-family: Muli;
}
body {
    font-family: Montserrat;
}
body {
    font-family: "Montserrat",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #242424;
    background-color: #fff;
}
html {
    font-family: sans-serif;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}
html {
    font-size: 10px;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
}
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
::selection {
    color: #FFFFFF;
    background: #035DAB;
}
::selection {
    color: #ffffff;
    background: #2695ff;
}
::selection {
    color: #ffffff;
    background: #f02222;
}
.wpb_column {
    height: auto;
}
.vc_column_container {
    padding-left: 0;
    padding-right: 0;
}
@media (min-width: 768px)
.vc_col-sm-12 {
    width: 100%;
}
@media (min-width: 768px)
.vc_col-sm-1, .vc_col-sm-10, .vc_col-sm-11, .vc_col-sm-12, .vc_col-sm-2, .vc_col-sm-3, .vc_col-sm-4, .vc_col-sm-5, .vc_col-sm-6, .vc_col-sm-7, .vc_col-sm-8, .vc_col-sm-9 {
    float: left;
}
.vc_col-lg-1, .vc_col-lg-10, .vc_col-lg-11, .vc_col-lg-12, .vc_col-lg-2, .vc_col-lg-3, .vc_col-lg-4, .vc_col-lg-5, .vc_col-lg-6, .vc_col-lg-7, .vc_col-lg-8, .vc_col-lg-9, .vc_col-md-1, .vc_col-md-10, .vc_col-md-11, .vc_col-md-12, .vc_col-md-2, .vc_col-md-3, .vc_col-md-4, .vc_col-md-5, .vc_col-md-6, .vc_col-md-7, .vc_col-md-8, .vc_col-md-9, .vc_col-sm-1, .vc_col-sm-10, .vc_col-sm-11, .vc_col-sm-12, .vc_col-sm-2, .vc_col-sm-3, .vc_col-sm-4, .vc_col-sm-5, .vc_col-sm-6, .vc_col-sm-7, .vc_col-sm-8, .vc_col-sm-9, .vc_col-xs-1, .vc_col-xs-10, .vc_col-xs-11, .vc_col-xs-12, .vc_col-xs-2, .vc_col-xs-3, .vc_col-xs-4, .vc_col-xs-5, .vc_col-xs-6, .vc_col-xs-7, .vc_col-xs-8, .vc_col-xs-9 {
    position: relative;
    min-height: 1px;
    padding-left: 15px;
    padding-right: 15px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.vc_column_container {
    width: 100%;
}
* {
    word-wrap: break-word;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
body, html, #page {
    height: 100%;
    -webkit-font-smoothing: antialiased;
}
body {
    font-family: Muli;
}
body {
    font-family: Montserrat;
}
body {
    font-family: "Montserrat",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #242424;
    background-color: #fff;
}
html {
    font-family: sans-serif;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}
html {
    font-size: 10px;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
}
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
::selection {
    color: #FFFFFF;
    background: #035DAB;
}
::selection {
    color: #ffffff;
    background: #2695ff;
}
::selection {
    color: #ffffff;
    background: #f02222;
}
* {
    word-wrap: break-word;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
body, html, #page {
    height: 100%;
    -webkit-font-smoothing: antialiased;
}
body {
    font-family: Muli;
}
body {
    font-family: Montserrat;
}
body {
    font-family: "Montserrat",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #242424;
    background-color: #fff;
}
html {
    font-family: sans-serif;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}
html {
    font-size: 10px;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
}
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
.vc_clearfix:after, .vc_clearfix:before {
    content: " ";
    display: table;
}
.vc_clearfix:after, .vc_clearfix:before {
    content: " ";
    display: table;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.vc_clearfix:after {
    clear: both;
}
.vc_clearfix:after, .vc_clearfix:before {
    content: " ";
    display: table;
}
.vc_clearfix:after {
    clear: both;
}
.vc_clearfix:after, .vc_clearfix:before {
    content: " ";
    display: table;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
::selection {
    color: #FFFFFF;
    background: #035DAB;
}
::selection {
    color: #ffffff;
    background: #2695ff;
}
::selection {
    color: #ffffff;
    background: #f02222;
}
.vc_custom_1595088140491 {
    margin-bottom: 50px !important;
}
.wpb_row {
    margin-bottom: 80px;
}
.vc_row {
    background-size: cover;
}
.vc_row {
    margin-left: -15px;
    margin-right: -15px;
}
* {
    word-wrap: break-word;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
body, html, #page {
    height: 100%;
    -webkit-font-smoothing: antialiased;
}
body {
    font-family: Muli;
}
body {
    font-family: Montserrat;
}
body {
    font-family: "Montserrat",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #242424;
    background-color: #fff;
}
html {
    font-family: sans-serif;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}
html {
    font-size: 10px;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
}
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
.vc_row:after, .vc_row:before {
    content: " ";
    display: table;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.vc_row:after {
    clear: both;
}
.vc_row:after, .vc_row:before {
    content: " ";
    display: table;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
::selection {
    color: #FFFFFF;
    background: #035DAB;
}
::selection {
    color: #ffffff;
    background: #2695ff;
}
::selection {
    color: #ffffff;
    background: #f02222;
}
.vc_column_container>.vc_column-inner {
    box-sizing: border-box;
    padding-left: 15px;
    padding-right: 15px;
    width: 100%;
}
* {
    word-wrap: break-word;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
body, html, #page {
    height: 100%;
    -webkit-font-smoothing: antialiased;
}
body {
    font-family: Muli;
}
body {
    font-family: Montserrat;
}
body {
    font-family: "Montserrat",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #242424;
    background-color: #fff;
}
html {
    font-family: sans-serif;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}
html {
    font-size: 10px;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
}
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
.vc_column-inner::after, .vc_column-inner::before {
    content: " ";
    display: table;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.vc_column-inner::after {
    clear: both;
}
.vc_column-inner::after, .vc_column-inner::before {
    content: " ";
    display: table;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
::selection {
    color: #FFFFFF;
    background: #035DAB;
}
::selection {
    color: #ffffff;
    background: #2695ff;
}
::selection {
    color: #ffffff;
    background: #f02222;
}
.wpcf7-form input, .wpcf7-form textarea {
    border: 1px solid rgba(36, 36, 36, .3);
    padding: 8px;
}
input, textarea {
    font-family: Montserrat;
}
input {
    line-height: normal;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
input, textarea {
    font-family: Montserrat;
}
input, button, select, textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}
input {
    line-height: normal;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
* {
    word-wrap: break-word;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
input[type="hidden" i] {
    display: none;
    appearance: none;
    background-color: initial;
    cursor: default;
    padding: initial;
    border: initial;
}
user agent stylesheet
input {
    -webkit-writing-mode: horizontal-tb !important;
    font-style: ;
    font-variant-ligatures: ;
    font-variant-caps: ;
    font-variant-numeric: ;
    font-variant-east-asian: ;
    font-weight: ;
    font-stretch: ;
    font-size: ;
    font-family: ;
    text-rendering: auto;
    color: -internal-light-dark(black, white);
    letter-spacing: normal;
    word-spacing: normal;
    line-height: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: start;
    appearance: auto;
    -webkit-rtl-ordering: logical;
    cursor: text;
    background-color: -internal-light-dark(rgb(255, 255, 255), rgb(59, 59, 59));
    margin: 0em;
    padding: 1px 2px;
    border-width: 2px;
    border-style: inset;
    border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
    border-image: initial;
}
body, html, #page {
    height: 100%;
    -webkit-font-smoothing: antialiased;
}
body {
    font-family: Muli;
}
body {
    font-family: Montserrat;
}
body {
    font-family: "Montserrat",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #242424;
    background-color: #fff;
}
html {
    font-family: sans-serif;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}
html {
    font-size: 10px;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
}
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
::selection {
    color: #FFFFFF;
    background: #035DAB;
}
::selection {
    color: #ffffff;
    background: #2695ff;
}
::selection {
    color: #ffffff;
    background: #f02222;
}
.ibid-contact-form.row.register textarea {
    height: 200px;
     border: 1px solid #ccc;
}
.ibid-contact-form textarea.wpcf7-form-control {
    height: 150px;
}
.ibid-contact-form input.wpcf7-form-control, .ibid-contact-form textarea.wpcf7-form-control {
    /* background: #EFEFEF; */
    border-radius: 2px;
    border: 1px solid #eeee;
    padding: 20px;
    width: 100%;
    outline: none;
    height: 50px;
    font-family: proxima-nova, sans-serif;
}
#content .wpb_alert p:last-child, #content .wpb_text_column :last-child, #content .wpb_text_column p:last-child, .wpb_alert p:last-child, .wpb_text_column :last-child, .wpb_text_column p:last-child {
    margin-bottom: 0;
}
.wpcf7-form input, .wpcf7-form textarea {
    border: 1px solid rgba(36, 36, 36, .3);
    padding: 8px;
}
input, textarea {
    font-family: Montserrat;
}
textarea {
    overflow: auto;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
input, textarea {
    font-family: Montserrat;
}
textarea, input[type="text"], input[type="button"], input[type="search"], input[type="submit"] {
    -webkit-appearance: none;
}
input, button, select, textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}
textarea {
    overflow: auto;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
* {
    word-wrap: break-word;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
textarea {
    -webkit-writing-mode: horizontal-tb !important;
    font-style: ;
    font-variant-ligatures: ;
    font-variant-caps: ;
    font-variant-numeric: ;
    font-variant-east-asian: ;
    font-weight: ;
    font-stretch: ;
    font-size: ;
    font-family: monospace;
    text-rendering: auto;
    color: -internal-light-dark(black, white);
    letter-spacing: normal;
    word-spacing: normal;
    line-height: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: start;
    appearance: auto;
    -webkit-rtl-ordering: logical;
    resize: auto;
    cursor: text;
    white-space: pre-wrap;
    overflow-wrap: break-word;
    background-color: -internal-light-dark(rgb(255, 255, 255), rgb(59, 59, 59));
    column-count: initial !important;
    margin: 0em;
    border-width: 1px;
    border-style: solid;
    border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
    border-image: initial;
    padding: 2px;
}
body, html, #page {
    height: 100%;
    -webkit-font-smoothing: antialiased;
}
body {
    font-family: Muli;
}
body {
    font-family: Montserrat;
}
body {
    font-family: "Montserrat",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #242424;
    background-color: #fff;
}
html {
    font-family: sans-serif;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}
html {
    font-size: 10px;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
}
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
::selection {
    color: #FFFFFF;
    background: #035DAB;
}
::selection {
    color: #ffffff;
    background: #2695ff;
}
::selection {
    color: #ffffff;
    /* background: #f02222; */
}
#content .wpb_alert p:last-child, #content .wpb_text_column :last-child, #content .wpb_text_column p:last-child, .wpb_alert p:last-child, .wpb_text_column :last-child, .wpb_text_column p:last-child {
    margin-bottom: 0;
}
* {
    word-wrap: break-word;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
body, html, #page {
    height: 100%;
    -webkit-font-smoothing: antialiased;
}
body {
    font-family: Muli;
}
body {
    font-family: Montserrat;
}
body {
    font-family: "Montserrat",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #242424;
    background-color: #fff;
}
html {
    font-family: sans-serif;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}
html {
    font-size: 10px;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
}
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
span.wpcf7-list-item-label::before, span.wpcf7-list-item-label::after {
    content: " ";
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
span.wpcf7-list-item-label::before, span.wpcf7-list-item-label::after {
    content: " ";
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
::selection {
    color: #FFFFFF;
    background: #035DAB;
}
::selection {
    color: #ffffff;
    background: #2695ff;
}
::selection {
    color: #ffffff;
    /* background: #f02222; */
}
.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .wc_vendors_active form input[type="submit"]:hover, .wcv-dashboard-navigation li a:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, table.compare-list .add-to-cart td a:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .ibid-search.ibid-search-open .ibid-icon-search, .no-js .ibid-search .ibid-icon-search, .ibid-icon-search:hover, .latest-posts .post-date-month, .button.solid-button:hover, body .vc_btn.vc_btn-blue:hover, body a.vc_btn.vc_btn-blue:hover, body button.vc_btn.vc_btn-blue:hover, .subscribe > button[type="submit"]:hover, .no-results input[type="submit"]:hover, table.compare-list .add-to-cart td a:hover, .shop_cart:hover, .wpcf7-form .wpcf7-submit:hover, .widget_address_social_icons .social-links a:hover, .post-password-form input[type="submit"]:hover, .page-template-template-blog .full-width-part .more-link:hover, .form-submit input:hover, .full-width-part .more-link:hover, .modeltheme-modal #loginform input[type="submit"]:hover, .modeltheme-modal p.btn-register-p a:hover, #yith-wcwl-form input[type="submit"]:hover, #signup-modal-content .woocommerce-form-register.register .button[type="submit"]:hover, .woocommerce_categories2 .bottom-components .component a:hover, .woocommerce_categories2 .bottom-components .component a:hover, woocommerce_categories2 .bottom-components .component a:hover {
    background: #FFFFFF;
}
.dokan-btn-theme a:hover, .dokan-btn-theme:hover, input[type="submit"].dokan-btn-danger:hover, input[type="submit"].dokan-btn-theme:hover, .woocommerce-MyAccount-navigation-link > a:hover, body .ibid_shortcode_blog .post-name a:hover, .masonry_banner .read-more:hover, .category-button a:hover, .dokan-single-store .profile-frame .profile-info-box .profile-info-summery-wrapper .profile-info-summery .profile-info i, .wpcf7-form .wpcf7-submit:hover, .product_meta > span a:hover, .dokan-dashboard .dokan-dashboard-wrap .delete a, .dokan-dashboard .dokan-dash-sidebar ul.dokan-dashboard-menu li.active a, .dokan-dashboard .dokan-dash-sidebar ul.dokan-dashboard-menu li a:hover, #dropdown-user-profile ul li a:hover, .widget_ibid_social_icons a, .header-v3 .menu-products .shop_cart, .simple-sitemap-container ul a:hover, .wishlist_table tr td.product-name a.button:hover, .dokan-dashboard .dokan-dash-sidebar ul.dokan-dashboard-menu li:hover, .dokan-dashboard .dokan-dash-sidebar ul.dokan-dashboard-menu li.dokan-common-links a:hover, .woocommerce div.product .woocommerce-tabs ul.tabs li.active a, .woocommerce div.product .woocommerce-tabs ul.tabs li:hover a, .mega_menu .cf-mega-menu li a:hover, .mega_menu .cf-mega-menu.sub-menu p a:hover, .woocommerce a.remove, .ibid_shortcode_cause .button-content a:hover {
    color: #035DAB !important;
}
.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, table.compare-list .add-to-cart td a:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .ibid-search.ibid-search-open .ibid-icon-search, .no-js .ibid-search .ibid-icon-search, .ibid-icon-search:hover, .latest-posts .post-date-month, .button.solid-button:hover, body .vc_btn.vc_btn-blue:hover, body a.vc_btn.vc_btn-blue:hover, body button.vc_btn.vc_btn-blue:hover, .subscribe > button[type="submit"]:hover, .no-results input[type="submit"]:hover, table.compare-list .add-to-cart td a:hover, .shop_cart:hover, .wpcf7-form .wpcf7-submit:hover, .widget_address_social_icons .social-links a:hover, .post-password-form input[type="submit"]:hover, .page-template-template-blog .full-width-part .more-link:hover, .form-submit input:hover, .full-width-part .more-link:hover, .modeltheme-modal #loginform input[type="submit"]:hover, .modeltheme-modal p.btn-register-p a:hover, #signup-modal-content .woocommerce-form-register.register .button[type="submit"]:hover, .woocommerce_categories2 .bottom-components .component a:hover, .woocommerce_categories2 .bottom-components .component a:hover, woocommerce_categories2 .bottom-components .component a:hover {
    background: #ffffff;
}
.dokan-btn-theme a:hover, .dokan-btn-theme:hover, input[type="submit"].dokan-btn-danger:hover, input[type="submit"].dokan-btn-theme:hover, .woocommerce-MyAccount-navigation-link > a:hover, body .ibid_shortcode_blog .post-name a:hover, .masonry_banner .read-more:hover, .category-button a:hover, .wpcf7-form .wpcf7-submit:hover, .product_meta > span a:hover, .dokan-dashboard .dokan-dash-sidebar ul.dokan-dashboard-menu li.active a, .dokan-dashboard .dokan-dash-sidebar ul.dokan-dashboard-menu li a:hover, #dropdown-user-profile ul li a:hover, .widget_ibid_social_icons a, .simple-sitemap-container ul a:hover, .dokan-dashboard .dokan-dash-sidebar ul.dokan-dashboard-menu li:hover, .dokan-dashboard .dokan-dash-sidebar ul.dokan-dashboard-menu li.dokan-common-links a:hover, .woocommerce div.product .woocommerce-tabs ul.tabs li.active a, .woocommerce div.product .woocommerce-tabs ul.tabs li:hover a, .mega_menu .cf-mega-menu li a:hover, .mega_menu .cf-mega-menu.sub-menu p a:hover, .woocommerce a.remove {
    color: #2695ff !important;
}
.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, table.compare-list .add-to-cart td a:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .ibid-search.ibid-search-open .ibid-icon-search, .no-js .ibid-search .ibid-icon-search, .ibid-icon-search:hover, .latest-posts .post-date-month, .button.solid-button:hover, body .vc_btn.vc_btn-blue:hover, body a.vc_btn.vc_btn-blue:hover, body button.vc_btn.vc_btn-blue:hover, .subscribe > button[type="submit"]:hover, .no-results input[type="submit"]:hover, table.compare-list .add-to-cart td a:hover, .shop_cart:hover, .wpcf7-form .wpcf7-submit:hover, .widget_address_social_icons .social-links a:hover, .post-password-form input[type="submit"]:hover, .modeltheme-modal #loginform input[type="submit"]:hover, form#login .register_button, form#login .submit_button:hover, .wc_vendors_active form input[type="submit"]:hover, .wcv-dashboard-navigation li a:hover, .modeltheme-modal p.btn-register-p a:hover {
    background: #242424;
    color: #2695FF;
    box-shadow: 0px 0px 25px rgb(0 0 0 / 10%);
}
.tagcloud > a:hover, nav, .ibid-icon-search, .wpb_button::after, .rotate45, .latest-posts .post-date-day, .latest-posts h3, .latest-tweets h3, .latest-videos h3, .button.solid-button, .top-footer, .form-submit input, .page-template-template-blog .full-width-part .more-link, .full-width-part .more-link, button.vc_btn, .pricing-table.recomended .table-content, .pricing-table .table-content:hover, .pricing-table.Recommended .table-content, .pricing-table.recommended .table-content, .pricing-table.recomended .table-content, .pricing-table .table-content:hover, .block-triangle, .owl-theme .owl-controls .owl-page span, body .vc_btn.vc_btn-blue, body a.vc_btn.vc_btn-blue, body button.vc_btn.vc_btn-blue, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, table.compare-list .add-to-cart td a, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce a.remove:hover, .woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .widget_social_icons li a:hover, #subscribe > button[type="submit"], .social-sharer > li:hover, .prev-next-post a:hover .rotate45, .masonry_banner.default-skin, .member-footer .social::before, .member-footer .social::after, .subscribe > button[type="submit"], .woocommerce #respond input#submit.alt.disabled, .woocommerce #respond input#submit.alt.disabled:hover, .woocommerce #respond input#submit.alt:disabled, .woocommerce #respond input#submit.alt:disabled:hover, .woocommerce #respond input#submit.alt[disabled]:disabled, .woocommerce #respond input#submit.alt[disabled]:disabled:hover, .woocommerce a.button.alt.disabled, .woocommerce a.button.alt.disabled:hover, .woocommerce a.button.alt:disabled, .woocommerce a.button.alt:disabled:hover, .woocommerce a.button.alt[disabled]:disabled, .woocommerce a.button.alt[disabled]:disabled:hover, .woocommerce button.button.alt.disabled, .woocommerce button.button.alt.disabled:hover, .woocommerce button.button.alt:disabled, .woocommerce button.button.alt:disabled:hover, .woocommerce button.button.alt[disabled]:disabled, .woocommerce button.button.alt[disabled]:disabled:hover, .woocommerce input.button.alt.disabled, .woocommerce input.button.alt.disabled:hover, .woocommerce input.button.alt:disabled, .woocommerce input.button.alt:disabled:hover, .woocommerce input.button.alt[disabled]:disabled, .woocommerce input.button.alt[disabled]:disabled:hover, .no-results input[type="submit"], table.compare-list .add-to-cart td a, .shop_cart, h3#reply-title::after, .newspaper-info, .categories_shortcode .owl-controls .owl-buttons i:hover, .widget-title:after, h2.heading-bottom:after, .wpb_content_element .wpb_accordion_wrapper .wpb_accordion_header.ui-state-active, #primary .main-content ul li:not(.rotate45)::before, .wpcf7-form .wpcf7-submit, .menu-search .btn.btn-primary:hover, .um-register .um-button.um-alt, .btn-register, .modeltheme-modal #loginform input[type="submit"], form#login .register_button, form#login .submit_button, .bottom-components .component a:hover, .bottom-components .component a:hover, .bottom-components .component a:hover, .woocommerce-page .overlay-components .component a:hover, .woocommerce-page .vc_col-md-3 .overlay-components .component a:hover, .woocommerce.single-product .wishlist-container .yith-wcwl-wishlistaddedbrowse.show a, .widget_address_social_icons .social-links a, .hover-components .component:hover, .navbar-default .navbar-toggle .icon-bar, #yith-wcwl-form input[type="submit"], .nav-previous a, .nav-next a, article.dokan-orders-area .dokan-panel-default > .dokan-panel-heading, #signup-modal-content .woocommerce-form-register.register .button[type="submit"], .dokan-dashboard .dokan-dashboard-content article.dashboard-content-area .dashboard-widget .widget-title, .woocommerce-MyAccount-navigation-link > a, .newsletter-footer input.submit:hover, .newsletter-footer input.submit:focus, a.add-wsawl.sa-watchlist-action, a.remove-wsawl.sa-watchlist-action, footer .footer-top .menu .menu-item a::before, .post-password-form input[type="submit"], .wcv-dashboard-navigation li a, .wc_vendors_active form input[type="submit"], .cd-gallery .button-bid a, .mt_products_slider .button-bid a, .categories_shortcode .category, .ibid_shortcode_blog.boxed .post-button a.more-link {
    background: #035DAB;
}
.tagcloud > a:hover, .ibid-icon-search, .wpb_button::after, .rotate45, .latest-posts .post-date-day, .latest-posts h3, .latest-tweets h3, .latest-videos h3, .button.solid-button, .top-footer, .form-submit input, .page-template-template-blog .full-width-part .more-link, .full-width-part .more-link, button.vc_btn, .pricing-table.recomended .table-content, .pricing-table .table-content:hover, .pricing-table.Recommended .table-content, .pricing-table.recommended .table-content, .pricing-table.recomended .table-content, .pricing-table .table-content:hover, .block-triangle, .owl-theme .owl-controls .owl-page span, body .vc_btn.vc_btn-blue, body a.vc_btn.vc_btn-blue, body button.vc_btn.vc_btn-blue, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, table.compare-list .add-to-cart td a, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce a.remove:hover, .woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .widget_social_icons li a:hover, #subscribe > button[type="submit"], .social-sharer > li:hover, .prev-next-post a:hover .rotate45, .masonry_banner.default-skin, .member-footer .social::before, .member-footer .social::after, .subscribe > button[type="submit"], .woocommerce #respond input#submit.alt.disabled, .woocommerce #respond input#submit.alt.disabled:hover, .woocommerce #respond input#submit.alt:disabled, .woocommerce #respond input#submit.alt:disabled:hover, .woocommerce #respond input#submit.alt[disabled]:disabled, .woocommerce #respond input#submit.alt[disabled]:disabled:hover, .woocommerce a.button.alt.disabled, .woocommerce a.button.alt.disabled:hover, .woocommerce a.button.alt:disabled, .woocommerce a.button.alt:disabled:hover, .woocommerce a.button.alt[disabled]:disabled, .woocommerce a.button.alt[disabled]:disabled:hover, .woocommerce button.button.alt.disabled, .woocommerce button.button.alt.disabled:hover, .woocommerce button.button.alt:disabled, .woocommerce button.button.alt:disabled:hover, .woocommerce button.button.alt[disabled]:disabled, .woocommerce button.button.alt[disabled]:disabled:hover, .woocommerce input.button.alt.disabled, .woocommerce input.button.alt.disabled:hover, .woocommerce input.button.alt:disabled, .woocommerce input.button.alt:disabled:hover, .woocommerce input.button.alt[disabled]:disabled, .woocommerce input.button.alt[disabled]:disabled:hover, .no-results input[type="submit"], table.compare-list .add-to-cart td a, .shop_cart, h3#reply-title::after, .newspaper-info, .categories_shortcode .owl-controls .owl-buttons i:hover, .widget-title:after, h2.heading-bottom:after, .wpb_content_element .wpb_accordion_wrapper .wpb_accordion_header.ui-state-active, #primary .main-content ul li:not(.rotate45)::before, .wpcf7-form .wpcf7-submit, .menu-search .btn.btn-primary:hover, .bottom-components .component a:hover, .bottom-components .component a:hover, .bottom-components .component a:hover, .woocommerce-page .overlay-components .component a:hover, .woocommerce-page .vc_col-md-3 .overlay-components .component a:hover, .woocommerce.single-product .wishlist-container .yith-wcwl-wishlistaddedbrowse.show a, .widget_address_social_icons .social-links a, .hover-components .component:hover, .navbar-default .navbar-toggle .icon-bar, nav, .nav-previous a, .nav-next a, .dokan-dashboard .dokan-dashboard-content article.dashboard-content-area .dashboard-widget .widget-title, .woocommerce-MyAccount-navigation-link > a, .newsletter-footer input.submit:hover, .newsletter-footer input.submit:focus, a.add-wsawl.sa-watchlist-action, a.remove-wsawl.sa-watchlist-action, footer .footer-top .menu .menu-item a::before, .post-password-form input[type="submit"] {
    background: #2695FF;
}
.tagcloud > a:hover, .ibid-icon-search, .wpb_button::after, .rotate45, .latest-posts .post-date-day, .latest-posts h3, .latest-tweets h3, .latest-videos h3, .button.solid-button, button.vc_btn, .pricing-table.recomended .table-content, .pricing-table .table-content:hover, .pricing-table.Recommended .table-content, .pricing-table.recommended .table-content, .pricing-table.recomended .table-content, .pricing-table .table-content:hover, .block-triangle, .owl-theme .owl-controls .owl-page span, body .vc_btn.vc_btn-blue, body a.vc_btn.vc_btn-blue, body button.vc_btn.vc_btn-blue, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, table.compare-list .add-to-cart td a, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce a.remove:hover, .woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .pagination .page-numbers.current, .pagination .page-numbers:hover, .widget_social_icons li a:hover, #subscribe > button[type="submit"], .social-sharer > li:hover, .prev-next-post a:hover .rotate45, .masonry_banner.default-skin, .form-submit input, .member-footer .social::before, .member-footer .social::after, .subscribe > button[type="submit"], .woocommerce #respond input#submit.alt.disabled, .woocommerce #respond input#submit.alt.disabled:hover, .woocommerce #respond input#submit.alt:disabled, .woocommerce #respond input#submit.alt:disabled:hover, .woocommerce #respond input#submit.alt[disabled]:disabled, .woocommerce #respond input#submit.alt[disabled]:disabled:hover, .woocommerce a.button.alt.disabled, .woocommerce a.button.alt.disabled:hover, .woocommerce a.button.alt:disabled, .woocommerce a.button.alt:disabled:hover, .woocommerce a.button.alt[disabled]:disabled, .woocommerce a.button.alt[disabled]:disabled:hover, .woocommerce button.button.alt.disabled, .woocommerce button.button.alt.disabled:hover, .woocommerce button.button.alt:disabled, .woocommerce button.button.alt:disabled:hover, .woocommerce button.button.alt[disabled]:disabled, .woocommerce button.button.alt[disabled]:disabled:hover, .woocommerce input.button.alt.disabled, .woocommerce input.button.alt.disabled:hover, .woocommerce input.button.alt:disabled, .woocommerce input.button.alt:disabled:hover, .woocommerce input.button.alt[disabled]:disabled, .woocommerce input.button.alt[disabled]:disabled:hover, .no-results input[type="submit"], table.compare-list .add-to-cart td a, .shop_cart, h3#reply-title::after, .newspaper-info, .categories_shortcode .owl-controls .owl-buttons i:hover, .widget-title:after, h2.heading-bottom:after, .wpb_content_element .wpb_accordion_wrapper .wpb_accordion_header.ui-state-active, #primary .main-content ul li:not(.rotate45)::before, .wpcf7-form .wpcf7-submit, .widget_address_social_icons .social-links a, .hover-components .component:hover, .navbar-default .navbar-toggle .icon-bar, footer .footer-top .menu .menu-item a::before, .post-password-form input[type="submit"] {
    background: #2695FF;
}
.wpcf7-form .wpcf7-submit {
    border: 0 none;
    border-radius: 4px;
    padding: 13px 30px;
    margin-top: 10px;
    color: #fff;
    width: 100%;
    line-height: 1;
    font-weight: 600;
    text-transform: uppercase;
    transition: all 250ms ease;
    -webkit-transition: all 250ms ease;
    -moz-transition: all 250ms ease;
    -o-transition: all 250ms ease;
    -ms-transition: all 250ms ease;
}
.ibid-contact-form .wpcf7-submit {
    margin-top: 0px !important;
    width: auto !important;
}
button, html input[type="button"], input[type="reset"], input[type="submit"] {
    -webkit-appearance: button;
    cursor: pointer;
}
button, select {
    text-transform: none;
}
button {
    overflow: visible;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
input, button, select, textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}
button, html input[type="button"], input[type="reset"], input[type="submit"] {
    -webkit-appearance: button;
    cursor: pointer;
}
button, select {
    text-transform: none;
}
button {
    overflow: visible;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
* {
    word-wrap: break-word;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
button {
    appearance: auto;
    -webkit-writing-mode: horizontal-tb !important;
    font-style: ;
    font-variant-ligatures: ;
    font-variant-caps: ;
    font-variant-numeric: ;
    font-variant-east-asian: ;
    font-weight: ;
    font-stretch: ;
    font-size: ;
    font-family: ;
    text-rendering: auto;
    color: -internal-light-dark(black, white);
    letter-spacing: normal;
    word-spacing: normal;
    line-height: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: center;
    align-items: flex-start;
    cursor: default;
    box-sizing: border-box;
    background-color: -internal-light-dark(rgb(239, 239, 239), rgb(59, 59, 59));
    margin: 0em;
    padding: 1px 6px;
    border-width: 2px;
    border-style: outset;
    border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
    border-image: initial;
}
body, html, #page {
    height: 100%;
    -webkit-font-smoothing: antialiased;
}
body {
    font-family: Muli;
}
body {
    font-family: Montserrat;
}
body {
    font-family: "Montserrat",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #242424;
    background-color: #fff;
}
html {
    font-family: sans-serif;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}
html {
    font-size: 10px;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
}
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
::selection {
    color: #FFFFFF;
    background: #035DAB;
}
::selection {
    color: #ffffff;
    background: #2695ff;
}
::selection {
    color: #ffffff;
    /* background: #f02222; */
}

*/html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:bold}dfn{font-style:italic}h1{font-size:2em;margin:0.67em 0}mark{background:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-0.5em}sub{bottom:-0.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box;height:0}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace, monospace;font-size:1em}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type="checkbox"],input[type="radio"]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}input[type="number"]::-webkit-inner-spin-button,input[type="number"]::-webkit-outer-spin-button{height:auto}input[type="search"]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none}fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:0.35em 0.625em 0.75em}legend{border:0;padding:0}textarea{overflow:auto}optgroup{font-weight:bold}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}
    
    .glyphicon-calendar:before{content:"\e109"}.glyphicon-random:before{content:"\e110"}.glyphicon-comment:before{content:"\e111"}.glyphicon-magnet:before{content:"\e112"}.glyphicon-chevron-up:before{content:"\e113"}.glyphicon-chevron-down:before{content:"\e114"}.glyphicon-retweet:before{content:"\e115"}.glyphicon-shopping-cart:before{content:"\e116"}.glyphicon-folder-close:before{content:"\e117"}.glyphicon-folder-open:before{content:"\e118"}.glyphicon-resize-vertical:before{content:"\e119"}.glyphicon-resize-horizontal:before{content:"\e120"}.glyphicon-hdd:before{content:"\e121"}.glyphicon-bullhorn:before{content:"\e122"}.glyphicon-bell:before{content:"\e123"}.glyphicon-certificate:before{content:"\e124"}.glyphicon-thumbs-up:before{content:"\e125"}.glyphicon-thumbs-down:before{content:"\e126"}.glyphicon-hand-right:before{content:"\e127"}.glyphicon-hand-left:before{content:"\e128"}.glyphicon-hand-up:before{content:"\e129"}.glyphicon-hand-down:before{content:"\e130"}.glyphicon-circle-arrow-right:before{content:"\e131"}.glyphicon-circle-arrow-left:before{content:"\e132"}.glyphicon-circle-arrow-up:before{content:"\e133"}.glyphicon-circle-arrow-down:before{content:"\e134"}.glyphicon-globe:before{content:"\e135"}.glyphicon-wrench:before{content:"\e136"}.glyphicon-tasks:before{content:"\e137"}.glyphicon-filter:before{content:"\e138"}.glyphicon-briefcase:before{content:"\e139"}.glyphicon-fullscreen:before{content:"\e140"}.glyphicon-dashboard:before{content:"\e141"}.glyphicon-paperclip:before{content:"\e142"}.glyphicon-heart-empty:before{content:"\e143"}.glyphicon-link:before{content:"\e144"}.glyphicon-phone:before{content:"\e145"}.glyphicon-pushpin:before{content:"\e146"}.glyphicon-usd:before{content:"\e148"}.glyphicon-gbp:before{content:"\e149"}.glyphicon-sort:before{content:"\e150"}.glyphicon-sort-by-alphabet:before{content:"\e151"}.glyphicon-sort-by-alphabet-alt:before{content:"\e152"}.glyphicon-sort-by-order:before{content:"\e153"}.glyphicon-sort-by-order-alt:before{content:"\e154"}.glyphicon-sort-by-attributes:before{content:"\e155"}.glyphicon-sort-by-attributes-alt:before{content:"\e156"}.glyphicon-unchecked:before{content:"\e157"}.glyphicon-expand:before{content:"\e158"}.glyphicon-collapse-down:before{content:"\e159"}.glyphicon-collapse-up:before{content:"\e160"}.glyphicon-log-in:before{content:"\e161"}.glyphicon-flash:before{content:"\e162"}.glyphicon-log-out:before{content:"\e163"}.glyphicon-new-window:before{content:"\e164"}.glyphicon-record:before{content:"\e165"}.glyphicon-save:before{content:"\e166"}.glyphicon-open:before{content:"\e167"}.glyphicon-saved:before{content:"\e168"}.glyphicon-import:before{content:"\e169"}.glyphicon-export:before{content:"\e170"}.glyphicon-send:before{content:"\e171"}.glyphicon-floppy-disk:before{content:"\e172"}.glyphicon-floppy-saved:before{content:"\e173"}.glyphicon-floppy-remove:before{content:"\e174"}.glyphicon-floppy-save:before{content:"\e175"}.glyphicon-floppy-open:before{content:"\e176"}.glyphicon-credit-card:before{content:"\e177"}.glyphicon-transfer:before{content:"\e178"}.glyphicon-cutlery:before{content:"\e179"}.glyphicon-header:before{content:"\e180"}.glyphicon-compressed:before{content:"\e181"}.glyphicon-earphone:before{content:"\e182"}.glyphicon-phone-alt:before{content:"\e183"}.glyphicon-tower:before{content:"\e184"}.glyphicon-stats:before{content:"\e185"}.glyphicon-sd-video:before{content:"\e186"}.glyphicon-hd-video:before{content:"\e187"}.glyphicon-subtitles:before{content:"\e188"}.glyphicon-sound-stereo:before{content:"\e189"}.glyphicon-sound-dolby:before{content:"\e190"}.glyphicon-sound-5-1:before{content:"\e191"}.glyphicon-sound-6-1:before{content:"\e192"}.glyphicon-sound-7-1:before{content:"\e193"}.glyphicon-copyright-mark:before{content:"\e194"}.glyphicon-registration-mark:before{content:"\e195"}.glyphicon-cloud-download:before{content:"\e197"}.glyphicon-cloud-upload:before{content:"\e198"}.glyphicon-tree-conifer:before{content:"\e199"}.glyphicon-tree-deciduous:before{content:"\e200"}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}*:before,*:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px;-webkit-tap-highlight-color:rgba(0,0,0,0)}body{font-family:"Montserrat",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.42857143;color:#242424;background-color:#fff}input,button,select,textarea{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#337ab7;text-decoration:none}a:hover,a:focus{color:#23527c;text-decoration:underline}a:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}figure{margin:0}img{vertical-align:middle}.img-responsive,.thumbnail>img,.thumbnail a>img,.carousel-inner>.item>img,.carousel-inner>.item>a>img{display:block;max-width:100%;height:auto}.img-rounded{border-radius:6px}.img-thumbnail{padding:4px;line-height:1.42857143;background-color:#fff;border:1px solid #ddd;border-radius:4px;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;transition:all .2s ease-in-out;display:inline-block;max-width:100%;height:auto}.img-circle{border-radius:50%}hr{margin-top:20px;margin-bottom:20px;border:0;border-top:1px solid #eee}.sr-only{position:absolute;width:1px;height:1px;margin:-1px;padding:0;overflow:hidden;clip:rect(0, 0, 0, 0);border:0}.sr-only-focusable:active,.sr-only-focusable:focus{position:static;width:auto;height:auto;margin:0;overflow:visible;clip:auto}h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6{font-family:inherit;font-weight:500;line-height:1.1;color:inherit}h1 small,h2 small,h3 small,h4 small,h5 small,h6 small,.h1 small,.h2 small,.h3 small,.h4 small,.h5 small,.h6 small,h1 .small,h2 .small,h3 .small,h4 .small,h5 .small,h6 .small,.h1 .small,.h2 .small,.h3 .small,.h4 .small,.h5 .small,.h6 .small{font-weight:normal;line-height:1;color:#777}h1,.h1,h2,.h2,h3,.h3{margin-top:20px;margin-bottom:10px}h1 small,.h1 small,h2 small,.h2 small,h3 small,.h3 small,h1 .small,.h1 .small,h2 .small,.h2 .small,h3 .small,.h3 .small{font-size:65%}h4,.h4,h5,.h5,h6,.h6{margin-top:10px;margin-bottom:10px}h4 small,.h4 small,h5 small,.h5 small,h6 small,.h6 small,h4 .small,.h4 .small,h5 .small,.h5 .small,h6 .small,.h6 .small{font-size:75%}h1,.h1{font-size:36px}h2,.h2{font-size:30px}h3,.h3{font-size:24px}h4,.h4{font-size:18px}h5,.h5{font-size:14px}h6,.h6{font-size:12px}p{margin:0 0 10px}.lead{margin-bottom:20px;font-size:16px;font-weight:300;line-height:1.4}@media (min-width:768px){.lead{font-size:21px}}small,.small{font-size:85%}mark,.mark{background-color:#fcf8e3;padding:.2em}.text-left{text-align:left}.text-right{text-align:right}.text-center{text-align:center}.text-justify{text-align:justify}

        @media (min-width:992px){.container{width:970px}}@media (min-width:1300px){.container{width:1300px}} @media (min-width:1400px){.container{width:1400px}}.container-fluid{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}.row{margin-left:-15px;margin-right:-15px}.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12{position:relative;min-height:1px;padding-left:15px;padding-right:15px}.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12{float:left}.col-xs-12{width:100%}.col-xs-11{width:91.66666667%}.col-xs-10{width:83.33333333%}.col-xs-9{width:75%}.col-xs-8{width:66.66666667%}.col-xs-7{width:58.33333333%}.col-xs-6{width:50%}.col-xs-5{width:41.66666667%}.col-xs-4{width:33.33333333%}.col-xs-3{width:25%}.col-xs-2{width:16.66666667%}.col-xs-1{width:8.33333333%}.col-xs-pull-12{right:100%}.col-xs-pull-11{right:91.66666667%}.col-xs-pull-10{right:83.33333333%}.col-xs-pull-9{right:75%}.col-xs-pull-8{right:66.66666667%}.col-xs-pull-7{right:58.33333333%}.col-xs-pull-6{right:50%}.col-xs-pull-5{right:41.66666667%}.col-xs-pull-4{right:33.33333333%}.col-xs-pull-3{right:25%}.col-xs-pull-2{right:16.66666667%}.col-xs-pull-1{right:8.33333333%}.col-xs-pull-0{right:auto}.col-xs-push-12{left:100%}.col-xs-push-11{left:91.66666667%}.col-xs-push-10{left:83.33333333%}.col-xs-push-9{left:75%}.col-xs-push-8{left:66.66666667%}.col-xs-push-7{left:58.33333333%}.col-xs-push-6{left:50%}.col-xs-push-5{left:41.66666667%}.col-xs-push-4{left:33.33333333%}.col-xs-push-3{left:25%}.col-xs-push-2{left:16.66666667%}.col-xs-push-1{left:8.33333333%}.col-xs-push-0{left:auto}.col-xs-offset-12{margin-left:100%}.col-xs-offset-11{margin-left:91.66666667%}.col-xs-offset-10{margin-left:83.33333333%}.col-xs-offset-9{margin-left:75%}.col-xs-offset-8{margin-left:66.66666667%}.col-xs-offset-7{margin-left:58.33333333%}.col-xs-offset-6{margin-left:50%}.col-xs-offset-5{margin-left:41.66666667%}.col-xs-offset-4{margin-left:33.33333333%}.col-xs-offset-3{margin-left:25%}.col-xs-offset-2{margin-left:16.66666667%}.col-xs-offset-1{margin-left:8.33333333%}.col-xs-offset-0{margin-left:0}@media (min-width:768px){.col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12{float:left}.col-sm-12{width:100%}.col-sm-11{width:91.66666667%}.col-sm-10{width:83.33333333%}.col-sm-9{width:75%}.col-sm-8{width:66.66666667%}.col-sm-7{width:58.33333333%}.col-sm-6{width:50%}.col-sm-5{width:41.66666667%}.col-sm-4{width:33.33333333%}.col-sm-3{width:25%}.col-sm-2{width:16.66666667%}.col-sm-1{width:8.33333333%}.col-sm-pull-12{right:100%}.col-sm-pull-11{right:91.66666667%}.col-sm-pull-10{right:83.33333333%}.col-sm-pull-9{right:75%}.col-sm-pull-8{right:66.66666667%}.col-sm-pull-7{right:58.33333333%}.col-sm-pull-6{right:50%}.col-sm-pull-5{right:41.66666667%}.col-sm-pull-4{right:33.33333333%}.col-sm-pull-3{right:25%}.col-sm-pull-2{right:16.66666667%}.col-sm-pull-1{right:8.33333333%}.col-sm-pull-0{right:auto}.col-sm-push-12{left:100%}.col-sm-push-11{left:91.66666667%}.col-sm-push-10{left:83.33333333%}.col-sm-push-9{left:75%}.col-sm-push-8{left:66.66666667%}.col-sm-push-7{left:58.33333333%}.col-sm-push-6{left:50%}.col-sm-push-5{left:41.66666667%}.col-sm-push-4{left:33.33333333%}.col-sm-push-3{left:25%}.col-sm-push-2{left:16.66666667%}.col-sm-push-1{left:8.33333333%}.col-sm-push-0{left:auto}.col-sm-offset-12{margin-left:100%}.col-sm-offset-11{margin-left:91.66666667%}.col-sm-offset-10{margin-left:83.33333333%}.col-sm-offset-9{margin-left:75%}.col-sm-offset-8{margin-left:66.66666667%}.col-sm-offset-7{margin-left:58.33333333%}.col-sm-offset-6{margin-left:50%}.col-sm-offset-5{margin-left:41.66666667%}.col-sm-offset-4{margin-left:33.33333333%}.col-sm-offset-3{margin-left:25%}.col-sm-offset-2{margin-left:16.66666667%}.col-sm-offset-1{margin-left:8.33333333%}.col-sm-offset-0{margin-left:0}}@media (min-width:992px){.col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12{float:left}.col-md-12{width:100%}.col-md-11{width:91.66666667%}.col-md-10{width:83.33333333%}.col-md-9{width:75%}.col-md-8{width:66.66666667%}.col-md-7{width:58.33333333%}.col-md-6{width:50%}.col-md-5{width:41.66666667%}.col-md-4{width:33.33333333%}.col-md-3{width:25%}.col-md-2{width:16.66666667%}.col-md-1{width:8.33333333%}.col-md-pull-12{right:100%}.col-md-pull-11{right:91.66666667%}.col-md-pull-10{right:83.33333333%}.col-md-pull-9{right:75%}.col-md-pull-8{right:66.66666667%}.col-md-pull-7{right:58.33333333%}.col-md-pull-6{right:50%}.col-md-pull-5{right:41.66666667%}.col-md-pull-4{right:33.33333333%}.col-md-pull-3{right:25%}.col-md-pull-2{right:16.66666667%}.col-md-pull-1{right:8.33333333%}.col-md-pull-0{right:auto}.col-md-push-12{left:100%}.col-md-push-11{left:91.66666667%}.col-md-push-10{left:83.33333333%}.col-md-push-9{left:75%}.col-md-push-8{left:66.66666667%}.col-md-push-7{left:58.33333333%}.col-md-push-6{left:50%}.col-md-push-5{left:41.66666667%}.col-md-push-4{left:33.33333333%}.col-md-push-3{left:25%}.col-md-push-2{left:16.66666667%}.col-md-push-1{left:8.33333333%}.col-md-push-0{left:auto}.col-md-offset-12{margin-left:100%}.col-md-offset-11{margin-left:91.66666667%}.col-md-offset-10{margin-left:83.33333333%}.col-md-offset-9{margin-left:75%}.col-md-offset-8{margin-left:66.66666667%}.col-md-offset-7{margin-left:58.33333333%}.col-md-offset-6{margin-left:50%}.col-md-offset-5{margin-left:41.66666667%}.col-md-offset-4{margin-left:33.33333333%}.col-md-offset-3{margin-left:25%}.col-md-offset-2{margin-left:16.66666667%}.col-md-offset-1{margin-left:8.33333333%}.col-md-offset-0{margin-left:0}}@media (min-width:1200px){.col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12{float:left}.col-lg-12{width:100%}.col-lg-11{width:91.66666667%}.col-lg-10{width:83.33333333%}.col-lg-9{width:75%}.col-lg-8{width:66.66666667%}.col-lg-7{width:58.33333333%}.col-lg-6{width:50%}.col-lg-5{width:41.66666667%}.col-lg-4{width:33.33333333%}.col-lg-3{width:25%}.col-lg-2{width:16.66666667%}.col-lg-1{width:8.33333333%}.col-lg-pull-12{right:100%}.col-lg-pull-11{right:91.66666667%}.col-lg-pull-10{right:83.33333333%}.col-lg-pull-9{right:75%}.col-lg-pull-8{right:66.66666667%}.col-lg-pull-7{right:58.33333333%}.col-lg-pull-6{right:50%}.col-lg-pull-5{right:41.66666667%}.col-lg-pull-4{right:33.33333333%}.col-lg-pull-3{right:25%}.col-lg-pull-2{right:16.66666667%}.col-lg-pull-1{right:8.33333333%}.col-lg-pull-0{right:auto}.col-lg-push-12{left:100%}.col-lg-push-11{left:91.66666667%}.col-lg-push-10{left:83.33333333%}.col-lg-push-9{left:75%}.col-lg-push-8{left:66.66666667%}.col-lg-push-7{left:58.33333333%}.col-lg-push-6{left:50%}.col-lg-push-5{left:41.66666667%}.col-lg-push-4{left:33.33333333%}.col-lg-push-3{left:25%}.col-lg-push-2{left:16.66666667%}.col-lg-push-1{left:8.33333333%}.col-lg-push-0{left:auto}.col-lg-offset-12{margin-left:100%}.col-lg-offset-11{margin-left:91.66666667%}.col-lg-offset-10{margin-left:83.33333333%}.col-lg-offset-9{margin-left:75%}.col-lg-offset-8{margin-left:66.66666667%}.col-lg-offset-7{margin-left:58.33333333%}.col-lg-offset-6{margin-left:50%}.col-lg-offset-5{margin-left:41.66666667%}.col-lg-offset-4{margin-left:33.33333333%}.col-lg-offset-3{margin-left:25%}.col-lg-offset-2{margin-left:16.66666667%}.col-lg-offset-1{margin-left:8.33333333%}.col-lg-offset-0{margin-left:0}}table{background-color:transparent}caption{padding-top:8px;padding-bottom:8px;color:#777;text-align:left}th{text-align:left}.table{width:100%;max-width:100%;margin-bottom:20px}.table>thead>tr>th,.table>tbody>tr>th,.table>tfoot>tr>th,.table>thead>tr>td,.table>tbody>tr>td,.table>tfoot>tr>td{padding:8px;line-height:1.42857143;vertical-align:top;border-top:1px solid #ddd}.table>thead>tr>th{vertical-align:bottom;border-bottom:2px solid #ddd}.table>caption+thead>tr:first-child>th,.table>colgroup+thead>tr:first-child>th,.table>thead:first-child>tr:first-child>th,.table>caption+thead>tr:first-child>td,.table>colgroup+thead>tr:first-child>td,.table>thead:first-child>tr:first-child>td{border-top:0}.table>tbody+tbody{border-top:2px solid #ddd}.table .table{background-color:#fff}.table-condensed>thead>tr>th,.table-condensed>tbody>tr>th,.table-condensed>tfoot>tr>th,.table-condensed>thead>tr>td,.table-condensed>tbody>tr>td,.table-condensed>tfoot>tr>td{padding:5px}.table-bordered{border:1px solid #ddd}.table-bordered>thead>tr>th,.table-bordered>tbody>tr>th,.table-bordered>tfoot>tr>th,.table-bordered>thead>tr>td,.table-bordered>tbody>tr>td,.table-bordered>tfoot>tr>td{border:1px solid #ddd}.table-bordered>thead>tr>th,.table-bordered>thead>tr>td{border-bottom-width:2px}.table-striped>tbody>tr:nth-child(odd){background-color:#f9f9f9}.table-hover>tbody>tr:hover{background-color:#f5f5f5}table col[class*="col-"]{position:static;float:none;display:table-column}table td[class*="col-"],table th[class*="col-"]{position:static;float:none;display:table-cell}

    </style>


</head>
<body>
<div id="primary" class="high-padding content-area no-sidebar">
        <div class="container">
            <main id="main" class="col-md_12 site-main main-content">
                
                    
<article id="post-7537" class="post-7537 page type-page status-publish hentry">

    <div class="entry-content">
        <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1594139441350 vc_row-no-padding" style="position: relative; left: -93.8px; box-sizing: border-box; width: 938px;"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
    
</div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div class="vc_row wpb_row vc_row-fluid vc_custom_1595088140491"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
    <div class="wpb_text_column wpb_content_element ">
        <div class="wpb_wrapper">
            <div role="form" class="wpcf7" id="wpcf7-f7536-p7537-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response" role="alert" aria-live="polite"></div>
<form action="" method="post" class="wpcf7-form init" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="7536">
<input type="hidden" name="_wpcf7_version" value="5.2.1">
<input type="hidden" name="_wpcf7_locale" value="en_US">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f7536-p7537-o1">
<input type="hidden" name="_wpcf7_container_post" value="7537">
<input type="hidden" name="_wpcf7_posted_data_hash" value="">
</div>
<div class="ibid-contact-form row register">
<!-- <div class="col-md-12">
<h4>Feedback</h4>
<p></p></div> -->


<div class="col-md-12">
<h4>Feedback</h4>
<p></p></div>

<div class="col-md-6">
      <label>Feedback</label><span class="wpcf7-form-control-wrap textarea-75"><textarea name="feedback" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></textarea></span>
      <button type="submit" name="submit" class="wpcf7-form-control wpcf7-submit">SEND MESSAGE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button><span class="ajax-loader"></span>
</div>


<div class="col-md-6">
        
    </div>
    <?php
            if(isset($_SESSION['msg']))
            {
                echo "<div class='alert alert_danger' style='background-color:skyblue';><front color='green'>".$_SESSION['msg']."</font></div>";
                unset($_SESSION['msg']);
            }
            ?>
</div>
<input type="hidden" class="wpcf7-pum" value="{&quot;closepopup&quot;:false,&quot;closedelay&quot;:0,&quot;openpopup&quot;:false,&quot;openpopup_id&quot;:0}"><div class="wpcf7-response-output" role="alert" aria-hidden="true"></div></form></div>

        </div>
    </div>
</div></div></div></div>
</div>
</article>
</main>
</div>
</div>
<?php
 include 'footer.php';
?>
</body>
</html>