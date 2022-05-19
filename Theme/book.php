<?php
/**
* Template Name: Booking Page
*
* @package WordPress
* @subpackage Fångamon Cabin Resort
* @since Fångamon 1.0
*/

get_header('under');
wp_head();
?>
<h1 class="title-subpage"><?php the_title();?></h1>
<!-- Description of page/content -->
<section id="description">
    <h2 class="dont-show">Booking & Availability</h2>
        <div>
            <?php if(have_posts()) : while(have_posts()) : the_post(); 
                the_content();
                if ( has_post_thumbnail() ) { ?>
                    <picture><?php the_post_thumbnail( 'about' ); ?></picture> 
                <?php }  
                endwhile;
            endif ?>
        </div>
    </section>

<!-- Restaurant -->
<section id="booking">
    <form action="">
            <h3>Availablility Inquiry</h3>
            <div class="row">
                <div id="form-col-1">
                    <label class="dont-show" for="name"></label>
                    <input type="text" id="name" placeholder="NAME">
                    <label class="dont-show" for="email"></label>
                    <input type="email" id="email" placeholder="EMAIL">
                    <label class="dont-show" for="booking-message"></label>
                    <textarea id="booking-message" placeholder="Any special requests?"></textarea>
                </div>
                <div id="form-col-2">
                    <fieldset class="flex-row">
                        <label class="label width" for="checkin">Checkin:</label>
                        <input type="date" id="checkin" name="checkin">
                    </fieldset>
                    <fieldset class="flex-row">
                        <label class="label width" for="checkout">Checkout:</label>
                        <input type="date" id="checkout" name="checkout">
                    </fieldset>
                    <div class="row-2a">
                        <label class="label width" for="cabinType">Cabin Type:</label>
                        <div>
                            <fieldset>
                                <input type="checkbox" id="small-cabin" name="small" value="small">
                                <label class="nocolor" for="small-cabin">Small Cabin (2-3 pers)</label>
                            </fieldset>
                            <fieldset>
                                <input type="checkbox" id="large-cabin" name="large" value="large">
                                <label class="nocolor" for="large-cabin">Large Cabin (4-5 pers)</label><br>
                            </fieldset>
                        </div>
                    </div>
                    <div class="row-2a">
                        <label class="label width" for="nrPersons">Nr Persons:</label>
                        <div>
                            <fieldset>
                                <select name="adults" id="adults">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                <label class="nocolor" for="adults">Adults</label>
                            </fieldset>
                            <fieldset>
                                <select name="kids" id="kids">
                                    <option value="0" select>0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                <label class="nocolor" for="kids">Kids (under 10)</label>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-fullwidth">
                <h4>Add-ons</h4>
                <p>If you already know that you are wanting dinners, lunches or guided activities, please use this part of the form to let us know. This form books add-ons for all guests in your party. You are always welcome to add on to your package during your stay. Please note that we need 24 hrs notice for any add-ons or cancellations of previously booked add-ons.</p>
            </div>
            <div class="row addons"> <!-- row1 -->
                <fieldset class="flex-row">
                    <label class="label" for="day1">Day 1:</label>
                    <input class="date" type="date" id="day1" name="day1">
                </fieldset>
                <fieldset>
                    <select class="grey" name="activity" id="activity">
                        <option>Activity:</option>
                        <option value="0">None</option>
                        <option value="1">Guided Mountain hike</option>
                        <option value="2">Boating on the lake</option>
                        <option value="3">Cross Country Skiing</option>
                        <option value="4">Skating</option>
                        <option value="5">Downhill skiing</option>
                    </select>
                </fieldset>
                <div class="flex-row">
                    <fieldset>
                    <input type="checkbox" class="checkbox" id="lunch1" name="lunch" value="lunch">   
                    <label class="nocolor checkbox" for="lunch1">Lunch</label>
                    </fieldset><fieldset>
                    <input type="checkbox" class="checkbox" id="dinner1" name="dinner" value="dinner">
                    <label class="nocolor checkbox" for="dinner1">Dinner</label>
                    </fieldset>
                </div>

            </div>
            <div class="row addons"> <!-- row2 -->
                <fieldset class="flex-row">
                    <label class="label" for="day2">Day 2:</label>
                    <input class="date" type="date" id="day2" name="day2">
                </fieldset>
                <fieldset>
                    <select class="grey" name="activity" id="activity">
                        <option>Activity:</option>
                        <option value="0">None</option>
                        <option value="1">Guided Mountain hike</option>
                        <option value="2">Boating on the lake</option>
                        <option value="3">Cross Country Skiing</option>
                        <option value="4">Skating</option>
                        <option value="5">Downhill skiing</option>
                    </select>
                </fieldset>
                <div class="flex-row">
                    <fieldset>
                    <input type="checkbox" class="checkbox" id="lunch2" name="lunch" value="lunch">   
                    <label class="nocolor checkbox" for="lunch2">Lunch</label>
                    </fieldset><fieldset>
                    <input type="checkbox" class="checkbox" id="dinner2" name="dinner" value="dinner">
                    <label class="nocolor checkbox" for="dinner2">Dinner</label>
                    </fieldset>
                </div>
            </div>
            <div class="row addons"> <!-- row 3 -->
                <fieldset class="flex-row">
                    <label class="label" for="day3">Day 3:</label>
                    <input class="date" type="date" id="day3" name="day3">
                </fieldset>
                <fieldset>
                    <select class="grey" name="activity" id="activity">
                        <option>Activity:</option>
                        <option value="0">None</option>
                        <option value="1">Guided Mountain hike</option>
                        <option value="2">Boating on the lake</option>
                        <option value="3">Cross Country Skiing</option>
                        <option value="4">Skating</option>
                        <option value="5">Downhill skiing</option>
                    </select>
                </fieldset>
                <div class="flex-row">
                    <fieldset>
                    <input type="checkbox" class="checkbox" id="lunch3" name="lunch" value="lunch">   
                    <label class="nocolor checkbox" for="lunch3">Lunch</label>
                    </fieldset><fieldset>
                    <input type="checkbox" class="checkbox" id="dinner3" name="dinner" value="dinner">
                    <label class="nocolor checkbox" for="dinner3">Dinner</label>
                    </fieldset>
                </div>
            </div>
            <div class="row">
                <input class="submit availability" type="submit" value="SUBMIT">
            </div>
        </form>
   
</section>



</section>

<?php get_footer() ?>