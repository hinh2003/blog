<div class="header-top">
    <div class="container">
        <div class="head-main">
            <a href="{{ url('/') }}"><img src="{{ asset('images/logo-1.png') }}" alt="" /></a>
        </div>
    </div>
</div>

<div class="header">
    <div class="container">
        <div class="head">
            <div class="navigation">
                <span class="menu"></span>
                <ul class="navig">
                    <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{ url('/about') }}">About</a></li>
                    <li><a href="{{ url('/gallery') }}" class="{{ request()->is('gallery') ? 'active' : '' }}">Gallery</a></li>
                    <li><a href="{{ url('/typo') }}">Typo</a></li>
                    <li><a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
                </ul>
            </div>
            <div class="header-right">
                <div class="search-bar">
                    <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                    <input type="submit" value="">
                </div>
                <ul>
                    <li><a href="#"><span class="fb"> </span></a></li>
                    <li><a href="#"><span class="twit"> </span></a></li>
                    <li><a href="#" >Login</a></li>
                    <li><a href="#" >Register</a></li>

                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<script>
    $("span.menu").click(function(){
        $(" ul.navig").slideToggle("slow");
    });
</script>
