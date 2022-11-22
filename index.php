<?php 
include("header.php");
include("conn.php");

$con=new connec();
$data=$con->select_all('slider');


?>

<section style="min-height:450px;">
<div id="carouselId" class="carousel slide" data-ride="carousel">
    <?php 
    if($data->num_rows>0)
    {
        $i=0;
        echo '<ol class="carousel-indicators">';
while($row=$data->fetch_assoc())
{
    if($i==0)
    {
        echo'<li data-target="#carouselId" data-slide-to="'.$i.'" class="active"></li>';
    }
    else{
        echo ' <li data-target="#carouselId" data-slide-to="1"></li>';
    }
    $i++;

  }
echo '</ol>';
    }
    ?>
    <!--<ol class="carousel-indicators">
        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
        <li data-target="#carouselId" data-slide-to="1"></li>
        <li data-target="#carouselId" data-slide-to="2"></li>
        <li data-target="#carouselId" data-slide-to="3"></li>
    </ol>-->
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="" alt="First slide" style="width:100%;height:450px;">
        </div>
        <div class="carousel-item">
            <img src="images/banner2.webp" alt="Second slide" style="width:100%;height:450px;">
        </div>
        <div class="carousel-item">
            <img src="images/banner3.jfif" alt="Third slide" style="width:100%;height:450px;">
        </div>
        <div class="carousel-item">
            <img src="images/banner4.jfif" alt="Fourth slide" style="width:100%;height:450px;">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

</section>






<?php 
include("footer.php");
?>