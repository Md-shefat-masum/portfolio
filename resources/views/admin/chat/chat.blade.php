@extends('layouts.admin')
@section('contents')
<style>
    body {
        background: #fbfbfb;
        font-family: 'Inter UI', sans-serif;
        font-size: 16px;
        font-weight: 600;
        line-height: 1.7
    }

    a {
        color: #212529;
        -moz-transition: all 0.3s;
        -webkit-transition: all 0.3s;
        transition: all 0.3s
    }

    a:hover {
        color: inherit;
        text-decoration: none
    }

    p {
        font-size: 16px;
        font-weight: 500;
        line-height: 1.7;
        color: #bdbac2;
        margin-bottom: 0
    }

    hr {
        margin: 30px 0;
        border-top: 2px solid #fbfbfb
    }

    @font-face {
        font-family: 'Inter UI';
        font-style: normal;
        font-weight: 400;
        src: url(../fonts/inter-ui/Inter-UI-Regular.woff2?v=3.2) format("woff2"), url(../fonts/inter-ui/Inter-UI-Regular.woff?v=3.2) format("woff")
    }

    @font-face {
        font-family: 'Inter UI';
        font-style: normal;
        font-weight: 500;
        src: url(../fonts/inter-ui/Inter-UI-Medium.woff2?v=3.2) format("woff2"), url(../fonts/inter-ui/Inter-UI-Medium.woff?v=3.2) format("woff")
    }

    @font-face {
        font-family: 'Inter UI';
        font-style: normal;
        font-weight: 600;
        src: url(../fonts/inter-ui/Inter-UI-SemiBold.woff2?v=3.2) format("woff2"), url(../fonts/inter-ui/Inter-UI-SemiBold.woff?v=3.2) format("woff")
    }

    @font-face {
        font-family: 'Inter UI';
        font-style: normal;
        font-weight: 700;
        src: url(../fonts/inter-ui/Inter-UI-Bold.woff2?v=3.2) format("woff2"), url(../fonts/inter-ui/Inter-UI-Bold.woff?v=3.2) format("woff")
    }

    @font-face {
        font-family: 'Inter UI';
        font-style: normal;
        font-weight: 800;
        src: url(../fonts/inter-ui/Inter-UI-ExtraBold.woff2?v=3.2) format("woff2"), url(../fonts/inter-ui/Inter-UI-ExtraBold.woff?v=3.2) format("woff")
    }

    .form-row {
        -ms-flex-align: center;
        align-items: center;
        margin-right: -15px;
        margin-left: -15px
    }

    .form-row>[class*="col-"] {
        padding-right: 15px;
        padding-left: 15px
    }

    .form-group {
        flex-grow: 1;
        position: relative;
        margin-bottom: 30px
    }

    .form-group>label {
        margin-bottom: 10px
    }

    .form-control {
        background: #f5f5f5;
        color: #bdbac2;
        border: none;
        font-size: 16px;
        font-weight: 500;
        border-radius: 6px
    }

    .form-control:focus {
        background: #f5f5f5;
        color: #bdbac2;
        border: none !important;
        box-shadow: none
    }

    .form-control::-webkit-input-placeholder {
        color: #bdbac2
    }

    .form-control::-moz-placeholder {
        color: #bdbac2
    }

    .form-control:-ms-input-placeholder {
        color: #bdbac2
    }

    .form-control::-ms-input-placeholder {
        color: #bdbac2
    }

    .form-control::placeholder {
        font-size: 16px;
        font-weight: 500;
        color: #bdbac2
    }

    .prepend {
        position: absolute;
        padding: 0 0 0 15px;
        top: 0;
        bottom: 0;
        left: 0;
        line-height: 0;
        margin-bottom: 0 !important
    }

    input[type="search"]::-webkit-search-cancel-button {
        display: inline-block;
        width: 24px;
        height: 24px;
        background: url(../img/clear.svg);
        background-size: cover;
        -moz-appearance: none;
        -webkit-appearance: none;
        appearance: none
    }

    .btn-group {
        display: -ms-flexbox;
        display: flex
    }

    .btn-group>.btn {
        border-radius: 6px !important
    }

    .btn-group>.btn+.btn {
        margin-left: 10px
    }

    .btn {
        background: none;
        border: none;
        outline: none;
        box-shadow: none;
        -moz-transition: all 0.3s;
        -webkit-transition: all 0.3s;
        transition: all 0.3s
    }

    .btn:focus,
    .btn:hover,
    .btn:active {
        border: none;
        outline: none;
        box-shadow: none
    }

    .btn:not(:disabled):not(.disabled).active,
    .btn:not(:disabled):not(.disabled):active,
    .show>.btn.dropdown-toggle {
        border: none;
        outline: none;
        box-shadow: none
    }

    .close {
        padding: 0;
        line-height: 0;
        opacity: 1
    }

    .close:not(:disabled):not(.disabled):hover,
    .close:not(:disabled):not(.disabled):focus {
        opacity: .9;
        border: none;
        outline: none;
        box-shadow: none
    }

    .close .eva {
        width: 32px;
        height: 32px;
        fill: #212529
    }

    .primary {
        display: inline-block;
        padding: 9px 0;
        width: 100%;
        background: #007bff;
        font-weight: 600;
        line-height: 1.7;
        color: #fff;
        text-align: center;
        border-radius: 6px
    }

    .primary:hover {
        color: #fff;
        opacity: .9
    }

    .round {
        display: inline-block;
        padding: 0;
        width: 42px;
        height: 42px;
        background: #f5f5f5;
        text-align: center;
        border-radius: 100%
    }

    .round .eva {
        width: 20px;
        height: 20px;
        fill: #bdbac2
    }

    .eva-icon-pulse:hover {
        animation-name: eva-pulse
    }

    .eva-icon-hover-pulse:hover {
        animation-name: eva-pulse
    }

    @keyframes eva-pulse {
        from {
            transform: scale3d(1, 1, 1)
        }

        50% {
            transform: scale3d(1.2, 1.2, 1.2)
        }

        to {
            transform: scale3d(1, 1, 1)
        }
    }

    .layout {
        display: -ms-flexbox;
        display: flex
    }

    .avatars {
        padding-left: 0;
        list-style: none;
        margin-bottom: 0
    }

    .avatars li {
        display: inline-block
    }

    .avatars li+li {
        margin-left: -12px
    }

    .avatars img {
        width: 36px;
        height: 36px;
        border: 2px solid #fff;
        border-radius: 100%
    }

    .upload {
        width: 100%
    }

    .upload label {
        width: 100%;
        margin-bottom: 0
    }

    .upload input {
        display: none
    }

    .upload span {
        display: block;
        padding: 30px;
        background: #fff;
        color: #bdbac2;
        font-weight: 500;
        text-align: center;
        border: 1px dashed #efebeb;
        border-radius: 6px;
        cursor: pointer;
        -moz-transition: all 0.3s;
        -webkit-transition: all 0.3s;
        transition: all 0.3s
    }

    .upload span:hover {
        background: #f5f5f5
    }

    .status {
        position: relative;
        margin-right: 15px
    }

    .status.online {
        fill: #43b581;
        stroke: #43b581
    }

    .status.offline {
        fill: #bdbac2;
        stroke: #bdbac2
    }

    .status .eva-radio-button-on {
        position: absolute;
        bottom: 0;
        margin-left: -11px;
        width: 11px;
        height: 11px;
        stroke-width: 4
    }

    .dropdown-menu {
        padding: 10px;
        border: none;
        box-shadow: 0 0 30px rgba(0, 0, 0, .05);
        border-radius: 6px
    }

    .dropdown-item {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding: 9px 10px;
        font-weight: 500;
        color: #bdbac2;
        border-radius: 6px
    }

    .dropdown-item:hover {
        background: #f5f5f5;
        color: #bdbac2;
        border-radius: 6px
    }

    .dropdown-item:focus {
        background: #f5f5f5;
        color: #bdbac2;
        border-radius: 6px;
        border: none;
        outline: none;
        box-shadow: none
    }

    .dropdown-item.active,
    .dropdown-item:active {
        background: #007bff;
        color: #fff
    }

    .dropdown-item.active .eva,
    .dropdown-item:active .eva {
        fill: #fff !important
    }

    .dropdown-item .eva {
        width: 22px !important;
        height: 22px !important;
        margin-right: 10px
    }

    a.dropdown-item {
        -moz-transition: none;
        -webkit-transition: none;
        transition: none
    }

    .switch {
        position: relative;
        display: inline-block;
        width: 100%;
        min-width: 42px;
        max-width: 42px;
        height: 20px;
        margin-bottom: 0
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0
    }

    .switch .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #f5f5f5;
        -webkit-transition: .4s;
        transition: .4s
    }

    .switch .slider:before {
        position: absolute;
        content: "";
        height: 14px;
        width: 14px;
        left: 3px;
        bottom: 3px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s
    }

    .switch input:checked+.slider {
        background-color: #007bff !important
    }

    .switch input:checked+.slider:before {
        -webkit-transform: translateX(22px);
        -ms-transform: translateX(22px);
        transform: translateX(22px)
    }

    .switch .slider.round {
        width: 42px;
        height: 20px;
        border-radius: 34px
    }

    .switch .slider.round:before {
        border-radius: 50%
    }

    .help {
        padding: 80px 0
    }

    .help h2 {
        margin-bottom: 21px
    }

    .help h5 {
        line-height: 1.7;
        margin-bottom: 10px
    }

    .help hr {
        border-top: 2px solid #f5f5f5;
        margin: 30px 0
    }

    .help p+p {
        margin-top: 15px
    }

    .help p+figure {
        margin-top: 30px
    }

    .help figure+p {
        margin-top: 30px
    }

    .help figure {
        padding: 0 30px;
        background: #212d3a;
        border-radius: 6px;
        overflow-x: auto;
        overflow-y: hidden;
        -ms-overflow-style: none
    }

    .help code {
        white-space: pre;
        color: #dcdcdc;
        margin-bottom: 0
    }

    .navigation {
        background: #fff
    }

    .navigation .container::-webkit-scrollbar {
        display: none
    }

    .navigation .logo img {
        width: 50px;
        height: 50px
    }

    .navigation ul {
        padding-left: 0;
        list-style: none;
        margin-bottom: 0
    }

    .navigation ul>li>a .eva {
        width: 36px;
        height: 36px;
        fill: #bdbac2;
        -moz-transition: all 0.3s;
        -webkit-transition: all 0.3s;
        transition: all 0.3s
    }

    .navigation ul>li>a.active .eva {
        fill: #007bff
    }

    .navigation ul>li>a:hover .eva {
        fill: #007bff
    }

    .navigation .btn {
        padding: 0;
        position: relative
    }

    .navigation .btn img {
        width: 42px;
        height: 42px;
        border-radius: 100%
    }

    .navigation .btn .eva-bulb {
        width: 36px;
        height: 36px;
        fill: #bdbac2;
        -moz-transition: all 0.3s;
        -webkit-transition: all 0.3s;
        transition: all 0.3s
    }

    .navigation .btn .eva-bulb:hover {
        fill: #007bff
    }

    .navigation .btn .eva-radio-button-on {
        position: absolute;
        bottom: 0;
        margin-left: -11px;
        width: 11px;
        height: 11px;
        fill: #43b581;
        stroke: #43b581;
        stroke-width: 4
    }

    .sidebar {
        background: #fdfdfd;
        overflow-y: auto;
        -ms-overflow-style: none;
        overflow-x: hidden
    }

    .sidebar::-webkit-scrollbar {
        display: none
    }

    .sidebar .container {
        padding-top: 30px;
        padding-bottom: 30px
    }

    .sidebar .top {
        margin-bottom: 30px
    }

    .sidebar .top form {
        position: relative
    }

    .sidebar .top .form-control {
        padding: 0 10px 0 50px;
        height: 55px
    }

    .sidebar .top form .eva {
        fill: #bdbac2
    }

    .sidebar .top .nav {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        padding: 6px;
        width: 100%;
        background: #f5f5f5;
        border-radius: 6px;
        margin-top: 15px
    }

    .sidebar .top .nav li {
        width: 100%;
        text-align: center
    }

    .sidebar .top .nav li+li {
        margin-left: 6px
    }

    .sidebar .top .nav li .active {
        background: #fff;
        color: #007bff
    }

    .sidebar .top .nav li a {
        display: block;
        padding: 8px 0;
        color: #bdbac2;
        border-radius: 6px
    }

    .sidebar .middle {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -ms-flex-align: center;
        align-items: center
    }

    .sidebar .middle h4 {
        font-weight: 600;
        margin-bottom: 0
    }

    .sidebar .middle h4+.btn {
        margin-left: 15px
    }

    .sidebar .middle hr {
        -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
        margin-bottom: 0
    }

    .discussions {
        -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
        padding-left: 0;
        list-style: none;
        margin-bottom: 0
    }

    .discussions>li {
        -ms-flex-preferred-size: 100%;
        flex-basis: 100%
    }

    .discussions>li .direct {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: start;
        align-items: flex-start
    }

    .discussions>li>a {
        display: block;
        padding: 25px 0;
        border-bottom: 2px solid #fbfbfb
    }

    .discussions>li>a:hover {
        border-bottom: 2px solid #007bff
    }

    .discussions>li>a.active {
        border-bottom: 2px solid #007bff
    }

    .discussions>li>a.active p {
        color: #212529
    }

    .discussions>li>a .content {
        -ms-flex-preferred-size: 100%;
        flex-basis: 100%
    }

    .discussions>li>a .headline {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: start;
        align-items: flex-start;
        margin-bottom: 10px
    }

    .discussions>li .groups .headline {
        -ms-flex-align: center;
        align-items: center
    }

    .discussions>li>a img {
        width: 42px;
        height: 42px;
        border-radius: 100%
    }

    .discussions>li .groups img {
        width: 32px;
        height: 32px;
        margin-right: 15px
    }

    .discussions>li>a h5 {
        font-size: 16px;
        font-weight: 600;
        line-height: 1.7;
        color: #212529;
        margin-right: auto;
        margin-bottom: 0
    }

    .discussions>li>a span {
        font-size: 15px;
        font-weight: 500;
        white-space: nowrap;
        color: #bdbac2;
        margin-left: 30px
    }

    .users {
        -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
        padding-left: 0;
        list-style: none;
        margin-bottom: 0
    }

    .users>li {
        -ms-flex-preferred-size: 100%;
        flex-basis: 100%
    }

    .users>li>a {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding: 25px 0;
        border-bottom: 2px solid #fbfbfb
    }

    .users>li>a:hover {
        border-bottom: 2px solid #007bff
    }

    .users>li>a.active {
        border-bottom: 2px solid #007bff
    }

    .users>li .content {
        -ms-flex-preferred-size: 100%;
        flex-basis: 100%
    }

    .users>li .round {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: justify;
        justify-content: center;
        min-width: 42px;
        margin-right: 15px
    }

    .users>li img {
        width: 42px;
        height: 42px;
        border-radius: 100%
    }

    .users>li h5 {
        font-size: 16px;
        font-weight: 600;
        line-height: 1.2;
        color: #212529;
        margin-right: auto;
        margin-bottom: 8px
    }

    .users>li span {
        display: block;
        font-size: 15px;
        font-weight: 500;
        line-height: 1;
        white-space: nowrap;
        color: #bdbac2
    }

    .users>li .eva-person {
        width: 22px;
        height: 22px;
        fill: #bdbac2
    }

    .notifications {
        -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
        padding-left: 0;
        list-style: none;
        margin-bottom: 0
    }

    .notifications>li {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: start;
        align-items: flex-start;
        -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
        padding: 25px 0;
        cursor: pointer;
        border-bottom: 2px solid #fbfbfb;
        -moz-transition: all 0.3s;
        -webkit-transition: all 0.3s;
        transition: all 0.3s
    }

    .notifications>li:hover {
        border-bottom: 2px solid #007bff
    }

    .notifications>li.active {
        border-bottom: 2px solid #007bff
    }

    .notifications>li.active p {
        color: #212529
    }

    .notifications>li>.round {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: justify;
        justify-content: center;
        min-width: 42px;
        margin-right: 15px
    }

    .notifications>li>p>strong {
        font-weight: 600;
        color: #007bff
    }

    .settings .user {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center
    }

    .settings .user label {
        margin-bottom: 0
    }

    .settings .user input[type="file"] {
        display: none
    }

    .settings .user img {
        width: 50px;
        height: 50px;
        border-radius: 100%;
        margin-right: 15px;
        cursor: pointer
    }

    .settings .user h5 {
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 8px
    }

    .settings .user span {
        display: block;
        font-size: 15px;
        font-weight: 500;
        line-height: 1;
        color: #bdbac2
    }

    .settings h4 {
        padding: 30px 0;
        font-weight: 600;
        border-bottom: 2px solid #fbfbfb;
        margin-bottom: 0
    }

    .settings hr {
        margin-bottom: 0
    }

    .settings ul {
        padding-left: 0;
        list-style: none;
        margin-bottom: 0
    }

    .settings>ul>li {
        border-bottom: 2px solid #fbfbfb
    }

    .settings>ul>li>.headline {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: 25px 0
    }

    .settings>ul>li>.headline[data-toggle="collapse"][aria-expanded="true"] h5 {
        color: #007bff
    }

    .settings>ul>li>.headline[data-toggle="collapse"][aria-expanded="true"] .eva-arrow-ios-forward {
        display: none
    }

    .settings>ul>li>.headline[data-toggle="collapse"][aria-expanded="true"] .eva-arrow-ios-downward {
        display: inline-block;
        fill: #007bff
    }

    .settings>ul>li>.headline h5 {
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 7px;
        -moz-transition: all 0.3s;
        -webkit-transition: all 0.3s;
        transition: all 0.3s
    }

    .settings>ul>li>.headline .eva {
        fill: #bdbac2;
        -moz-transition: all 0.3s;
        -webkit-transition: all 0.3s;
        transition: all 0.3s
    }

    .settings>ul>li>.headline:hover h5 {
        color: #007bff
    }

    .settings>ul>li>.headline:hover .eva {
        fill: #007bff
    }

    .settings>ul>li>.headline .eva-arrow-ios-downward {
        display: none
    }

    .settings .content .inside {
        padding: 25px 0;
        border-top: 2px solid #fbfbfb
    }

    .settings .account .form-row {
        margin-right: -7.5px;
        margin-left: -7.5px
    }

    .settings .account .form-row>[class*="col-"] {
        padding-right: 7.5px;
        padding-left: 7.5px
    }

    .settings .account .form-group {
        margin-bottom: 25px
    }

    .settings .account input.form-control {
        padding: 0 20px;
        height: 55px
    }

    .settings .account textarea.form-control {
        padding: 20px;
        min-height: 100px;
        max-height: 100px
    }

    .settings .account .primary {
        padding: 14px 0
    }

    .settings .options>li {
        padding: 25px 0
    }

    .settings .options>li:first-of-type {
        padding-top: 0
    }

    .settings .options>li:last-of-type {
        padding-bottom: 0
    }

    .settings .options>li+li {
        border-top: 2px solid #fbfbfb
    }

    .settings .options>li .headline {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: justify;
        justify-content: space-between;
        margin-bottom: 10px
    }

    .settings .options>li .headline h5 {
        font-size: 16px;
        font-weight: 600;
        line-height: 1.7;
        margin-bottom: 0
    }

    .settings .options>li .switch {
        margin-left: 30px
    }

    .settings .integrations>li {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding: 25px;
        background: #fff;
        border-radius: 6px;
        box-shadow: 0 0 10px rgba(0, 0, 0, .03)
    }

    .settings .integrations>li+li {
        margin-top: 15px
    }

    .settings .integrations>li .btn {
        min-width: 42px;
        margin-right: 15px
    }

    .settings .integrations>li:nth-child(1) .btn {
        background: #dc3545
    }

    .settings .integrations>li:nth-child(2) .btn {
        background: #6610f2
    }

    .settings .integrations>li:nth-child(3) .btn {
        background: #007bff
    }

    .settings .integrations>li:nth-child(4) .btn {
        background: #6f42c1
    }

    .settings .integrations>li .eva {
        fill: #fff
    }

    .settings .integrations>li .content {
        -ms-flex-preferred-size: 100%;
        flex-basis: 100%
    }

    .settings .integrations>li .content>span {
        font-weight: 500;
        color: #bdbac2
    }

    .settings .integrations>li .headline {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: justify;
        justify-content: space-between
    }

    .settings .integrations>li .headline h5 {
        font-size: 16px;
        font-weight: 600;
        line-height: 1.7;
        margin-bottom: 0
    }

    .settings .integrations>li .switch {
        margin-left: 30px
    }

    .chat {
        background: #fbfbfb
    }

    .chat .item {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center
    }

    .chat .item>.content {
        flex: 1
    }

    .chat .item .top {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: 30px 0;
        border-bottom: 2px solid #f9f9f9
    }

    .chat .item .top .headline {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center
    }

    .chat .item .top img {
        width: 42px;
        height: 42px;
        border-radius: 100%;
        margin-right: 15px
    }

    .chat .item .top h5 {
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 8px
    }

    .chat .item .top span {
        display: block;
        font-size: 15px;
        font-weight: 500;
        line-height: 1;
        color: #bdbac2
    }

    .chat .item .top ul {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        -ms-flex-direction: row;
        flex-direction: row;
        -ms-flex-align: center;
        align-items: center;
        padding-left: 0;
        list-style: none;
        margin-bottom: 0
    }

    .chat .item .top ul>li:nth-child(6) {
        display: none
    }

    .chat .item .top ul>li+li {
        margin-left: 25px
    }

    .chat .item .top ul>li .btn {
        padding: 0
    }

    .chat .item .top ul>li .btn:hover .eva {
        fill: #007bff
    }

    .chat .item .top ul>li .eva {
        width: 28px;
        height: 28px;
        fill: #bdbac2;
        -moz-transition: all 0.3s;
        -webkit-transition: all 0.3s;
        transition: all 0.3s
    }

    .chat .item .top ul>li .eva-arrow-ios-back {
        width: 22px;
        height: 22px
    }

    .chat .item .middle {
        display: -ms-flexbox;
        display: flex;
        height: calc(90vh - 221px);
        overflow-y: auto;
        -ms-overflow-style: none;
        overflow-x: hidden
    }

    .chat .item .middle::-webkit-scrollbar {
        display: none
    }

    .chat .item .middle>div {
        margin-top: auto
    }

    .chat .item .middle ul {
        padding: 30px 0;
        list-style: none;
        margin-bottom: 0
    }

    .chat .item .middle ul>li {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: end;
        align-items: flex-end;
        -ms-flex-pack: justify;
        justify-content: flex-end;
        text-align: right
    }

    .chat .item .middle ul>li+li {
        margin-top: 30px
    }

    .chat .item .middle ul>li img {
        width: 42px;
        height: 42px;
        border-radius: 100%;
        margin-left: 15px;
        -ms-flex-order: 2;
        order: 2
    }

    .chat .item .middle ul>li .content {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        -ms-flex-order: 1;
        order: 1
    }

    .chat .item .middle ul>li .message+.message {
        margin-top: 15px
    }

    .chat .item .middle ul>li .bubble {
        display: inline-block;
        max-width: 360px;
        background: #007bff;
        text-align: left;
        border-radius: 6px
    }

    .chat .item .middle ul>li p {
        padding: 15px 20px;
        color: #fff
    }

    .chat .item .middle ul>li span {
        display: block;
        font-size: 15px;
        font-weight: 500;
        line-height: 1.2;
        color: #bdbac2;
        margin-top: 15px
    }

    .chat .item .middle ul>li span .eva {
        width: 20px;
        height: 20px;
        fill: #bdbac2
    }

    .chat .item .middle ul>li .attachment {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding: 20px
    }

    .chat .item .middle ul>li .attachment .round {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: justify;
        justify-content: center;
        background: #fff;
        margin-right: 15px
    }

    .chat .item .middle ul>li .attachment .round .eva {
        fill: #007bff
    }

    .chat .item .middle ul>li .attachment h5 {
        font-size: 16px;
        font-weight: 600;
        color: #fff;
        margin-bottom: 8px
    }

    .chat .item .middle ul>li .attachment h5:hover {
        text-decoration: underline
    }

    .chat .item .middle ul>li .attachment span {
        line-height: 1;
        color: #fff;
        margin-top: 0
    }

    .chat .item .middle ul>li:nth-of-type(odd) {
        -ms-flex-pack: justify;
        justify-content: flex-start;
        text-align: left
    }

    .chat .item .middle ul>li:nth-of-type(odd) img {
        margin-right: 15px;
        margin-left: 0;
        -ms-flex-order: 1;
        order: 1
    }

    .chat .item .middle ul>li:nth-of-type(odd) .content {
        -ms-flex-order: 2;
        order: 2
    }

    .chat .item .middle ul>li:nth-of-type(odd) .bubble {
        background: #f5f5f5
    }

    .chat .item .middle ul>li:nth-of-type(odd) p {
        color: #bdbac2
    }

    .chat .item .middle ul>li:nth-of-type(odd) .attachment .round {
        background: #007bff
    }

    .chat .item .middle ul>li:nth-of-type(odd) .attachment .round .eva {
        fill: #fff
    }

    .chat .item .middle ul>li:nth-of-type(odd) .attachment h5 {
        color: #007bff
    }

    .chat .item .middle ul>li:nth-of-type(odd) .attachment span {
        color: #bdbac2
    }

    .chat .item .bottom {
        padding: 30px 0;
        border-top: 2px solid #f9f9f9
    }

    .chat .item .bottom form {
        position: relative
    }

    .chat .item .bottom .form-control {
        padding: 15.5px 50px 15.5px 20px;
        height: 55px;
        resize: none
    }

    .chat .item .bottom .form-control::-webkit-scrollbar {
        display: none
    }

    .chat .item .bottom .prepend {
        padding: 0 15px;
        left: auto;
        right: 0
    }

    .chat .item .bottom .prepend .eva {
        fill: #bdbac2
    }

    .utility {
        width: 336px;
        height: 90vh;
        background: #fdfdfd;
        overflow-y: auto;
        -ms-overflow-style: none;
        overflow-x: hidden
    }

    .utility::-webkit-scrollbar {
        display: none
    }

    .utility .container {
        padding-top: 30px;
        padding-bottom: 30px
    }

    .utility .close {
        margin-bottom: 30px
    }

    .utility .close .eva {
        fill: #bdbac2
    }

    .utility .nav {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        padding: 6px;
        width: 100%;
        background: #f5f5f5;
        border-radius: 6px;
        margin: 15px 0 30px
    }

    .utility .nav li {
        width: 100%;
        text-align: center
    }

    .utility .nav li+li {
        margin-left: 6px
    }

    .utility .nav li .active {
        background: #fff;
        color: #007bff
    }

    .utility .nav li a {
        display: block;
        padding: 8px 0;
        color: #bdbac2;
        border-radius: 6px
    }

    .utility .primary {
        padding: 14px 0;
        background: #f5f5f5;
        color: #bdbac2
    }

    .utility .upload {
        margin-top: 30px
    }

    .utility h4 {
        font-weight: 600;
        margin-bottom: 0
    }

    .utility hr {
        margin-bottom: 0
    }

    .utility .users>li {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding: 25px 0;
        border-bottom: 2px solid #f9f9f9
    }

    .utility .users>li .btn {
        padding: 0
    }

    .utility .users>li .eva-more-vertical {
        fill: #bdbac2
    }

    .files {
        padding-left: 0;
        list-style: none;
        margin-top: 15px;
        margin-bottom: 0
    }

    .files>li {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding: 25px;
        width: 100%;
        background: #fff;
        white-space: nowrap;
        border-radius: 6px;
        box-shadow: 0 0 10px rgba(0, 0, 0, .03)
    }

    .files>li+li {
        margin-top: 15px
    }

    .files>li .avatars {
        margin-right: 15px
    }

    .files>li .avatars img {
        width: 42px;
        height: 42px
    }

    .files>li .avatars .btn {
        padding: 0;
        width: 40px;
        height: 40px
    }

    .files>li .avatars .eva {
        width: 20px;
        height: 20px;
        fill: #bdbac2
    }

    .files>li .meta {
        margin-right: auto
    }

    .files>li h5 {
        font-size: 16px;
        font-weight: 600;
        color: #007bff;
        white-space: normal;
        margin-bottom: 8px
    }

    .files>li h5:hover {
        text-decoration: underline
    }

    .files>li span {
        display: block;
        font-size: 15px;
        font-weight: 500;
        line-height: 1;
        color: #bdbac2
    }

    .files>li .dropdown .btn {
        padding: 0;
        line-height: 0
    }

    .files>li .eva-more-vertical {
        fill: #bdbac2
    }

    .modal-content {
        border: none;
        border-radius: 6px
    }

    .modal-header {
        -ms-flex-align: center;
        align-items: center;
        padding: 25px 30px;
        background: #007bff;
        border-bottom: none
    }

    .modal-header h5 {
        font-weight: 600;
        color: #fff;
        margin-bottom: 0
    }

    .modal-header .round {
        padding: 0;
        background: rgba(255, 255, 255, .25)
    }

    .modal-header .round:hover {
        color: #007bff
    }

    .modal-header .round .eva {
        fill: #fff
    }

    .modal-body {
        padding: 0;
        background: #fbfbfb;
        border-bottom-left-radius: 6px;
        border-bottom-right-radius: 6px
    }

    .modal-body .nav {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        padding: 15px 30px;
        width: 100%;
        background: #f5f5f5
    }

    .modal-body .nav li {
        width: 100%;
        text-align: center
    }

    .modal-body .nav li+li {
        margin-left: 6px
    }

    .modal-body .nav li .active {
        background: #fff;
        color: #007bff
    }

    .modal-body .nav li a {
        display: block;
        padding: 10px 0;
        color: #bdbac2;
        border-radius: 6px
    }

    .modal-body h5 {
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 15px
    }

    .modal-body h4 {
        font-weight: 600;
        margin-bottom: 0
    }

    .modal-body hr {
        border-top: 2px solid #f9f9f9;
        margin: 30px 0 0
    }

    .modal-body .details {
        padding: 30px 30px 0
    }

    .modal-body .form-group:last-of-type {
        margin-bottom: 0
    }

    .modal-body input.form-control {
        padding: 0 20px;
        height: 55px
    }

    .modal-body textarea.form-control {
        padding: 20px;
        min-height: 100px;
        max-height: 100px
    }

    .modal-body .participants {
        padding: 30px 30px 0
    }

    .modal-body .search {
        margin-bottom: 30px
    }

    .modal-body .search form {
        padding: 0;
        position: relative
    }

    .modal-body .search .form-control {
        padding: 0 10px 0 50px;
        height: 55px
    }

    .modal-body .search .eva {
        fill: #bdbac2
    }

    .modal-body .users>li {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding: 25px 0;
        border-bottom: 2px solid #f9f9f9
    }

    .modal-body .custom-control-label {
        top: 1px
    }

    .modal-body .custom-control-label::before {
        background: #f5f5f5;
        box-shadow: none !important;
        border: none;
        outline: none
    }

    .modal-body .custom-control-input:checked~.custom-control-label::before {
        background: #007bff
    }

    .modal-footer {
        padding: 30px;
        background: #fbfbfb;
        border: none
    }

    .modal-footer .primary {
        padding: 14px 0
    }

    .sign {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        min-height: 90vh
    }

    .sign .item {
        padding: 60px;
        width: 100%;
        max-width: 430px;
        background: #fff;
        border-radius: 6px;
        box-shadow: 0 0 30px rgba(0, 0, 0, .03);
        margin: 80px auto
    }

    .sign .item h2 {
        font-weight: 600;
        text-align: left;
        margin-bottom: 0
    }

    .sign .item h2+.form-group {
        margin-top: 30px
    }

    .sign .item p {
        margin: 15px 0 30px
    }

    .sign .item .form-group {
        margin-bottom: 15px
    }

    .sign .item .form-group+a {
        display: block;
        margin-top: 30px
    }

    .sign .item .form-control {
        padding: 0 15px 0 53px;
        height: 55px
    }

    .sign .item .eva {
        fill: #bdbac2
    }

    .sign .item a {
        font-weight: 500;
        color: #007bff
    }

    .sign .item a:hover {
        text-decoration: underline
    }

    .sign .item a+.primary {
        margin-top: 15px
    }

    .sign .item .primary {
        padding: 14px 0
    }

    .sign .item span {
        display: block;
        font-weight: 500;
        text-align: center;
        color: #bdbac2;
        margin-top: 30px
    }

    .chat .item .middle {
	    /* height: calc(92vh - 221px); */
    }
    .chat{
        /* height: 90vh; */
        margin-top: 15px;
    }
    .sidebar{
        /* height: 90vh; */
        margin-top: 15px;;
    }
    .navigation{
        /* height: 90vh; */
        margin-top: 15px;;
    }
    .navigation ul{
        flex-grow: 0;
    }
    footer{
        display: none;
    }
    .page-wrapper{
        padding-bottom: 0;
    }

    @media (min-width:1300px) {
        .utility {
            display: none
        }

        .utility.open {
            display: block
        }
    }

    @media (min-width:992px) and (max-width:1300px) {
        .utility {
            position: fixed;
            width: calc(100vw - 436px);
            right: 100%;
            top: 0;
            bottom: 0;
            border-left: 2px solid #fbfbfb;
            z-index: 1020;
            visibility: hidden;
            transition-timing-function: ease-in-out;
            transition-duration: .3s;
            transition-property: left, visibility
        }

        .utility.open {
            visibility: visible;
            right: 0
        }
    }

    @media (min-width:992px) {
        .container {
            padding-right: 30px;
            padding-left: 30px
        }

        .help .container {
            max-width: 890px
        }

        .navigation {
            width: 100px
        }

        .navigation .container {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            padding: 30px 15px;
            height: 90vh;
            text-align: center;
            overflow-y: auto;
            -ms-overflow-style: none;
            overflow-x: hidden
        }

        .navigation ul {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -ms-flex-preferred-size: auto;
            flex-basis: auto;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            margin-top: 60px
        }

        .navigation ul>li:nth-child(3) {
            flex-grow: 1
        }

        .navigation ul>li+li {
            margin-top: 30px
        }

        .sidebar {
            width: 336px;
            height: 90vh
        }

        .chat {
            flex: 1;
            max-width: calc(100vw - 300px);
            height: 90vh;
            overflow: hidden
        }

        .chat .item .top ul>li:nth-child(5) {
            display: none
        }
    }

    @media (max-width:991px) {
        .layout {
            -ms-flex-direction: column;
            flex-direction: column
        }

        .navigation {
            -ms-flex-order: 2;
            order: 2
        }

        .navigation .logo {
            display: none
        }

        .navigation ul {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding: 15px 0
        }

        .navigation ul>li:nth-child(5) {
            display: none
        }

        .navigation ul>li:nth-child(6) {
            display: none
        }

        .sidebar {
            -ms-flex-order: 1;
            order: 1;
            height: calc(90vh - 66px)
        }

        .notifications>li {
            -ms-flex-align: center;
            align-items: center
        }

        .chat {
            position: fixed;
            width: 100%;
            left: 100%;
            top: 0;
            bottom: 0;
            z-index: 1020;
            visibility: hidden;
            transition-timing-function: ease-in-out;
            transition-duration: .3s;
            transition-property: left, visibility
        }

        .chat.open {
            visibility: visible;
            left: 0
        }

        .utility {
            position: fixed;
            width: 100%;
            left: 100%;
            top: 0;
            bottom: 0;
            z-index: 1020;
            visibility: hidden;
            transition-timing-function: ease-in-out;
            transition-duration: .3s;
            transition-property: left, visibility
        }

        .utility.open {
            visibility: visible;
            left: 0
        }
    }

    @media (max-width:576px) {
        .navigation ul>li>a .eva {
            width: 32px;
            height: 32px
        }

        .chat .item .top ul>li:nth-child(1) {
            display: none
        }

        .chat .item .top ul>li:nth-child(2) {
            display: none
        }

        .chat .item .top ul>li:nth-child(3) {
            display: none
        }

        .chat .item .top ul>li:nth-child(4) {
            display: none
        }

        .chat .item .top ul>li:nth-child(6) {
            display: block;
            margin-left: 15.67px
        }

        .modal-header {
            padding: 25px 15px
        }

        .modal-body .nav {
            padding: 15px
        }

        .modal-body .details {
            padding: 30px 15px 0
        }

        .modal-body .participants {
            padding: 30px 15px 0
        }

        .modal-footer {
            padding: 30px 15px
        }

        .sign .item {
            padding: 30px
        }
    }

    @media (max-width:360px) {
        .notifications>li {
            -ms-flex-align: flex-start;
            align-items: flex-start
        }

        .chat .item .top h5 {
            height: 19px;
            overflow: hidden
        }

        .chat .item .top span {
            height: 15px;
            overflow: hidden
        }
    }


