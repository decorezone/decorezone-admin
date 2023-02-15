
@extends('adminpannel.master')
<style type="text/css">
  .shortcut{
display: inline-grid;
    /* background: darkblue; */
    /* color: wheat; */
    font-size: small;
    margin-right: 37px;
    border: 1px solid darkgray;
    border-radius: 2px;
    text-align: center;
    padding: 8px;
    margin-top: 19px;
    margin-left: 41px;

  }
</style>
@section('adminpagedash')
<section class="content">
      <div class="row">
        
         <div class="span6">
          <div class="widget">
            <div class="widget-header"> <i class="icon-bookmark"></i>
              <h3>Important Shortcuts</h3>
            </div>
            <!-- /widget-header -->
             <div class="widget-content">
              <div class="shortcuts">
               
                
                 <a href="javascript:;" class="shortcut">
                  <i class="shortcut-icon  icon-sitemap"></i>
                  <span class="shortcut-label">Blog Catagory 
                  </span>
                 
                   <span class="shortcut-label">{{$category}}
                  </span>
                </a>
                <a href="javascript:;" class="shortcut">
                  <i class="shortcut-icon  icon-paste"></i>
                  <span class="shortcut-label">Blog Posts 
                  </span>
                 
                   <span class="shortcut-label">{{$posts}}
                  </span>
                </a>
                 <a href="javascript:;" class="shortcut">
                  <i class="shortcut-icon icon-bolt"></i>
                  <span class="shortcut-label">Featured Posts 
                  </span>
                 
                   <span class="shortcut-label">{{$posts}}
                  </span>
                </a>
                  <a href="javascript:;" class="shortcut">
                  <i class="shortcut-icon icon-list-alt"></i>
                  <span class="shortcut-label">Post Posts 
                  </span>
                 
                   <span class="shortcut-label">{{$posts}}
                  </span>
                </a>

              </div>
              <!-- /shortcuts --> 
            </div>
            <!-- /widget-content --> 
          </div>
        </div>
      </div>
    </section>
@endsection