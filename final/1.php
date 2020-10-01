<html>
<head>
    <title>bus ticket booking form </title>
	<link rel="stylesheet" href="style1.css">
	<link rel="stylesheet" 
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>


<ul>
  <li><a href="1.php" >Home</a></li>
  <li><a href="news.html">News</a></li>
  <li><a href="contact.html">Contact</a></li>
  <li><a href="about.html">About</a></li>
</ul>


<form action="latest.php" method="POST">  

<div class="booking-form-box">`
 

     <div class="radio-btn">
<input type="radio" class="btn" name="check" checked="checked"><span>Roundtrip   </span>
<input type="radio" class="btn" name="check"><span>One way </span>
<input type="radio" class="btn" name="check"><span>  Multy-city </span>
      </div>


     <div classs="booking-form" >
<label>Bus from</label>
<input type="text" class="form-control" placeholder="place" name="source">
<label>Bus to</label>
<input type="text" class="form-control" placeholder="place" name="destination">


      <div class="input-grp">
<label>Departing</label>
<input type="date" class="form-control" name="date" >
       </div>
			<br>

       <div class="input-grp">
<label>Returning</label>
<input type="date" class="form-control" select-date">
       </div>
			<br>

       <div class="input-grp">
<label>Adults</label>
<input type="number" class="form-control" value="1">
       </div>
            
	   <div class="input-grp">
<label>Childern</label>
<input type="number" class="form-control" value="0">
        </div>

       <div class="input-grp">
<label>travel class</label>
<select class="custom-select" class="btn btn-primary">
<option value="1">Seater Class</option>
<option value="2">Sleeper Class</option>
</select>
       </div>
       <br>


        <div class="input-grp">
  <input type="submit" class="btn btn-primary" name="submit"/>
</form>
         </div>

 </div>
	
</div>
</form>
</body>
</html>
