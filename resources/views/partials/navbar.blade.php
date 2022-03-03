
<div class="container-fluid bg-primary">
  
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="col-md-2">
      <a href="{{url("/")}}"><img src="{{asset("Nav")}}/Logo_Del.PNG" alt="" style="width: 80px" class="pull-right"></a>
    </div>
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse pull-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{($title === "Home") ? 'active' : ''}}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{($title === "PMB") ? 'active' : ''}}" href="/PMB">PMB</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{($title === "PCA") ? 'active' : ''}}" href="/PCA">PCA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{($title === "Beasiswa") ? 'active' : ''}}" href="/Beasiswa">Beasiswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{($title === "Webinar") ? 'active' : ''}}" href="/Webinar">Webinar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{($title === "Virtualtour") ? 'active' : ''}}" href="/Virtualtour">Virtual Tour</a>
          </li>
         
        </ul>
      </div>
    </div>
  </div>
</nav>
</div>