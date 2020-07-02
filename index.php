              <?php
              include("config.php");
              ?>
              <!doctype html>
              <html>
              <head>
                <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
                <link rel="stylesheet" type="text/css" href="css/style.css">
                <link rel="stylesheet" type="text/css" href="css/search.css">
                <link rel="stylesheet" type="text/css" href="css/rating.css">
<!--                  <script type="js/jQuery v3_4_1.js"></script>
 -->
<!-- 
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <link rel="stylesheet" href="css/style.css">
                <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
                <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
                <link rel='stylesheet' href='https://raw.githubusercontent.com/kartik-v/bootstrap-star-rating/master/css/star-rating.min.css'>
 -->
            
              <script
                src="https://code.jquery.com/jquery-3.4.1.min.js"
                integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
                crossorigin="anonymous"></script>

                <style>

                  <style>
                  video{
                   float: left;
                 }
               </style>
             </head>
             <body>
              <div>




               

              <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <!-- Brand/logo -->
                <a class="navbar-brand" href="#">
                  <img src="./icons/nav.png" alt="logo" style="width:40px;align-content: center;margin-top: -25%">
                </a>

                <!-- Links -->
                <ul class="navbar-nav">
                 <li class="nav-item">
                  <a class="nav-link" href="index.php">view 1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="video2.php">view 2</a>
                </li>


              </ul>
              <ul class="navbar-nav ml-auto">
               <li class="nav-item">
                <!-- <button  class="btn btn-primary  nav-link mr-auto"  href="addvideo.php">add videos</button> -->
                                  <a class="nav-link" href="addvideo.php">add videos</a>

              </li>
            </ul>
          </nav>

          <form autocomplete="off" action="index.php" style="margin-left: 2%" >
            <div class="autocomplete" style="width:300px;">
              <input id="myInput" type="text" name="filter" placeholder=" search tags">
            </div>
            <input type="submit">
          </form>
          <br>
          <br>

          <!--   <divc id="result">
            
            </div>   -->       
          <div class="row m-4" style="background-color: white">


           <?php
           if(isset($_GET['filter']) and $_GET['filter']!='any'){
             $filter=$_GET['filter'];
             $fetchVideos = mysqli_query($con, "SELECT * FROM videos WHERE tags LIKE '%$filter%' ");

           }
           else
            $fetchVideos = mysqli_query($con, "SELECT * FROM videos ORDER BY rating DESC");


          while($row = mysqli_fetch_assoc($fetchVideos)){ ?>

           <div class="col-sm-3" style="object-fit: fill;border-color: red;border-color: red;">   
            <?php  
            $id=$row['id'];
          
            $name=explode(".",$row['name']);
            $location = $row['location']; 
            $rating = $row['rating']; 
            $tags = $row['tags']; 
            $tag_list=(explode(",",$tags));
                                   // print_r($tag_list);


                                   // echo $tags;
                                   // <a href="/link/to/page2">Continue</a>
            ?>


            <?php 
            ?>
            <div  > 

              <?php 
              // echo ;
              echo " <p> $name[0] </p> <video src='".$location."' controls loop autoplay muted  width='300px' height='200px' >";       ?>
              <br>

            </div>

            <!-- indivisual video tag link -->
            <!--                              <img src="icons/add.png" style="height: 15px" onclick="">-->
            <button class='pill_button text-white' onclick="window.location.href='video2.php?watch_id=<?php echo $id ?> '">Watch</button>

            <?php 
            echo "Tags: ";
            $count=0;
            foreach ($tag_list as $tt) {
              if($tt!="")
             echo  "<button class='btn btn-sm mr-2 btn-primary rounded-circle   text-white' onclick=\"window.location.href='video2.php?filter=$tt'\">$tt</button>";

           }
           ?>
           <!-- <button onclick="myFunction()">+</button> --> 

           <form action="update_tag.php" class="form-check-inline" method="get">
            <input type="hidden" name="id" value="<?php echo $id  ?>">
                  <input type="hidden" name="flag" value="1">
            <input type="text" name="name" placeholder="+ tag" style="width: 70px"><br>

            <div class="form-check form-check-inline">
              <?php if($rating==1)
              echo "<input class=\"form-check-input\" type=\"radio\" checked name=\"inlineRadioOptions\" id=\"inlineRadio1\" value=\"1xx  $id\">";
              else
                echo "<input class=\"form-check-input\" type=\"radio\"  name=\"inlineRadioOptions\" id=\"inlineRadio1\" value=\"1xx  $id\">";
              ?>
              <label class="form-check-label" for="inlineRadio1">1</label> 
            </div>
            <div class="form-check form-check-inline">
              <?php if($rating==2)
              echo "<input class=\"form-check-input\" type=\"radio\" checked name=\"inlineRadioOptions\" id=\"inlineRadio1\" value=\"2xx  $id\">";
              else
                echo "<input class=\"form-check-input\" type=\"radio\"  name=\"inlineRadioOptions\" id=\"inlineRadio1\" value=\"2xx  $id\">";
              ?>
              <label class="form-check-label" for="inlineRadio2">2</label> 
            </div>
            <div class="form-check form-check-inline">
             <?php if($rating==3)
             echo "<input class=\"form-check-input\" type=\"radio\" checked name=\"inlineRadioOptions\" id=\"inlineRadio1\" value=\"3xx  $id\">";
             else
              echo "<input class=\"form-check-input\" type=\"radio\"  name=\"inlineRadioOptions\" id=\"inlineRadio1\" value=\"3xx  $id\">";
            ?>
            <label class="form-check-label" for="inlineRadio2">3</label> 
          </div>
          <div class="form-check form-check-inline">
            <?php if($rating==4)
            echo "<input class=\"form-check-input\" type=\"radio\" checked name=\"inlineRadioOptions\" id=\"inlineRadio1\" value=\"4xx  $id\">";
            else
              echo "<input class=\"form-check-input\" type=\"radio\"  name=\"inlineRadioOptions\" id=\"inlineRadio1\" value=\"4xx  $id\">";
            ?>
            <label class="form-check-label" for="inlineRadio2">4</label> 
          </div>
          <div class="form-check form-check-inline">
            <?php if($rating==5)
            echo "<input class=\"form-check-input\" type=\"radio\" checked name=\"inlineRadioOptions\" id=\"inlineRadio1\" value=\"5xx  $id\">";
            else
              echo "<input class=\"form-check-input\" type=\"radio\"  name=\"inlineRadioOptions\" id=\"inlineRadio1\" value=\"5xx  $id\">";
            ?>
            <label class="form-check-label" for="inlineRadio2">5</label>
          </div>


        </form>



      </div>

      <?php  

    }
    ?>

  </div>
