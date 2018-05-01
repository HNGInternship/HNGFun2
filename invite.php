<?php
include_once("header.php");
?>
<style>
    .invite-content{
        margin:0;
        background:white;
        width:100%;
        min-height: 460px;
   }
    .right-side{
        min-height:460px;
        background: #2196F3;
        margin-right:0;
        /* margin-bottom: 2rem; */
    }
    .left-side{
        width:50%;
        padding-left:10rem;
    }
    #sendInvitesButton{
        width: 200px;
        height:40px
    }
    .icons-invite{
        margin: 10rem 10rem;
    }
</style>

    <div class=" invite-content container-fluid">
            <div class="row align-items-center">
                <div class="col left-side">
                    <h3 class="text-left">Invite Your Friends</h3>
                    <p class="text-muted text-left">
                        Together we can build a better, enviable Africa.<br>  
                        Invite a friend to join the tech revolution now!
                    </p>
                    <a href="invite-emails.php" class="btn btn-md btn-primary" id="sendInvitesButton">Send Invites</a>
                </div>   
                <!-- /right:div -->
            
                <div class="col right-side">
                    <!-- The SVG/PNG for the letter goess here -->
                    <svg class="icons-invite" width="200" height="200" viewBox="0 0 261 261" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Canvas" fill="none">
                    <g id="Ellipse">
                    <circle cx="130.5" cy="130.5" r="130.5" fill="white"/>
                    </g>
                    <g id="ic_email_black_24px">
                    <g id="Vector">
                    <path d="M 62.234 0L 6.91489 0C 3.1117 0 0.0345744 3.10955 0.0345744 6.91011L 0 48.3707C 0 52.1713 3.1117 55.2808 6.91489 55.2808L 62.234 55.2808C 66.0372 55.2808 69.1489 52.1713 69.1489 48.3707L 69.1489 6.91011C 69.1489 3.10955 66.0372 0 62.234 0ZM 62.234 13.8202L 34.5744 31.0955L 6.91489 13.8202L 6.91489 6.91011L 34.5744 24.1854L 62.234 6.91011L 62.234 13.8202Z" transform="matrix(0.847033 -0.53154 0.532757 0.846268 94.5171 91.2236)" fill="#2196F3"/>
                    </g>
                    </g>
                    <g id="Ellipse 2">
                    <circle cx="4.81949" cy="4.81949" r="4.81949" transform="translate(81.957 86.9313)" fill="#2196F3"/>
                    </g>
                    <g id="Ellipse 2.2">
                    <circle cx="8.76271" cy="8.76271" r="8.76271" transform="translate(161.698 191.208)" fill="#2196F3" fill-opacity="0.5"/>
                    </g>
                    <g id="Ellipse 2.1">
                    <circle cx="9.63898" cy="9.63898" r="9.63898" transform="translate(179.224 86.9313)" fill="#EB5757" fill-opacity="0.5"/>
                    </g>
                    <g id="Polygon">
                    <path d="M 11.8297 0L 22.0745 17.7445L 1.58487 17.7445L 11.8297 0Z" transform="translate(91.5962 206.98)" fill="white"/>
                    <g mask="url(#path6_ins)" transform="translate(91.5962 206.98)">
                    <path d="M 11.8297 0L 22.0745 17.7445L 1.58487 17.7445L 11.8297 0Z" stroke-width="6" stroke="#EB5757" stroke-opacity="0.5"/>
                    </g>
                    </g>
                    <g id="Polygon_2">
                    <path d="M 11.5343 8.87578C 14.1896 4.72953 20.2474 4.72953 22.9028 8.87578L 25.476 12.8938C 28.3533 17.3866 25.1269 23.2841 19.7918 23.2841L 14.6453 23.2841C 9.31015 23.2841 6.08377 17.3866 8.96103 12.8938L 11.5343 8.87578Z" transform="matrix(0.407854 -0.913047 0.913047 0.407854 31.1333 144.662)" fill="white"/>
                    <g mask="url(#path8_ins)" transform="matrix(0.407854 -0.913047 0.913047 0.407854 31.1333 144.662)">
                    <path d="M 14.6453 23.2841L 19.7918 23.2841C 25.1269 23.2841 28.3533 17.3866 25.476 12.8938L 22.9028 8.87578C 20.2474 4.72953 14.1896 4.72953 11.5343 8.87578L 8.96103 12.8938C 6.08377 17.3866 9.31015 23.2841 14.6453 23.2841Z" stroke-width="6" stroke="#EB5757" stroke-opacity="0.5"/>
                    </g>
                    </g>
                    <g id="ic_email_black_24px_2">
                    <g id="Vector_2">
                    <path d="M 96.5199 0L 10.7244 0C 4.826 0 0.0536221 4.82266 0.0536221 10.717L 0 75.0191C 0 80.9135 4.826 85.7362 10.7244 85.7362L 96.5199 85.7362C 102.418 85.7362 107.244 80.9135 107.244 75.0191L 107.244 10.717C 107.244 4.82266 102.418 0 96.5199 0ZM 96.5199 21.434L 53.6222 48.2266L 10.7244 21.434L 10.7244 10.717L 53.6222 37.5096L 96.5199 10.717L 96.5199 21.434Z" transform="matrix(0.847033 -0.53154 0.532757 0.846268 62.7705 154.038)" fill="#2196F3"/>
                    </g>
                    </g>
                    </g>
                    <defs>

                    <mask id="path6_ins" fill="white">
                    <path d="M 11.8297 0L 22.0745 17.7445L 1.58487 17.7445L 11.8297 0Z"/>
                    </mask>
                    <mask id="path8_ins" fill="white">
                    <path d="M 11.5343 8.87578C 14.1896 4.72953 20.2474 4.72953 22.9028 8.87578L 25.476 12.8938C 28.3533 17.3866 25.1269 23.2841 19.7918 23.2841L 14.6453 23.2841C 9.31015 23.2841 6.08377 17.3866 8.96103 12.8938L 11.5343 8.87578Z"/>
                    </mask>

                    </defs>
                    </svg>
                </div>   
                <!-- /.left-div -->
            </div>  
        
    </div>
<?php
include_once("footer.php");
?>