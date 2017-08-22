$(document).ready(function () {

    $('.i-checks').iCheck({
        checkboxClass: 'icheckbox_square-green',
        radioClass: 'iradio_square-green',
    });
       $('form').attr("action",APP+"/upload");
   console.log(APP);
 });