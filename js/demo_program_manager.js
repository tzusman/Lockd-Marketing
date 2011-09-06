$('.boot').hover( function(){
  if ( $(this).hasClass('success') )
    $(this).text( 'don\'t start on boot' );
  else
    $(this).text( 'start on boot' );
  $(this).toggleClass( 'success' ).toggleClass( 'danger' );
}, function(){
  if ( $(this).hasClass('success') )
    $(this).text( 'is not started' );
  else
    $(this).text( 'started on boot' );
  $(this).toggleClass( 'success' ).toggleClass( 'danger' );
} );
