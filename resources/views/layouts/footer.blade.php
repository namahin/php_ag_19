<footer>
    <div class="footer-content">
        <div class="footer-logo">{{$siteIdentity->title}}</div>
        <p class="copyright-text">© {{ now()->year }} · {{$siteIdentity->copyright}}</p>
        <ul class="social-icon">
            @foreach ($socialLinks as $socialLinks)
            <li><a title="{{$socialLinks->title}}" href="{{$socialLinks->slug}}">{!! $socialLinks->icon !!}</a></li>
            @endforeach
        </ul>
    </div>
</footer>
