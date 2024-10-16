<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}



function ewc_general_contact_form_shortcode( $atts, $content = null ) {
    ob_start();
    ?>
    <section class="form-block">
        <div class="container">
            <form class="form bg-white">
                <h1>General Contact</h1>
                <p>Complete this form to get started.</p>
                <div class="form-panel">
                    <div class="form-control">
                        <label for="">First Name *</label>
                        <input type="text" placeholder="Type your first name" />
                    </div>
                    <div class="form-control">
                        <label for="">Last Name *</label>
                        <input type="text" placeholder="Type your last name" />
                    </div>
                    <div class="form-control">
                        <label for="">Email *</label>
                        <input type="text" placeholder="youremail@email.com" />
                    </div>
                    <div class="form-control">
                        <label for="">Phone</label>
                        <input type="text" placeholder="Type your phone number" />
                    </div>
                    <div class="form-control">
                        <label for="">County *</label>
                        <div class="form-select">
                            <select>
                                <option value="">Select your county</option>
                                <option value="Defiance">Defiance</option>
                                <option value="Erie">Erie</option>
                                <option value="Fulton">Fulton</option>
                                <option value="Henry">Henry</option>
                                <option value="Huron">Huron</option>
                                <option value="Lorain">Lorain</option>
                                <option value="Lucas">Lucas</option>
                                <option value="Ottawa">Ottawa</option>
                                <option value="Paulding">Paulding</option>
                                <option value="Sandusky">Sandusky</option>
                                <option value="Williams">Williams</option>
                                <option value="Wood">Wood</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-control">
                        <label for="">Message *</label>
                        <textarea placeholder="Type your message"></textarea>
                    </div>
                </div>
                <button type="button" class="btn">Submit</button>
            </form>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode( 'ewc_general_contact_form', 'ewc_general_contact_form_shortcode' );



function ewc_assessment_form_shortcode( $atts, $content = null ) {
    ob_start();
    ?>
    <section class="form-block">
        <div class="container">
            <form class="form bg-white">
                <h1>Get Started/Assessment Form</h1>
                <p>Complete this form to get started.</p>
                <div class="form-panel">
                    <div class="form-control">
                        <label for="">First Name *</label>
                        <input type="text" placeholder="Type your first name" />
                    </div>
                    <div class="form-control">
                        <label for="">Last Name *</label>
                        <input type="text" placeholder="Type your last name" />
                    </div>
                    <div class="form-control">
                        <label for="">Email *</label>
                        <input type="text" placeholder="youremail@email.com" />
                    </div>
                    <div class="form-control">
                        <label for="">Phone</label>
                        <input type="text" placeholder="Type your phone number" />
                    </div>
                    <div class="form-control">
                        <label for="">What school do you currently attend? (If Applicable)</label>
                        <input type="text" placeholder="Type your school name" />
                    </div>
                    <div class="form-control">
                        <label for="">What county in Ohio do you live in? *</label>
                        <div class="form-select">
                            <select>
                                <option value="">Select your county</option>
                                <option value="Defiance">Defiance</option>
                                <option value="Erie">Erie</option>
                                <option value="Fulton">Fulton</option>
                                <option value="Henry">Henry</option>
                                <option value="Huron">Huron</option>
                                <option value="Lorain">Lorain</option>
                                <option value="Lucas">Lucas</option>
                                <option value="Ottawa">Ottawa</option>
                                <option value="Paulding">Paulding</option>
                                <option value="Sandusky">Sandusky</option>
                                <option value="Williams">Williams</option>
                                <option value="Wood">Wood</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-control">
                        <label for="">Age *</label>
                        <input type="number" placeholder="Type your age" />
                    </div>
                    <div class="form-control">
                        <label for="">Anticipated Graduation Date (If Applicable)</label>
                        <input type="date" />
                    </div>
                </div>
                <button type="button" class="btn">Submit</button>
            </form>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode( 'ewc_assessment_form', 'ewc_assessment_form_shortcode' );



function ewc_get_involved_form_shortcode( $atts, $content = null ) {
    ob_start();
    ?>
    <section class="form-block">
        <div class="container">
            <form class="form bg-white">
                <h1>Get Involved</h1>
                <p>Complete this form to get involved.</p>
                <div class="form-panel">
                    <div class="form-control">
                        <label for="">First Name *</label>
                        <input type="text" placeholder="Type your first name" />
                    </div>
                    <div class="form-control">
                        <label for="">Last Name *</label>
                        <input type="text" placeholder="Type your last name" />
                    </div>
                    <div class="form-control">
                        <label for="">Email *</label>
                        <input type="text" placeholder="youremail@email.com" />
                    </div>
                    <div class="form-control">
                        <label for="">Phone</label>
                        <input type="text" placeholder="Type your phone number" />
                    </div>
                    <div class="form-control">
                        <label for="">County *</label>
                        <div class="form-select">
                            <select>
                                <option value="">Select your county</option>
                                <option value="Defiance">Defiance</option>
                                <option value="Erie">Erie</option>
                                <option value="Fulton">Fulton</option>
                                <option value="Henry">Henry</option>
                                <option value="Huron">Huron</option>
                                <option value="Lorain">Lorain</option>
                                <option value="Lucas">Lucas</option>
                                <option value="Ottawa">Ottawa</option>
                                <option value="Paulding">Paulding</option>
                                <option value="Sandusky">Sandusky</option>
                                <option value="Williams">Williams</option>
                                <option value="Wood">Wood</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-control">
                        <label for="">I’d like to *</label>
                        <div class="form-select">
                            <select>
                                <option value="">Select your involvement</option>
                                <option value="MoveUp School">Become a MoveUp School</option>
                                <option value="Career Coach">Become A Career Coach</option>
                                <option value="OMJ Partner">Become an Ohio Means Jobs Partner</option>
                                <option value="Company Partner">Become a Company Partner</option>
                                <option value="Partner Organization">Become a Partner Organization</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-control">
                        <label for="">School District/OMJ Agency/Organization Name *</label>
                        <input type="text" placeholder="Type your organization name" />
                    </div>
                    <div class="form-control">
                        <label for="">Message</label>
                        <textarea placeholder="Type your message"></textarea>
                    </div>
                </div>
                <button type="button" class="btn">Submit</button>
            </form>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode( 'ewc_get_involved_form', 'ewc_get_involved_form_shortcode' );



function ewc_summer_program_form_shortcode( $atts, $content = null ) {
    ob_start();
    ?>
    <section class="form-block">
        <div class="container">
            <form class="form bg-white">
                <h1>Summer Program</h1>
                <p>Complete this form to apply for the summer program.</p>
                <div class="form-panel">
                    <div class="form-control">
                        <label for="">First Name *</label>
                        <input type="text" placeholder="Type your first name" />
                    </div>
                    <div class="form-control">
                        <label for="">Last Name *</label>
                        <input type="text" placeholder="Type your last name" />
                    </div>
                    <div class="form-control">
                        <label for="">Email *</label>
                        <input type="text" placeholder="youremail@email.com" />
                    </div>
                    <div class="form-control">
                        <label for="">Phone</label>
                        <input type="text" placeholder="Type your phone number" />
                    </div>
                    <div class="form-control">
                        <label for="">What school do you currently attend? *</label>
                        <input type="text" placeholder="Type your school name" />
                    </div>
                    <div class="form-control">
                        <label for="">What county in Ohio do you live in? *</label>
                        <div class="form-select">
                            <select>
                                <option value="">Select your county</option>
                                <option value="Defiance">Defiance</option>
                                <option value="Erie">Erie</option>
                                <option value="Fulton">Fulton</option>
                                <option value="Henry">Henry</option>
                                <option value="Huron">Huron</option>
                                <option value="Lorain">Lorain</option>
                                <option value="Lucas">Lucas</option>
                                <option value="Ottawa">Ottawa</option>
                                <option value="Paulding">Paulding</option>
                                <option value="Sandusky">Sandusky</option>
                                <option value="Williams">Williams</option>
                                <option value="Wood">Wood</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-control">
                        <label for="">What is your graduation year? *</label>
                        <input type="number" placeholder="Type your graduation year" />
                    </div>
                    <div class="form-control">
                        <label for="">What is your current GPA? (If Available)</label>
                        <input type="text" placeholder="Type your GPA" />
                    </div>
                </div>
                <button type="button" class="btn">Submit</button>
            </form>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode( 'ewc_summer_program_form', 'ewc_summer_program_form_shortcode' );







//NOT USED
function ewc_form_shortcode( $atts, $content = null ) {
    $a =  shortcode_atts( array(
    ), $atts );
    ob_start();
    ?>

    <!--Form Section Start-->
    <section class="form-block">
        <div class="container">
            <form class="form bg-white">
                <h1>MoveUp Today</h1>
                <p>Complete this form to get started. </p>
                <div class="form-panel">
                    <div class="form-control">
                        <label for="">Name *</label>
                        <input type="text" placeholder="Type name" />
                    </div>
                    <div class="form-control">
                        <label for="">EMail *</label>
                        <input type="text" placeholder="youremail@email.com" />
                    </div>
                    <div class="form-control">
                        <label for="">Phone *</label>
                        <input type="text" placeholder="Type number" />
                    </div>
                    <div class="form-control">
                        <label for="">Education</label>
                        <div class="form-select">
                            <select class="">
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="opel">Opel</option>
                                <option value="audi">Audi</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-control">
                        <label for="">Location</label>
                        <div class="form-select">
                            <select class="">
                                <option value="volvo">Select your county from drop down</option>
                                <option value="saab">Saab</option>
                                <option value="opel">Opel</option>
                                <option value="audi">Audi</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-control">
                        <label for="">What can we help you with</label>
                        <span>Check all that apply</span>
                        <div class="custom-checkbox">
                            <label class="checkbox" for="checkbox">
                                <input type="checkbox" name="color[]" value="checkbox" id="checkbox" checked>
                                <span class="checkmark"></span>
                                Option 1
                            </label>
                            <label class="checkbox" for="checkbox1">
                                <input type="checkbox" name="color[]" value="checkbox1" id="checkbox1" checked>
                                <span class="checkmark"></span>
                                Option 2
                            </label>
                            <label class="checkbox" for="checkbox2">
                                <input type="checkbox" name="color[]" value="checkbox2" id="checkbox2" checked>
                                <span class="checkmark"></span>
                                Option 3
                            </label>
                            <label class="checkbox" for="checkbox3">
                                <input type="checkbox" name="color[]" value="checkbox3" id="checkbox3" checked>
                                <span class="checkmark"></span>
                                Option 4
                            </label>
                            <label class="checkbox" for="checkbox4">
                                <input type="checkbox" name="color[]" value="checkbox4" id="checkbox4" checked>
                                <span class="checkmark"></span>
                                Option 5
                            </label>
                            <label class="checkbox" for="checkbox5">
                                <input type="checkbox" name="color[]" value="checkbox5" id="checkbox5" checked>
                                <span class="checkmark"></span>
                                Option 6
                            </label>
                        </div>


                    </div>
                </div>
                <button type="button" class="btn">Submit</button>
            </form>
        </div>
    </section>
    <!--Form Section End-->


    <?php
    $output = ob_get_clean();
    return $output;
}
add_shortcode( 'ewc_form', 'ewc_form_shortcode' );