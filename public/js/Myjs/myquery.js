$(document).ready(function() {
    
    //initial    
    $('.side-body').load('side-menu/index.blade.php');
    
    //handle menu clicks
    $('.navbar-nav ul li a').click(function(){
       var page = $(this).attr('href');
       $('.side-body').load('side-menu/' + page + '.blade.php');
       return false;
    });
});

