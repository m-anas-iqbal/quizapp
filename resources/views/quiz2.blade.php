<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quiz</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>
<body>

https://stackoverflow.com/questions/59574094/how-to-create-a-10-min-timer-that-auto-submit-form-in-html-using-javascript-bl
    <div class="container mt-5">
        
        <h1><span id="quizname"></span> Quiz </h1>
        <form method="POST" action="quiz33" class="row justify-content-center">
@csrf 
            <div class="col-md-12">
                 <div class="card">
    {{-- {{"ASDasdsd"}} --}}
                    <div class="card-body">
                        <?php $key =1  ?>
                    @foreach ($question as $item)
                   
                    <div class="row">
                        <div class="col-12">Q<?php echo $key ?>:  {{  $item->question}}</div>

                        <br><br>
                        <div class="col-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ans<?php echo $key ?>" id="inlineRadio1<?php echo $key ?>" value="{{ $item->answer=="A" ? 2 : 0 }}">
                                <label class="form-check-label" for="inlineRadio1<?php echo $key ?>">{{$item->opt1}}</label>
                              </div>
                        </div>
                        <div class="col-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ans<?php echo $key ?>" id="inlineRadio2<?php echo $key ?>" value="{{ $item->answer=="B" ? 2 : 0 }}">
                                <label class="form-check-label" for="inlineRadio2<?php echo $key ?>">{{$item->opt2}}</label>
                              </div>
                        </div>
                        <div class="col-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ans<?php echo $key ?>" id="inlineRadio3<?php echo $key ?>" value="{{ $item->answer=="C" ? 2 : 0 }}">
                                <label class="form-check-label" for="inlineRadio3<?php echo $key ?>">{{$item->opt3}}</label>
                              </div>
                        </div>
                        <div class="col-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ans<?php echo $key ?>" id="inlineRadio4<?php echo $key ?>" value="{{ $item->answer=="D" ? 2 : 0 }}">
                                <label class="form-check-label" for="inlineRadio4<?php echo $key ?>">{{$item->opt4}}</label>
                              </div>
                        </div>
                        </div><br><br>
                        <?php $key++  ?>
                    @endforeach
                    <input type="hidden" name="sub" id="sub" value="{{$item->sub_name}}">
                        <div class="text-center">
                            <button type="submit" id="name123" class="btn btn-primary">Submit</button>
                        </div>
                    </div> 
                    
                </div>
            </div>
        </form>
    </div>
    <script>
       $(document).ready(function(){
        var subname = $("#sub").val();
        $("#quizname").html(subname)
       })
     

    </script>
</body>
</html>