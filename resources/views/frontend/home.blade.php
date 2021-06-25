@include('includes.header')

@if(session('approve_subscription'))

                <div class="alert success">
                    <input type="checkbox" id="alert2"/>
                    <label class="close" title="close" for="alert2">
                <i class="icon-remove"></i>
                </label>
                    <p class="inner">
                    {{ session('approve_subscription') }}
                    </p>
                </div>

                @endif


@include('includes.navbar')

<div class="banner">
            <h1 class="banner-heading">Transport Solution</h1>
            <p class="banner-paragraph">FIND & SCHEDULE YOUR FAST AND SECURE MOVE HERE.</p>
            <button class="blue-btn">Learn More</button>
        </div>
        

       

   
        <div class="front-page">
            <!-- Section 2 -->
            <section class="section-2">
                <h1 class="section-2-heading">Our Transportation services</h1>
                <div class="services">
                    <div class="service">
                        <i class="fas fa-user-tie"></i>
                        <h3 class="service-heading">Carriers</h3>
                        <p class="service-paragraph">Carriers are vessels or vehicles for transporting things, especially goods in bulk.</p>
                        <a href="carrier.php"><button class="service-btn">Learn More</button></a>
                    </div>
                    <div class="service">
                        <i class="fas fa-briefcase"></i>
                        <h3 class="service-heading">Freight Brokers</h3>
                        <p class="service-paragraph">A freight broker is an intermediary between a shipper (who has goods to transport) and a carrier</p>
                        <a href="broker.php"><button class="service-btn">Learn More</button></a>
                    </div>
                    <div class="service">
                        <i class="far fa-handshake"></i>
                        <h3 class="service-heading">Shippers</h3>
                        <p class="service-paragraph">A Shipper is a person or company that sends or transports goods by sea, land, or air.</p>
                        <a href="shipper.php"><button class="service-btn">Learn More</button></a>
                    </div>
                </div>
            </section>
            <!-- End of Section 2 -->

            <div class="section-about">

<div class="about-section">
    <div class="inner-container">
        <h1>About Us</h1>
        <p class="text">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
        </p>

        <div class="role">
            <span>Shipper</span>
            <span>Broker</span>
            <span>Carrier</span>
        </div>
    </div>
</div>

</div>

          
            
            <section class="section-3">

                <h1 class="section-3-heading">Choose your package</h1>

                <div class="subscription">

            <div class="pricingTable">
                <div class="pricingTable-header">
                    <h3 class="title">{{$basic->slug}}</h3>
                    <span class="currency">$</span>
                    <span class="price-value">{{$basic->price}}</span>
                    <span class="month">per month</span>
                </div>
                <div class="pricing-content">
                    <ul>
                        <li><span>.</span>Avg rates for past 30 days</li>
                        <li><span>.</span>Our most popular plan</li>
                        <li><span>.</span>Broker credit scores</li>
                        <li><span>.</span>Broker avg days-to-pay</li>
                        <li><span>.</span>Plus all Standard features</li>
                    </ul>
                    @if (! optional(auth()->user())->hasActiveSubscription())

                        <a href="{{route('subscribe.show')}}"><button>Subscribe</button></a>
                    
                        @else
                          <button>Subscrption activated</button>
                        @endif

                </div>
            </div>
   
 
    
            <div class="pricingTable">
                <div class="pricingTable-header">
                    <h3 class="title">{{$premium->slug}}</h3>
                    <span class="currency">$</span>
                    <span class="price-value">{{$premium->price}}</span>
                    <span class="month">per month</span>
                </div>
                <div class="pricing-content">
                    <ul>
                    <li><span>.</span>Avg rates for past 30 days</li>
                        <li><span>.</span>Our most popular plan</li>
                        <li><span>.</span>Broker credit scores</li>
                        <li><span>.</span>Broker avg days-to-pay</li>
                        <li><span>.</span>Plus all Standard features</li>
                    </ul>
                    @if (! optional(auth()->user())->hasActiveSubscription())

                    <a href="{{route('subscribe.show')}}"><button>Subscribe</button></a>

                    @else
                    <button>Subscrption activated</button>
                        @endif

 
                </div>
            </div>



      
            <div class="pricingTable">
                <div class="pricingTable-header">
                    <h3 class="title">{{$professional->slug}}</h3>
                    <span class="currency">$</span>
                    <span class="price-value">{{$professional->price}}</span>
                    <span class="month">per month</span>
                </div>
                <div class="pricing-content">
                    <ul>
                    <li><span>.</span>Avg rates for past 30 days</li>
                        <li><span>.</span>Our most popular plan</li>
                        <li><span>.</span>Broker credit scores</li>
                        <li><span>.</span>Broker avg days-to-pay</li>
                        <li><span>.</span>Plus all Standard features</li>
                    </ul>

                        @if (! optional(auth()->user())->hasActiveSubscription())

                            <a href="{{route('subscribe.show')}}"><button>Subscribe</button></a>
                        
                        @else
                        <button>Subscrption activated</button>
                        @endif

                        
                </div>
            </div>

        </div>


            </section>

          <!-- Section 4 -->
          <section class="section-4" id="contact">
          <h1 class="section-3-heading">Contact Us</h1>
            <div class="form-container">
                <img src="/images/form-img.png" class="form-img">
                <form class="contact-form">
                    <input type="text" placeholder="Your Name">
                    <input type="email" placeholder="Your Email">
                    <textarea placeholder="Your Message"></textarea>
                    <input type="submit" value="Send">
                </form>
            </div>

        </section>
        <!-- End of Section 4 -->


          @include('includes.footer')


    
