$(document).ready(function(){
  $('#summernote').summernote({
    height:200,
    placeholder:"Tambahkan deskripsi dari produk anda",
    toolbar: [
    ['fontsize', ['bold','italic','underline','clear','fontname','fontsize']],
    ['para',['ul','ol','paragraph']],
    ['misc',['undo','redo','help']]
  ]
  });
});
$(document).ready(function(){
  $('#summernote_species').summernote({
    height:200,
    placeholder:"Tambahkan deskripsi spesies",
    toolbar: [
    ['fontsize', ['bold','italic','underline','clear','fontname','fontsize']],
    ['para',['ul','ol','paragraph']],
    ['misc',['undo','redo','help']]
  ]
  });
});
(function($){
  $(window).on('load', function(){
    $('#preload').fadeOut('5000',function(){
      $(this).hide();
    });
  });
})(jQuery);
