/**
 *                                             _             _
 *     ___ ___  _ __ ___ _ __   ___  _ __ ___ (_)_ __   __ _| |
 *    / __/ _ \| '__/ _ \ '_ \ / _ \| '_ ` _ \| | '_ \ / _` | |
 *   | (_| (_) | | |  __/ | | | (_) | | | | | | | | | | (_| | |
 *    \___\___/|_|  \___|_| |_|\___/|_| |_| |_|_|_| |_|\__,_|_|
 *
 *   Webmaster: Philip Newborough
 *   Contact: corenominal [at] corenominal.org
 *   Twitter: @corenominal
 *   From: Lincoln, United Kingdom
 */
jQuery( document ).ready( function( $ )
{
    /**
	 * Prevent Link titles from wrapping on the external link icon alone
	 */
	$('.post h1 a, .post h2 a').html(function()
	{
	    var icon = '<svg class="icon external-link" id="svg3385" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" height="4.5156mm" width="5.2681mm" version="1.1" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" viewBox="0 0 18.666659 15.999999"><metadata id="metadata3390"><rdf:RDF><cc:Work rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/><dc:title/></cc:Work></rdf:RDF></metadata><g id="layer1" transform="translate(-299.24 -512.93)"><path id="path3368" fill="#fff" d="m313.9 522.6v3.3333q0 1.2396-0.88541 2.125-0.875 0.875-2.1146 0.875h-8.6667q-1.2396 0-2.125-0.875-0.875-0.88542-0.875-2.125v-8.6667q0-1.2396 0.875-2.1146 0.88542-0.88541 2.125-0.88541h7.3333q0.14583 0 0.23959 0.0937 0.0937 0.0937 0.0937 0.23958v0.66667q0 0.14583-0.0937 0.23958-0.0938 0.0937-0.23959 0.0937h-7.3333q-0.68751 0-1.1771 0.48958-0.48958 0.48959-0.48958 1.1771v8.6667q0 0.68751 0.48958 1.1771 0.48958 0.48958 1.1771 0.48958h8.6667q0.68749 0 1.1771-0.48958 0.48958-0.48958 0.48958-1.1771v-3.3333q0-0.14583 0.0937-0.23959 0.0937-0.0937 0.23958-0.0937h0.66667q0.14583 0 0.23958 0.0937 0.0937 0.0938 0.0937 0.23959zm4-9v5.3333q0 0.27083-0.19791 0.46876-0.19793 0.1979-0.46876 0.1979-0.27082 0-0.46875-0.1979l-1.8333-1.8333-6.7917 6.7917q-0.10417 0.10417-0.23959 0.10417-0.13541 0-0.23958-0.10417l-1.1875-1.1875q-0.10417-0.10416-0.10417-0.23958t0.10417-0.23958l6.7917-6.7917-1.8333-1.8333q-0.19793-0.19791-0.19793-0.46875 0-0.27083 0.19793-0.46875 0.19791-0.19792 0.46874-0.19792h5.3333q0.27083 0 0.46876 0.19792 0.19791 0.19792 0.19791 0.46875z"/></g></svg>';
        if( $( this ).html().indexOf( 'icon external-link' ) > -1 )
        {
            $( this ).children('svg').remove();
            var text = $( this ).html();
            var text_single = text;
            text = text.trim().split(' ');
            if( text.length > 1 )
            {
                var last = text.pop();
                return text.join(" ") + (text.length > 0 ? ' <span class="nowrap">' + last + ' ' + icon + '</span>' : last);
            }
            else
            {
                return '<span class="nowrap">' + text_single + ' ' + icon + '</span>';
            }
        }
	});
    /**
	 * FitVids
	 */
	$( '.post' ).fitVids();
    /**
	 * Prettier content links
	 */
    $('.e-content a:not(.e-content a:has(img))').html(function()
 	{
        $( this ).addClass( 'text-link' );
    });

    $('.comments a:not(.comments a:has(img))').html(function()
 	{
        $( this ).addClass( 'text-link' );
    });

    /**
     * Mobile menu
     */
    $( document ).on( 'click', '#hamburger', function(e)
    {
        e.preventDefault();
        console.log( 'foo' );
        $( this ).toggleClass( 'is-active' );
        $( '#site-menu' ).slideToggle( 500 );
    });

    var w = $( window ).width();
    $( window ).resize( function()
    {
        if ( $( window ).width()==w ) return;
        w = $( window ).width();
        $( '#hamburger' ).removeClass( 'is-active' );
        if( w >= 750 )
        {
            $( '#site-menu' ).show();
        }
        else
        {
            $( '#site-menu' ).hide();
        }
    });
});
