<?php
if (!empty($_GET['error'])) {
  if ($_GET['error'] == "notmatch") {
    echo '<div class="alert alert-danger animated fadeInDown alert-dismissible">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <p>Oops ! Email tidak ada atau Password tidak cocok</p>
    </div>';
  }elseif ($_GET['error'] == "unknown") {
    echo '<div class="alert alert-danger animated fadeInDown alert-dismissible">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <p>Tidak ditemukan data anda</p>
    </div>';
  }
}
?>
<!--<script>
$.notify(
  {
    message : "Username tidak ditemukan"
  },
  {
    element: "body",
    type : "danger",
    position: absolute,
    allow_dismiss:true,
    placement: {
        from: "top",
        align: "center"
    },
    offset: {
      x: 20,
      y: 85
    },
    spacing: 10,
    z_index: 1031,
    delay: 2500,
    timer: 1000,
    url_target: "_blank",
    mouse_over: false,
    animate: {
        enter: "animated fadeInDown",
        exit: "animated fadeOutDown"
    },
    icon_type: "class",
    template: "<div data-growl="container" class="alert" role="alert">" +
            "<button type="button" class="close" data-growl="dismiss">" +
              "<span aria-hidden="true">&times;</span>" +
              "<span class="sr-only">Tutup</span>" +
            "</button>" +
            "<span data-growl="message"></span>" +
            "<a href="#" data-growl="url"></a>" +
          "</div>"
  });
</script>-->
