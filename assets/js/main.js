/**
 * @package: Easy_Content_Protector
 * @author: plugindeveloper
 * @version: 1.0.0
 * @author_uri: https://profiles.wordpress.org/plugindeveloper/
 * @since 1.0.0
 */
(function($){
    'use strict';
    var Easy_Content_Protector = {

        //Custom Snipits goes here
        Snipits: {

            close_alert: function(e){
                $(this).removeClass('open');
            },

            show_alert: function( event ){

                $('.ecp-wrapper .ecp-alert').removeClass('open');
                $('.ecp-wrapper .ecp-alert[data-event="'+event+'"]').addClass('open');

                setTimeout(function(){
                    $('.ecp-wrapper .ecp-alert[data-event="'+event+'"]').removeClass('open');
                }, 1500 );

            },

            context_menu: function(e){

                Easy_Content_Protector.Snipits.show_alert( 'right-click' );
                return false;

            },

            drag_start: function( e ){
                
                Easy_Content_Protector.Snipits.show_alert( 'selection' );

                return false;
            },

            disable_cut: function( e ){

                Easy_Content_Protector.Snipits.show_alert( 'cut' );

                e.preventDefault();

            },

            disable_copy: function( e ){

                Easy_Content_Protector.Snipits.show_alert( 'copy' );
                e.preventDefault();

            },

            disable_paste: function( e ){

                Easy_Content_Protector.Snipits.show_alert( 'paste' );
                e.preventDefault();

            },

            inspect_element: function( e ){

                if(e.ctrlKey && e.shiftKey && e.which==73 || e.which==123){
                    
                    Easy_Content_Protector.Snipits.show_alert( 'inspect-element' );

                    e.preventDefault();

                }
            },

        },     

        Events: function(){

            var __this = Easy_Content_Protector;
            var snipits = __this.Snipits;

            var config = content_protector_config;

            if(config.disable_right_click == "1" ){
                $(document).on( 'contextmenu', snipits.context_menu );
            }

            if(config.disable_selection == "1" ){
                $(document).on( 'selectstart', snipits.drag_start );
            }           
            
            if(config.disable_cut == "1" ){
                $(document).on( 'cut', snipits.disable_cut );
            }

            if(config.disable_copy == "1" ){
                $(document).on( 'copy', snipits.disable_copy );
            }

            if(config.disable_paste == "1" ){
                $(document).on( 'paste', snipits.disable_paste );
            }

            if(config.disable_inspect_element == "1" ){
                $(document).on( 'keydown', snipits.inspect_element);
            }
            
            $(document).on( 'click', '.ecp-alert', snipits.close_alert);

        },

        Ready: function(){
            
            var __this = Easy_Content_Protector;
            var snipits = __this.Snipits;

            __this.Events();

        },

        Load: function(){

        },

        Resize: function(){

        },

        Scroll: function(){

        },

        Init: function(){

            var __this = Easy_Content_Protector;
            var docready = __this.Ready;
            var winload = __this.Load;
            var winresize = __this.Resize;
            var winscroll = __this.Scroll;
            $(document).ready(docready);
            $(window).load(winload);
            $(window).scroll(winscroll);
            $(window).resize(winresize);

        },

     };
     
     Easy_Content_Protector.Init();

})(jQuery);