@include('includes.header')



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
            
            <section class="section-3">

                <h1 class="section-3-heading">Choose your package</h1>

                <div class="subscription">

            

            <div class="pricingTable">
                <div class="pricingTable-header">
                    <h3 class="title">Enhance</h3>
                    <span class="currency">$</span>
                    <span class="price-value">69</span>
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
                    <a class="pricingTable-signup" href="#">Sign up</a>
                </div>
            </div>
   
 
    
            <div class="pricingTable">
                <div class="pricingTable-header">
                    <h3 class="title">Professional</h3>
                    <span class="currency">$</span>
                    <span class="price-value">99</span>
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
                    <a class="pricingTable-signup" href="#">Sign up</a>
                </div>
            </div>



      
            <div class="pricingTable">
                <div class="pricingTable-header">
                    <h3 class="title">Power</h3>
                    <span class="currency">$</span>
                    <span class="price-value">159</span>
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
                    <a class="pricingTable-signup" href="#">Sign up</a>
                </div>
            </div>
   
        

        </div>

            </section>

            <!-- Contact Form -->
             <section class="contact" id="contact">
		        <div class="contact-wrapper">
		          <div class="contact-left">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3115.7128915343897!2d-90.30375708492338!3d38.65548147960864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87df354ab95f1899%3A0x360059499d67d6e4!2sThai%20Gai%20Yang%20Cafe!5e0!3m2!1sen!2snp!4v1601179185074!5m2!1sen!2snp" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>      
                  </div>
		          <div class="contact-right">
		            <h1 class="contact-heading">Leave a reply</h1>
		            <form>
		              <div class="input-group">
		                <input type="text" class="field" />
		                <label class="input-label">Full Name</label>
		              </div>
		              <div class="input-group">
		                <input type="email" class="field" />
		                <label class="input-label">Email</label>
		              </div>
		              <div class="input-group">
		                <textarea class="field"></textarea>
		                <label class="message">Message</label>
		              </div>
		              <input type="submit" class="submit-btn" value="Submit" />
		            </form>
		          </div>
		        </div>
		      </section>


          @include('includes.footer')
    
