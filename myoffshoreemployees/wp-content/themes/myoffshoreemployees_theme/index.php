<?php
/* 
Template Name: Index Page
*/

get_header();
?>



<div class="hero-section" style="background: linear-gradient(to right, rgba(61, 137, 218, 0.5), rgba(255, 165, 0, 0.5)), 
           url('https://www.elegantthemes.com/layouts/wp-content/uploads/2018/05/marketing-bg6.png');
           background-size: cover; 
           background-position: center; 
           background-repeat: no-repeat; 
           height: 600px; 
           transform: translate(0px, 164.3px);">
    <div class="hero-content">
        <h2 class="hero_subtitle"> My OFFSHOREEM EMPLOYEES</h2>
        <h1 class="hero_title">We help you attain Cost Efficiency, Scalability, and 5x revenue</h1>
        <p class="hero_description">Reduce operational and labor costs while focusing on core business functions and
            multiplying revenue at jet speed.</p>
        <a href="#" class="hero_button">GET STARTED</a>
    </div>
</div>







<div class="overlap-section">
    <div class="overlap-content">
        <div class="overlap-animation">
            <!-- Add the Lottie player element -->
            <lottie-player src="https://lottie.host/2d99ec46-430e-4e2e-aa0e-fe109d105e79/djAP48ouxq.json"
                background="transparent" speed="1" style="width: 600px; height: 600px;" loop autoplay>
            </lottie-player>
        </div>
        <div class="overlap_right-content">
            <h2 class="overlap_section-title">Get Started For Free!</h2>
            <p class="overlap_section-description">Avail cost efficiency, focus on core activities, access to expertise,
                scalability, improved service quality, risk management, time zone advantage, increased flexibility,
                faster time to market.</p>
            <a href="#" class="overlap_section-button">SCHEDULE A CALL</a>
        </div>
    </div>
</div>





<div class="provide_service_container">
    <h1 class="provide_service_heading">We've Got You Covered</h1>
    <div class="provide_services">
        <div class="provide_service">
            <div class="provide_service_icon purple"></div>
            <h2>Access to Expertise</h2>
            <p>Leverage specialized skills and technology for improved service quality</p>
        </div>
        <div class="provide_service">
            <div class="provide_service_icon pink"></div>
            <h2>Risk Management
            </h2>
            <p>Work hours are not anymore restriction to growth of your business</p>
        </div>
        <div class="provide_service">
            <div class="provide_service_icon orange"></div>
            <h2>Share or transfer risks associated with business processes.</h2>
            <p>Scale up or down based on business needs for increased flexibility.</p>
        </div>
        <div class="provide_service">
            <div class="provide_service_icon pink"></div>
            <h2>Risk Management
            </h2>
            <p>Work hours are not anymore restriction to growth of your business</p>
        </div>
    </div>
</div>








<div class="why-choose-us">
    <div class="why-choose-us_content">
        <div class="why-choose-us_image-container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/why_choose_us.avif"
                alt="Why Choose Us?" />
        </div>
        <div class="why-choose-us_description">
            <h2>Why Choose Us?</h2>
            <p>
                Reduce costs, enhance efficiency, mitigate risks, and accelerate time-to-market
                with our offshore business process outsourcing services.
            </p>
        </div>
    </div>
</div>







<div class="efficiency-section">
    <div class="efficiency-section_container">
        <h1 class="efficiency-section_title">Outsource Efficiency Solutions</h1>
        <p class="efficiency-section_subtitle">
            Reduce costs, focus on core activities, access expertise, scale operations, and improve service quality.
        </p>
        <div class="efficiency-section_card_container">
            <div class="efficiency-section_card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/efficiency_solution1.avif" alt=" Piggy
                    Bank" class="efficiency-section_card_image">
                <h3 class="card_title">Compensation, spend and risks optimised</h3>
                <p class="efficiency-section_card_text">
                    Share or transfer risks associated with business processes for better risk management. Lower down
                    your office and employee costs.
                </p>
            </div>
            <div class="efficiency-section_card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/efficiency_solution2.avif"
                    alt="Hourglass" class="efficiency-section_card_image">
                <h3 class="efficiency-section_card_title">Time Zone Advantage</h3>
                <p class="efficiency-section_card_text">
                    Provide round-the-clock business operations for increased flexibility and faster time to market.
                </p>
            </div>
            <div class="efficiency-section_card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/efficiency_solution3.avif"
                    alt="Clock" class="efficiency-section_card_image">
                <h3 class="efficiency-section_card_title">Accelerate Time-to-Market</h3>
                <p class="efficiency-section_card_text">
                    Increased flexibility—accelerating your sales, marketing, and penetration in the market.
                </p>
            </div>
        </div>
    </div>
</div>








<div class="success_stories">
    <h2 class="success_heading">Success Stories</h2>
    <div class="success_stories_cards">
        <div class="success_stories_card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/review1.jpg" alt="Success Story 1"
                class="success_stories_card_image">
            <p>Story 1: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                labore et dolore magna.</p>
        </div>
        <div class="success_stories_card middle_card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/review2.jpg" alt="Success Story 2"
                class="success_stories_card_image">
            <p>Story 2: This is the highlight story. It showcases a larger success story for emphasis and detail.</p>
        </div>
        <div class="success_stories_card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/review3.jpg" alt="Success Story 3"
                class="success_stories_card_image">
            <p>Story 3: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                labore et dolore magna.</p>
        </div>
    </div>
</div>





<div class="get_started">
    <div class="get_started_content">
        <h2>LET'S GET STARTED</h2>
        <h3>Ready To Make a Real Change? Let's Build this Thing Together!</h3>
        <button class="get_start_btn">SETUP A FREE MEETING</button>


    </div>
</div>

<?php get_footer(); // Include footer.php 
?>