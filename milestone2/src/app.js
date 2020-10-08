const $ = require('jquery');
const handlebars = require('handlebars');

$(document).ready(function(){
  $.ajax({
    "url": "http://localhost/php-ajax-dischi/milestone2/db.php",
    "method": "GET",
    "success": function(data){
    },
    "error": function(error){

    }
  });
});
