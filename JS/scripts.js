$(Document).ready(function(){
    $(window).scroll(function(){
        if(this.scrollY > 20)
        $(".navbar").addClass("stickey");
        else
        $(".navbar").removeClass("stickey");
    });

    $('.menu-toggler').click(function(){
        $(this).toggleClass("active");
        $(".navbar-menu").toggleClass("active");
    });
});