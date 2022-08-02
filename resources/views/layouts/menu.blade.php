<li class="nav-header">Website Management</li>
<li class="nav-item">
    <a href="{{ route('websettings.index') }}"
       class="nav-link {{ Request::is('websettings*') ? 'active' : '' }}">
        <p>@lang('models/websettings.singular')</p>
    </a>
</li>

