//Регестрация
$("#sendBtn").on("click", function () {

    let email = $("#inputEmail").val().trim();
    let pass= $("#inputPassword").val().trim();
    let name =$("#inputName").val().trim();
    let surname=$("#inputsurname").val().trim();
    let thirdname =$("#inputThirdName").val().trim();
    let phone =$("#inputPhone").val().trim();



    if(email==="" || pass==="" || name==="" || surname==="" || thirdname===""){
        alert("error");
        return 0;
    }
    $.ajax({
        url: 'ajax/registration.php',
        type: 'POST',
        cache: false,
        data: {'email' : email, 'pass': pass, 'name' : name, 'surname' : surname, 'thirdname' : thirdname, 'phone' : phone},
        beforeSend: function () {
            $("#sendBtn").prop("disabled",true);
        },
        success:function (data) {

            if(data == "fail"){
                alert("db insert error");
            }else{
                document.location.href = data;
            }

            $("#sendBtn").prop("disabled",false);
        }
    });
});
//авторизация
$("#Sbut").on("click",function () {
    let login=$("#inputEmail").val().trim();
    let password=$("#inputPassword").val().trim();

    $.ajax({
        url: 'ajax/autorization.php',
        type: 'POST',
        cache: false,
        data: {'login':login,'password':password},
        beforeSend: function () {
            $("#Sbut").prop("disabled",true);
        },
        success:function (data) {
            if(data == "fail"){
                alert("db insert error");
            }else{
                document.location.href = data;
            }

            $("#Sbut").prop("disabled",false);
        }
    });
});
//Выход с акаунта
$("#ex").on("click",function(){
    document.location.href = "http://localhost/dashboard/projectPRP/autorization.php";
});
//Редактирование
$("#EditBtn").on("click",function () {

document.getElementById("SubjL").style.visibility='visible';
});
$("#SaveEditBtn").on("click",function () {
    let SerName=$("#SerName").val().trim();
    let name =$("#name").val().trim();
    let ThirdName=$("#ThirdName").val().trim();
    let email=$("#email").val().trim();
    let phone=$("#phone").val().trim();
    let password=$("#password").val().trim();
    let NewPassword=$("#NewPassword").val().trim();
    let selectSubj1=$("#selectSubj1").val().trim();
    let selectSubj2=$("#selectSubj2").val().trim();
    let selectSubj3=$("#selectSubj3").val().trim();


    $.ajax({
        url: 'ajax/Edition.php',
        type: 'POST',
        cache: false,
        data: {'SerName' : SerName, 'name': name, 'ThirdName' : ThirdName, 'email' : email,'phone' : phone, 'password' : password, 'NewPassword' : NewPassword,'selectSubj1' : selectSubj1,'selectSubj2' : selectSubj2,'selectSubj3' : selectSubj3},
        beforeSend: function () {
            $("#sendBtn").prop("disabled",true);
        },
        success:function (data) {

            if(data == "fail"){
                alert("db insert error");
            }else{
                document.location.href = data;
            }

            $("#sendBtn").prop("disabled",false);
        }
    });
});
//Тесты Рейтинг

// Starrr plugin (https://github.com/dobtco/starrr)
var __slice = [].slice;

(function($, window) {
    var Starrr;

    Starrr = (function() {
        Starrr.prototype.defaults = {
            rating: void 0,
            numStars: 5,
            change: function(e, value) {}
        };

        function Starrr($el, options) {
            var i, _, _ref,
                _this = this;

            this.options = $.extend({}, this.defaults, options);
            this.$el = $el;
            _ref = this.defaults;
            for (i in _ref) {
                _ = _ref[i];
                if (this.$el.data(i) != null) {
                    this.options[i] = this.$el.data(i);
                }
            }
            this.createStars();
            this.syncRating();
            this.$el.on('mouseover.starrr', 'span', function(e) {
                return _this.syncRating(_this.$el.find('span').index(e.currentTarget) + 1);
            });
            this.$el.on('mouseout.starrr', function() {
                return _this.syncRating();
            });
            this.$el.on('click.starrr', 'span', function(e) {
                return _this.setRating(_this.$el.find('span').index(e.currentTarget) + 1);
            });
            this.$el.on('starrr:change', this.options.change);
        }

        Starrr.prototype.createStars = function() {
            var _i, _ref, _results;

            _results = [];
            for (_i = 1, _ref = this.options.numStars; 1 <= _ref ? _i <= _ref : _i >= _ref; 1 <= _ref ? _i++ : _i--) {
                _results.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"));
            }
            return _results;
        };

        Starrr.prototype.setRating = function(rating) {
            if (this.options.rating === rating) {
                rating = void 0;
            }
            this.options.rating = rating;
            this.syncRating();
            return this.$el.trigger('starrr:change', rating);
        };

        Starrr.prototype.syncRating = function(rating) {
            var i, _i, _j, _ref;

            rating || (rating = this.options.rating);
            if (rating) {
                for (i = _i = 0, _ref = rating - 1; 0 <= _ref ? _i <= _ref : _i >= _ref; i = 0 <= _ref ? ++_i : --_i) {
                    this.$el.find('span').eq(i).removeClass('glyphicon-star-empty').addClass('glyphicon-star');
                }
            }
            if (rating && rating < 5) {
                for (i = _j = rating; rating <= 4 ? _j <= 4 : _j >= 4; i = rating <= 4 ? ++_j : --_j) {
                    this.$el.find('span').eq(i).removeClass('glyphicon-star').addClass('glyphicon-star-empty');
                }
            }
            if (!rating) {
                return this.$el.find('span').removeClass('glyphicon-star').addClass('glyphicon-star-empty');
            }
        };

        return Starrr;

    })();
    return $.fn.extend({
        starrr: function() {
            var args, option;

            option = arguments[0], args = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
            return this.each(function() {
                var data;

                data = $(this).data('star-rating');
                if (!data) {
                    $(this).data('star-rating', (data = new Starrr($(this), option)));
                }
                if (typeof option === 'string') {
                    return data[option].apply(data, args);
                }
            });
        }
    });
})(window.jQuery, window);

$(function() {
    return $(".starrr").starrr();
});

$( document ).ready(function() {

    $('#stars').on('starrr:change', function(e, value){
        $('#count').html(value);
    });

    $('#stars-existing').on('starrr:change', function(e, value){
        $('#count-existing').html(value);
    });
});











