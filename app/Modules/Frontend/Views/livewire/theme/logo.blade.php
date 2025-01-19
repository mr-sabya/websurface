@if($isFooter)
<a href="/" class="footer-logo">
    <img src="{{ url('assets/frontend/img/footer-logo.png') }}" alt="Logo" />
</a>
@else
<a href="/" wire:navigate class="header-logo">
    <img src="{{ url('assets/frontend/img/logo.png') }}" alt="Logo" />
</a>
@endif

