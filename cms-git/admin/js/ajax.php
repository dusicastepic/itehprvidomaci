
<?php  #xhr is an ajax object
	   #4-->the request is completed; it is in state 4 
?>
<script>
  function ajax(){

    var req= new XMLHttpRequest(); 
    req.onreadystatechange=function(){
      if (req.readyState==4 && req.status=200) {
        document.getElementByID('t').innerHTML=req.responseText;
      }
    }

    req.open('GET',"categories.php",true);
    req.send();
  }

</script>