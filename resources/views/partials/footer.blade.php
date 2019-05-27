<footer>
  <div style="" class="container-fluid footer ">
    <div class="row licence">
      <div class="col-md-12">
        <h3><i class="far fa-copyright"></i><b>Blog (Laravel) Houssem Eddine Mabrouk 2019</b></h3>
        <div class="fr">
          <div style="display: inline-block;">
            <input class="col-md-6 fEmail" name='Email' placeholder='Entrer ton Email'/>
            <a href="#" class="subS">S'inscrire</a>
          </div>
        </div>
      </div>
      <div class="soc col-md-12">
        <ul>
          <li class="soc1"><a href="https://www.linkedin.com/in/houssem-eddine-mabrouk-619456138/"target="_blank"></a></li>
          <li class="soc2"><a href="https://www.facebook.com/houssem.sahiliano"target="_blank"></a></li>
          <li class="soc3"><a href="https://twitter.com/twitter"target="_blank"></a></li>
          <li class="soc4"><a href="https://www.instagram.com/houssem_mbrr"target="_blank"></a></li>
          <li class="soc5"><a href="https://3wa.fr/"target="_blank"></a></li>
          <li class="soc6"><a href="https://www.youtube.com/channel/UCOTiomQKUi-Oc1IPnhS0woQ?view_as=subscriber"target="_blank"></a></li>
          <li class="soc7"><a href="mailto:houssemeddinemabrouk@gmail.com"target="_blank"></a></li>
          <li class="soc8"><a href="https://dribbble.com/Houssem-mbr"target="_blank"></a></li>
        </ul>
      </div>
    </div>
    <div class="text-right mr-5">
      <a  id="tp" style="font-size: 3em;color: #FF0E00FF; cursor: pointer;" ><i class="fas fa-arrow-circle-up"></i></a>
    </div>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
// Add smooth scrolling to all links
$("#tp").on('click', function(event) {
// Make sure this.hash has a value before overriding default behavior
if (this.header !== "") {
// Prevent default anchor click behavior
event.preventDefault();
// Store hash
var header = this.header;
// Using jQuery's animate() method to add smooth page scroll
// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
$('html, body').animate({
scrollTop: $('header').offset().top
}, 2000, function(){
// Add hash (#) to URL when done scrolling (default click behavior)
window.location.header = header;
});
} // End if
});
});
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>