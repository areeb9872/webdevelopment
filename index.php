
  <body>
  	<?php 
          require_once('header.php');
  	?>
    <!-- <?php
          require_once('slider.php');
    ?> -->
    
   

	<!-- <h1><b>XYZ SCHOOL AND COLLEGE</b></h1>
	<p><b>XYZ School AND College</b> came into exixtance in<b><i>1-January-200</i></b>.
		The founder of this school is<b>Sir ABC</b>. XYZ School come upto the top lists of the best School  all over Pakistan.We provide quality of education and a better future of your child. Our goal is to make the better future of <b><i>Pakistan</i></b>. </p>

		<p>There are total 5 branches all over the countary.</p>
		<ol type="1">
			<li>Karachi</li>
			<li>Lahore</li>
			<li>Rawalpindi</li>
			<li>Peshawar</li>
			<li>Multan</li>
		</ol>
		<P>Address of karachi Branch:</P>
		<address><b>
			GULSHAN-E-IQBAL,<br>
			Street 23,<br>
			House NO:R-987<br>

		</address></b>
		
	<h2> <b><i>School Type:</i></b></h2>
	<p>Semi-Private</p>
	<h3><b><i>MOTO:</i></b></h3>
	<p>"To make better future of Pakistan"</p>
	<h4><b><i>School Board:</b></i></h4>
	<p>Federal Board</p>
	<h5><b><i>Education System:</b></i></h5>
	<p>SSc and HSSC</p>
	<h6><b><i>Gender:</i></b></h6>
	<ul>
		<li>Male</li>
		<li>Female</li>
	</ul>
	<h7><b><i>Medium of Language:</i></b></h7>
	<p>English Medium</p>
	<dl>
		<dt><b><i>Timings:</i></b></dt>
		<dd>MON-THU=8AM-2PM</dd>
		<dd>FRI=8AM-12:30PM</dd>
		<dt><b><i>Number of Students</b></i></dt>
		<dd>200,000 plus</dd>
	</dl>
	<h8><b><i>Website:</i></b></h8>
	<p>XYZ.edu.pk</p>

	<?php include('link.php');
	?> -->

	<!-- <div class="container-fluid">
	   <div class="row">
	   	   <div class="col-xm-12  col-sm-4  col-md-4  col-lg-4 col-xl-4 def" >
	   	   	  
	   	   	  <h1>First DIV</h1>
	   	   	  <img class="img-fluid rounded"  src="assets/img/img1.jpg"  alt="Img">
	   	   	  <p>Education is the key to everything that is good in our world today. Advances in computers, information technology, math, medicine, psychology, engineering and every other discipline would be impossible if education did not let us build on the advances of the great minds that came before us.</p>
	   	   </div>
	   	   <div class="col-xm-12  col-sm-4  col-md-4  col-lg-4  col-xl-4  ief">
	   	   	
	   	   	  <h1>Second DIV</h1>
	   	   	    <img class="img-fluid rounded" src="assets/img/img2.jpg"  alt="Img">
	   	   	    <p>Education not only teaches our children facts but also teaches them how to think and learn on their own.</p>
	   	   	</div>
	   	   	<div class="col-xm-12  col-sm-4  col-md-4  col-lg-4  col-xl-4  wef justify-content-center">
	   	   	  <h1>Third DIV</h1>
	   	   	  <img class="img-fluid rounded" src="assets/img/img3.jpg"  alt="Img">
	   	   	  <p>There will always be arguments about what is taught in schools. Socrates was fed poison for teaching the “wrong things”. William of Ockam and Galileo are two great examples that philosophy and science have always been controversial topics (to understate the issue) when education runs counter to the status quo</p>	
	   	   		
	   	   	</div>
	   	</div> 
	</div> -->

	
<input type="text" name="test" id="test" value=""><br><br><br><br>
<button class="btn bth-primary submit">Submit</button><br><br><br>


<?php 
    require_once('footer.php');
   ?>

   

   <script>
   	/*var addresult;
   	var subresult;
   	var mulresult;
   	var divresult;
    var a=20;
    var b=30;
    var c=5;
    addresult=a+b+c;
    var d=30,e=10,f=5
    subresult=d-e-f;
    var g=2,h=3;
    mulresult=g*h;
    var i=4,j=2;
    divresult=i/j;
    var fname="Areeb";
    var lname="Hussain";
    var name=` ${fname} \n ${lname}`;
    var name=fanme+' '+lanme;
    var obj={'id':1,'name':'working'}
    console.log(addresult);
    console.log(subresult);
    console.log(mulresult);
    console.log(divresult);
    console.log(name);
    console.log(obj);*/
   /*var marks=30;
   if(marks>20){
   	    console.log("pass");
   }
   else{
   	 console.log("fail");
   }*/
   /*console.log('Banking System');
  console.log('press 1 for Inquery');
  console.log('press 2 for withdraw');
   console.log('press 3 for transfer')
   console.log('press 4 for break')


   var option=2;
   console.log('You have selected:  ',option) 
   switch(option){
   	case 1:
   	     console.log('WELLCOME TO Inquery');
   	    break;

   	case 2:
   	    console.log('WELLCOME TO withdraw');
   	    break;

   	case 3:
   	    console.log('WELLCOME TO withdraw');
   	    break;

   	case 4:
   	    console.log('WELLCOME TO for transfer');
   	    break;

   	default:
   	    console.log('invalid input');
   	    break;
   }*/
   
   /*var table=10;
   for(a=1;a<=10;a++){
      
      console.log( table +'x' + a +'=' + table*a );
   }*/
   /*function add(a=2,b=3){
   	var sum=a+b;
   	console.log(sum);
   }
   add(4,5);*/
   
   $(document).ready(function(){
         $('.submit').click(function(){

         var value= $('#test').attr('name1','test12345');
         $('#test').removeAttr('id');
         console.log(value);

        })
   })



</script>
</body>
</html>
