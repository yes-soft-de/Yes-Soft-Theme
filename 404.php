<?php get_header(); ?>

    <style>
        :root {
            box-sizing: border-box;
            cursor: default;
        }
        ::-moz-selection {
            color: #181111;
            background-color: #e6e6e6;
        }
        ::selection {
            color: #181111;
            background-color: #e6e6e6;
        }
        html, body {
            width: 100%;
            height: 100%;
            background-color: #181111;
            color: #ccc;
            font-size: calc(6.4px + 0.8125vw);
        }
        .error-body {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        .error-body:before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #ccc;
            mix-blend-mode: overlay;
            z-index: 1;
        }
        .error-body:after {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, #181111 21px, transparent 1%) center, linear-gradient(#181111 21px, transparent 1%) center, white;
            background-size: 22px 22px;
            background-position: center;
            opacity: .2;
            z-index: 1;
        }
        .error-body .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            -webkit-filter: grayscale(1);
            filter: grayscale(1);
            mix-blend-mode: luminosity;
        }
        .error-body .message {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            z-index: 3;
        }
        .error-body .message h1 {
            position: absolute;
            top: 10%;
            left: 0%;
            width: 100%;
            font-size: 10em;
            margin: 0;
            -webkit-animation: shake 600ms ease-in-out infinite alternate;
            animation: shake 600ms ease-in-out infinite alternate;
            text-shadow: 0 0 0.07em #ccc, -0.2em 0 2em rgba(204, 204, 204, 0.3), 0.2em 0 2em rgba(204, 204, 204, 0.3);
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        .error-body .message h1:before {
            content: attr(t);
            position: absolute;
            left: 50%;
            -webkit-transform: translate(-50%, 0.34em);
            transform: translate(-50%, 0.34em);
            height: .1em;
            line-height: .5em;
            width: 100%;
            -webkit-animation: scan 500ms ease-in-out infinite alternate 509ms, glitch-anim 300ms ease-in-out infinite alternate;
            animation: scan 500ms ease-in-out infinite alternate 509ms, glitch-anim 300ms ease-in-out infinite alternate;
            overflow: hidden;
            opacity: .7;
        }
        .error-body .message h1:after {
            content: attr(t);
            position: absolute;
            top: -8px;
            left: 50%;
            -webkit-transform: translate(-50%, 0.34em);
            transform: translate(-50%, 0.34em);
            height: .5em;
            line-height: .1em;
            width: 100%;
            -webkit-animation: scan 665ms ease-in-out infinite alternate 249ms, glitch-anim 300ms ease-in-out infinite alternate;
            animation: scan 665ms ease-in-out infinite alternate 249ms, glitch-anim 300ms ease-in-out infinite alternate;
            overflow: hidden;
            opacity: .8;
        }
        .error-body .message .bottom {
            position: absolute;
            top: 65%;
            left: 0;
            width: 100%;
        }
        .error-body .message p, .error-body .message a {
            font-size: 2em;
            font-family: monospace;
            text-shadow: 0 0 5px #ccc;
            -webkit-filter: blur(0.8px);
            filter: blur(0.8px);
        }
        .error-body .message a {
            position: relative;
            color: #ccc;
            text-decoration: none;
            font-weight: 700;
            border: 2px solid #ccc;
            text-transform: uppercase;
            padding: 5px 30px;
            box-shadow: inset 0 0 0 0 rgba(204, 204, 204, 0.2);
            transition: 25ms ease-in-out all 0ms;
            overflow: hidden;
            -webkit-animation: attn 3s ease-in-out infinite;
            animation: attn 3s ease-in-out infinite;
        }
        .error-body .message a:hover {
            cursor: crosshair;
            box-shadow: inset 0 -2em 0 0 rgba(204, 204, 204, 0.2);
            transition: 225ms ease-in-out all 225ms;
            -webkit-animation: none;
            animation: none;
        }
        .error-body .message a:hover:before, .error-body .message a:hover:after {
            -webkit-transform: translate(-50%, 0) scale(0, 1);
            transform: translate(-50%, 0) scale(0, 1);
        }
        .error-body .message a:active {
            box-shadow: inset 0 -2em 0 0 rgba(204, 204, 204, 0.5);
            transition: 225ms ease-in-out all 225ms;
        }
        .error-body .message a:before, .error-body .message a:after {
            content: '';
            position: absolute;
            left: 50%;
            -webkit-transform: translate(-50%, 0) scale(1, 1);
            transform: translate(-50%, 0) scale(1, 1);
            -webkit-transform-origin: center;
            transform-origin: center;
            background-color: #181111;
            width: 90%;
            height: 5px;
            transition: 225ms ease-in-out all;
            mix-blend-mode: hard-light;
        }
        .error-body .message a:before {
            top: -4px;
        }
        .error-body .message a:after {
            bottom: -4px;
        }
        @-webkit-keyframes scan {
            from, 20%, 100% {
                height: 0;
                -webkit-transform: translate(-50%, 0.44em);
                transform: translate(-50%, 0.44em);
            }
            10%, 15% {
                height: 1em;
                line-height: .2em;
                -webkit-transform: translate(-55%, 0.22em);
                transform: translate(-55%, 0.22em);
            }
        }
        @keyframes scan {
            from, 20%, 100% {
                height: 0;
                -webkit-transform: translate(-50%, 0.44em);
                transform: translate(-50%, 0.44em);
            }
            10%, 15% {
                height: 1em;
                line-height: .2em;
                -webkit-transform: translate(-55%, 0.22em);
                transform: translate(-55%, 0.22em);
            }
        }
        @keyframe pulse {
            from {
                text-shadow: 0 0 0 #ccc, 0 0 0 rgba(204, 204, 204, 0.3), 0 0 0 rgba(204, 204, 204, 0.3);
            }
            to {
                text-shadow: 0 0 0.07em #ccc, -0.2em 0 2em rgba(204, 204, 204, 0.3), 0.2em 0 2em rgba(204, 204, 204, 0.3);
            }
        }
        @-webkit-keyframes attn {
            0%, 100% {
                opacity: 1;
            }
            30%, 35% {
                opacity: .4;
            }
        }
        @keyframes attn {
            0%, 100% {
                opacity: 1;
            }
            30%, 35% {
                opacity: .4;
            }
        }
        @-webkit-keyframes shake {
            0%, 100% {
                -webkit-transform: translate(-1px, 0);
                transform: translate(-1px, 0);
            }
            10% {
                -webkit-transform: translate(2px, 1px);
                transform: translate(2px, 1px);
            }
            30% {
                -webkit-transform: translate(-3px, 2px);
                transform: translate(-3px, 2px);
            }
            35% {
                -webkit-transform: translate(2px, -3px);
                transform: translate(2px, -3px);
                -webkit-filter: blur(4px);
                filter: blur(4px);
            }
            45% {
                -webkit-transform: translate(2px, 2px) skewY(-8deg) scale(0.96, 1);
                transform: translate(2px, 2px) skewY(-8deg) scale(0.96, 1);
                -webkit-filter: blur(0);
                filter: blur(0);
            }
            50% {
                -webkit-transform: translate(-3px, 1px);
                transform: translate(-3px, 1px);
            }
        }
        @keyframes shake {
            0%, 100% {
                -webkit-transform: translate(-1px, 0);
                transform: translate(-1px, 0);
            }
            10% {
                -webkit-transform: translate(2px, 1px);
                transform: translate(2px, 1px);
            }
            30% {
                -webkit-transform: translate(-3px, 2px);
                transform: translate(-3px, 2px);
            }
            35% {
                -webkit-transform: translate(2px, -3px);
                transform: translate(2px, -3px);
                -webkit-filter: blur(4px);
                filter: blur(4px);
            }
            45% {
                -webkit-transform: translate(2px, 2px) skewY(-8deg) scale(0.96, 1);
                transform: translate(2px, 2px) skewY(-8deg) scale(0.96, 1);
                -webkit-filter: blur(0);
                filter: blur(0);
            }
            50% {
                -webkit-transform: translate(-3px, 1px);
                transform: translate(-3px, 1px);
            }
        }
        @-webkit-keyframes glitch-anim {
            0% {
                clip: rect(75px, 9999px, 6px, 0);
            }
            10% {
                clip: rect(46px, 9999px, 10px, 0);
            }
            20% {
                clip: rect(13px, 9999px, 60px, 0);
            }
            30% {
                clip: rect(27px, 9999px, 25px, 0);
            }
            40% {
                clip: rect(82px, 9999px, 38px, 0);
            }
            50% {
                clip: rect(11px, 9999px, 40px, 0);
            }
            60% {
                clip: rect(37px, 9999px, 81px, 0);
            }
            70% {
                clip: rect(47px, 9999px, 51px, 0);
            }
            80% {
                clip: rect(14px, 9999px, 24px, 0);
            }
            90% {
                clip: rect(56px, 9999px, 15px, 0);
            }
            100% {
                clip: rect(67px, 9999px, 23px, 0);
            }
        }
        @keyframes glitch-anim {
            0% {
                clip: rect(75px, 9999px, 6px, 0);
            }
            10% {
                clip: rect(46px, 9999px, 10px, 0);
            }
            20% {
                clip: rect(13px, 9999px, 60px, 0);
            }
            30% {
                clip: rect(27px, 9999px, 25px, 0);
            }
            40% {
                clip: rect(82px, 9999px, 38px, 0);
            }
            50% {
                clip: rect(11px, 9999px, 40px, 0);
            }
            60% {
                clip: rect(37px, 9999px, 81px, 0);
            }
            70% {
                clip: rect(47px, 9999px, 51px, 0);
            }
            80% {
                clip: rect(14px, 9999px, 24px, 0);
            }
            90% {
                clip: rect(56px, 9999px, 15px, 0);
            }
            100% {
                clip: rect(67px, 9999px, 23px, 0);
            }
        }
    </style>
    <section class="error-body">
        <video preload="auto" class="background" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/396624/err.mp4"
               autoplay muted loop></video>
        <div class="message">
            <h1 t="404">404</h1>
            <div class="bottom">
                <p>You have lost your way</p>
                <a href="<?php bloginfo('url')?>">return home</a>
            </div>
        </div>
    </section>

    <!--End Container-->

<?php get_footer(); ?>