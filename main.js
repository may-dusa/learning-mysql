$(document).ready(function() {

  $("body").css('display', 'flex');

  var d = new Date();

  console.log(d);

  var month = d.getMonth()+1;
  var day = d.getDate();

  var output = d.getFullYear() + '-' +
      ((''+month).length<2 ? '0' : '') + month + '-' +
      ((''+day).length<2 ? '0' : '') + day;

      $("#date").attr('value', output);

});
