<?php
   $title = "Travel Experts Main Page";
   include("header.php");
?>

	  <script type="text/javascript">
	     //var username = window.prompt("Enter your name:", "");
		 var today = new Date();
		 var travelImages = new Array("media/DenmarkCopenhagen.jpg",
            "media/IguassuFallsBrazilColloidConf.jpg", "media/KyotoOsaka.jpg", "media/EiffeltopParis.jpg");
	     var travelDescs = ["Come to Copenhagen and see the historical architecture",
		    "Brazil is having a Carnival and wants you to attend",
			"Kyoto is scenic in Spring", "Visit the real Paris Hilton"]
			
		 function getDesc(indexNum)
		 {
		    document.getElementById("imageDesc").innerHTML = travelDescs[indexNum];
		 }
		 function clearDesc(indexNum)
		 {
		    document.getElementById("imageDesc").innerHTML = "";
		 }
	  </script>
   </head>
   <body class="backimage">
      <table border="1">
		  <tr>
		     <td>
			    <img style="opacity:0.5" align="right" title="Travel Experts" src="media/GoldenGateBridge.jpg" />
		     </td>
			 <td>
			    <h1>Welcome <script> document.write(username); </script></h1>
			 </td>
		  </tr>
		  <tr>
   		     <td>
			    <?php include("menu.php"); ?>
		     </td>
			 <td>
		        <p>We have a variety of travel destinations available.</p>
				<table>
				   <script>
				      /*for (i=0; i<travelImages.length; i++)
					  {
					     document.write("<tr>");
					     document.write("<td>");
					     document.write("<img src='" + travelImages[i] + "' />");
					     document.write("</td>");
					     document.write("<td>");
					     document.write("<p style='color:blue; font-size:20pt'>"
                            + travelDescs[i] + "</p>");
					     document.write("</td>");
					     document.write("</tr>");
					  }*/
				      for (i=0; i<travelImages.length; i++)
					  {
					     document.write("<tr>");
					     document.write("<td>");
					     document.write("<img onmouseover='getDesc(" + i + ")' onmouseout='clearDesc(" + i + ")' src='" + travelImages[i] + "' />");
					     document.write("</td>");
					     document.write("</tr>");
					  }
				   </script>
				</table>
			 </td>
		  </tr>
		  <tr>
		     <td colspan="2">
			   <?php include("footer.php"); ?>
			 </td>
		  </tr>
	  </table>
	  <div id="imageDesc">Point to an image to see the description.</div>
   </body>
</html>