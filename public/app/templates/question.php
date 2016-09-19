<?php
  $this->layout('master', [
    'title'=>'view a question',
    'desc'=>'view and answer another users question'
  ]);
?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="?page=landing.php">query <span class="glyphicon glyphicon-home"></span></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="active" ><a href="index.php?page=ask">ask <span class="glyphicon glyphicon-plus"></span></a></li>
        <li><a href="index.php?page=login">login</a></li>
        <li><a href="index.php?page=register">register</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
  <div class="row">

<!-- question -->
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">question?</h3>
      </div>
      <div class="panel-body">
        <p>this is were the more detains go</p>
      </div>
      <div class="panel-body">
        <p class="pull-right">00/00/00</p>
      </div>
    </div>

<!-- question end -->

<!-- replys -->
    <div class="container">

<!-- post -->
      <div class="row">
        <div class="col-sm-11 pull-right">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Username</h3>
            </div>
            <div class="panel-body">
              <p>Reply goes here</p>
            </div>

            <div class="panel-body" >
              <div class="btn-group btn-group-sm" role="group" aria-label="...">
                <button type="button" class="btn btn-default">edit</button>
                <button type="button" class="btn btn-default">delete</button>
              </div>

              <div class="pull-right">
                <p id="data">00/00/00</p>
              </div>
            </div>
          </div>
          </div>

      </div>
<!-- post end -->

    </div> <!-- end replys -->



<div class="row">
  <div class="col-sm-12 pull-right">
    <div class="panel panel-default">
      <div class="panel panel-heading">
        <h3 class="panel-title">Your Answer</h3>
      </div>
      <div class="panel-body">
        <form class="" action="index.html" method="post">
          <textarea class="form-control" rows="5"></textarea>
          <div class="input-group">
            <input type="submit" value="submit" class="btn btn-default" aria-describedby="basic-addon1">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>



</div> <!-- row end -->
</div> <!-- container end -->
