
jQuery(document).ready(function($){

var searchField = $('#search-term');
var divResults = $('#search-overlay__results');
var typingTimer;
var previousValue;

        $('#search').on('click', function(){
            $('.search-overlay').addClass('search-overlay--active');
            $('body').addClass('body-no-scroll');
        
        })

            $('.search-overlay__close').on('click', function(){
            $('.search-overlay').removeClass('search-overlay--active');
            $('body').removeClass('body-no-scroll');
        })
// open by s-key and close by esc-key
        $(document).on('keyup', function(e){
                if(e.keyCode == 83 && !($('.search-overlay').hasClass('search-overlay--active'))){
                                $('.search-overlay').addClass('search-overlay--active');
                                $('body').addClass('body-no-scroll');
                }

                if(e.keyCode == 27 && $('.search-overlay').hasClass('search-overlay--active')){
                        $('.search-overlay').removeClass('search-overlay--active');  
                }
        })
    // typing logic
  
        searchField.on('keyup', function(){
                if(searchField.val() != previousValue){
                        clearTimeout(typingTimer);
                        $('#search-output').remove();
                        if(searchField.val()){
                                if(!($('#spinner').length)){
                                        divResults.append("<div id='spinner' class=' spinner-border text-danger' role='status'><span class='sr-only'>Loading...</span></div>");
                                 }
                                typingTimer = setTimeout(function(){afterTyping()}, 1000);    
                        }else{
                                 $('#search-output').remove();
                                 $('#spinner').remove()

                        }
                }
                previousValue = searchField.val();
            
           })

           function afterTyping(){
               divResults.append("<p id='search-output'>wyświetla co szukasz</p>");
                $('#spinner').remove()
           }

    

    
})
    

