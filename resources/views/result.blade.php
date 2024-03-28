<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style>
    .column{
        padding: 10px;
        font-weight: bolder;
        border: 2px solid black;
        border-radius: 20px;
        /* text-align: center; */
        padding-left: 50px;
background: white;
    }
    .row1{
        padding: 50px;
        background:black
    }
</style>
</head>
<body background="black">
    <?php $count = 0 ?>
    @foreach($result as $pro)
<div class="row1">


    

    <h1 style="color: white">Result:</h1>
    <div style="background: white; height: 2px;width: 100%;"></div><br>
    <h4 style="color: white">Student Information</h4>
    <div style="background: white; height: 2px;width: 100%;"></div><br>
    <h6 style="color: white">Student no</h6>
  <div class="column">
    {{$pro->user_id}}
  </div><br>
  <h6 style="color: white">Name</h6>
  <div class="column">{{$pro->user_id}} </div><br>
  <h4 style="color: white">Subjects</h4>
  <div style="background: white; height: 2px;width: 100%;">{{$pro->user_id}}</div><br>
  <h6 style="color: white">English</h6>
  <div class="column"><?php //($pro->sub_id==2) ? echo  $pro->answer: ; ?></div><br>
  <h6 style="color: white">Aptitude</h6>
  <div class="column"><?php //($pro->sub_id==1) ? echo  $pro->answer: ; ?></div><br>
  <h6 style="color: white">Maths</h6>
  <div class="column"><?php //($pro->sub_id==3) ? echo  $pro->answer: ; ?></div><br>
  <h6 style="color: white">Science</h6>
  <div class="column"><?php //($pro->sub_id==4) ? echo  $pro->answer: ; ?></div><br>
  <h6 style="color: white">Total Marks</h6>
  <div class="column">{{$count + $pro->answer}}</div><br>
  <h6 style="color: white">Remarks</h6>
  <div class="column"> 

{{-- if ($count >= 70 ) {
    "Excellent!, Good job"
}else if ($count >= 50 ) {
    "Good but Need to improve your self"
} else if ($count >= 30 ) {
    "You need to work hard"
}else{
    "Please don't try next time because you can't do hard work"
} --}}


</div><br><br><br>
</div>
@endforeach
</body>
</html>