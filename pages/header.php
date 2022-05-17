<!DOCTYPE html>
<html>
<?php
   if(count($_POST)>0) { require_once("dbcontroller.php"); $db_handle = new DBController(); $query = "INSERT INTO users (email, password, display_name, gender) VALUES ('" . $_POST["email"] . "', '" . $_POST["password"] . "', '" .
$_POST["display-name"] . "', '" . $_POST["gender"] . "')"; $result = $db_handle->insertQuery($query); if(!empty($result)) { $message = "You have registered successfully!"; unset($_POST); } else { $message = "Problem in registration. Try
Again!"; } } ?>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Guardian-Ng</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Signika:wght@300&display=swap" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">
	<style>
        #registration-step {
            margin-top: 20px;
            padding: 0;
        }
        #registration-step li {
            list-style: none;
            float: left;
            padding: 5px 10px;
            border-top: #eee 1px solid;
            border-left: #eee 1px solid;
            border-right: #eee 1px solid;
        }
        #registration-step li.highlight {
            background-color: #eee;
        }
        #registration-form {
            clear: both;
            border: 1px #eee solid;
            padding: 20px;
        }
        .demoInputBox {
            padding: 10px;
            border: #f0f0f0 1px solid;
            border-radius: 4px;
            background-color: #fff;
            width: 50%;
        }
        .registration-error {
            color: #ff0000;
            padding-left: 15px;
        }
        .message {
            color: #00ff00;
            font-weight: bold;
            width: 100%;
            padding: 10;
        }
        .btnAction {
            padding: 5px 10px;
            background-color: #09f;
            border: 0;
            color: #fff;
            cursor: pointer;
            margin-top: 15px;
        }
    </style>
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        function validate() {
            var output = true;
            $(".registration-error").html("");
            if ($("#account-field").css("display") != "none") {
                if (!$("#email").val()) {
                    output = false;
                    $("#email-error").html("required");
                }
                if (
                    !$("#email")
                        .val()
                    //    .match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)
                ) {
                    $("#email-error").html("invalid");
                    output = false;
                }
            }

            if ($("#password-field").css("display") != "none") {
                if (!$("#user-password").val()) {
                    output = false;
                    $("#password-error").html("required");
                }
                if (!$("#confirm-password").val()) {
                    output = false;
                    $("#confirm-password-error").html("Not Matched");
                }
                if ($("#user-password").val() != $("#confirm-password").val()) {
                    output = false;
                    $("#confirm-password-error").html("Not Matched");
                }
            }
            return output;
        }
        $(document).ready(function () {
            $("#next").click(function () {
                var output = validate();
                if (output) {
                    var current = $(".highlight");
                    var next = $(".highlight").next("li");
                    if (next.length > 0) {
                        $("#" + current.attr("id") + "-field").hide();
                        $("#" + next.attr("id") + "-field").show();
                        $("#back").show();
                        $("#finish").hide();
                        $(".highlight").removeClass("highlight");
                        next.addClass("highlight");
                        if ($(".highlight").attr("id") == $("li").last().attr("id")) {
                            $("#next").hide();
                            $("#finish").show();
                        }
                    }
                }
            });
            $("#back").click(function () {
                var current = $(".highlight");
                var prev = $(".highlight").prev("li");
                if (prev.length > 0) {
                    $("#" + current.attr("id") + "-field").hide();
                    $("#" + prev.attr("id") + "-field").show();
                    $("#next").show();
                    $("#finish").hide();
                    $(".highlight").removeClass("highlight");
                    prev.addClass("highlight");
                    if ($(".highlight").attr("id") == $("li").first().attr("id")) {
                        $("#back").hide();
                    }
                }
            });
        });
    </script>
</head>
<body>