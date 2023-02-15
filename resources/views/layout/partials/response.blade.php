  @if( session('status_ok') || session('errors') || session('warning') ) 
                <div class="alert">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>Response!</strong>
                  @if (count($errors) > 0)
                  @foreach ($errors->all() as $error)
                  <p style="color: red">{{ $error }}</p>
                  @endforeach

                  @endif
                  @if (session('status_ok'))
                  <p style="color: green">{{ session('status_ok') }}</p>

                  @endif

                   @if (session('warning'))
                  <p style="color: red">{{ session('warning') }}</p>

                  @endif 
                </div>
                @endif