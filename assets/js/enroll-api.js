"use strict";
$(document).ready(function () {
    jQuery.support.cors = true;
    $('.contactform__form').validate({
        rules: {
            nameput: {
                required: true
            },
            emailput: {
                required: true,
                email: true
            },
            contactput: {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 10
            }
        },
        messages: {
            nameput: {
                required: "Please Enter a Valid Name"
            },
            emailput: {
                required: "Please Enter a Valid Email ID"
            },
            contactput: {
                required: "Please Enter a Valid Mobile Number"
            }
        },
        submitHandler: function (form) {
            var data = {
                "course": $(".courseput").val(),
                "name": $(".nameput").val(),
                "email": $(".emailput").val(),
                "contact": $(".contactput").val()
            };



            var url = "http://sacrostectservices.com/new/api/insertEnquiry";
            var json = JSON.stringify(data);

            var xhr = new XMLHttpRequest();
            xhr.open("POST", url, true);
            xhr.setRequestHeader('Content-type', 'application/json; charset=utf-8');
            xhr.onload = function () {
                var users = JSON.parse(xhr.responseText);
                if (xhr.readyState == 4 && xhr.status == "201") {
                    console.table(users);
                } else {
                    console.error(users);
                }
            }
            xhr.send(json);
        }
    });
});