<li class="nav-item">
    <a href="{{ route('websettings.index') }}"
       class="nav-link {{ Request::is('websettings*') ? 'active' : '' }}">
        <p>@lang('models/websettings.plural')</p>
    </a>
</li>

