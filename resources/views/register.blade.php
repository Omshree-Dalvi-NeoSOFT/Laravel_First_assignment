<!DOCTYPE html>
<html lang="en">
<head>
    @include('include.head')
</head>
<body>
    <!-- <section class="p-4"></section> -->
    <section class="container">
    <div class="jumbotron">
        <h1 class="display-4">Register Panel</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <!-- <p class="lead">
             <a class="btn btn-primary btn-lg" href="products.php" role="button">Shop Now</a> 
        </p> -->
    </div>
    <div class="mb-4"></div>
      <!-- Success Msg -->
      @if(Session::has('success'))
       <div class="alert alert-success"> {{Session::get('success')}} </div>
   @endif
   @if(Session::has('error'))
       <div class="alert alert-danger"> {{Session::get('error')}} </div>
   @endif
      <!-- contact us form -->
  <form  method="post" action="{{url('/registerdtl')}}" class="row g-3" enctype="multipart/form-data">
    @csrf()
    <div class="col-md-4">

    <!-- Email Id -->
      <label for="validationServer02" class="form-label">Email ID</label>
      <input type="email" class="form-control" id="validationServer02" name="email" >
      
      @if($errors->has('email'))
        <label class="alert alert-danger">{{$errors->first('email')}}</label>
      @endif
      
    </div>
    <div class="col-md-4">

          <!-- User name -->
          <label for="validationServerUsername" class="form-label">Username</label>
      <div class="input-group has-validation">
        <span class="input-group-text" id="inputGroupPrepend3">@</span>
        <input type="text" class="form-control " id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" name="uname" >        
      </div>
      @if($errors->has('uname'))
        <label class="alert alert-danger">{{$errors->first('uname')}}</label>
      @endif
    </div>
    <div class="col-md-4">

        <!-- password -->
        <label for="validationServer02" class="form-label">Password</label>
      <input type="password" class="form-control" id="validationServer02" name="pass" >
      
      <!-- error msg -->
      @if($errors->has('pass'))
        <label class="alert alert-danger">{{$errors->first('pass')}}</label>
      @endif
    </div>
    <div class="col-md-6">

    <!-- Name -->
      <label for="validationServer03" class="form-label">Name</label>
      <input type="text" class="form-control" id="validationServer03" aria-describedby="validationServer03Feedback" name="name" >
      
      <!-- error msg -->
      @if($errors->has('name'))
        <label class="alert alert-danger">{{$errors->first('name')}}</label>
      @endif
    </div>
    <div class="col-md-3">

  <!-- Age -->
    <label for="validationServer05" class="form-label">Age</label>
    <input type="text" class="form-control " id="validationServer05" aria-describedby="validationServer05Feedback" name="age" >
    
    <!-- error msg -->
    @if($errors->has('age'))
        <label class="alert alert-danger">{{$errors->first('age')}}</label>
      @endif
  </div>
    <div class="col-md-3">

    <!-- gender -->
      <label for="validationServer04" class="form-label">Gender</label>
      <select class="form-select " id="validationServer04" aria-describedby="validationServer04Feedback" name="gender" >
        <option selected disabled value="Null">Choose...</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
        
      </select>

      <!-- error msg -->
      @if($errors->has('gender'))
        <label class="alert alert-danger">{{$errors->first('gender')}}</label>
      @endif
    </div>
  
    <div class="col-md-5">

      <!-- file image  -->
      <label for="validationServer01" class="form-label">Upload Image</label>
      <input type="file"  name="file"  class="form-control" id="validationServer01"  >
      
      <!-- error msg -->
      @if($errors->has('file'))
        <label class="alert alert-danger">{{$errors->first('file')}}</label>
      @endif
    </div>

    <div class="col-md-5">
     <!-- Captcha -->
      <label for="validationServer01" class="form-label">Captcha <b>{{ $captcha[0] }}</b></label>
      <input type="text"  name="captcha"  class="form-control" id="validationServer01"  >
      <input type="hidden"  name="captchasum" id="validationServer01" value="{{ $captcha[1] }}" >
      
      <!-- error msg -->
      @if($errors->has('captcha'))
        <label class="alert alert-danger">{{$errors->first('captcha')}}</label>
      @endif
    </div>

    <div class="col-12">
      <button class="btn btn-success p-2" type="submit" name="sub">Submit</button>
      <a class="btn btn-primary" href="{{ url('login') }}" role="button">Login</a>
    </div>
  </form>
    </section>
    <section class="mb-2"></section>
    <section class="container-fluid">


    @include('include.foot')
</body>
</html>