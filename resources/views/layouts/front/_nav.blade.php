<div class="d-flex align-items-center">
    <div class="mr-auto">
        <nav class="site-navigation position-relative text-right" role="navigation">
            <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                <li class="active">
                    <a href="index.html" class="nav-link text-left">Home</a>
                </li>
                <li>
                    <a href="categories.html" class="nav-link text-left">Categories</a>
                </li>
                @foreach($featured_categories as $category)
                    <li>
                        <a href="categories.html" class="nav-link text-left">{{ $category->name }}</a>
                    </li>
                @endforeach
                <li><a href="contact.html" class="nav-link text-left">Contact</a></li>
            </ul>
        </nav>
    </div>
</div>
