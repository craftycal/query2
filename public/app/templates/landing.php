
<?php
  $this->layout('master', [
    'title'=>'welcome to query',
    'desc'=>'login or register to get started'
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
        <li><a href="index.php?page=ask">ask <span class="glyphicon glyphicon-plus"></span></a></li>
        <li><a href="index.php?page=login">login</a></li>
        <li><a href="index.php?page=register">register</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



<div class="container">

  <div class="panel panel-default">
    <div class="panel-heading">
      <a href="question.html"><h3 class="panel-title">Panel title</h3></a>
    </div>
    <div class="panel-body">
      Panel content
    </div>
    <div class="panel-body">
      <p class="pull-left">username</p>
      <p class="pull-right">00/00/00</p>
    </div>
  </div>

</div>
