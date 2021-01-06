$(document).ready(function(){
    
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1
    });

        // top sale owl carousel
        $("#top-sale .owl-carousel").owlCarousel({
            loop: true,
            nav: true,
            dots: false,
            responsive : {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000 : {
                    items: 4
                }
            }
        }); 

        var $grid = $(".grid").isotope({
            itemSelector : '.grid-item',
            layoutMode : 'fitRows'
        });

        $(".button-group").on("click", "button", function(){
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({ filter: filterValue});
        })

    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");

    $qty_up.click(function(e){
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if($input.val() >= 100 && $input.val() <= 1000){
            $input.val(function(i, oldval){
                return ++oldval;
            });
        }
    });

       $qty_down.click(function(e){
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if($input.val() > 100 && $input.val() <= 1000){
            $input.val(function(i, oldval){
                return --oldval;
            });
        }
    });    
});