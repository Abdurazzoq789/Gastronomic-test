
	$('#myOwl').owlCarousel({
    loop:true,
    margin:0,
    nav:false,
     mouseDrag:true,
    dots:true,
    autoplay:true,
    // animateOut: 'slideOutDown',
    // animateIn: 'flipInX',
     stagePadding:0,
    smartSpeed:450, 
    responsive:{
        0:{
            items:1,
            

        },
        900:{
            items:1,
           
            
        },
        1000:{
            items: 1
        },
       
        1920:{
            items:1
        }
    }
})
$('#myOwl2').owlCarousel({
    loop:true,
    margin:0,
    nav:false,
     mouseDrag:true,
    dots:false,
    autoplay:true,
    autoplayTimeout:8000,
    // animateOut: 'slideOutDown',
    // animateIn: 'flipInX',
     stagePadding:0,
    smartSpeed:450, 
    responsive:{
        0:{
            items:1,
            

        },
        900:{
            items:1,
        
            
        },
        1000:{
            items: 1
        },
       
        1920:{
            items:1
        }
    }
})
$('#festival').owlCarousel({
    loop:true,
    margin:0,
    nav:false,
     mouseDrag:true,
    dots:false,
    autoplay:true,
    // animateOut: 'slideOutDown',
    // animateIn: 'flipInX',
     stagePadding:0,
    smartSpeed:450, 
    responsive:{
        0:{
            items:1,
            

        },
        900:{
            items:1,
            margin:1
            
        },
        1000:{
            items: 1
        },
       
        1920:{
            items:1
        }
    }
})

$('#logos').owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    mouseDrag:true,
    dots:false,
    autoplay:true,
    autoWidth:true,
    margin: 20,
    // animateOut: 'slideOutDown',
    // animateIn: 'flipInX',
     stagePadding:0,
    smartSpeed:450, 
    items: 5,
    responsive : {
        0: {
            autoWidth : false
        },
        401 : {
            autoWidth: true
        }
    }
})

   