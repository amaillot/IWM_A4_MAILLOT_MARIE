/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');
window.Vue = require('vue');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.component('example', require('./components/Example.vue'));
const app = new Vue({
    el: '#app'
});
$(document).ready(function () {
    var cpt = 0;
    $(".button").click(function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $('.product_list_choice').offset().top
        }, 'slow');
        /*var env = $("input[name=env]").val();*/
        var env = "it works";
        var TheId = $(this).attr('id');
        $.ajax({
            method: 'GET'
            , url: '/items/select'
            , data: {
                env: env
                , _token: "{{ csrf_token() }}"
                , id: TheId
            }
            , success: function (data) {
                //                console.log(data.success);
                var nouvelItem = data.success.nouvelItem;
                var total = data.success.prix;
                $(".panel-selected ").append("<div class='item_list_product'><h3>" + nouvelItem.Nom + "</h3><div style='display:inline-block;float: right;'><div class='list_prix'>Prix :</div> <div class='prix_val'>" + nouvelItem.Prix + "</div>€</div><button class='remove'>Remove</button></div>");
                $('.no_item').hide();
                var total = 0;
                $('.prix_val').each(function () {
                    total += parseFloat($(this).html());
                    $('.panel-footer .total').html(total + '€');
                    $('.qty_total').html('Quantité : ' + cpt);
                });
            }
        });
        cpt++
    });
    $("body").on('click', '.remove', function () {
        $(this).parent().remove();
        var total = 0;
        $('.prix_val').each(function () {
            total += parseFloat($(this).html());
            $('.panel-footer .total').html(total + '€');
        });
        if (total == 0) {
            $('.panel-footer .total').html(total + '€');
            $('.no_item').show();
        }
        cpt--
        $('.qty_total').html('Quantité : ' + cpt);
    });
    $(".button-filter").click(function () {
        console.log($(this).text());
        var type = $(this).text();
        $(".item").fadeOut(100);
        $("." + type).delay(150).fadeIn();
    })
    $(".button-filter-all").click(function () {
        $(".item").fadeOut(100);
        $(".item").delay(150).fadeIn();
    })
});