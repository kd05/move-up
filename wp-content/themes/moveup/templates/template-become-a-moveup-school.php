<?php
/*
 * Template Name: Become a MoveUp School Template
 * description: Become a MoveUp School Template
 */

get_header();

?>


    <!--Banner Section Start-->
    <div class="inner-bg">
        <div class="container">
            <div class="text-blue inner-banner-caption inner-blue-text-banner">
                <h1>Become a MoveUp School</h1>
                <p>MoveUp uses the Future Plans career assessment and coaching process, which can be implemented flexibly to meet the needs of your school. We will work with you and individual students to understand how the data can help identify career pathways and make decisions about career technical education, College Credit Plus, and/or obtain industry credentials</p>
                <p>All our staff are trained by Future Plans, a non-profit organization that focuses on workforce development. Our career assessment, individualized coaching and data analysis have been proven to work throughout the state.</p>
            </div>
        </div>
    </div>
    <!--Banner Section End-->

    <?php
    //        Top Banner Image
    top_image_pages_html();
    ?>


    <!--Get Free Career Today Section Start-->
        <section class="image-content-section bg-white">
                <div class="img-bg" style="background-image: url(<?php echo get_template_directory_uri() ;?>/assets/images/career-ready-img.png)"> </div>
                <div class="image-content-block">
                    <h1>Career Ready</h1>
                    <p>The MoveUp Project has many resources to aid your school in developing career-ready students upon graduation. Most schools begin with the Future Plans career assessment and coaching process as a way to start developing a career plan for every student. MoveUp also can support schools with the development and execution of career days, career exploration class curriculum, summer workforce training, and the embedding of industry credentials (Ohio graduation points) into classes.</p>
                </div>
        </section>
    <!--Get Free Career Today Section End-->



    <!--Get Free Career Today Section Start-->
        <section class="image-content-section bg-gray">
            <div class="img-bg" style="background-image: url(<?php echo get_template_directory_uri() ;?>/assets/images/jobs-services-img.png)"> </div>
            <div class="image-content-block">
                <h1>Jobs Services</h1>
                <p>The process starts when participants take the career assessment and discover training options, career pathways, and their customized results during coaching. The MoveUp Project offers more by way of job shadowing, work experience, and internships. We work with schools, organizations, and businesses to ensure students have the tools necessary to plan their next steps.</p>
            </div>
        </section>
    <!--Get Free Career Today Section End-->



    <!--Get Free Career Today Section Start-->
        <section class="image-content-section bg-white">
            <div class="img-bg" style="background-image: url(<?php echo get_template_directory_uri() ;?>/assets/images/students-intership-img.png)"> </div>
            <div class="image-content-block">
                <h1>Student Internships</h1>
                <p>The MoveUp project works to connect students to great mentorship, shadow and internship opportunities with local businesses and organizations. (Students who show aptitude and interest in PR and IT may be interested in our own marketing internship program). These experiences allow students the opportunity to learn new skills, work as part of a team, and in some cases, earn money as they take their initial steps into a career.</p>
            </div>
        </section>
    <!--Get Free Career Today Section End-->



    <!--Get Free Career Today Section Start-->
        <section class="image-content-section bg-gray">
            <div class="img-bg" style="background-image: url(<?php echo get_template_directory_uri() ;?>/assets/images/collabration-img.png)"> </div>
            <div class="image-content-block">
                <h1>Collaboration</h1>
                <p>The MoveUp Project collaborates with schools, organizations, and businesses to increase <br> opportunities for growth in the lives of individuals and in the community.  Through partnerships in the <br> community  we are able to offer training, credentials, experience, and  <br>employment opportunities.</p>
            </div>
        </section>
    <!--Get Free Career Today Section End-->



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
                            <input type="checkbox" name="color" checked value="checkbox" id="checkbox">
                            <span class="checkmark"></span>
                            Lorem Ipsum
                        </label>
                        <label class="checkbox" for="checkbox1">
                            <input type="checkbox" name="color" checked value="checkbox1" id="checkbox1">
                            <span class="checkmark"></span>
                            Lorem Ipsum
                        </label>
                        <label class="checkbox" for="checkbox2">
                            <input type="checkbox" name="color" checked value="checkbox2" id="checkbox2">
                            <span class="checkmark"></span>
                            Lorem Ipsum
                        </label>
                        <label class="checkbox" for="checkbox3">
                            <input type="checkbox" name="color" checked value="checkbox3" id="checkbox3">
                            <span class="checkmark"></span>
                            Lorem Ipsum
                        </label>
                        <label class="checkbox" for="checkbox4">
                            <input type="checkbox" name="color" checked value="checkbox4" id="checkbox4">
                            <span class="checkmark"></span>
                            Lorem Ipsum
                        </label>
                        <label class="checkbox" for="checkbox5">
                            <input type="checkbox" name="color" checked value="checkbox5" id="checkbox5">
                            <span class="checkmark"></span>
                            Lorem Ipsum
                        </label>
                    </div>
                    
                </div>
            </div>
            <button type="button" class="btn">Submit</button>
            </form>
        </div>
    </section>
    <!--Form Section End-->




<?php get_footer(); ?>