</style>
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper" style="overflow-y:hidden;">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    {{-- <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">About me section</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">admin</a></li>
                <li class="breadcrumb-item">about me</li>
                <li class="breadcrumb-item active">all</li>
            </ol>
        </div>
        <div class="">
            <button
                class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i
                    class="ti-settings text-white"></i></button>
        </div>
    </div> --}}
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">

        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
            <div class="layout">
                <!-- Start of Navigation -->
                <nav class="navigation">
                    <div class="container">
                        <ul class="nav" role="tablist">
                            <li><a href="#conversations" class="active" data-toggle="tab" role="tab" aria-controls="conversations" aria-selected="true"><i data-eva="message-square" data-eva-animation="pulse"></i></a></li>
                            <li><a href="#friends" data-toggle="tab" role="tab" aria-controls="friends" aria-selected="false"><i data-eva="people" data-eva-animation="pulse"></i></a></li>
                            <li><a href="#notifications" data-toggle="tab" role="tab" aria-controls="notifications" aria-selected="false"><i data-eva="bell" data-eva-animation="pulse"></i></a></li>
                            <li><a href="#settings" data-toggle="tab" role="tab" aria-controls="settings" aria-selected="false"><i data-eva="settings" data-eva-animation="pulse"></i></a></li>
                            <li><button type="button" class="btn mode"><i data-eva="bulb" data-eva-animation="pulse"></i></button></li>
                            <li><button type="button" class="btn"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-1.jpg" alt="avatar"><i data-eva="radio-button-on"></i></button></li>
                        </ul>
                    </div>
                </nav>
                <!-- End of Navigation -->
                <!-- Start of Sidebar -->
                <div class="sidebar">
                    <div class="container">
                        <div class="tab-content">
                            <!-- Start of Discussions -->
                            <div class="tab-pane fade show active" id="conversations" role="tabpanel">
                                <div class="top">
                                    <form>
                                        <input type="search" class="form-control" placeholder="Search">
                                        <button type="submit" class="btn prepend"><i data-eva="search"></i></button>
                                    </form>
                                    <ul class="nav" role="tablist">
                                        <li><a href="#direct" class="filter-btn active" data-toggle="tab" data-filter="direct">Direct</a></li>
                                        <li><a href="#groups" class="filter-btn" data-toggle="tab" data-filter="groups">Groups</a></li>
                                    </ul>
                                </div>
                                <div class="middle">
                                    <h4>Discussions</h4>
                                    <button type="button" class="btn round" data-toggle="modal" data-target="#compose"><i data-eva="edit-2"></i></button>
                                    <hr>
                                    <ul class="nav discussions" role="tablist">
                                        <li>
                                            <a href="#chat1" class="filter direct active" data-chat="open" data-toggle="tab" role="tab" aria-controls="chat1" aria-selected="true">
                                                <div class="status online"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-1.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
                                                <div class="content">
                                                    <div class="headline">
                                                        <h5>Ham Chuwon</h5>
                                                        <span>Today</span>
                                                    </div>
                                                    <p>Please review and sign the binding agreement.</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#chat1" class="filter direct" data-chat="open" data-toggle="tab" role="tab" aria-controls="chat1" aria-selected="false">
                                                <div class="status offline"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-2.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
                                                <div class="content">
                                                    <div class="headline">
                                                        <h5>Quincy Hensen</h5>
                                                        <span>Today</span>
                                                    </div>
                                                    <p>Additional information about the previous clients.</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#chat1" class="filter direct" data-chat="open" data-toggle="tab" role="tab" aria-controls="chat1" aria-selected="false">
                                                <div class="status online"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-3.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
                                                <div class="content">
                                                    <div class="headline">
                                                        <h5>Mark Hog</h5>
                                                        <span>Feb 23</span>
                                                    </div>
                                                    <p>I'm looking to get a quote for the move from LA to NY.</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#chat1" class="filter direct" data-chat="open" data-toggle="tab" role="tab" aria-controls="chat1" aria-selected="false">
                                                <div class="status offline"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-4.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
                                                <div class="content">
                                                    <div class="headline">
                                                        <h5>Sanne Viscaal</h5>
                                                        <span>Jan 18</span>
                                                    </div>
                                                    <p>My delivery address is pending final confirmation.</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#chat1" class="filter direct" data-chat="open" data-toggle="tab" role="tab" aria-controls="chat1" aria-selected="false">
                                                <div class="status offline"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-5.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
                                                <div class="content">
                                                    <div class="headline">
                                                        <h5>Alex Just</h5>
                                                        <span>May 2</span>
                                                    </div>
                                                    <p>Sending all the requested insurance documents.</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#chat2" class="filter groups" data-chat="open" data-toggle="tab" role="tab" aria-controls="chat2" aria-selected="false">
                                                <div class="content">
                                                    <div class="headline">
                                                        <img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-group-1.jpg" alt="avatar">
                                                        <h5>The Musketeers</h5>
                                                        <span>Today</span>
                                                    </div>
                                                    <p>Please review and sign the binding agreement.</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#chat2" class="filter groups" data-chat="open" data-toggle="tab" role="tab" aria-controls="chat2" aria-selected="false">
                                                <div class="content">
                                                    <div class="headline">
                                                        <img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-group-2.jpg" alt="avatar">
                                                        <h5>Watts Up</h5>
                                                        <span>Today</span>
                                                    </div>
                                                    <p>Additional information about the previous clients.</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#chat2" class="filter groups" data-chat="open" data-toggle="tab" role="tab" aria-controls="chat2" aria-selected="false">
                                                <div class="content">
                                                    <div class="headline">
                                                        <img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-group-3.jpg" alt="avatar">
                                                        <h5>Memes</h5>
                                                        <span>Feb 23</span>
                                                    </div>
                                                    <p>I'm looking to get a quote for the move from LA to NY.</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#chat2" class="filter groups" data-chat="open" data-toggle="tab" role="tab" aria-controls="chat2" aria-selected="false">
                                                <div class="content">
                                                    <div class="headline">
                                                        <img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-group-4.jpg" alt="avatar">
                                                        <h5>Supernovas</h5>
                                                        <span>Jan 18</span>
                                                    </div>
                                                    <p>My delivery address is pending final confirmation.</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#chat2" class="filter groups" data-chat="open" data-toggle="tab" role="tab" aria-controls="chat2" aria-selected="false">
                                                <div class="content">
                                                    <div class="headline">
                                                        <img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-group-5.jpg" alt="avatar">
                                                        <h5>Squad Ghouls</h5>
                                                        <span>May 2</span>
                                                    </div>
                                                    <p>Sending all the requested insurance documents.</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End of Discussions -->
                            <!-- Start of Friends -->
                            <div class="tab-pane fade" id="friends" role="tabpanel">
                                <div class="top">
                                    <form>
                                        <input type="search" class="form-control" placeholder="Search">
                                        <button type="submit" class="btn prepend"><i data-eva="search"></i></button>
                                    </form>
                                </div>
                                <div class="middle">
                                    <h4>Friends</h4>
                                    <hr>
                                    <ul class="users">
                                        <li>
                                            <a href="#">
                                                <div class="status online"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-1.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
                                                <div class="content">
                                                    <h5>Ham Chuwon</h5>
                                                    <span>Florida, US</span>
                                                </div>
                                                <div class="icon"><i data-eva="person"></i></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="status offline"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-2.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
                                                <div class="content">
                                                    <h5>Quincy Hensen</h5>
                                                    <span>Shanghai, China</span>
                                                </div>
                                                <div class="icon"><i data-eva="person"></i></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="status online"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-3.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
                                                <div class="content">
                                                    <h5>Mark Hog</h5>
                                                    <span>Olso, Norway</span>
                                                </div>
                                                <div class="icon"><i data-eva="person"></i></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="status offline"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-4.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
                                                <div class="content">
                                                    <h5>Sanne Viscaal</h5>
                                                    <span>Helena, Montana</span>
                                                </div>
                                                <div class="icon"><i data-eva="person"></i></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="status offline"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-5.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
                                                <div class="content">
                                                    <h5>Alex Just</h5>
                                                    <span>London, UK</span>
                                                </div>
                                                <div class="icon"><i data-eva="person"></i></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="status online"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-6.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
                                                <div class="content">
                                                    <h5>Arturo Thomas</h5>
                                                    <span>Vienna, Austria</span>
                                                </div>
                                                <div class="icon"><i data-eva="person"></i></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="status offline"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-female-1.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
                                                <div class="content">
                                                    <h5>Victoria Garner</h5>
                                                    <span>Chisinau, Moldova</span>
                                                </div>
                                                <div class="icon"><i data-eva="person"></i></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="status offline"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-female-2.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
                                                <div class="content">
                                                    <h5>Maria Baron</h5>
                                                    <span>Indore, India</span>
                                                </div>
                                                <div class="icon"><i data-eva="person"></i></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="status online"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-female-3.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
                                                <div class="content">
                                                    <h5>Sara Koch</h5>
                                                    <span>Sofia, BG</span>
                                                </div>
                                                <div class="icon"><i data-eva="person"></i></div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End of Friends -->
                            <!-- Start of Notifications -->
                            <div class="tab-pane fade" id="notifications" role="tabpanel">
                                <div class="top">
                                    <form>
                                        <input type="search" class="form-control" placeholder="Search">
                                        <button type="submit" class="btn prepend"><i data-eva="search"></i></button>
                                    </form>
                                </div>
                                <div class="middle">
                                    <h4>Notifications</h4>
                                    <hr>
                                    <ul class="notifications">
                                        <li>
                                            <div class="round"><i data-eva="person-done"></i></div>
                                            <p>Quincy has joined to <strong>Squad Ghouls</strong> group.</p>
                                        </li>
                                        <li>
                                            <div class="round"><i data-eva="lock"></i></div>
                                            <p>You need change your password for security reasons.</p>
                                        </li>
                                        <li>
                                            <div class="round"><i data-eva="attach"></i></div>
                                            <p>Mark attached the file <strong>workbox.js</strong>.</p>
                                        </li>
                                        <li>
                                            <div class="icon round"><i data-eva="gift"></i></div>
                                            <p>Sara has a birthday today. Wish her all the best.</p>
                                        </li>
                                        <li>
                                            <div class="round"><i data-eva="person"></i></div>
                                            <p>Sanne has accepted your friend request.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End of Notifications -->
                            <!-- Start of Settings -->
                            <div class="settings tab-pane fade" id="settings" role="tabpanel">
                                <div class="user">
                                    <label>
                                        <input type="file">
                                        <img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-1.jpg" alt="avatar">
                                    </label>
                                    <div class="content">
                                        <h5>Ham Chuwon</h5>
                                        <span>Florida, US</span>
                                    </div>
                                </div>
                                <h4>Settings</h4>
                                <ul id="preferences">
                                    <!-- Start of Account -->
                                    <li>
                                        <a href="#" class="headline" data-toggle="collapse" aria-expanded="false" data-target="#account" aria-controls="account">
                                            <div class="title">
                                                <h5>Account</h5>
                                                <p>Update your profile details</p>
                                            </div>
                                            <i data-eva="arrow-ios-forward"></i>
                                            <i data-eva="arrow-ios-downward"></i>
                                        </a>
                                        <div class="content collapse" id="account" data-parent="#preferences">
                                            <div class="inside">
                                                <form class="account">
                                                    <div class="form-row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>First Name</label>
                                                                <input type="text" class="form-control" placeholder="First name" value="Ham">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Last Name</label>
                                                                <input type="text" class="form-control" placeholder="Last name" value="Chuwon">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email Address</label>
                                                        <input type="email" class="form-control" placeholder="Enter your email address" value="hamchuwon@gmail.com">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input type="password" class="form-control" placeholder="Enter your password" value="123456">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Biography</label>
                                                        <textarea class="form-control" placeholder="Tell us a little about yourself"></textarea>
                                                    </div>
                                                    <button type="submit" class="btn primary">Save settings</button>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- End of Account -->
                                    <!-- Start of Privacy & Safety -->
                                    <li>
                                        <a href="#" class="headline" data-toggle="collapse" aria-expanded="false" data-target="#privacy" aria-controls="privacy">
                                            <div class="title">
                                                <h5>Privacy & Safety</h5>
                                                <p>Control your privacy settings</p>
                                            </div>
                                            <i data-eva="arrow-ios-forward"></i>
                                            <i data-eva="arrow-ios-downward"></i>
                                        </a>
                                        <div class="content collapse" id="privacy" data-parent="#preferences">
                                            <div class="inside">
                                                <ul class="options">
                                                    <li>
                                                        <div class="headline">
                                                            <h5>Safe Mode</h5>
                                                            <label class="switch">
                                                                <input type="checkbox" checked>
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                    </li>
                                                    <li>
                                                        <div class="headline">
                                                            <h5>History</h5>
                                                            <label class="switch">
                                                                <input type="checkbox" checked>
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                    </li>
                                                    <li>
                                                        <div class="headline">
                                                            <h5>Camera</h5>
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                    </li>
                                                    <li>
                                                        <div class="headline">
                                                            <h5>Microphone</h5>
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- End of Privacy & Safety -->
                                    <!-- Start of Notifications -->
                                    <li>
                                        <a href="#" class="headline" data-toggle="collapse" aria-expanded="false" data-target="#alerts" aria-controls="alerts">
                                            <div class="title">
                                                <h5>Notifications</h5>
                                                <p>Turn notifications on or off</p>
                                            </div>
                                            <i data-eva="arrow-ios-forward"></i>
                                            <i data-eva="arrow-ios-downward"></i>
                                        </a>
                                        <div class="content collapse" id="alerts" data-parent="#preferences">
                                            <div class="inside">
                                                <ul class="options">
                                                    <li>
                                                        <div class="headline">
                                                            <h5>Pop-up</h5>
                                                            <label class="switch">
                                                                <input type="checkbox" checked>
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                    </li>
                                                    <li>
                                                        <div class="headline">
                                                            <h5>Vibrate</h5>
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                    </li>
                                                    <li>
                                                        <div class="headline">
                                                            <h5>Sound</h5>
                                                            <label class="switch">
                                                                <input type="checkbox" checked>
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                    </li>
                                                    <li>
                                                        <div class="headline">
                                                            <h5>Lights</h5>
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- End of Notifications -->
                                    <!-- Start of Integrations -->
                                    <li>
                                        <a href="#" class="headline" data-toggle="collapse" aria-expanded="false" data-target="#integrations" aria-controls="integrations">
                                            <div class="title">
                                                <h5>Integrations</h5>
                                                <p>Sync your social accounts</p>
                                            </div>
                                            <i data-eva="arrow-ios-forward"></i>
                                            <i data-eva="arrow-ios-downward"></i>
                                        </a>
                                        <div class="content collapse" id="integrations" data-parent="#preferences">
                                            <div class="inside">
                                                <ul class="integrations">
                                                    <li>
                                                        <button class="btn round"><i data-eva="google"></i></button>
                                                        <div class="content">
                                                            <div class="headline">
                                                                <h5>Google</h5>
                                                                <label class="switch">
                                                                    <input type="checkbox" checked>
                                                                    <span class="slider round"></span>
                                                                </label>
                                                            </div>
                                                            <span>Read, write, edit</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <button class="btn round"><i data-eva="facebook"></i></button>
                                                        <div class="content">
                                                            <div class="headline">
                                                                <h5>Facebook</h5>
                                                                <label class="switch">
                                                                    <input type="checkbox" checked>
                                                                    <span class="slider round"></span>
                                                                </label>
                                                            </div>
                                                            <span>Read, write, edit</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <button class="btn round"><i data-eva="twitter"></i></button>
                                                        <div class="content">
                                                            <div class="headline">
                                                                <h5>Twitter</h5>
                                                                <label class="switch">
                                                                    <input type="checkbox">
                                                                    <span class="slider round"></span>
                                                                </label>
                                                            </div>
                                                            <span>No permissions set</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <button class="btn round"><i data-eva="linkedin"></i></button>
                                                        <div class="content">
                                                            <div class="headline">
                                                                <h5>LinkedIn</h5>
                                                                <label class="switch">
                                                                    <input type="checkbox">
                                                                    <span class="slider round"></span>
                                                                </label>
                                                            </div>
                                                            <span>No permissions set</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- End of Integrations -->
                                    <!-- Start of Appearance -->
                                    <li>
                                        <a href="#" class="headline" data-toggle="collapse" aria-expanded="false" data-target="#appearance" aria-controls="appearance">
                                            <div class="title">
                                                <h5>Appearance</h5>
                                                <p>Customize the look of Swipe</p>
                                            </div>
                                            <i data-eva="arrow-ios-forward"></i>
                                            <i data-eva="arrow-ios-downward"></i>
                                        </a>
                                        <div class="content collapse" id="appearance" data-parent="#preferences">
                                            <div class="inside">
                                                <ul class="options">
                                                    <li>
                                                        <div class="headline">
                                                            <h5>Lights</h5>
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round mode"></span>
                                                            </label>
                                                        </div>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- End of Appearance -->
                                </ul>
                            </div>
                            <!-- End of Settings -->
                        </div>
                    </div>
                </div>
                <!-- End of Sidebar -->
                <!-- Start of Chat -->
                <div class="chat">
                    <div class="tab-content">
                        <!-- Start of Chat Room -->
                        <div class="tab-pane fade show active" id="chat1" role="tabpanel">
                            <div class="item">
                                <div class="content">
                                    <div class="container">
                                        <div class="top">
                                            <div class="headline">
                                                <img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-3.jpg" alt="avatar">
                                                <div class="content">
                                                    <h5>Quincy Hensen</h5>
                                                    <span>Away</span>
                                                </div>
                                            </div>
                                            <ul>
                                                <li><button type="button" class="btn"><i data-eva="video" data-eva-animation="pulse"></i></button></li>
                                                <li><button type="button" class="btn"><i data-eva="phone" data-eva-animation="pulse"></i></button></li>
                                                <li><button type="button" class="btn" data-toggle="modal" data-target="#compose"><i data-eva="person-add" data-eva-animation="pulse"></i></button></li>
                                                <li><button type="button" class="btn" data-utility="open"><i data-eva="info" data-eva-animation="pulse"></i></button></li>
                                                <li><button type="button" class="btn round" data-chat="open"><i data-eva="arrow-ios-back"></i></button></li>
                                                <li><button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical" data-eva-animation="pulse"></i></button>
                                                    <div class="dropdown-menu">
                                                        <button type="button" class="dropdown-item"><i data-eva="video"></i>Video call</button>
                                                        <button type="button" class="dropdown-item"><i data-eva="phone"></i>Voice call</button>
                                                        <button type="button" class="dropdown-item" data-toggle="modal" data-target="#compose"><i data-eva="person-add"></i>Add people</button>
                                                        <button type="button" class="dropdown-item" data-utility="open"><i data-eva="info"></i>Information</button>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="middle" id="scroll">
                                        <div class="container">
                                            <ul>
                                                <li>
                                                    <img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-3.jpg" alt="avatar">
                                                    <div class="content">
                                                        <div class="message">
                                                            <div class="bubble">
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                            </div>
                                                        </div>
                                                        <span>07:30am</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="content">
                                                        <div class="message">
                                                            <div class="bubble">
                                                                <p>Many desktop publishing packages.</p>
                                                            </div>
                                                        </div>
                                                        <span>11:56am</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-3.jpg" alt="avatar">
                                                    <div class="content">
                                                        <div class="message">
                                                            <div class="bubble">
                                                                <div class="attachment">
                                                                    <a href="#" class="round"><i data-eva="file-text"></i></a>
                                                                    <div class="meta">
                                                                        <a href="#"><h5>build-plugins.js</h5></a>
                                                                        <span>3kb</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span>01:03pm</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="content">
                                                        <div class="message">
                                                            <div class="bubble">
                                                                <p>It was popularised in the 1960s.</p>
                                                            </div>
                                                        </div>
                                                        <span>05:42pm</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-3.jpg" alt="avatar">
                                                    <div class="content">
                                                        <div class="message">
                                                            <div class="bubble">
                                                                <p>It is a long established fact that a reader will be distracted.</p>
                                                            </div>
                                                        </div>
                                                        <span>08:20pm</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="content">
                                                        <div class="message">
                                                            <div class="bubble">
                                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                                            </div>
                                                        </div>
                                                        <span>10:15pm <i data-eva="done-all"></i></span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="bottom">
                                            <form>
                                                <textarea class="form-control" placeholder="Type message..." rows="1"></textarea>
                                                <button type="submit" class="btn prepend"><i data-eva="paper-plane"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start of Utility -->
                                <div class="utility">
                                    <div class="container">
                                        <button type="button" class="close" data-utility="open"><i data-eva="close"></i></button>
                                        <button type="button" class="btn primary" data-toggle="modal" data-target="#compose">Add people</button>
                                        <ul class="nav" role="tablist">
                                            <li><a href="#users" class="active" data-toggle="tab" role="tab" aria-controls="users" aria-selected="true">Users</a></li>
                                            <li><a href="#files" data-toggle="tab" role="tab" aria-controls="files" aria-selected="false">Files</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <!-- Start of Users -->
                                            <div class="tab-pane fade active show" id="users" role="tabpanel">
                                                <h4>Users</h4>
                                                <hr>
                                                <ul class="users">
                                                    <li>
                                                        <div class="status online"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-1.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
                                                        <div class="content">
                                                            <h5>Ham Chuwon</h5>
                                                            <span>Florida, US</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <button type="button" class="dropdown-item">Edit</button>
                                                                <button type="button" class="dropdown-item">Share</button>
                                                                <button type="button" class="dropdown-item">Delete</button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="status offline"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-2.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
                                                        <div class="content">
                                                            <h5>Quincy Hensen</h5>
                                                            <span>Shanghai, China</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <button type="button" class="dropdown-item">Edit</button>
                                                                <button type="button" class="dropdown-item">Share</button>
                                                                <button type="button" class="dropdown-item">Delete</button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="status online"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-3.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
                                                        <div class="content">
                                                            <h5>Mark Hog</h5>
                                                            <span>Olso, Norway</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <button type="button" class="dropdown-item">Edit</button>
                                                                <button type="button" class="dropdown-item">Share</button>
                                                                <button type="button" class="dropdown-item">Delete</button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="status offline"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-4.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
                                                        <div class="content">
                                                            <h5>Sanne Viscaal</h5>
                                                            <span>Helena, Montana</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <button type="button" class="dropdown-item">Edit</button>
                                                                <button type="button" class="dropdown-item">Share</button>
                                                                <button type="button" class="dropdown-item">Delete</button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="status offline"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-5.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
                                                        <div class="content">
                                                            <h5>Alex Just</h5>
                                                            <span>London, UK</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <button type="button" class="dropdown-item">Edit</button>
                                                                <button type="button" class="dropdown-item">Share</button>
                                                                <button type="button" class="dropdown-item">Delete</button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="status online"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-6.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
                                                        <div class="content">
                                                            <h5>Arturo Thomas</h5>
                                                            <span>Vienna, Austria</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <button type="button" class="dropdown-item">Edit</button>
                                                                <button type="button" class="dropdown-item">Share</button>
                                                                <button type="button" class="dropdown-item">Delete</button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- End of Users -->
                                            <!-- Start of Files -->
                                            <div class="tab-pane fade" id="files" role="tabpanel">
                                                <h4>Files</h4>
                                                <div class="upload">
                                                    <label>
                                                        <input type="file">
                                                        <span>Drag & drop files here</span>
                                                    </label>
                                                </div>
                                                <ul class="files">
                                                    <li>
                                                        <ul class="avatars">
                                                            <li><button class="btn round"><i data-eva="file-text"></i></button></li>
                                                            <li><a href="#"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-1.jpg" alt="avatar"></a></li>
                                                        </ul>
                                                        <div class="meta">
                                                            <a href="#"><h5>workbox.js</h5></a>
                                                            <span>2kb</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <button type="button" class="dropdown-item">Edit</button>
                                                                <button type="button" class="dropdown-item">Share</button>
                                                                <button type="button" class="dropdown-item">Delete</button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <ul class="avatars">
                                                            <li><button class="btn round"><i data-eva="folder"></i></button></li>
                                                            <li><a href="#"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-2.jpg" alt="avatar"></a></li>
                                                        </ul>
                                                        <div class="meta">
                                                            <a href="#"><h5>bug_report</h5></a>
                                                            <span>1kb</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <button type="button" class="dropdown-item">Edit</button>
                                                                <button type="button" class="dropdown-item">Share</button>
                                                                <button type="button" class="dropdown-item">Delete</button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <ul class="avatars">
                                                            <li><button class="btn round"><i data-eva="briefcase"></i></button></li>
                                                            <li><a href="#"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-3.jpg" alt="avatar"></a></li>
                                                        </ul>
                                                        <div class="meta">
                                                            <a href="#"><h5>nuget.zip</h5></a>
                                                            <span>7mb</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <button type="button" class="dropdown-item">Edit</button>
                                                                <button type="button" class="dropdown-item">Share</button>
                                                                <button type="button" class="dropdown-item">Delete</button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <ul class="avatars">
                                                            <li><button class="btn round"><i data-eva="image-2"></i></button></li>
                                                            <li><a href="#"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-4.jpg" alt="avatar"></a></li>
                                                        </ul>
                                                        <div class="meta">
                                                            <a href="#"><h5>clearfix.jpg</h5></a>
                                                            <span>1kb</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <button type="button" class="dropdown-item">Edit</button>
                                                                <button type="button" class="dropdown-item">Share</button>
                                                                <button type="button" class="dropdown-item">Delete</button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <ul class="avatars">
                                                            <li><button class="btn round"><i data-eva="folder"></i></button></li>
                                                            <li><a href="#"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-5.jpg" alt="avatar"></a></li>
                                                        </ul>
                                                        <div class="meta">
                                                            <a href="#"><h5>package</h5></a>
                                                            <span>4mb</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <button type="button" class="dropdown-item">Edit</button>
                                                                <button type="button" class="dropdown-item">Share</button>
                                                                <button type="button" class="dropdown-item">Delete</button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <ul class="avatars">
                                                            <li><button class="btn round"><i data-eva="file-text"></i></button></li>
                                                            <li><a href="#"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-6.jpg" alt="avatar"></a></li>
                                                        </ul>
                                                        <div class="meta">
                                                            <a href="#"><h5>plugins.js</h5></a>
                                                            <span>3kb</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <button type="button" class="dropdown-item">Edit</button>
                                                                <button type="button" class="dropdown-item">Share</button>
                                                                <button type="button" class="dropdown-item">Delete</button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- End of Files -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Utility -->
                            </div>
                        </div>
                        <!-- End of Chat Room -->
                        <!-- Start of Chat Room -->
                        <div class="tab-pane fade" id="chat2" role="tabpanel">
                            <div class="item">
                                <div class="content">
                                    <div class="container">
                                        <div class="top">
                                            <div class="headline">
                                                <img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-group-1.jpg" alt="avatar">
                                                <div class="content">
                                                    <h5>The Musketeers</h5>
                                                    <span>Group discussion</span>
                                                </div>
                                            </div>
                                            <ul>
                                                <li><button type="button" class="btn"><i data-eva="video" data-eva-animation="pulse"></i></button></li>
                                                <li><button type="button" class="btn"><i data-eva="phone" data-eva-animation="pulse"></i></button></li>
                                                <li><button type="button" class="btn" data-toggle="modal" data-target="#compose"><i data-eva="person-add" data-eva-animation="pulse"></i></button></li>
                                                <li><button type="button" class="btn" data-utility="open"><i data-eva="info" data-eva-animation="pulse"></i></button></li>
                                                <li><button type="button" class="btn round" data-chat="open"><i data-eva="arrow-ios-back"></i></button></li>
                                                <li><button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical" data-eva-animation="pulse"></i></button>
                                                    <div class="dropdown-menu">
                                                        <button type="button" class="dropdown-item"><i data-eva="video"></i>Video call</button>
                                                        <button type="button" class="dropdown-item"><i data-eva="phone"></i>Voice call</button>
                                                        <button type="button" class="dropdown-item" data-toggle="modal" data-target="#compose"><i data-eva="person-add"></i>Add people</button>
                                                        <button type="button" class="dropdown-item" data-utility="open"><i data-eva="info"></i>Information</button>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="middle">
                                        <div class="container">
                                            <ul>
                                                <li>
                                                    <img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-3.jpg" alt="avatar">
                                                    <div class="content">
                                                        <div class="message">
                                                            <div class="bubble">
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                            </div>
                                                        </div>
                                                        <span>07:30am</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-5.jpg" alt="avatar">
                                                    <div class="content">
                                                        <div class="message">
                                                            <div class="bubble">
                                                                <p>Many desktop publishing packages.</p>
                                                            </div>
                                                        </div>
                                                        <span>11:56am</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-3.jpg" alt="avatar">
                                                    <div class="content">
                                                        <div class="message">
                                                            <div class="bubble">
                                                                <p>It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                                                            </div>
                                                        </div>
                                                        <span>01:03pm</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-5.jpg" alt="avatar">
                                                    <div class="content">
                                                        <div class="message">
                                                            <div class="bubble">
                                                                <p>It was popularised in the 1960s.</p>
                                                            </div>
                                                        </div>
                                                        <span>05:42pm</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-3.jpg" alt="avatar">
                                                    <div class="content">
                                                        <div class="message">
                                                            <div class="bubble">
                                                                <p>It is a long established fact that a reader will be distracted.</p>
                                                            </div>
                                                        </div>
                                                        <span>08:20pm</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-5.jpg" alt="avatar">
                                                    <div class="content">
                                                        <div class="message">
                                                            <div class="bubble">
                                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                                            </div>
                                                        </div>
                                                        <span>10:15pm <i data-eva="done-all"></i></span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="bottom">
                                            <form>
                                                <textarea class="form-control" placeholder="Type message..." rows="1"></textarea>
                                                <button type="submit" class="btn prepend"><i data-eva="paper-plane"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start of Utility -->
                                <div class="utility">
                                    <div class="container">
                                        <button type="button" class="close" data-utility="open"><i data-eva="close"></i></button>
                                        <button type="button" class="btn primary" data-toggle="modal" data-target="#compose">Add people</button>
                                        <ul class="nav" role="tablist">
                                            <li><a href="#users2" class="active" data-toggle="tab" role="tab" aria-controls="users2" aria-selected="true">Users</a></li>
                                            <li><a href="#files2" data-toggle="tab" role="tab" aria-controls="files2" aria-selected="false">Files</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <!-- Start of Users -->
                                            <div class="tab-pane fade active show" id="users2" role="tabpanel">
                                                <h4>Users</h4>
                                                <hr>
                                                <ul class="users">
                                                    <li>
                                                        <div class="status online"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-1.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
                                                        <div class="content">
                                                            <h5>Ham Chuwon</h5>
                                                            <span>Florida, US</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <button type="button" class="dropdown-item">Edit</button>
                                                                <button type="button" class="dropdown-item">Share</button>
                                                                <button type="button" class="dropdown-item">Delete</button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="status offline"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-2.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
                                                        <div class="content">
                                                            <h5>Quincy Hensen</h5>
                                                            <span>Shanghai, China</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <button type="button" class="dropdown-item">Edit</button>
                                                                <button type="button" class="dropdown-item">Share</button>
                                                                <button type="button" class="dropdown-item">Delete</button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="status online"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-3.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
                                                        <div class="content">
                                                            <h5>Mark Hog</h5>
                                                            <span>Olso, Norway</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <button type="button" class="dropdown-item">Edit</button>
                                                                <button type="button" class="dropdown-item">Share</button>
                                                                <button type="button" class="dropdown-item">Delete</button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="status offline"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-4.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
                                                        <div class="content">
                                                            <h5>Sanne Viscaal</h5>
                                                            <span>Helena, Montana</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <button type="button" class="dropdown-item">Edit</button>
                                                                <button type="button" class="dropdown-item">Share</button>
                                                                <button type="button" class="dropdown-item">Delete</button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="status offline"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-5.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
                                                        <div class="content">
                                                            <h5>Alex Just</h5>
                                                            <span>London, UK</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <button type="button" class="dropdown-item">Edit</button>
                                                                <button type="button" class="dropdown-item">Share</button>
                                                                <button type="button" class="dropdown-item">Delete</button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="status online"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-6.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
                                                        <div class="content">
                                                            <h5>Arturo Thomas</h5>
                                                            <span>Vienna, Austria</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <button type="button" class="dropdown-item">Edit</button>
                                                                <button type="button" class="dropdown-item">Share</button>
                                                                <button type="button" class="dropdown-item">Delete</button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- End of Users -->
                                            <!-- Start of Files -->
                                            <div class="tab-pane fade" id="files2" role="tabpanel">
                                                <h4>Files</h4>
                                                <div class="upload">
                                                    <label>
                                                        <input type="file">
                                                        <span>Drag & drop files here</span>
                                                    </label>
                                                </div>
                                                <ul class="files">
                                                    <li>
                                                        <ul class="avatars">
                                                            <li><button class="btn round"><i data-eva="file-text"></i></button></li>
                                                            <li><a href="#"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-1.jpg" alt="avatar"></a></li>
                                                        </ul>
                                                        <div class="meta">
                                                            <a href="#"><h5>workbox.js</h5></a>
                                                            <span>2kb</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <button type="button" class="dropdown-item">Edit</button>
                                                                <button type="button" class="dropdown-item">Share</button>
                                                                <button type="button" class="dropdown-item">Delete</button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <ul class="avatars">
                                                            <li><button class="btn round"><i data-eva="folder"></i></button></li>
                                                            <li><a href="#"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-2.jpg" alt="avatar"></a></li>
                                                        </ul>
                                                        <div class="meta">
                                                            <a href="#"><h5>bug_report</h5></a>
                                                            <span>1kb</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <button type="button" class="dropdown-item">Edit</button>
                                                                <button type="button" class="dropdown-item">Share</button>
                                                                <button type="button" class="dropdown-item">Delete</button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <ul class="avatars">
                                                            <li><button class="btn round"><i data-eva="briefcase"></i></button></li>
                                                            <li><a href="#"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-3.jpg" alt="avatar"></a></li>
                                                        </ul>
                                                        <div class="meta">
                                                            <a href="#"><h5>nuget.zip</h5></a>
                                                            <span>7mb</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <button type="button" class="dropdown-item">Edit</button>
                                                                <button type="button" class="dropdown-item">Share</button>
                                                                <button type="button" class="dropdown-item">Delete</button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <ul class="avatars">
                                                            <li><button class="btn round"><i data-eva="image-2"></i></button></li>
                                                            <li><a href="#"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-4.jpg" alt="avatar"></a></li>
                                                        </ul>
                                                        <div class="meta">
                                                            <a href="#"><h5>clearfix.jpg</h5></a>
                                                            <span>1kb</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <button type="button" class="dropdown-item">Edit</button>
                                                                <button type="button" class="dropdown-item">Share</button>
                                                                <button type="button" class="dropdown-item">Delete</button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <ul class="avatars">
                                                            <li><button class="btn round"><i data-eva="folder"></i></button></li>
                                                            <li><a href="#"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-5.jpg" alt="avatar"></a></li>
                                                        </ul>
                                                        <div class="meta">
                                                            <a href="#"><h5>package</h5></a>
                                                            <span>4mb</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <button type="button" class="dropdown-item">Edit</button>
                                                                <button type="button" class="dropdown-item">Share</button>
                                                                <button type="button" class="dropdown-item">Delete</button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <ul class="avatars">
                                                            <li><button class="btn round"><i data-eva="file-text"></i></button></li>
                                                            <li><a href="#"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-6.jpg" alt="avatar"></a></li>
                                                        </ul>
                                                        <div class="meta">
                                                            <a href="#"><h5>plugins.js</h5></a>
                                                            <span>3kb</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-eva="more-vertical"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <button type="button" class="dropdown-item">Edit</button>
                                                                <button type="button" class="dropdown-item">Share</button>
                                                                <button type="button" class="dropdown-item">Delete</button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- End of Files -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Utility -->
                            </div>
                        </div>
                        <!-- End of Chat Room -->
                    </div>
                </div>
                <!-- End of Chat -->
                <!-- Start of Compose -->
                <div class="modal fade" id="compose" tabindex="-1" role="dialog" aria-labelledby="compose" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5>Compose</h5>
                                <button type="button" class="btn round" data-dismiss="modal" aria-label="Close">
                                    <i data-eva="close"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <ul class="nav" role="tablist">
                                    <li><a href="#details" class="active" data-toggle="tab" role="tab" aria-controls="details" aria-selected="true">Details</a></li>
                                    <li><a href="#participants" data-toggle="tab" role="tab" aria-controls="participants" aria-selected="false">Participants</a></li>
                                </ul>
                                <div class="tab-content">
                                    <!-- Start of Details -->
                                    <div class="details tab-pane fade show active" id="details" role="tabpanel">
                                        <form>
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" class="form-control" placeholder="What's the topic?">
                                            </div>
                                            <div class="form-group">
                                                <label>Message</label>
                                                <textarea class="form-control" placeholder="Hmm, are you friendly?"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- End of Details -->
                                    <!-- Start of Participants -->
                                    <div class="participants tab-pane fade" id="participants" role="tabpanel">
                                        <div class="search">
                                            <form>
                                                <input type="search" class="form-control" placeholder="Search">
                                                <button type="submit" class="btn prepend"><i data-eva="search"></i></button>
                                            </form>
                                        </div>
                                        <h4>Users</h4>
                                        <hr>
                                        <ul class="users">
                                            <li>
                                                <div class="status online"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-1.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
                                                <div class="content">
                                                    <h5>Ham Chuwon</h5>
                                                    <span>Florida, US</span>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="user1">
                                                    <label class="custom-control-label" for="user1"></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="status offline"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-2.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
                                                <div class="content">
                                                    <h5>Quincy Hensen</h5>
                                                    <span>Shanghai, China</span>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="user2">
                                                    <label class="custom-control-label" for="user2"></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="status online"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-3.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
                                                <div class="content">
                                                    <h5>Mark Hog</h5>
                                                    <span>Olso, Norway</span>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="user3">
                                                    <label class="custom-control-label" for="user3"></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="status offline"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-4.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
                                                <div class="content">
                                                    <h5>Sanne Viscaal</h5>
                                                    <span>Helena, Montana</span>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="user4">
                                                    <label class="custom-control-label" for="user4"></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="status offline"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-5.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
                                                <div class="content">
                                                    <h5>Alex Just</h5>
                                                    <span>London, UK</span>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="user5">
                                                    <label class="custom-control-label" for="user5"></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="status online"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-male-6.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
                                                <div class="content">
                                                    <h5>Arturo Thomas</h5>
                                                    <span>Vienna, Austria</span>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="user6">
                                                    <label class="custom-control-label" for="user6"></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="status offline"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-female-1.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
                                                <div class="content">
                                                    <h5>Victoria Garner</h5>
                                                    <span>Chisinau, Moldova</span>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="user7">
                                                    <label class="custom-control-label" for="user7"></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="status offline"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-female-2.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
                                                <div class="content">
                                                    <h5>Maria Baron</h5>
                                                    <span>Indore, India</span>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="user8">
                                                    <label class="custom-control-label" for="user8"></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="status online"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" "dist/img/avatars/avatar-female-3.jpg" alt="avatar"><i data-eva="radio-button-on"></i></div>
                                                <div class="content">
                                                    <h5>Sara Koch</h5>
                                                    <span>Sofia, BG</span>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="user9">
                                                    <label class="custom-control-label" for="user9"></label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End of Participants -->
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn primary">Compose</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Compose -->
            </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->



        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        {{-- <div class="right-sidebar">
            <div class="slimscrollright">
                <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                <div class="r-panel-body">
                    <ul id="themecolors" class="m-t-20">
                        <li><b>With Light sidebar</b></li>
                        <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                        <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                        <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                        <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                        <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                        <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                        <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                        <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                        <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                        <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                        <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                        <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                        <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                    </ul>
                    <ul class="m-t-20 chatonline">
                        <li><b>Chat option</b></li>
                        <li>
                            <a href="javascript:void(0)"><img
                                    src="{{asset('contents/admin/assets')}}/images/users/1.jpg"
                                    alt="user-img" class="img-circle"> <span>Varun Dhavan <small
                                        class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img
                                    src="{{asset('contents/admin/assets')}}/images/users/1.jpg"
                                    alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small
                                        class="text-warning">Away</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img
                                    src="{{asset('contents/admin/assets')}}/images/users/1.jpg"
                                    alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small
                                        class="text-danger">Busy</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img
                                    src="{{asset('contents/admin/assets')}}/images/users/1.jpg"
                                    alt="user-img" class="img-circle"> <span>Arijit Sinh <small
                                        class="text-muted">Offline</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img
                                    src="{{asset('contents/admin/assets')}}/images/users/1.jpg"
                                    alt="user-img" class="img-circle"> <span>Govinda Star <small
                                        class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img
                                    src="{{asset('contents/admin/assets')}}/images/users/1.jpg"
                                    alt="user-img" class="img-circle"> <span>John Abraham<small
                                        class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img
                                    src="{{asset('contents/admin/assets')}}/images/users/1.jpg"
                                    alt="user-img" class="img-circle"> <span>Hritik Roshan<small
                                        class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img
                                    src="{{asset('contents/admin/assets')}}/images/users/1.jpg"
                                    alt="user-img" class="img-circle"> <span>Pwandeep rajan <small
                                        class="text-success">online</small></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>

    @endsection
