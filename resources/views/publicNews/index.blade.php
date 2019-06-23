@extends('admin.layout.app')

@section('content')

<style>

body{margin-top:20px; background-color: #eeeeee;}

.well-social-post {
  border-radius: 0;
  background-color: #ffffff;
  border: 1px solid #ddd;
  padding:0;
}

.well-social-post .glyphicon,
.well-social-post .fa,
.well-social-post [class^='icon-'],
.well-social-post [class*='icon-'] {
  font-weight: bold;
  color: #999999;
}

.well-social-post a,
.well-social-post a:hover,
.well-social-post a:active,
.well-social-post a:focus {
  text-decoration: none;
}

.well-social-post .list-inline {
  border-bottom: 1px solid #ddd;
  padding-bottom: 10px;
}

.well-social-post .list-inline li {
  position: relative;
}

.well-social-post .list-inline li.active::after {
  position: absolute;
  display: block;
  width: 0;
  height: 0;
  content: "";
  top: 30px;
  left: 50%;
  left: -webkit-calc(50% - 5px);
  left: -moz-calc(50%-5px);
  left: calc(50% - 5px);
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 5px solid #dddddd;
}

.well-social-post .list-inline li.active a {
  color: #222222;
  font-weight: bold;
}

.well-social-post .form-control {
  width: 100%;
  min-height: 100px;
  border: none;
  border-radius: 0;
  box-shadow: none;
}

.well-social-post .list-inline {
  padding: 10px;
}

.well-social-post .list-inline li + li {
  margin-left: 10px;
}

.well-social-post .post-actions {
  margin: 0;
  background-color: #f6f7f8;
  border-top-color: #e9eaed;
}                                                            
</style>
<script>
    $(function(){
  var postActions   = $( '#list_PostActions' );
  var currentAction = $( '#list_PostActions li.active' );
  if ( currentAction.length === 0 ) {
    postActions.find( 'li:first' ).addClass( 'active' );
  }
  postActions.find( 'li' ).on( 'click', function( e ) {
    e.preventDefault();
    var self = $( this );
    if ( self === currentAction ) {return;}
    // else
    currentAction.removeClass( 'active' );
    self.addClass( 'active' );
    currentAction = self;
  });
});
</script>

<div class="container">
        <div class="row">
          <div class=" col-md-12 col-xs-12" >
            <div class="well well-sm well-social-post">
              <form>
                <ul class="list-inline" id='list_PostActions'>
                  <li class='active'><a href='#'>كتابة مشنور جديد </a></li>
                  
                </ul>
                <textarea class="form-control" placeholder="اكتب هنا ..."></textarea>
                <ul class='list-inline post-actions'>
                  <li style="float:left;margin-left: 47px;"><a href="#" ><label for="upload" class="icon-upload4"></label> <input type="file" id="upload" style="display:none" name"file"></a></li>

                  <li class='pull-right'><a href="#" class='btn btn-primary btn-xs'>انشر  <i style="    color: white;" class="icon-pencil-square-o"></i></a></li>
                </ul>
              </form>
            </div>
          </div>
        </div>
      </div>   
      
      <br>

      <br>

      @include('admin.publicNews.posts')
      @include('admin.publicNews.postInserted')
@endsection