<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Online Application</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,300,700,900" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="http://192.168.100.2/mangalayatan-uni/wp-content/themes/twentyfourteen/css/bootstrap.css?v=2" rel="stylesheet">
<link href="http://192.168.100.2/mangalayatan-uni/wp-content/themes/twentyfourteen/css/flexslider.css" rel="stylesheet">
<link href="http://192.168.100.2/mangalayatan-uni/wp-content/themes/twentyfourteen/fancybox.css" rel="stylesheet">
<link media="(max-width: 1200px)" rel="stylesheet" href="http://192.168.100.2/mangalayatan-uni/wp-content/themes/twentyfourteen/css/mm-menu.css">
<link rel='stylesheet' id='twentyfourteen-style-css'  href='http://192.168.100.2/mangalayatan-uni/wp-content/themes/twentyfourteen/style.css?ver=4.4.2' type='text/css' media='all' />
<script type='text/javascript' src='http://192.168.100.2/mangalayatan-uni/wp-includes/js/jquery/jquery.js?ver=1.11.3'></script>
<script type='text/javascript' src='http://192.168.100.2/mangalayatan-uni/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
<style>
.nu-text {
	text-transform: uppercase;
}
.button-container {
	text-align: center;
}
fieldset {
	margin: 0 0 3rem;
	padding: 0;
	border: none;
	font-size: 18px;
}
.form-radio, .form-group {
	position: relative;
	/*margin-top: 2.25rem;*/
	margin-bottom: 3.25rem;
	float: left;
	width: 100%;
}
.form-inline > .form-group, .form-inline > .btn {
	display: inline-block;
	margin-bottom: 0;
}
.form-help {
	margin-top: 0.125rem;
	margin-left: 0.125rem;
	color: #b3b3b3;
	font-size: 0.8rem;
}
.checkbox .form-help, .form-radio .form-help, .form-group .form-help {
	position: absolute;
	width: 100%;
}
.checkbox .form-help {
	position: relative;
	margin-bottom: 1rem;
}
.form-radio .form-help {
	padding-top: 0.25rem;
	margin-top: -1rem;
}
.form-group input {
	/*height: 1.5rem;*/
}
.form-group textarea {
	resize: none;
}
.form-group select {
	width: 100%;
	font-size: 1.5rem;
	height: 2em;
	padding: 0.125rem 0.125rem 0.0625rem;
	background: none;
	border: none;
	line-height: 1.6;
	box-shadow: none;
}
.form-group .control-label {
	position: absolute;
	top: 0rem;
	pointer-events: none;
	padding-left: 0.125rem;
	z-index: 1;
	color: #000;
	font-size: 1.5rem;
	font-weight: normal;
	-webkit-transition: all 0.28s ease;
	transition: all 0.28s ease;
}
.form-group .bar {
	position: relative;
	border-bottom: 0.0625rem solid #999;
	display: block;
}
.form-group .bar::before {
	content: '';
	height: 0.125rem;
	width: 0;
	left: 50%;
	bottom: -0.0625rem;
	position: absolute;
	background: #337ab7;
	-webkit-transition: left 0.28s ease, width 0.28s ease;
	transition: left 0.28s ease, width 0.28s ease;
	z-index: 2;
}
.form-group input, .form-group textarea {
	display: block;
	background: none;
	padding: 0.125rem 0.125rem 0.0625rem;
	font-size: 1.5rem;
	border-width: 0;
	border-color: transparent;
	line-height: 2;
	width: 100%;
	color: transparent;
	-webkit-transition: all 0.28s ease;
	transition: all 0.28s ease;
	box-shadow: none;
}
.form-group input[type="file"] {
	line-height: 1;
}
.form-group input[type="file"] ~ .bar {
	display: none;
}
.form-group select, .form-group input:focus, .form-group input:valid, .form-group input.form-file, .form-group input.has-value, .form-group textarea:focus, .form-group textarea:valid, .form-group textarea.form-file, .form-group textarea.has-value {
 color: #333;
}
.form-group select ~ .control-label, .form-group input:focus ~ .control-label, .form-group input:valid ~ .control-label, .form-group input.form-file ~ .control-label, .form-group input.has-value ~ .control-label, .form-group textarea:focus ~ .control-label, .form-group textarea:valid ~ .control-label, .form-group textarea.form-file ~ .control-label, .form-group textarea.has-value ~ .control-label {
 font-size: 1.5rem;
 color: gray;
 top: -1.5rem;
 left: 0;
}
.form-group select:focus, .form-group input:focus, .form-group textarea:focus {
	outline: none;
}
.form-group select:focus ~ .control-label, .form-group input:focus ~ .control-label, .form-group textarea:focus ~ .control-label {
	color: #337ab7;
}
.form-group select:focus ~ .bar::before, .form-group input:focus ~ .bar::before, .form-group textarea:focus ~ .bar::before {
	width: 100%;
	left: 0;
}
.checkbox label, .form-radio label {
	position: relative;
	cursor: pointer;
	padding-left: 3rem;
	text-align: left;
	color: #333;
	display: block;
	font-size: 1.5rem;
}
.checkbox input, .form-radio input {
	width: auto;
	opacity: 0.00000001;
	position: absolute;
	left: 0;
}
.radio {
	margin-bottom: 1rem;
}
.radio .helper {
	position: absolute;
	top: -0.25rem;
	left: -0.25rem;
	cursor: pointer;
	display: block;
	font-size: 2.5rem;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	color: #999;
}
.radio .helper::before, .radio .helper::after {
	content: '';
	position: absolute;
	left: 0;
	top: 0;
	margin: 0.25rem;
	width: 2rem;
	height: 2rem;
	-webkit-transition: -webkit-transform 0.28s ease;
	transition: -webkit-transform 0.28s ease;
	transition: transform 0.28s ease;
	transition: transform 0.28s ease, -webkit-transform 0.28s ease;
	border-radius: 50%;
	border: 0.125rem solid currentColor;
}
.radio .helper::after {
	-webkit-transform: scale(0);
	transform: scale(0);
	background-color: #337ab7;
	border-color: #337ab7;
}
.radio label:hover .helper {
	color: #337ab7;
}
.radio input:checked ~ .helper::after {
	-webkit-transform: scale(0.5);
	transform: scale(0.5);
}
.radio input:checked ~ .helper::before {
	color: #337ab7;
}
.checkbox {
	margin-top: 3rem;
	margin-bottom: 1rem;
	float: left;
	width: 100%;
}
.checkbox .helper {
	color: #999;
	position: absolute;
	top: 0;
	left: 0;
	width: 2rem;
	height: 2rem;
	z-index: 0;
	border: 0.125rem solid currentColor;
	border-radius: 0.0625rem;
	-webkit-transition: border-color 0.28s ease;
	transition: border-color 0.28s ease;
}
.checkbox .helper::before, .checkbox .helper::after {
	position: absolute;
	height: 0;
	width: 0.2rem;
	background-color: #337ab7;
	display: block;
	-webkit-transform-origin: left top;
	transform-origin: left top;
	border-radius: 0.25rem;
	content: '';
	-webkit-transition: opacity 0.08s ease, height 0s linear 0.08s;
	transition: opacity 0.08s ease, height 0s linear 0.08s;
	opacity: 0;
}
.checkbox .helper::before {
	top: 1.3rem;
	left: 1.1rem;
	-webkit-transform: rotate(-135deg);
	transform: rotate(-135deg);
	box-shadow: 0 0 0 0.0625rem #fff;
}
.checkbox .helper::after {
	top: 0.3rem;
	left: 0;
	-webkit-transform: rotate(-45deg);
	transform: rotate(-45deg);
}
.checkbox label:hover .helper {
	color: #337ab7;
}
.checkbox input:checked ~ .helper {
	color: #337ab7;
}
.checkbox input:checked ~ .helper::after, .checkbox input:checked ~ .helper::before {
	opacity: 1;
	-webkit-transition: height 0.08s ease;
	transition: height 0.08s ease;
}
.checkbox input:checked ~ .helper::after {
	height: 1.5rem;
}
.checkbox input:checked ~ .helper::before {
	height: 2.750rem;
	-webkit-transition-delay: 0.5s;
	transition-delay: 0.5s;
}
.radio + .radio, .checkbox + .checkbox {
	margin-top: 1rem;
}
.has-error .legend.legend, .has-error.form-group .control-label.control-label {
	color: #d9534f;
}
.has-error.form-group .form-help, .has-error.form-group .helper, .has-error.checkbox .form-help, .has-error.checkbox .helper, .has-error.radio .form-help, .has-error.radio .helper, .has-error.form-radio .form-help, .has-error.form-radio .helper {
	color: #d9534f;
}
.has-error .bar::before {
	background: #d9534f;
	left: 0;
	width: 100%;
}
.button {
	position: relative;
	background: currentColor;
	border: 1px solid currentColor;
	font-size: 2rem;
	color: #4f93ce;
	margin: 3rem 0;
	padding: 0.75rem 3rem;
	cursor: pointer;
	-webkit-transition: background-color 0.28s ease, color 0.28s ease, box-shadow 0.28s ease;
	transition: background-color 0.28s ease, color 0.28s ease, box-shadow 0.28s ease;
	overflow: hidden;
	box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}