</div>

<!-- all tags -->
<?php 
$fetchVideos = mysqli_query($con, "SELECT tags FROM videos ORDER BY id DESC");
$alltags="";
while($row = mysqli_fetch_assoc($fetchVideos)){

 $tags = $row['tags']; 
 $alltags=$alltags.",".$tags;

}

               //echo $alltags;
?>
<div style="margin-left: 20px">
  
 <?php  

 echo "<br><h3>Filter by tags:</h3>";
 $tag_list2=(explode(",",$alltags));
                // print_r(array_unique($tag_list2));
 $search_tags="";
 $count=0;
   ?>
      <button class='pill_button text-white' onclick="window.location.href='index.php?filter=any'">All</button>
<?php
 foreach (array_unique($tag_list2) as $tt) {
  if($tt!=""){
    echo "<button class='pill_button text-white' onclick=\"window.location.href='video2.php?filter=$tt'\">$tt</button>  ";

  }
              // $search_tags=$search_tags.".$tt.";
  if($tt!=null and $tt!=" "){
    if($search_tags!="")
     $search_tags=$search_tags.',"' . $tt . '"';
   else
    $search_tags='"' . $tt . '"';

}

}
?>
<br><br>

</div>
 <script type="text/javascript">

                 $(document).ready(function(){

                  $('input[type=radio][name=inlineRadioOptions]').on('change', function() {

                    var val=$(this).val();

                    var res = val.split("xx");

                    val=res[0];
                    var  userid=res[1];
                    console.log("val:");
                    console.log(res[0]);
                    console.log(res[1]);

                    if(val != '')
                    {
                      $.ajax({  
                        type: 'POST',  
                        url: 'updaterating.php', 
                        data: {rating:val,userid:userid },
                        success: function(response) {
                          $("#result").html(response);      
                        }
                      });
                    }
                  });

                });
              </script>
<script type="text/javascript">


   //var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
   var countries=[<?php echo $search_tags;?>];
       // var countries=["a","Saudi","display","dsds"];
     </script>

<!--      <script type="js/jQuery_v3_5.js"></script>
 -->
     <script type="js/myjquery.js"></script>

<!--      <script src="js/jquery.slim.min.js"></script>
-->     <!-- <script src="js/popper.js"></script> -->
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/search.js"></script>

</body>
</html>