@php
  $id = Auth::user()->id;
  $agentId = App\Models\User::find($id);
  $status = $agentId->status;
@endphp

<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          Ishal<span>Agent</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="{{ route('agent.dashboard') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
          @if($status === 'active')
          <li class="nav-item nav-category">RealEstate</li>
          
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#agentproperty" role="button" aria-expanded="false" aria-controls="emails">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">Agent Property</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="agentproperty">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('agent.all.property') }}" class="nav-link">Agent All Property</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('agent.add.property') }}" class="nav-link">Agent Add Property</a>
                </li>
                
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a href="{{ route('buy.package') }}" class="nav-link">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">Buy Package</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('package.history') }}" class="nav-link">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">Package History</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('agent.property.message') }}" class="nav-link">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">Property Message</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('agent.schedule.request') }}" class="nav-link">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">Schedule Request</span>
            </a>
          </li>
          <li class="nav-item nav-category">Components</li>
          <li class="nav-item">
            <a href="{{ route('agent.live.chat') }}" class="nav-link">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">Live Chat</span>
            </a>
          </li>
          
          @else

          @endif
          <li class="nav-item nav-category">Docs</li>
          <li class="nav-item">
            <a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank" class="nav-link">
              <i class="link-icon" data-feather="hash"></i>
              <span class="link-title">Documentation</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>