<footer>
        <div class="footer-line"></div>
        <div class="footer-wrapper">
            <section class="footer-top">
                <div class="footer-headline">
                    <h2 class="footer_title lang" key="footer_title">{{ __('app.footer_title') }}</h2>
                    <!-- <p>Stay up to date with our news and articles</p> -->
                </div>
                <!-- <div class="footer-subscribe">
      <input type="email" spellcheck="false" placeholder="Your Email">
      <button>Sign Up</button>
    </div> -->
            </section>
            <div class="footer-columns">
                <div class="sections">
                    <section class="footer-logo">
                        <h2>
                            <img class="footer_img" src="{{ asset('images/static_img/photo_2023-11-22_17-49-31.png') }}" alt="">
                        </h2>
                    </section>
                    <section>
                        <h3 class="lang" key="categories">{{ __('app.categories') }}</h3>
                        <ul>
                        @foreach($categories_footer as $category_footer)

                            <li>
                                <a href="{{ route('category.show', ['locale' => app()->getLocale(), 'slug' => $category_footer->{'slug_' . app()->getLocale()}]) }}" title="API">{{ $category_footer->{'name_' . app()->getLocale()} }}</a>
                            </li>
                            @endforeach

                           
                            <!-- more Links -->
                        </ul>
                    </section>
                    <section>
                        <h3 class="lang" key="projects">{{ __('app.projects') }}</h3>
                        <ul>
                        @foreach($projects_footer as $project_footer)

                            <li>
                                <a href="{{ route('project.show', ['locale' => app()->getLocale(), 'slug' => $project_footer->{'slug_' . app()->getLocale()}]) }}" title="API">{{ $project_footer->{'name_' . app()->getLocale()} }}</a>
                            </li>
                            @endforeach

                          
                            <!-- more Links -->
                        </ul>
                    </section>
                    <section>
                        <h3 class="lang" key="products">{{ __('app.products') }}</h3>
                        <ul>
                        @foreach($products_footer as $product_footer)

                            <li>
                                <a href="{{ route('product.show', ['locale' => app()->getLocale(), 'slug' => $product_footer->{'slug_' . app()->getLocale()}]) }}" title="API">{{ $product_footer->{'name_' . app()->getLocale()}  }}</a>
                            </li>
                            @endforeach

                           
                            <!-- more Links -->
                        </ul>
                    </section>
                    <section>
                        <h3 class="lang" key="interier_design">{{ __('app.interier_design') }}</h3>
                        <ul>
                        @foreach($interier_designs_footer as $interier_design_footer)

                            <li>
                                <a href="{{ route('interier_design.show', ['locale' => app()->getLocale(), 'slug' => $interier_design_footer->{'slug_' . app()->getLocale()}]) }}" title="API">{{ $interier_design_footer->{'name_' . app()->getLocale()}  }}</a>
                            </li>
                            @endforeach

                           
                            <!-- more Links -->
                        </ul>
                    </section>
                </div>
                <!-- More sections -->
                <div class="footer-bottom">
                    <div class="social-links">
                        <ul class="wrapper">
                            <a href="">
                                <li class="icon facebook">
                                    <span class="tooltip">Facebook</span>
                                    <span>
                                        <i class="fab fa-facebook-f"></i>
                                    </span>
                                </li>
                            </a>
                            <a href="https://t.me/euro_light">
                                <li class="icon twitter">
                                    <span class="tooltip">Telegram</span>
                                    <span>
                                        <i class="fab fa-telegram"></i>
                                    </span>
                                </li>
                            </a>
                            <a href="https://www.instagram.com/lyustra_eurolight/">
                                <li class="icon instagram">
                                    <span class="tooltip">Instagram</span>
                                    <span>
                                        <i class="fab fa-instagram"></i>
                                    </span>
                                </li>
                            </a>
                            <a href="">
                                <li class="icon youtube">
                                    <span class="tooltip">Youtube</span>
                                    <span>
                                        <i class="fab fa-youtube"></i>
                                    </span>
                                </li>
                            </a>
                        </ul>
                    </div>
                    <small class="lang" key="powered_by">{{ __('app.powered_by') }}</small>
                </div>
            </div>
        </footer>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="{{ asset('js/ckeditor.js') }}" defer></script>
