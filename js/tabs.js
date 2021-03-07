document.addEventListener("DOMContentLoaded", function(){
		const Mytabs=document.querySelector('.tabs');
		M.Tabs.init(Mytabs,{});
	});


/* carrucel*/
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.carousel')
    var instances = M.Carousel.init(elems,{
    	duration:200,
    	numVisible:2,
    	indicators:true,
    	padding: 5

    })

  });