.button span {
	color: #fff;
	position: relative;
	z-index: 1;
}
.button::before {
	content: '';
	position: absolute;
	background: #071017;
	border: 50vh solid #1d4567;
	width: 30vh;
	height: 30vh;
	border-radius: 50%;
	display: block;
	top: 50%;
	left: 50%;
	z-index: 0;
	opacity: 1;
	-webkit-transform: translate(-50%, -50%) scale(0);
	transform: translate(-50%, -50%) scale(0);
}
.button:hover {
	color: #337ab7;
	box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 1px 18px 0 rgba(0, 0, 0, 0.12), 0 3px 5px -1px rgba(0, 0, 0, 0.2);
}
.button:active::before, .button:focus::before {
	-webkit-transition: opacity 0.28s ease 0.364s, -webkit-transform 1.12s ease;
	transition: opacity 0.28s ease 0.364s, -webkit-transform 1.12s ease;
	transition: transform 1.12s ease, opacity 0.28s ease 0.364s;
	transition: transform 1.12s ease, opacity 0.28s ease 0.364s, -webkit-transform 1.12s ease;
	-webkit-transform: translate(-50%, -50%) scale(1);
	transform: translate(-50%, -50%) scale(1);
	opacity: 0;
}
.button:focus {
	outline: none;
}
.nu-input {
	margin-left: -44px !important;
	margin-top: 0 !important;
}
input[type="radio"], input[type="checkbox"] {
	margin: 1px 0 0;
}
.nu-check {
	width: 22% !important;
}
.nu-input1 {
	margin-left: -27px !important;
}
.nu-check1 {
	width: 8% !important;
}
.nu-padding {
	padding-left: 0px;
}
.nu-padding1 {
	padding-right:: 0px;
}
.nu-heading {
	font-size: 33px !important;
	text-align: left !important;
}
.nu-heading3 {
    padding-bottom: 2%;
}
.form-check
{
    margin-top: 2.25rem;
}
.nu-text1 {
    margin-bottom: 24px;
}
/*custom-counter {
  margin: 0;
  padding: 0;
  list-style-type: none;
}

.custom-counter li {
  counter-increment: step-counter;
  margin-bottom: 10px;
}

.custom-counter li::before {
  content: counter(step-counter);
  margin-right: 5px;
  font-size: 80%;
  background-color: rgb(0,200,200);
  color: white;
  font-weight: bold;
  padding: 3px 8px;
  border-radius: 3px;
}*/

</style>
</head>
<body>