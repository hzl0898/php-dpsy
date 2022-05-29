<?php 
include 'head.php';

?>
        
<div class="main">
	
<div class="cjjj">
	 <h3>走进书院</h3>
	 <p>
东坡书院，位于海南省儋州市中和镇，始建于北宋绍圣五年（1098年）。

东坡书院坐东北朝西南，院内建筑按三轴线布列，主体建筑均布列于中轴线上，依次为头门、载酒亭、载酒堂、正殿、东西两庑廊，东轴线布列钦帅......
</p> 
	</div>
    
    <div class="jdt">

<div class="h-flash">
	<script type="text/javascript">
	AC_FL_RunContent( 'width','652','height','325','codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab','src','jpgrotator','pluginspage','http://www.macromedia.com/go/getflashplayer','wmode','transparent','movie','jpgrotator' ); //end AC code
	</script><object width="652" height="325" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab"><param value="jpgrotator.swf" name="movie"> <param value="transparent" name="wmode"> <embed width="652" height="325" type="application/x-shockwave-flash" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" src="jpgrotator.swf"></object>
					  <noscript>
					  &lt;OBJECT 
					  codeBase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab 
					  height=325 width=652
					  classid=clsid:D27CDB6E-AE6D-11cf-96B8-444553540000&gt;&lt;PARAM NAME="movie" VALUE="jpgrotator.swf"&gt;&lt;PARAM NAME="wmode" VALUE="transparent"&gt;
							&lt;embed width="652" height="325" src="jpgrotator.swf" 
					  type="application/x-shockwave-flash" 
					  pluginspage="http://www.macromedia.com/go/getflashplayer" 
					  wmode="transparent" /&gt;&lt;/OBJECT&gt;
					  
					  </noscript>
					  </div>
				
	</div>	

	<div class="lswh">
	  <h3>书院旅游</h3>
	<?php

			
					$query1 = mysql_query("select * from news limit 1 ");
			
					 while($row = mysql_fetch_array($query1,MYSQL_ASSOC)){
			
						echo '
						 <dl>
						  <dt> <img src=upload/'.$row['pic'].' ></dt>
						   <dd><a href=news_article.php?id='.$row['id'].'>'.$row['content'].'</a></dd>
						 
						 </dl>
						';
				}
				
			?>
	
	</div>
	<div class="zjhz">
	   <h3>走进书院</h3>
	   <p><img src="images/zjhz.jpg" style="float:left; width:118px; height:123px; padding:5px 10px 0 5px"/>  书院，江苏省地级市，简称“锡”，古称新吴、梁溪、金匮，被誉为“太湖明珠”。书院位于江苏省南部，地处长江三角洲平原。北倚长江，南滨太湖，京杭大运河从书院穿过；境内以平原为主，星散分布着低山、残丘；属北亚热带湿润季风气候区，四季分明，热量充足。书院市辖5个区及2个县级市，全市总面积4627.47平方千米 。</p>
	</div>
	<div class="ctjr">
		  <h3>书院人文</h3>
	
 
<?php

			
					$query1 = mysql_query("select * from product where lanmu like '文化遗址' limit 1 ");
			
					 while($row = mysql_fetch_array($query1,MYSQL_ASSOC)){
			
						echo '
						 <dl>
						  <dt> <img src=upload/'.$row['pic'].' ></dt>
						   <dd><a href=shop_article.php?id='.$row['id'].'>'.$row['title'].'</a></dd>
						 
						 </dl>
						';
				}
				
			?>

	
	</div>


<div class="cjhd" >

<div id="demo">
			      <div id="indemo">
                 <div id="demo1">
	
     <?php 
include 'common/product.php';
?>
	

			  
			 
			  </div>
			  <div id="demo2"></div>
			  </div>
			  
    </div>

	<script>
<!--
var speed=20;
var tab=document.getElementById("demo");
var tab1=document.getElementById("demo1");
var tab2=document.getElementById("demo2");
tab2.innerHTML=tab1.innerHTML;
function Marquee(){
if(tab2.offsetWidth-tab.scrollLeft<=0)
tab.scrollLeft-=tab1.offsetWidth
else{
tab.scrollLeft++;
}
}
var MyMar=setInterval(Marquee,speed);
tab.onmouseover=function() {clearInterval(MyMar)};
tab.onmouseout=function() {MyMar=setInterval(Marquee,speed)};
-->
</script>
</div>
<div class="clear"></div>
</div>
        
		<?php 
include 'foot.php';

?>
     