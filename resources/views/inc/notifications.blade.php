


{{-- 
@if (session()->has('success_message'))
                <div id="signup-response" class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if(count($errors) > 0)
                <div id="signup-response" class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

--}}


@if (session()->has('success_message'))
<div id="signup-response" class="notification-container">
  

    <div class="notification success">
            <header>
              <h2>Notice:</h2>
              <span class="timestamp">Now</span>
            </header>
            <div class="content">
              <span class="message">{{ session()->get('success_message') }}</span>
            </div>
          </div>
</div>
@endif

@if(count($errors) > 0)
<div id="signup-response" class="notification-container">
    <ul>
        @foreach ($errors->all() as $error)
            <li>
            
                    <div class="notification error">
                            <header>
                              <h2>Notice:</h2>
                              <span class="timestamp">Now</span>
                            </header>
                            <div class="content">
                              <span class="message">{{ $error }}</span>
                            </div>
                          </div>
            
            </li>
        @endforeach
    </ul>
</div>
@endif
