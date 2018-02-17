$(document).ready(function() {
  
  // button index load new news
  $('#load_other_news_button').click(function(){
  	$('#load_other_news').show(500);
  });

  //appel à projet data table full features
  $('#example').DataTable();

});