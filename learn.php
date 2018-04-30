<!-- head here  -->
<?php
include_once("header.php");
?>
<!-- head ends -->

<style>
    /* horizontal line learn page */
    hr.under-line {
        width: 10%;
        border-top: 3px solid #000;
    }
    /* card */
    .learn-card {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        height: auto;
        margin: 2em 0em;
    }
    .learn-icon {
        background: #E1E1E1;
        border: none;
        flex: 1 1 20%;
        cursor: pointer;
        display: flex;
        justify-content: center;
        padding: 1em;
    }
    .learn-icon:hover {
        background: #48BBFC;
    }
    .learn-desc {
        border: 1px solid #E1E1E1;
        flex: 1 1 60%;
        padding: 0.4em 1em;
    }
    .learn-desc p {
        margin: 5px 0;
    }
    .learn-desc a {
        font-size: 0.6em;
        color: #48BBFC;
        text-decoration: underline;
    }
    .title {
        font-weight: 600;
        font-size: 0.7em;
    }
    .brief {
        font-size: 0.6em;
    }

    /* media queries */
    @media (min-width: 900px) { 
        .learn-card {
            flex-direction: row;
        } 
    }
</style>

<div class="container">
    <div class="row justify-content-md-center text-center">
        <div class="col"></div>
        <div class="col-8" style="margin-top: 1em;">
            <h1 class="sponsorsbg-text pt-5 text-center hero-text">What Interns Learn</h1>
            <hr class="under-line">
            <span>
                HNG 4.0 has been a life-transforming journey for interns across Africa.
                Don’t take our word for it...take theirs. Sample text.
            </span>
        </div>
        <div class="col"></div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col"></div>
        <div class="col-8">
            <div class="learn-card">
                <div class="learn-icon">
                    <img alt="learn-icon" src="svg/learn-1.svg">
                </div>
                <div class="learn-desc">
                    <p>
                        <span class="title">
                            Principles of Product Design (UI/UX)
                        </span><br>
                        <span class="brief">
                        Introducing you to a world of interface design with real-time collaboration using figma. 
                        First of it's kind, Figma enables teams carry outprojects in one page, 
                        while keeping all feedback changes and updates constantly in sync.
                        </span>
                    </p>
                    <p>
                        <span class="title">
                        Learning Resources
                        </span><br>
                        <span class="brief">
                        Curriculum for UI/UX Beginners paper.dropbox.com/doc...
                        </span>
                        
                    </p>
                    <p>
                        <span class="title">
                        An Introduction to User Experience Design
                        </span><br>
                        <span class="brief">
                        hackdesign.org
                        User Experience Design Resources - Prototype blog.prototypr.io/user...
                        </span>
                    </p>
                    <a href="#">See Learning Resources <i class="fa fa-chevron-right"></i></a>   
                </div>
            </div>
            <div class="learn-card">
                <div class="learn-icon">
                    <img alt="learn-icon" src="svg/learn-2.svg">
                </div>
                <div class="learn-desc">
                    <p>
                        <span class="title">
                        Front-End Development (HTML/CSS/SASS/Vue)
                        </span><br>
                        <span class="brief">
                        Introducing you to a world of interface design with real-time collaboration using figma. 
                        First of it's kind, Figma enables teams carry outprojects in one page, 
                        while keeping all feedback changes and updates constantly in sync.
                        </span>
                    </p>
                    <a href="#">See Learning Resources <i class="fa fa-chevron-right"></i></a>   
                </div>
            </div>
            <div class="learn-card">
                <div class="learn-icon">
                    <img alt="learn-icon" src="svg/learn-3.svg">
                </div>
                <div class="learn-desc">
                    <p>
                        <span class="title">
                        Back-End Development (PHP/Laravel)
                        </span><br>
                        <span class="brief">
                        Introducing you to a world of interface design with real-time collaboration using figma. 
                        First of it's kind, Figma enables teams carry outprojects in one page, 
                        while keeping all feedback changes and updates constantly in sync.
                        </span>
                    </p>
                    <a href="#">See Learning Resources <i class="fa fa-chevron-right"></i></a>   
                </div>
            </div>
            <div class="learn-card">
                <div class="learn-icon">
                    <img alt="learn-icon" src="svg/learn-4.svg">
                </div>
                <div class="learn-desc">
                    <p>
                        <span class="title">
                        Dev-Ops (Ubuntu, Nginx, Docker)
                        </span><br>
                        <span class="brief">
                        Introducing you to a world of interface design with real-time collaboration using figma. 
                        First of it's kind, Figma enables teams carry outprojects in one page, 
                        while keeping all feedback changes and updates constantly in sync.
                        </span>
                    </p>
                    <a href="#">See Learning Resources <i class="fa fa-chevron-right"></i></a>   
                </div>
            </div>
            <div class="learn-card">
                <div class="learn-icon">
                    <img alt="learn-icon" src="svg/learn-5.svg">
                </div>
                <div class="learn-desc">
                    <p>
                        <span class="title">
                        Databases(MySQL)
                        </span><br>
                        <span class="brief">
                        Introducing you to a world of interface design with real-time collaboration using figma. 
                        First of it's kind, Figma enables teams carry outprojects in one page, 
                        while keeping all feedback changes and updates constantly in sync.
                        </span>
                    </p>
                    <a href="#">See Learning Resources <i class="fa fa-chevron-right"></i></a>   
                </div>
            </div>
            <div class="learn-card">
                <div class="learn-icon">
                    <img alt="learn-icon" src="svg/learn-6.svg">
                </div>
                <div class="learn-desc">
                    <p>
                        <span class="title">
                        Version Control (GIT)
                        </span><br>
                        <span class="brief">
                        Introducing you to a world of interface design with real-time collaboration using figma. 
                        First of it's kind, Figma enables teams carry outprojects in one page, 
                        while keeping all feedback changes and updates constantly in sync.
                        </span>
                    </p>
                    <a href="#">See Learning Resources <i class="fa fa-chevron-right"></i></a>   
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>    

<!-- Footer -->
<?php
include_once("footer.php");
?>