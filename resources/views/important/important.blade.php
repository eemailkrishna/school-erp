  @include('common.header')
  @include('common.navbar')
  <script>
window.scrollTo(0, 0);
  </script>
  <section class="content-header">
      <h1>
          Important
          <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
          <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class='active'>Important</a></li>
      </ol>
  </section>
  <!-- Main content -->
  <section class="content">
      <div class="box box-success">
          <div class="box-header with-border">

              <h3 class="box-title" style="color:teal;"><i class="fa fa-book"></i>&nbsp;&nbsp;&nbsp;<b>Main Panel</b>
              </h3>
          </div>
          <div class="box-body">

              <a href="{{url('important/add_document')}}">
                  <div class="col-lg-3 col-xs-6">
                      <div class="small-box" style="background-color:#E32636;">
                          <div class="inner"><br>
                              <h3 style="font-size:25px;margin-left:10px;color:#fff;">Govt. Documents</h3>
                              <p style="margin-left:10px;color:#fff;">Enter</p>
                          </div>
                          <div class="icon">
                              <i class="ion"></i>
                          </div>
                          <a href="{{url('important/add_document')}}" class="small-box-footer">More info <i
                                  class="fa fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
              </a>
              <a href="{{url('important/document_list')}}">
                  <div class="col-lg-3 col-xs-6">
                      <div class="small-box" style="background-color:#B0BF1A;">
                          <div class="inner"><br>
                              <h3 style="font-size:25px;margin-left:10px;color:#fff;">Document List</h3>
                              <p style="margin-left:10px;color:#fff;">Enter</p>
                          </div>
                          <div class="icon">
                              <i class="ion"></i>
                          </div>
                          <a href="{{url('important/document_list')}}" class="small-box-footer">More info <i
                                  class="fa fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
              </a>
              <a href="{{url('important/add_other_document')}}">
                  <div class="col-lg-3 col-xs-6">
                      <div class="small-box" style="background-color:#72A0C1;">
                          <div class="inner"><br>
                              <h3 style="font-size:25px;margin-left:10px;color:#fff;">Other Documents</h3>
                              <p style="margin-left:10px;color:#fff;">Enter</p>
                          </div>
                          <div class="icon">
                              <i class="ion"></i>
                          </div>
                          <a href="{{url('important/add_other_document')}}" class="small-box-footer">More info <i
                                  class="fa fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
              </a>
              <a href="{{url('important/other_document_list')}}">
                  <div class="col-lg-3 col-xs-6">
                      <div class="small-box" style="background-color:#34495E;">
                          <div class="inner"><br>
                              <h3 style="font-size:25px;margin-left:10px;color:#fff;">Other Document List</h3>
                              <p style="margin-left:10px;color:#fff;">Enter</p>
                          </div>
                          <div class="icon">
                              <i class="ion"></i>
                          </div>
                          <a href="{{url('important/other_document_list')}}" class="small-box-footer">More info <i
                                  class="fa fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
              </a>
              <a href="{{url('important/contact_info')}}">
                  <div class="col-lg-3 col-xs-6">
                      <div class="small-box" style="background-color:#C46210;">
                          <div class="inner"><br>
                              <h3 style="font-size:25px;margin-left:10px;color:#fff;">Contact Info</h3>
                              <p style="margin-left:10px;color:#fff;">Enter</p>
                          </div>
                          <div class="icon">
                              <i class="ion"></i>
                          </div>
                          <a href="{{url('important/contact_info')}}" class="small-box-footer">More info <i
                                  class="fa fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
              </a>
              <a href="{{url('important/contact_info_list')}}">
                  <div class="col-lg-3 col-xs-6">
                      <div class="small-box" style="background-color:#138D75  ;">
                          <div class="inner"><br>
                              <h3 style="font-size:25px;margin-left:10px;color:#fff;">Contact Info List</h3>
                              <p style="margin-left:10px;color:#fff;">Enter</p>
                          </div>
                          <div class="icon">
                              <i class="ion"></i>
                          </div>
                          <a href="{{('important/contact_info_list')}}" class="small-box-footer">More info <i
                                  class="fa fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
              </a>


          </div>
      </div>
      <!-- <div class="box" style="display:none;">-->
      <!--<div class="box-header with-border">-->

      <!--<h3 class="box-title" style="color:teal;"><i class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;<b>Reports</b></h3>-->
      <!--</div>-->
      <!--<div class="box-body">-->




      <!--</div>-->
      <!-- </div>-->
      <!-- <div class="box" style="display:none;">-->
      <!--<div class="box-header with-border">-->

      <!--<h3 class="box-title" style="color:teal;"><i class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;<b>User Help</b></h3>-->
      <!--</div>-->
      <!--<div class="box-body">-->



      <!--</div>-->
      <!-- </div>-->
  </section>
  @include('common.footer')